<x-app-layout>


    <div class="container">

        <h1>تفاصيل الطابق</h1>

        @if($floor)
        <p><strong>رقم الطابق:</strong> {{ $floor->numberOfFloor }}</p>
        <p><strong>عدد الغرف:</strong> {{ $floor->numberOfRooms }}</p>
        @else
        <p>الطابق غير موجود.</p>
        @endif

        <a href="{{ route('floors.index') }}" class="btn btn-primary">العودة إلى القائمة</a>

    </div>

</x-app-layout>