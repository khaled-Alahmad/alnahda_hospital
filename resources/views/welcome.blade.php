@extends('WebSite.layouts.master')

@section('content')
<!-- Main Slider Three -->
<section class="main-slider-three">
    <div class="banner-carousel">
        <!-- Swiper -->
        <div class="swiper-wrapper">

            <div class="swiper-slide slide">
                <div class="auto-container">
                    <div class="row clearfix">

                        <!-- Content Column -->
                        <div class="content-column col-lg-6 col-md-12 col-sm-12">
                            <div class="inner-column">
                                <h2>شريكك الصحي الأكثر ثقة </h2>
                                <div class="text">
                                    نحن نقدم استشارات مجانية وأفضل إدارة مشروع لك
                                </div>
                                <div class="btn-box">
                                    <a href="contact.html" class="theme-btn appointment-btn"><span class="txt">المواعيد</span></a>
                                    <a href="services.html" class="theme-btn services-btn">الخدمات</a>
                                </div>
                            </div>
                        </div>

                        <!-- Image Column -->
                        <div class="image-column col-lg-6 col-md-12 col-sm-12">
                            <div class="inner-column">
                                <div class="image">
                                    <img src="{{URL::asset('images/logo.png')}}" alt="" />
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>


            <div class="swiper-slide slide">
                <div class="auto-container">
                    <div class="row clearfix">

                        <!-- Content Column -->
                        <div class="content-column col-lg-6 col-md-12 col-sm-12">
                            <div class="inner-column">
                                <h2>Your Most Trusted Health Partner For Life.</h2>
                                <div class="text">We offer free consulting and the best project management for your
                                    ideas, 100% delivery guaranteed.
                                </div>
                                <div class="btn-box">
                                    <a href="contact.html" class="theme-btn appointment-btn"><span class="txt">Appointment</span></a>
                                    <a href="services.html" class="theme-btn services-btn">Services</a>
                                </div>
                            </div>
                        </div>

                        <!-- Image Column -->
                        <div class="image-column col-lg-6 col-md-12 col-sm-12">
                            <div class="inner-column">
                                <div class="image">
                                    <img src="{{URL::asset('WebSite/images/main-slider/3.jpg')}}" alt="" />
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>


            <div class="swiper-slide slide">
                <div class="auto-container">
                    <div class="row clearfix">

                        <!-- Content Column -->
                        <div class="content-column col-lg-6 col-md-12 col-sm-12">
                            <div class="inner-column">
                                <h2>Your Most Trusted Health Partner For Life.</h2>
                                <div class="text">We offer free consulting and the best project management for your
                                    ideas, 100% delivery guaranteed.
                                </div>
                                <div class="btn-box">
                                    <a href="contact.html" class="theme-btn appointment-btn"><span class="txt">Appointment</span></a>
                                    <a href="services.html" class="theme-btn services-btn">Services</a>
                                </div>
                            </div>
                        </div>

                        <!-- Image Column -->
                        <div class="image-column col-lg-6 col-md-12 col-sm-12">
                            <div class="inner-column">
                                <div class="image">
                                    <img src="{{URL::asset('')}}" alt="" />
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>

        </div>
        <!-- Add Arrows -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</section>
<!-- End Main Slider -->


