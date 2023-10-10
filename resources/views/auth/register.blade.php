<x-guest-layout>
    <h4>انشاء حساب</h4>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="form-group">
            <input type="text" class="form-control form-control-lg" id="exampleInputUsername1" placeholder="الاسم الأول..." value="{{ old('firstName', $user->firstName ?? '') }}" name="firstName">
        </div>
        <div class="form-group">
            <input type="text" class="form-control form-control-lg" id="exampleInputUsername1" placeholder="الأسم الأخير..." value="{{ old('lastName', $user->lastName ?? '') }}" name="lastName">
        </div>
        <div class="form-group">
            <input type="text" class="form-control form-control-lg" id="exampleInputUsername1" placeholder="اسم الأب..." value="{{ old('father', $user->father ?? '') }}" name="father">
        </div>
        <div class="form-group">
            <input type="text" class="form-control form-control-lg" id="exampleInputUsername1" placeholder="اسم الأم..." value="{{ old('mother', $user->mother ?? '') }}" name="mother">
        </div>

        <div class="form-group">
            <input type="number" class="form-control form-control-lg" id="exampleInputUsername1" placeholder="عمرك..." name="age" value="{{ old('age', $user->age ?? '') }}">
        </div>
        <div class="form-group">
            <input type="text" class="form-control form-control-lg" id="exampleInputUsername1" placeholder="رقم هاتفك..." name="phone" value="{{ old('phone', $user->phone ?? '') }}">
        </div>
        <div class="form-group">
            <input type="text" class="form-control form-control-lg" id="exampleInputUsername1" placeholder="عنوانك..." name="address" value="{{ old('address', $user->address ?? '') }}">
        </div>
        <div class="form-group">

            <label for="gender">الجنس</label>
            <select value="{{ old('gender', $user->gender ?? '') }}" class="js-example-basic-single w-100" id="gender" name="gender">
                <option value="ذكر">ذكر</option>
                <option value="انثى">أنثى</option>
            </select>
        </div>
        <div class="form-group">
            <input type="email" class="form-control form-control-lg" id="exampleInputUsername1" placeholder="البريد..." name="email" value="{{ old('email', $user->email ?? '') }}">
        </div>
        <div class="form-group">
            <input type="password" class="form-control form-control-lg" id="exampleInputUsername1" placeholder="كلمة السر..." name="password">
        </div>
        <div class="form-group">
            <input type="password" class="form-control form-control-lg" id="exampleInputUsername1" placeholder="تأكيد كلمة السر.." name="password_confirmation">
        </div>


        <div class="mb-4">
            <div class="form-check">
                <label class="form-check-label text-muted">
                    <input type="checkbox" class="form-check-input">
                    أنا موافق على الشروط والاحكام.
                </label>
            </div>
        </div>
        <div class="mt-3">
            <!-- <a class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" href="../../index.html">SIGN UP</a> -->
            <button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" type="submit">انشاء حساب</button>
        </div>
        <div class="text-center mt-4 font-weight-light">
            هل لديك حساب بالفعل؟ <a href="{{ route('login') }}" class="text-primary">تسجيل الدخول</a>
        </div>
    </form>


</x-guest-layout>