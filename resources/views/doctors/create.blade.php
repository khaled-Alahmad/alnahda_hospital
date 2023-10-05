<x-app-layout>

    <div class="container">
        <h1>إضافة طبيب جديد</h1>

        <form action="{{ route('doctors.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="user_id">المستخدم:</label>
                <select class="form-control" id="user_id" name="user_id" required>
                    <option value="">اختر مستخدمًا</option>
                    @foreach ($users as $user)
                    <option value="{{ $user->id }}">{{ $user->firstName ." ". $user->lastName}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="doctor_department_id">القسم الطبي:</label>
                <select class="form-control" id="doctor_department_id" name="doctor_department_id" required>
                    <option value="">اختر قسمًا طبيًا</option>
                    @foreach ($doctorDepartments as $department)
                    <option value="{{ $department->id }}">{{ $department->title }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="specialist">التخصص:</label>
                <input type="text" class="form-control" id="specialist" name="specialist" required>
            </div>
            <button type="submit" class="btn btn-success">إضافة</button>
            <a href="{{ route('doctors.index') }}" class="btn btn-primary">العودة إلى القائمة</a>
        </form>
    </div>
</x-app-layout>