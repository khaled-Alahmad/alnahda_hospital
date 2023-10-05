<x-app-layout>

    <div class="container">
        <h1>تفاصيل الطبيب</h1>

        <p><strong>المستخدم:</strong> {{ $doctor->user_id }}</p>
        <p><strong>القسم الطبي:</strong> {{ $doctor->doctor_department_id }}</p>
        <p><strong>التخصص:</strong> {{ $doctor->specialist }}</p>


        <a href="{{ route('doctors.index') }}" class="btn btn-primary">العودة إلى القائمة</a>
    </div>
</x-app-layout>