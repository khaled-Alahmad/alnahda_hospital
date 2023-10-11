<x-app-layout>
    <div class="container">
        <h1>تفاصيل الطابق</h1>
        <p><strong>رقم الطابق:</strong> {{ $floor->numberOfFloor }}</p>
        <p><strong>عدد الغرف:</strong> {{ $floor->numberOfRooms }}</p>
        <a href="{{ route('floors.index') }}" class="btn btn-primary">العودة إلى القائمة</a>
    </div>
</x-app-layout>