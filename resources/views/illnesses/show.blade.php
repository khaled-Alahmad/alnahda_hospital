<x-app-layout>

    <div class="container">
        <h1>تفاصيل المرض</h1>

        @if ($illness)
        <p><strong>اسم المرض:</strong> {{ $illness->name }}</p>
        @else
        <p>المرض غير موجود.</p>
        @endif

        <a href="{{ route('illnesses.index') }}" class="btn btn-primary">العودة إلى القائمة</a>
    </div>
</x-app-layout>