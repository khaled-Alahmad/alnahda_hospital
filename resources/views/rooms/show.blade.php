<x-app-layout>

    <div class="container">
        <h1>تفاصيل الغرفة</h1>

        <p><strong>رقم الغرفة:</strong> {{ $room->id }}</p>
        <p><strong>حجم الغرفة:</strong> {{ $room->roomSize }}</p>
        <p><strong>الطابق:</strong> {{ $room->floor->numberOfFloor }}</p>
        <p><strong>تاريخ الإنشاء:</strong> {{ $room->created_at }}</p>

        <a href="{{ route('rooms.index') }}" class="btn btn-primary">العودة إلى القائمة</a>
    </div>
</x-app-layout>