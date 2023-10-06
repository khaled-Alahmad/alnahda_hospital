<x-app-layout>
    <div class="container">
        <h1>تفاصيل العملية</h1>

        <div class="form-group">
            <label for="doctor_id">اسم الطبيب:</label>
            <input type="text" class="form-control" id="doctor_id" name="doctor_id" value="{{ $operation->doctor->user->firstName.' '.$operation->doctor->user->lastName }}" disabled>
        </div>

        <div class="form-group">
            <label for="patient_id">اسم المريض:</label>
            <input type="text" class="form-control" id="patient_id" name="patient_id" value="{{ $operation->patient->user->firstName. ' '.$operation->patient->user->lastName }}" disabled>
        </div>

        <div class="form-group">
            <label for="preview_id">رقم المعاينة:</label>
            <input type="text" class="form-control" id="preview_id" name="preview_id" value="{{ $operation->preview->id }}" disabled>
        </div>

        <div class="form-group">
            <label for="room_id">رقم الغرفة:</label>
            <input type="text" class="form-control" id="room_id" name="room_id" value="{{ $operation->room->id }}" disabled>
        </div>

        <div class="form-group">
            <label for="date_time">تاريخ ووقت العملية:</label>
            <input type="text" class="form-control" id="date_time" name="date_time" value="{{ $operation->date_time }}" disabled>
        </div>
        <a href="{{ route('operations.index') }}" class="btn btn-primary mt-5">العودة إلى القائمة</a>

    </div>
</x-app-layout>