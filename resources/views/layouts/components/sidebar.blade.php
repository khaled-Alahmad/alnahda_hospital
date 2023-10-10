<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="position-fixed custom-scroll" style="height: 100vh;">
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('dashboard') }}">
                    <i class="fa-solid fa-gauge  menu-icon"></i>
                    <span class="menu-title">لوحة التحكم</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#floor" aria-expanded="false" aria-controls="floor">
                    <i class="fa-solid fa-house menu-icon"></i>
                    <span class="menu-title">الطوابق</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="floor">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="{{route('floors.index')}}">قائمة الطوبق</a></li>
                        <li class="nav-item"> <a class="nav-link" href="{{route('floors.create')}}">انشاء طابق</a></li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#rooms" aria-expanded="false" aria-controls="rooms">
                    <i class="fa-solid fa-person-shelter menu-icon"></i>
                    <span class="menu-title">الغرف</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="rooms">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('rooms.index')}}">
                                قائمة الغرف
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('rooms.create')}}">
                                غرفة جديدة
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#doctors" aria-expanded="false" aria-controls="doctors">

                    <i class="fa-solid fa-user-doctor menu-icon"></i>
                    <span class="menu-title">الأطباء</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="doctors">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('doctors.index')}}">
                                قائمة الأطباء
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('doctors.create')}}">
                                طبيب جديد
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#patients" aria-expanded="false" aria-controls="patients">
                    <i class="fa-solid fa-person menu-icon"></i>
                    <span class="menu-title">المرضى</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="patients">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('patients.index')}}">
                                قائمة المرضى
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-expanded="false" href="{{route('doctors.create')}}">
                                مريض جديد
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#doctor-departments" aria-expanded="false" aria-controls="doctor-departments">
                    <i class="fa-regular fa-building  menu-icon"></i>
                    <span class="menu-title">أقسام الأطباء</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="doctor-departments">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('doctor-departments.index')}}">
                                قائمة أقسام الأطباء
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('doctor-departments.create')}}">
                                قسم طبيب جديد
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#patient-rooms" aria-expanded="false" aria-controls="#patient-rooms">
                    <i class="fa-solid fa-person-booth menu-icon"></i>
                    <span class="menu-title">غرف المريض</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="patient-rooms">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('patient-rooms.index')}}">
                                قائمة غرف المريض
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('patient-rooms.create')}}">
                                غرفة مريض جديدة
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#illnesses" aria-expanded="false" aria-controls="illnesses">
                    <i class="fa-solid fa-disease menu-icon"></i>
                    <span class="menu-title"> الأمراض</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="illnesses">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('illnesses.index')}}">
                                قائمة الأمراض
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('illnesses.create')}}">
                                مرض جديد
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#previews" aria-expanded="false" aria-controls="previews">
                    <i class="fa-regular fa-calendar-check  menu-icon"></i>
                    <span class="menu-title"> المعاينات</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="previews">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('previews.index')}}">
                                قائمة المعاينات
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('previews.create')}}">
                                معاينة جديد
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#categories" aria-expanded="false" aria-controls="categories">
                    <i class="fa-solid fa-layer-group menu-icon"></i>
                    <span class="menu-title"> فئات الأدوية</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="categories">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('categories.index')}}">
                                قائمة فئات الأدوية
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('categories.create')}}">
                                فئة ادوية جديدة
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#brands" aria-expanded="false" aria-controls="brands">
                    <i class="fa-solid fa-copyright  menu-icon"></i>
                    <span class="menu-title">ماركات الأدوية</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="brands">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('brands.index')}}">
                                قائمة ماركات الأدوية
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('brands.create')}}">
                                ماركة أدوية جديدة
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#medicines" aria-expanded="false" aria-controls="medicines">
                    <i class="fa-solid fa-pills menu-icon"></i>
                    <span class="menu-title"> الأدوية</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="medicines">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('medicines.index')}}">
                                قائمة الأدوية
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('medicines.create')}}">
                                دواء جديد
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#preview-details" aria-expanded="false" aria-controls="preview-details">
                    <i class="fa-solid fa-building-user menu-icon"></i>
                    <span class="menu-title"> تفاصيل المعاينة</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="preview-details">
                    <ul class="nav flex-column sub-menu  ">
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('preview-details.index')}}">
                                قائمة تفاصيل المعاينة
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('preview-details.create')}}">
                                تفصيل معاينة جديد
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#operations" aria-expanded="false" aria-controls="operations">
                    <i class="fa-solid fa-house-medical-circle-exclamation menu-icon"></i>
                    <span class="menu-title"> العمليات</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="operations">
                    <ul class="nav flex-column sub-menu ">
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('operations.index')}}">
                                قائمة العمليات
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('operations.create')}}">
                                عملية جديدة
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#operation-doctors" aria-expanded="false" aria-controls="operation-doctors">
                    <i class="fa-solid fa-bed menu-icon"></i>
                    <span class="menu-title"> أطباء العمليات</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="operation-doctors">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('operation-doctors.index')}}">
                                قائمة أطباء العمليات
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('operation-doctors.create')}}">
                                إضافة طبيب لعملية
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#users" aria-expanded="false" aria-controls="users">
                    <i class="fa-solid fa-user menu-icon"></i>
                    <span class="menu-title"> المستخدمين</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="users">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('users.index')}}">
                                قائمة المستخدمين
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('users.create')}}">
                                إضافة مستخدم جديد
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</nav>