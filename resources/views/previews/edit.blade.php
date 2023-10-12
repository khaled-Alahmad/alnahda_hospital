<x-app-layout>

    <div class="container">
        <h1>تعديل معاينة</h1>
        @can('isAdmin')
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
                <select class="form-control" id="status" name="status" required>
                    <option value="حجز" {{ $preview->status == 'حجز' ? 'selected' : '' }}>حجز</option>
                    <option value="تمت المعاينة" {{ $preview->status == 'تمت المعاينة' ? 'selected' : '' }}>تمت المعاينة</option>
                    <option value="قيد المعالجة" {{ $preview->status == 'قيد المعالجة' ? 'selected' : '' }}>قيد المعالجة</option>
                </select>
            </div>
            <div class="form-group">
                <label for="date">التاريخ والوقت:</label>
                <input type="datetime-local" class="form-control" id="preview_datetime" value="{{ $preview->preview_datetime }}" name="preview_datetime" required>
            </div>
            <button type="submit" class="btn btn-success">حفظ التغييرات</button>
            <a href="{{ route('previews.index') }}" class="btn btn-primary">العودة إلى القائمة</a>
        </form>
        @endcan
        @can('isDoctor')
        <form action="{{ route('previews.update', $preview->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="patient_id">المريض:</label>
                <select class="form-control" id="patient_id" name="patient_id" required>
                    @foreach($patients as $patient)
                    <option value="{{ $patient->id }}" {{ $patient->id == $preview->patient_id ? 'selected' : '' }}>{{ $patient->user->firstName.' '.$patient->user->lastName }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="doctor_id">الطبيب:</label>
                <select class="form-control" id="doctor_id" name="doctor_id" required>
                    @if (auth()->user()->doctors->first())
                    <option value="{{ auth()->user()->doctors->first()->id }}" selected>
                        {{ auth()->user()->doctors->first()->user->firstName.' '.auth()->user()->doctors->first()->user->lastName }}
                    </option>
                    @endif
                </select>
            </div>

            <div class="form-group">
                <label for="type">نوع المعاينة:</label>
                <select class="form-control" id="status" name="status" required>
                    <option value="حجز" {{ $preview->status == 'حجز' ? 'selected' : '' }}>حجز</option>
                    <option value="تمت المعاينة" {{ $preview->status == 'تمت المعاينة' ? 'selected' : '' }}>تمت المعاينة</option>
                    <option value="قيد المعالجة" {{ $preview->status == 'قيد المعالجة' ? 'selected' : '' }}>قيد المعالجة</option>
                </select>
            </div>

            <div class="form-group">
                <label for="date">التاريخ والوقت:</label>
                <input type="datetime-local" class="form-control" id="preview_datetime" value="{{ $preview->preview_datetime }}" name="preview_datetime" required>
            </div>
            <button type="submit" class="btn btn-success">حفظ التغييرات</button>
            <a href="{{ route('previews.index') }}" class="btn btn-primary">العودة إلى القائمة</a>
        </form>
        @endcan
    </div>
</x-app-layout>