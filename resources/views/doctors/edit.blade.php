<x-app-layout>
    <div class="container">
        <h1>تحرير بيانات الطبيب</h1>

        <form action="{{ route('doctors.update', $doctor->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="user_id">المستخدم:</label>
                <select class="form-control" id="user_id" name="user_id" required>
                    @foreach($users as $user)
                    <option value="{{ $user->id }}" {{ $user->id == $doctor->user_id ? 'selected' : '' }}>
                        {{ $user->firstName.' '.$user->lastName }}
                    </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="doctor_department_id">القسم الطبي:</label>
                <select class="form-control" id="doctor_department_id" name="doctor_department_id" required>
                    @foreach($doctorDepartments as $department)
                    <option value="{{ $department->id }}" {{ $department->id == $doctor->doctor_department_id ? 'selected' : '' }}>
                        {{ $department->title }}
                    </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="specialist">التخصص:</label>
                <input type="text" class="form-control" id="specialist" name="specialist" value="{{ $doctor->specialist }}" required>
            </div>
            <button type="submit" class="btn btn-success">حفظ التغييرات</button>
            <a href="{{ route('doctors.index') }}" class="btn btn-primary">العودة إلى القائمة</a>
        </form>
    </div>
</x-app-layout>