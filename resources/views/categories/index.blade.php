<x-app-layout>

    <div class="container">
        <h1>قائمة الفئات</h1>

        @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif
        <a href="{{ route('categories.create') }}" class="btn btn-success mb-2">إنشاء فئة جديدة</a>

        <div class="row mb-3">
            <div class="col-md-12">
                <form action="{{ route('categories.search') }}" method="GET" class="form-inline">
                    @csrf
                    <div class="col-md-10 form-group mr-2">
                        <input type="text" class="form-control" id="name" name="name" placeholder="ابحث عن اسم الفئة">
                    </div>
                    <button type="submit" class="btn btn-primary col-md-2">بحث</button>
                </form>
            </div>
        </div>

        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>الاسم</th>
                    <th>الإجراءات</th>
                </tr>
            </thead>
            <tbody>
                @foreach($categories as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->name }}</td>
                    <td>
                        <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-primary">تحرير</a>
                        <a href="{{ route('categories.show', $category->id) }}" class="btn btn-warning">عرض</a>

                        <form action="{{ route('categories.destroy', $category->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">حذف</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>