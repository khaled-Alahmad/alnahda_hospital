<x-app-layout>
    <div class="container">
        <h1>إنشاء عملية جديدة</h1>
        <form action="{{ route('operations.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="doctor_id">اسم الطبيب:</label>
                <select class="form-control" id="doctor_id" name="doctor_id" required>
                    @foreach ($doctors as $doctor)
                    <option value="{{ $doctor->id }}">{{ $doctor->user->firstName.' '.$doctor->user->lastName }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="patient_id">اسم المريض:</label>
                <select class="form-control" id="patient_id" name="patient_id" required>
                    @foreach ($patients as $patient)
                    <option value="{{ $patient->id }}">{{ $patient->user->firstName.' '.$patient->user->lastName}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="preview_id">رقم المعاينة:</label>
                <select class="form-control" id="preview_id" name="preview_id" required>
                    @foreach ($previews as $preview)
                    <option value="{{ $preview->id }}">{{ $preview->id }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="room_id">رقم الغرفة:</label>
                <select class="form-control" id="room_id" name="room_id" required>
                    @foreach ($rooms as $room)
                    <option value="{{ $room->id }}">{{ $room->id }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="date_time">تاريخ ووقت العملية:</label>
                <input type="datetime-local" class="form-control" id="date_time" name="date_time" required>
            </div>

            <button type="submit" class="btn btn-success">إنشاء</button>
            <a href="{{ route('operations.index') }}" class="btn btn-primary">العودة إلى القائمة</a>
        </form>
    </div>
</x-app-layout>
