<x-app-layout>

    <div class="container">
        <h2>إنشاء مستخدم جديد</h2>
        <form action="{{ route('users.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="firstName">الاسم الأول</label>
                <input type="text" class="form-control" id="firstName" name="firstName" required>
            </div>
            <div class="form-group">
                <label for="lastName">اسم العائلة</label>
                <input type="text" class="form-control" id="lastName" name="lastName" required>
            </div>
            <div class="form-group">
                <label for="father">اسم الأب</label>
                <input type="text" class="form-control" id="father" name="father" required>
            </div>
            <div class="form-group">
                <label for="mother">اسم الأم</label>
                <input type="text" class="form-control" id="mother" name="mother" required>
            </div>
            <div class="form-group">
                <label for="age">العمر</label>
                <input type="number" class="form-control" id="age" name="age" required>
            </div>
            <div class="form-group">
                <label for="phone">رقم الهاتف</label>
                <input type="text" class="form-control" id="phone" name="phone" required>
            </div>
            <div class="form-group">
                <label for="address">العنوان</label>
                <input type="text" class="form-control" id="address" name="address" required>
            </div>
            <div class="form-group">
                <label for="email">البريد الإلكتروني</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">كلمة المرور</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <div class="form-group">
                <label for="gender">الجنس</label>
                <select class="form-control" id="gender" name="gender" required>
                    <option value="ذكر">ذكر</option>
                    <option value="انثى">أنثى</option>
                </select>
            </div>
            <div class="form-group">
                <label for="role_id">الصلاحية:</label>
                <select class="form-control" id="role_id" name="role_id" required>
                    @foreach($roles as $role)
                    <option value="{{ $role->id }}">{{ $role->role }}</option>
                    @endforeach
                </select>
            </div>
            <!-- يمكنك إضافة المزيد من الحقول هنا -->
            <button type="submit" class="btn btn-primary">إرسال</button>
        </form>
    </div>
</x-app-layout>
