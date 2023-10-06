<x-app-layout>
    <div class="container">
        <a href="{{ route('floors.create') }}" class="btn btn-primary">اضافة طابق</a>
        <h1>قائمة الأدوار</h1>

        <form method="GET" action="{{ route('floors.search') }}" class="form-inline">
            @csrf
            <div class="form-group">
                <input type="text" name="search" class="form-control" placeholder="ابحث عن رقم الطابق">
            </div>
            <button type="submit" class="btn btn-success mb-3">بحث</button>
        </form>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">رقم الطابق</th>
                    <th scope="col">عدد الغرف</th>
                    <th scope="col">خيارات</th>
                </tr>
            </thead>
            <tbody>
                @foreach($floors as $floor)
                <tr>
                    <td>{{ $floor->numberOfFloor }}</td>
                    <td>{{ $floor->numberOfRooms }}</td>
                    <td>
                        <a href="{{ route('floors.show', $floor->id) }}" class="btn btn-primary">عرض</a>
                        <a href="{{ route('floors.edit', $floor->id) }}" class="btn btn-warning">تحرير</a>
                        <form action="{{ route('floors.destroy', $floor->id) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('هل أنت متأكد من رغبتك في حذف هذا الطابق؟')">حذف</button>
                        </form>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>


    </div>

</x-app-layout>