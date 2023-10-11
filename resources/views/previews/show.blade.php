<x-app-layout>

    <div class="container">
        <h1>تفاصيل المعاينة</h1>

        <p><strong>المريض:</strong> {{ $preview->patient->user->firstName.' '. $preview->patient->user->lastName }}</p>
        <p><strong>الطبيب:</strong> {{ $preview->doctor->user->firstName.' '.$preview->doctor->user->lastName }}</p>
        <p><strong>نوع المعاينة:</strong> {{ $preview->status }}</p>
        <p><strong>التاريخ والوقت:</strong> {{ $preview->date }} {{ $preview->preview_datetime }}</p>

        <a href="{{ route('previews.index') }}" class="btn btn-primary">العودة إلى القائمة</a>
    </div>
</x-app-layout>