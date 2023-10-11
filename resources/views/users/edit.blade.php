<x-app-layout>

    <div class="container">
        <h2>تعديل معلومات المستخدم</h2>
        <form action="{{ route('users.update', $user->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="firstName">الاسم الأول</label>
                <input type="text" class="form-control" id="firstName" name="firstName" value="{{ $user->firstName }}" required>
            </div>
            <div class="form-group">
                <label for="lastName">الاسم الأخير</label>
                <input type="text" class="form-control" id="lastName" name="lastName" value="{{ $user->lastName }}" required>
            </div>
            <div class="form-group">
                <label for="father">الأب</label>
                <input type="text" class="form-control" id="father" name="father" value="{{ $user->father }}" required>
            </div>
            <div class="form-group">
                <label for="mother">الأم</label>
                <input type="text" class="form-control" id="mother" name="mother" value="{{ $user->mother }}" required>
            </div>
            <div class="form-group">
                <label for="age">العمر</label>
                <input type="number" class="form-control" id="age" name="age" value="{{ $user->age }}" required>
            </div>
            <div class="form-group">
                <label for="phone">الهاتف</label>
                <input type="text" class="form-control" id="phone" name="phone" value="{{ $user->phone }}" required>
            </div>
            <div class="form-group">
                <label for="address">العنوان</label>
                <input type="text" class="form-control" id="address" name="address" value="{{ $user->address }}" required>
            </div>
            <div class="form-group">
                <label for="email">البريد الإلكتروني</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}" required>
            </div>
            <div class="form-group">
                <label for="email"> كلمة المرور</label>
                <input type="password" class="form-control" id="password" name="password" value="{{ $user->password }}" required>
            </div>
            <div class="form-group">
                <label for="gender">الجنس</label>
                <select class="form-control" id="gender" name="gender" required>
                    <option value="ذكر" {{ $user->gender === 'ذكر' ? 'selected' : '' }}>ذكر</option>
                    <option value="انثى" {{ $user->gender === 'انثى' ? 'selected' : '' }}>أنثى</option>
                </select>
            </div>
            <div class="form-group">
                <label for="role">الدور</label>
                <select class="form-control" id="role_id" name="role_id">
                    @foreach ($roles as $role)
                    <option value="{{$role->id}}" {{ $user->role->id === $role->id ? 'selected' : '' }}>{{$role->role}}</option>

                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">تحديث</button>
            <a href="{{ route('users.index') }}" class="btn btn-secondary">إلغاء</a>

        </form>

    </div>

</x-app-layout>