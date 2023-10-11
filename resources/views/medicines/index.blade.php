<x-app-layout>

    <div class="container">
        <h1>قائمة الأدوية</h1>

        <form action="{{ route('medicines.search') }}" method="GET" class="mb-3">
            <div class="input-group">
                <input type="text" class="form-control" name="search" placeholder="ابحث عن دواء">
                <div class="input-group-append">
                    <button class="btn btn-secondary" type="submit">بحث</button>
                </div>
            </div>
        </form>



        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>الاسم</th>
                    <th>الفئة</th>
                    <th>العلامة التجارية</th>
                    <th>السعر</th>
                    <th>الإجراءات</th>
                </tr>
            </thead>
            <tbody>
                @foreach($medicines as $medicine)
                <tr>
                    <td>{{ $medicine->id }}</td>
                    <td>{{ $medicine->name }}</td>
                    <td>{{ $medicine->category->name }}</td>
                    <td>{{ $medicine->brand->name }}</td>
                    <td>{{ $medicine->price }}</td>
                    <td>
                        @can('isAdmin')
                        <a href="{{ route('medicines.show', $medicine->id) }}" class="btn btn-primary">عرض</a>
                        <a href="{{ route('medicines.edit', $medicine->id) }}" class="btn btn-warning">تحرير</a>
                        <form action="{{ route('medicines.destroy', $medicine->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('هل أنت متأكد من حذف هذا الدواء؟')">حذف</button>
                        </form>
                        @endcan
                        @can('isDoctor')
                        <a href="{{ route('medicines.show', $medicine->id) }}" class="btn btn-primary">عرض</a>
                        <a href="{{ route('medicines.edit', $medicine->id) }}" class="btn btn-warning">تحرير</a>
                        <form action="{{ route('medicines.destroy', $medicine->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('هل أنت متأكد من حذف هذا الدواء؟')">حذف</button>
                        </form>
                        @endcan
                        @can('isPatient')
                        ليس لديك صلاحية لأي إجراء
                        @endcan
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>