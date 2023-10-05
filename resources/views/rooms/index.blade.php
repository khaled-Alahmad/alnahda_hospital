<x-app-layout>

    <div class="container">
        <h1>قائمة الغرف</h1>

        <a href="{{ route('rooms.create') }}" class="btn btn-success mb-3">إضافة غرفة جديدة</a>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">رقم الغرفة</th>
                    <th scope="col">حجم الغرفة</th>
                    <th scope="col">الطابق</th>
                    <th scope="col">تاريخ الإنشاء</th>
                    <th scope="col">الإجراءات</th>
                </tr>
            </thead>
            <tbody>
                @foreach($rooms as $room)
                <tr>
                    <td>{{ $room->id }}</td>
                    <td>{{ $room->roomSize }}</td>
                    <td>{{ $room->floor->numberOfFloor }}</td>
                    <td>{{ $room->created_at }}</td>
                    <td>
                        <a href="{{ route('rooms.show', $room->id) }}" class="btn btn-primary">عرض</a>
                        <a href="{{ route('rooms.edit', $room->id) }}" class="btn btn-warning">تحرير</a>
                        <form action="{{ route('rooms.destroy', $room->id) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('هل أنت متأكد من رغبتك في حذف هذه الغرفة؟')">حذف</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>