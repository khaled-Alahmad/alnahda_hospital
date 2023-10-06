<x-app-layout>

    <div class="container">
        <h1>تحرير الحجز</h1>

        <form action="{{ route('patient-rooms.update', $patientRoom->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="patient_id">المريض:</label>
                <select class="form-control" id="patient_id" name="patient_id" required>
                    @foreach($patients as $patient)
                    <option value="{{ $patient->id }}" {{ $patient->id == $patientRoom->patient_id ? 'selected' : '' }}>{{ $patient->user->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="room_id">الغرفة:</label>
                <select class="form-control" id="room_id" name="room_id" required>
                    @foreach($rooms as $room)
                    <option value="{{ $room->id }}" {{ $room->id == $patientRoom->room_id ? 'selected' : '' }}>{{ $room->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="from">من:</label>
                <input type="datetime-local" class="form-control" id="from" name="from" value="{{ date('Y-m-d\TH:i', strtotime($patientRoom->from)) }}" required>
            </div>
            <div class="form-group">
                <label for="to">إلى:</label>
                <input type="datetime-local" class="form-control" id="to" name="to" value="{{ date('Y-m-d\TH:i', strtotime($patientRoom->to)) }}" required>
            </div>
            <button type="submit" class="btn btn-success">تحديث</button>
            <a href="{{ route('patient-rooms.index') }}" class="btn btn-primary">العودة إلى القائمة</a>
        </form>
    </div>
</x-app-layout>