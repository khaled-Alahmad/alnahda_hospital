<x-guest-layout>
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <h4 class="mb-4">تسجيل الدخول</h4>
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="form-group">
            <input type="email" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="ادخل الإيميل هنا...." name="email">
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>
        <div class="form-group">
            <input type="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="ادخل كلمة السر هنا...." name="password">
            <x-input-error :messages="$errors->get('password')" class="mt-2" />

        </div>
        <div class="mt-3">
            <!-- <a class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" type="submit">SIGN IN</a> -->
            <button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" type="submit">دخول</button>
        </div>
        <div class="my-2 d-flex justify-content-between align-items-center">
            <div class="form-check">
                <label class="form-check-label text-muted">
                    <input type="checkbox" class="form-check-input">
                    البقاء قيد تسجيل الدخول
                </label>
            </div>
            <a href="#" class="auth-link text-black">هل نسيت كلمة السر؟</a>
        </div>
        <div class="mb-2">
            <button type="button" class="btn btn-block btn-facebook auth-form-btn">
                <i class="ti-facebook mr-2"></i>دخول بإستخدام فيسبوك
            </button>
        </div>
        <div class="text-center mt-4 font-weight-light">
            ليس لديك حساب؟<a href="{{ route('register') }}" class="text-primary">انشاء حساب.</a>
        </div>
    </form>
</x-guest-layout>