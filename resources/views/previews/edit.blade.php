<x-app-layout>

    <div class="container">
        <h1>تعديل معاينة</h1>

        <form action="{{ route('previews.update', $preview->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="patient_id">المريض:</label>
                <select class="form-control" id="patient_id" name="patient_id" required>
                    @foreach($patients as $patient)
                    <option value="{{ $patient->id }}" {{ $patient->id == $preview->patient_id ? 'selected' : '' }}>{{ $patient->user->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="doctor_id">الطبيب:</label>
                <select class="form-control" id="doctor_id" name="doctor_id" required>
                    @foreach($doctors as $doctor)
                    <option value="{{ $doctor->id }}" {{ $doctor->id == $preview->doctor_id ? 'selected' : '' }}>{{ $doctor->user->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="type">نوع المعاينة:</label>
                <select class="form-control" id="type" name="type" required>
                    <option value="حجز" {{ $preview->type == 'حجز' ? 'selected' : '' }}>حجز</option>
                    <option value="تمت المعاينة" {{ $preview->type == 'تمت المعاينة' ? 'selected' : '' }}>تمت المعاينة</option>
                    <option value="قيد المعالجة" {{ $preview->type == 'قيد المعالجة' ? 'selected' : '' }}>قيد المعالجة</option>
                </select>
            </div>
            <div class="form-group">
                <label for="date">التاريخ:</label>
                <input type="date" class="form-control" id="date" name="date" value="{{ $preview->date }}" required>
            </div>
            <div class="form-group">
                <label for="time">الوقت:</label>
                <input type="time" class="form-control" id="time" name="time" value="{{ $preview->time }}" required>
            </div>
            <button type="submit" class="btn btn-success">حفظ التغييرات</button>
            <a href="{{ route('previews.index') }}" class="btn btn-primary">العودة إلى القائمة</a>
        </form>
    </div>
</x-app-layout>