<!-- Department Section Three -->
<section class="department-section-three">
    <div class="image-layer" style="background-image:url(images/background/6.jpg)"></div>
    <div class="auto-container">
        <!-- Department Tabs-->
        <div class="department-tabs tabs-box">
            <div class="row clearfix">
                <!--Column-->
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <!-- Sec Title -->
                    <div class="sec-title light">
                        <h2>الاقسام</h2>
                        <div class="separator"></div>
                    </div>
                    <!--Tab Btns-->
                    <ul class="tab-btns tab-buttons clearfix">
                        <li data-tab="#tab-urology" class="tab-btn active-btn">قسم المسالك البولية</li>
                        <li data-tab="#tab-department" class="tab-btn">قسم المخ والأعصاب</li>
                        <li data-tab="#tab-gastrology" class="tab-btn">قسم أمراض الجهاز الهضمي</li>
                        <li data-tab="#tab-cardiology" class="tab-btn">قسم أمراض القلب</li>
                        <li data-tab="#tab-eye" class="tab-btn">قسم العناية بالعيون</li>
                    </ul>
                </div>
                <!--Column-->
                <div class="col-lg-8 col-md-12 col-sm-12">
                    <!--Tabs Container-->
                    <div class="tabs-content">

                        <!-- Tab -->
                        <div class="tab" id="tab-urology">
                            <div class="content">
                                <h2>قسم المسالك البولية</h2>
                                <div class="title">Department of Neurology</div>
                                <div class="text">
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo
                                        ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis
                                        parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec,
                                        pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec
                                        pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.</p>
                                    <p>Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet
                                        nec, vulputate eget, arcu.</p>
                                </div>
                                <div class="two-column row clearfix">
                                    <div class="column col-lg-6 col-md-6 col-sm-12">
                                        <h3>01 - Neurology Service</h3>
                                        <div class="column-text">Lorem ipsum dolor sit amet, consectetuer adipiscing
                                            elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque
                                            penatibus
                                        </div>
                                    </div>
                                    <div class="column col-lg-6 col-md-6 col-sm-12">
                                        <h3>02 - Neurology Service</h3>
                                        <div class="column-text">Lorem ipsum dolor sit amet, consectetuer adipiscing
                                            elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque
                                            penatibus
                                        </div>
                                    </div>
                                </div>
                                <a href="doctors-detail.html" class="theme-btn btn-style-two"><span class="txt">View More</span></a>
                            </div>
                        </div>

                        <!-- Tab -->
                        <div class="tab active-tab" id="tab-department">
                            <div class="content">
                                <h2>Neurology Department</h2>
                                <div class="title">Department of Neurology</div>
                                <div class="text">
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo
                                        ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis
                                        parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec,
                                        pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec
                                        pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.</p>
                                    <p>Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet
                                        nec, vulputate eget, arcu.</p>
                                </div>
                                <div class="two-column row clearfix">
                                    <div class="column col-lg-6 col-md-6 col-sm-12">
                                        <h3>01 - Neurology Service</h3>
                                        <div class="column-text">Lorem ipsum dolor sit amet, consectetuer adipiscing
                                            elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque
                                            penatibus
                                        </div>
                                    </div>
                                    <div class="column col-lg-6 col-md-6 col-sm-12">
                                        <h3>02 - Neurology Service</h3>
                                        <div class="column-text">Lorem ipsum dolor sit amet, consectetuer adipiscing
                                            elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque
                                            penatibus
                                        </div>
                                    </div>
                                </div>
                                <a href="doctors-detail.html" class="theme-btn btn-style-two"><span class="txt">View More</span></a>
                            </div>
                        </div>

                        <!-- Tab -->
                        <div class="tab" id="tab-gastrology">
                            <div class="content">
                                <h2>Gastrology Department</h2>
                                <div class="title">Department of Neurology</div>
                                <div class="text">
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo
                                        ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis
                                        parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec,
                                        pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec
                                        pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.</p>
                                    <p>Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet
                                        nec, vulputate eget, arcu.</p>
                                </div>
                                <div class="two-column row clearfix">
                                    <div class="column col-lg-6 col-md-6 col-sm-12">
                                        <h3>01 - Neurology Service</h3>
                                        <div class="column-text">Lorem ipsum dolor sit amet, consectetuer adipiscing
                                            elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque
                                            penatibus
                                        </div>
                                    </div>
                                    <div class="column col-lg-6 col-md-6 col-sm-12">
                                        <h3>02 - Neurology Service</h3>
                                        <div class="column-text">Lorem ipsum dolor sit amet, consectetuer adipiscing
                                            elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque
                                            penatibus
                                        </div>
                                    </div>
                                </div>
                                <a href="doctors-detail.html" class="theme-btn btn-style-two"><span class="txt">View More</span></a>
                            </div>
                        </div>

                        <!-- Tab -->
                        <div class="tab" id="tab-cardiology">
                            <div class="content">
                                <h2>Cardiology Department</h2>
                                <div class="title">Department of Neurology</div>
                                <div class="text">
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo
                                        ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis
                                        parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec,
                                        pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec
                                        pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.</p>
                                    <p>Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet
                                        nec, vulputate eget, arcu.</p>
                                </div>
                                <div class="two-column row clearfix">
                                    <div class="column col-lg-6 col-md-6 col-sm-12">
                                        <h3>01 - Neurology Service</h3>
                                        <div class="column-text">Lorem ipsum dolor sit amet, consectetuer adipiscing
                                            elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque
                                            penatibus
                                        </div>
                                    </div>
                                    <div class="column col-lg-6 col-md-6 col-sm-12">
                                        <h3>02 - Neurology Service</h3>
                                        <div class="column-text">Lorem ipsum dolor sit amet, consectetuer adipiscing
                                            elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque
                                            penatibus
                                        </div>
                                    </div>
                                </div>
                                <a href="doctors-detail.html" class="theme-btn btn-style-two"><span class="txt">View More</span></a>
                            </div>
                        </div>

                        <!-- Tab -->
                        <div class="tab" id="tab-eye">
                            <div class="content">
                                <h2>Eye Care Department</h2>
                                <div class="title">Department of Neurology</div>
                                <div class="text">
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo
                                        ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis
                                        parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec,
                                        pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec
                                        pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.</p>
                                    <p>Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet
                                        nec, vulputate eget, arcu.</p>
                                </div>
                                <div class="two-column row clearfix">
                                    <div class="column col-lg-6 col-md-6 col-sm-12">
                                        <h3>01 - Neurology Service</h3>
                                        <div class="column-text">Lorem ipsum dolor sit amet, consectetuer adipiscing
                                            elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque
                                            penatibus
                                        </div>
                                    </div>
                                    <div class="column col-lg-6 col-md-6 col-sm-12">
                                        <h3>02 - Neurology Service</h3>
                                        <div class="column-text">Lorem ipsum dolor sit amet, consectetuer adipiscing
                                            elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque
                                            penatibus
                                        </div>
                                    </div>
                                </div>
                                <a href="doctors-detail.html" class="theme-btn btn-style-two"><span class="txt">View More</span></a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- End Department Section -->

