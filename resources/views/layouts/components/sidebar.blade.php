<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="position-fixed custom-scroll" style="height: 100vh;">
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('dashboard') }}">
                    <i class="fa-solid fa-house-flood-water"></i>
                    <span class="menu-title">لوحة التحكم</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#floor" aria-expanded="false" aria-controls="ui-basic">
                    <i class="icon-layout menu-icon"></i>
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
                <a class="nav-link" data-toggle="collapse" href="#rooms" aria-expanded="false" aria-controls="form-elements">
                    <i class="bi bi-calendar-plus-fill"></i>
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
                <a class="nav-link" data-toggle="collapse" href="#doctors" aria-expanded="false" aria-controls="form-elements">
                    <i class="icon-columns menu-icon"></i>
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
                <a class="nav-link" data-toggle="collapse" href="#patients" aria-expanded="false" aria-controls="form-elements">
                    <i class="icon-columns menu-icon"></i>
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
                            <a class="nav-link" href="{{route('doctors.create')}}">
                                مريض جديد
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#doctor-departments" aria-expanded="false" aria-controls="form-elements">
                    <i class="icon-columns menu-icon"></i>
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
                <a class="nav-link" data-toggle="collapse" href="#patient-rooms" aria-expanded="false" aria-controls="form-elements">
                    <i class="icon-columns menu-icon"></i>
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
                <a class="nav-link" data-toggle="collapse" href="#illnesses" aria-expanded="false" aria-controls="form-elements">
                    <i class="icon-columns menu-icon"></i>
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
                <a class="nav-link" data-toggle="collapse" href="#previews" aria-expanded="false" aria-controls="form-elements">
                    <i class="icon-columns menu-icon"></i>
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
                <a class="nav-link" data-toggle="collapse" href="#categories" aria-expanded="false" aria-controls="form-elements">
                    <i class="icon-columns menu-icon"></i>
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
                <a class="nav-link" data-toggle="collapse" href="#brands" aria-expanded="false" aria-controls="form-elements">
                    <i class="icon-columns menu-icon"></i>
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
                <a class="nav-link" data-toggle="collapse" href="#medicines" aria-expanded="false" aria-controls="form-elements">
                    <i class="icon-columns menu-icon"></i>
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
                <a class="nav-link" data-toggle="collapse" href="#preview-details" aria-expanded="false" aria-controls="form-elements">
                    <i class="icon-columns menu-icon"></i>
                    <span class="menu-title"> الأدوية</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="preview-details">
                    <ul class="nav flex-column sub-menu">
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
                <a class="nav-link" data-toggle="collapse" href="#operations" aria-expanded="false" aria-controls="form-elements">
                    <i class="icon-columns menu-icon"></i>
                    <span class="menu-title"> العمليات</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="operations">
                    <ul class="nav flex-column sub-menu">
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
                <a class="nav-link" data-toggle="collapse" href="#operation-doctors" aria-expanded="false" aria-controls="form-elements">
                    <i class="icon-columns menu-icon"></i>
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
        </ul>
    </div>
</nav>