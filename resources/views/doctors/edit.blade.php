@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>تحرير بيانات الطبيب</h1>

        <form action="{{ route('doctors.update', $doctor->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="user_id">المستخدم:</label>
                <input type="text" class="form-control" id="user_id" name="user_id" value="{{ $doctor->user_id }}" required>
            </div>
            <div class="form-group">
                <label for="doctor_department_id">القسم الطبي:</label>
                <input type="text" class="form-control" id="doctor_department_id" name="doctor_department_id" value="{{ $doctor->doctor_department_id }}" required>
            </div>
            <div class="form-group">
                <label for="specialist">التخصص:</label>
                <input type="text" class="form-control" id="specialist" name="specialist" value="{{ $doctor->specialist }}" required>
            </div>
            <button type="submit" class="btn btn-success">حفظ التغييرات</button>
            <a href="{{ route('doctors.index') }}" class="btn btn-primary">العودة إلى القائمة</a>
        </form>
    </div>
@endsection
