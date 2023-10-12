<x-app-layout>

    <div class="container">
        <h1>إضافة معاينة جديدة</h1>
        @can('isAdmin')
        <form action="{{ route('previews.store') }}" method="POST">
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
                <label for="doctor_id">الطبيب:</label>
                <select class="form-control" id="doctor_id" name="doctor_id" required>
                    @foreach($doctors as $doctor)
                    <option value="{{ $doctor->id }}">{{ $doctor->user->firstName }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="type">نوع المعاينة:</label>
                <select class="form-control" id="type" name="status" required>
                    <option value="حجز">حجز</option>
                    <option value="تمت المعاينة">تمت المعاينة</option>
                    <option value="قيد المعالجة">قيد المعالجة</option>
                </select>
            </div>
            <div class="form-group">
                <label for="date">التاريخ والوقت:</label>
                <input type="datetime-local" class="form-control" id="preview_datetime" name="preview_datetime" required>
            </div>

            <button type="submit" class="btn btn-success">إضافة</button>
            <a href="{{ route('previews.index') }}" class="btn btn-primary">العودة إلى القائمة</a>
        </form>

        @endcan
        @can('isDoctor')
        <form action="{{ route('previews.store') }}" method="POST">
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
                <select class="form-control" id="type" name="status" required>
                    <option value="حجز">حجز</option>
                    <option value="تمت المعاينة">تمت المعاينة</option>
                    <option value="قيد المعالجة">قيد المعالجة</option>
                </select>
            </div>
            <div class="form-group">
                <label for="date">التاريخ والوقت:</label>
                <input type="datetime-local" class="form-control" id="preview_datetime" name="preview_datetime" required>
            </div>

            <button type="submit" class="btn btn-success">إضافة</button>
            <a href="{{ route('previews.index') }}" class="btn btn-primary">العودة إلى القائمة</a>
        </form>

        @endcan

        @can('isPatient')
        <form action="{{ route('previews.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="patient_id">المريض:</label>
                <select class="form-control" id="patient_id" name="patient_id" required>
                    @if (auth()->user()->patients->first())
                    <option value="{{ auth()->user()->patients->first()->id }}" selected>
                        {{ auth()->user()->patients->first()->user->firstName }}
                    </option>
                    @endif
                </select>


            </div>
            <div class="form-group">
                <label for="doctor_id">الطبيب:</label>
                <select class="form-control" id="doctor_id" name="doctor_id" required>
                    @foreach($doctors as $doctor)
                    <option value="{{ $doctor->id }}">{{ $doctor->user->firstName }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group" style="display: none;">
                <label for="type">نوع المعاينة:</label>
                <select class="form-control" id="type" name="status" required>
                    <option value="حجز">حجز</option>

                </select>
            </div>
            <div class="form-group">
                <label for="date">التاريخ والوقت:</label>
                <input type="datetime-local" class="form-control" id="preview_datetime" name="preview_datetime" required>
            </div>

            <button type="submit" class="btn btn-success">إضافة</button>
            <a href="{{ route('previews.index') }}" class="btn btn-primary">العودة إلى القائمة</a>
        </form>
        @endcan
    </div>
</x-app-layout>