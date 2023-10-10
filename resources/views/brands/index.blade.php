<x-app-layout>

    <div class="container">
        <h1>قائمة العلامات التجارية</h1>
        <form action="{{ route('brands.search') }}" method="GET" class="mb-3">
            <div class="input-group">
                <input type="text" class="form-control" name="search" placeholder="ابحث عن علامة تجارية">
                <div class="input-group-append">
                    <button class="btn btn-secondary" type="submit">بحث</button>
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
                        <a href="{{ route('brands.show', $brand->id) }}" class="btn btn-primary">عرض</a>
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
