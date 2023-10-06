<x-app-layout>

    <div class="container">
        <h1>تفاصيل الحجز</h1>

        <p><strong>المريض:</strong> {{ $patientRoom->patient->user->name }}</p>
        <p><strong>الغرفة:</strong> {{ $patientRoom->room->name }}</p>
        <p><strong>من:</strong> {{ $patientRoom->from }}</p>
        <p><strong>إلى:</strong> {{ $patientRoom->to }}</p>

        <a href="{{ route('patient_rooms.index') }}" class="btn btn-primary">العودة إلى القائمة</a>
    </div>
</x-app-layout>