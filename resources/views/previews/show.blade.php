<x-app-layout>

    <div class="container">
        <h1>تفاصيل المعاينة</h1>

        <p><strong>المريض:</strong> {{ $preview->patient->user->name }}</p>
        <p><strong>الطبيب:</strong> {{ $preview->doctor->user->name }}</p>
        <p><strong>نوع المرض:</strong> {{ $preview->illness->name }}</p>
        <p><strong>نوع المعاينة:</strong> {{ $preview->type }}</p>
        <p><strong>التاريخ والوقت:</strong> {{ $preview->date }} {{ $preview->time }}</p>

        <a href="{{ route('previews.index') }}" class="btn btn-primary">العودة إلى القائمة</a>
    </div>
</x-app-layout>