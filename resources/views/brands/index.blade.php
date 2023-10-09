<x-app-layout>

    <div class="container">
        <h1>قائمة العلامات التجارية</h1>
        <form action="{{ route('brands.search') }}" method="GET">
            <div class="form-row">
                <div class="col-md-4 mb-3">
                    <input type="text" class="form-control" name="search" placeholder="ابحث عن علامة تجارية">
                </div>
                <div class="col-md-2 mb-3">
                    <button type="submit" class="btn btn-primary">بحث</button>
                </div>
            </div>
        </form>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">الاسم</th>
                    <th scope="col">الوصف</th>
                    <th scope="col">الإجراءات</th>
                </tr>
            </thead>
            <tbody>
                @foreach($brands as $brand)
                <tr>
                    <td>{{ $brand->name }}</td>
                    <td>{{ $brand->description }}</td>
                    <td>
                        <a href="{{ route('brands.show', $brand->id) }}" class="btn btn-info">عرض</a>
                        <a href="{{ route('brands.edit', $brand->id) }}" class="btn btn-warning">تعديل</a>
                        <form action="{{ route('brands.destroy', $brand->id) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('هل أنت متأكد من رغبتك في حذف هذه العلامة التجارية؟')">حذف</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>