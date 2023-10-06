<x-app-layout>

    <div class="container">
        <h1>تفاصيل المرض</h1>

        <p><strong>اسم المرض:</strong> {{ $illness->name }}</p>

        <a href="{{ route('illnesses.index') }}" class="btn btn-primary">العودة إلى القائمة</a>
    </div>
</x-app-layout>