<!-- Team Section -->
<section class="team-section">
    <div class="auto-container">

        <!-- Sec Title -->
        <div class="sec-title centered">
            <h2>الأخصائيون الطبيون</h2>
            <div class="separator"></div>
        </div>

        <div class="row clearfix">
            @foreach ($doctors as $doctor )

            <!-- Team Block -->
            <div class="team-block col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="image">

                        <img src="asset('images/user.png')" alt="" />

                    </div>

                    <div class="lower-content">
                        <h3><a href="#">{{$doctor->user->firstName.' '.$doctor->user->firstName}}</a></h3>
                        <div class="designation">{{$doctor->doctor_department->title}}</div>
                    </div>
                </div>
            </div>

            @endforeach


        </div>


    </div>
</section>
<!-- End Team Section -->

<!-- Video Section -->
<section class="video-section" style="background-image:url(images/background/5.jpg)">
    <div class="auto-container">
        <div class="content">
            <a href="https://www.youtube.com/watch?v=kxPCFljwJws" class="lightbox-image play-box"><span class="flaticon-play-button"><i class="ripple"></i></span></a>
            <div class="text">نحن نهتم بصحتك<h2>نحن نهتم بك</h2>
            </div>
        </div>
</section>
<!-- End Video Section -->

<!-- Appointment Section Two -->
<section class="appointment-section-two">
    <div class="auto-container">
        <div class="inner-container">
            <div class="row clearfix">

                <!-- Image Column -->
                <div class="image-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column wow slideInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="image">
                            <img src="{{asset('images/logo.png')}}" alt="" />
                        </div>
                    </div>
                </div>

                <!-- Form Column -->
                <div class="form-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <!-- Sec Title -->
                        <div class="sec-title">
                            <h2>حجز موعد</h2>
                            <div class="separator"></div>
                        </div>

                        <!-- Appointment Form -->
                        @can('isPatient')

                        <div class="appointment-form">
                            <form method="post" action="{{ route('previews.store') }}">
                                @csrf
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <input type="text" name="username" placeholder="اسمك" required="">
                                        <span class="icon fa fa-user"></span>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <input type="email" name="email" placeholder="البريد الالكتروني" required="">
                                        <span class="icon fa fa-envelope"></span>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <input type="tel" name="phone" placeholder="رقم الهاتف" required="">
                                        <span class="icon fas fa-phone"></span>
                                    </div>


                                    <div class="form-group col-lg-6 col-md-6 col-sm-12" style="display: none;">
                                        <label for="patient_id">المريض:</label>
                                        <select class="form-control" id="patient_id" name="patient_id" required>
                                            @if (auth()->user()->patients->first())
                                            <option value="{{ auth()->user()->patients->first()->id }}" selected>
                                                {{ auth()->user()->patients->first()->user->firstName }}
                                            </option>
                                            @endif
                                        </select>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">

                                        <select class="form-control col-lg-12 col-md-12 col-sm-12" id="doctor_id" name="doctor_id" required>
                                            @foreach($doctors as $doctor)
                                            <option value="{{ $doctor->id }}">{{ $doctor->user->firstName }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group col-lg-12 col-md-12 col-sm-12" style="display: none;">
                                        <label for="type">نوع المعاينة:</label>
                                        <select class="form-control" id="type" name="status" required>
                                            <option value="حجز">حجز</option>

                                        </select>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <input type="datetime-local" class="form-control" id="preview_datetime" name="preview_datetime" required>
                                        <span class="icon fas fa-phone"></span>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <button class="theme-btn btn-style-two" type="submit" name="submit-form">
                                            <span class="txt">تاكيد</span></button>
                                    </div>
                                </div>

                            </form>
                        </div>
                        @endcan

                    </div>
                </div>

            </div>
        </div>
    </div>
</section>



<!--Clients Section-->
<section class="clients-section">
    <div class="outer-container">

        <div class="sponsors-outer">
            <!--Sponsors Carousel-->
            <ul class="sponsors-carousel owl-carousel owl-theme">
                <li class="slide-item">
                    <figure class="image-box"><a href="#"><img src="images/clients/1.png" alt=""></a></figure>
                </li>
                <li class="slide-item">
                    <figure class="image-box"><a href="#"><img src="images/clients/2.png" alt=""></a></figure>
                </li>
                <li class="slide-item">
                    <figure class="image-box"><a href="#"><img src="images/clients/3.png" alt=""></a></figure>
                </li>
                <li class="slide-item">
                    <figure class="image-box"><a href="#"><img src="images/clients/4.png" alt=""></a></figure>
                </li>
                <li class="slide-item">
                    <figure class="image-box"><a href="#"><img src="images/clients/5.png" alt=""></a></figure>
                </li>
                <li class="slide-item">
                    <figure class="image-box"><a href="#"><img src="images/clients/1.png" alt=""></a></figure>
                </li>
                <li class="slide-item">
                    <figure class="image-box"><a href="#"><img src="images/clients/2.png" alt=""></a></figure>
                </li>
            </ul>
        </div>

    </div>
</section>
<!--End Clients Section-->
@endsection