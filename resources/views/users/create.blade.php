<x-app-layout>

    <div class="container">
        <h2>إنشاء مستخدم جديد</h2>
        <form action="{{ route('users.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="firstName">الاسم الأول</label>
                <input value="{{ old('firstName', $user->firstName ?? '') }}" type="text" class="form-control" id="firstName" name="firstName" required>
                @error('firstName')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="lastName">الاسم الأخير</label>
                <input value="{{ old('lastName', $user->lastName ?? '') }}" type="text" class="form-control" id="lastName" name="lastName" required>
                @error('lastName')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="father">الأب</label>
                <input value="{{ old('father', $user->father ?? '') }}" type="text" class="form-control" id="father" name="father" required>
                @error('father')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="mother">الأم</label>
                <input value="{{ old('mother', $user->mother ?? '') }}" type="text" class="form-control" id="mother" name="mother" required>
                @error('mother')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="age">العمر</label>
                <input value="{{ old('age', $user->age ?? '') }}" type="number" class="form-control" id="age" name="age" required>
                @error('age')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="phone">الهاتف</label>
                <input value="{{ old('phone', $user->phone ?? '') }}" type="text" class="form-control" id="phone" name="phone" required>
                @error('phone')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="address">العنوان</label>
                <input value="{{ old('address', $user->address ?? '') }}" type="text" class="form-control" id="address" name="address" required>
                @error('address')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="email">البريد الإلكتروني</label>
                <input value="{{ old('email', $user->email ?? '') }}" type="email" class="form-control" id="email" name="email" required>
                @error('email')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="password">كلمة المرور</label>
                <input value="{{ old('password', $user->password ?? '') }}" type="password" class="form-control" id="password" name="password" required>

                @error('password')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="gender">الجنس</label>
                <select value="{{ old('gender', $user->gender ?? '') }}" class="form-control" id="gender" name="gender" required>
                    <option value="ذكر">ذكر</option>
                    <option value="انثى">أنثى</option>
                </select>
                @error('gender')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">إرسال</button>
        </form>
    </div>

</x-app-layout>