<x-app-layout>
    <div class="container">
        <h1>تحرير العملية</h1>

        <form action="{{ route('operations.update', $operation->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="doctor_id">اسم الطبيب:</label>
                <select class="form-control" id="doctor_id" name="doctor_id">
                    @foreach ($doctors as $doctor)
                    <option value="{{ $doctor->id }}" {{ $operation->doctor_id == $doctor->id ? 'selected' : '' }}>
                        {{ $doctor->user->firstName.' '.$doctor->user->lastName }}
                    </option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="patient_id">اسم المريض:</label>
                <select class="form-control" id="patient_id" name="patient_id">
                    @foreach ($patients as $patient)
                    <option value="{{ $patient->id }}" {{ $operation->patient_id == $patient->id ? 'selected' : '' }}>
                        {{ $patient->user->firstName.' '. $patient->user->lastName }}
                    </option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="preview_id">رقم المعاينة:</label>
                <select class="form-control" id="preview_id" name="preview_id">
                    @foreach ($previews as $preview)
                    <option value="{{ $preview->id }}" {{ $operation->preview_id == $preview->id ? 'selected' : '' }}>
                        {{ $preview->id }}
                    </option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="room_id">رقم الغرفة:</label>
                <select class="form-control" id="room_id" name="room_id">
                    @foreach ($rooms as $room)
                    <option value="{{ $room->id }}" {{ $operation->room_id == $room->id ? 'selected' : '' }}>
                        {{ $room->id }}
                    </option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="date_time">تاريخ ووقت العملية:</label>
                <input type="datetime-local" class="form-control" id="date_time" name="date_time" value="{{ $operation->date_time }}">
            </div>

            <button type="submit" class="btn btn-success">تحديث</button>
            <a href="{{ route('operations.index') }}" class="btn btn-primary">العودة إلى القائمة</a>
        </form>
    </div>
</x-app-layout>