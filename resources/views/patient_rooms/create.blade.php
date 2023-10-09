<x-app-layout>

    <div class="container">
        <h1>إضافة حجز جديد</h1>

        <form action="{{ route('patient-rooms.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="patient_id">المريض:</label>
                <select class="form-control" id="patient_id" name="patient_id" required>
                    @foreach($patients as $patient)
                    <option value="{{ $patient->id }}">{{ $patient->user->firstName }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="room_id">الغرفة:</label>
                <select class="form-control" id="room_id" name="room_id" required>
                    @foreach($rooms as $room)
                    <option value="{{ $room->id }}">{{ $room->id }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="patient_id">الحجز من:</label>
                <input type="datetime-local" name="from" />
            </div>
            <div class="form-group">
                <label for="patient_id">الحجز الى:</label>
                <input type="datetime-local" name="to" />
            </div>
            <button type="submit" class="btn btn-success">إضافة</button>
            <a href="{{ route('patient-rooms.index') }}" class="btn btn-primary">العودة إلى القائمة</a>
        </form>
    </div>



</x-app-layout>