@extends('frontend._partials.main')


@section('main-content')
    <!-- ========================= Banner Section Start =============================== -->
    <section class="banner py-80 position-relative overflow-hidden">

        {{-- <img src="{{ asset('') }}frontend/images/shapes/shape1.png" alt="" class="shape one animation-rotation"> --}}
        <img src="{{ asset('') }}frontend/images/shapes/shape2.png" alt="" class="shape two animation-scalation">
        {{-- <img src="{{ asset('') }}frontend/images/shapes/shape3.png" alt="" class="shape three animation-walking"> --}}
        <img src="{{ asset('') }}frontend/images/shapes/shape4.png" alt="" class="shape four animation-scalation">
        {{-- <img src="{{ asset('') }}frontend/images/shapes/shape5.png" alt="" class="shape five animation-walking"> --}}

        <div class="container">
            <div class="row gy-5 align-items-center">
                <div class="col-xl-6">
                    <div class="banner-content pe-md-4">
                        <div class="flex-align gap-8 mb-16" data-aos="fade-down">
                            <span class="w-8 h-8 bg-main-600 rounded-circle"></span>
                            <h5 class="text-main-600 mb-0"> SMP Negeri 2 Purwosari</h5>
                        </div>

                        <h1 class="display2 mb-24 wow bounceInLeft">Mewadahi Bakat <span
                                class="text-main-two-600 wow bounceInRight" data-wow-duration="2s" data-wow-delay=".5s"> &
                                Minat</span>
                            Meraih <span class="text-main-600 wow bounceInUp" data-wow-duration="1s"
                                data-wow-delay=".5s">Masa Depan</span>
                        </h1>
                        <p class="text-neutral-500 text-line-2 wow bounceInUp">Setiap anak dilahirkan memiliki kelebihan dan
                            kekurangan masing-masing, unik dan tidak ada yang bisa menyamainya. Berangkat dari itu SMP
                            Negeri 2 Purwosari SMP Negeri 2 Purwosari tidak hanya fokus pada kemampuan akademik semata,
                            namun juga aneka potensi siswa. Berbekal kerjasama dengan Ademos Indonesia dan Yayasan Mannah,
                            SMP Negeri 2 Purwosari akan mendampingi dan memfasilitasi siswa meraih masa depannya dengan
                            berbagai skema program kegiatan baik intra kurikuler maupun ekstra kurikuler guna mewadahi bakat
                            dan minat siswa</p>
                        <div class="buttons-wrapper flex-align flex-wrap gap-24 mt-40">
                            <a href="course.html" class="btn btn-main rounded-pill flex-align gap-8" data-aos="fade-right">
                                Tentang Kami
                                <i class="ph-bold ph-arrow-up-right d-flex text-lg"></i>
                            </a>

                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="banner-thumb position-relative">
                        <img src="{{ asset('frontend/images/home/home-slider.png') }}" alt="" width="580px"
                            class="banner-thumb__img rounded-12 wow bounceIn" data-wow-duration="3s" data-wow-delay=".5s"
                            data-tilt data-tilt-max="12" data-tilt-speed="500" data-tilt-perspective="5000"
                            data-tilt-full-page-listening data-tilt-scale="1.02">



                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ========================= Banner SEction End =============================== -->

    <!-- ========================== Brand Section Start =========================== -->
    <div class="brand wow fadeInUpBig" data-wow-duration="1s" data-wow-delay=".5s">
        <div class="container container--lg">
            <div class="brand-box py-80 px-16 bg-main-25 border border-neutral-30 rounded-16">
                <h5 class="mb-40 text-center text-neutral-500">MITRA INOVASI KAMI</h5>
                <div class="container">
                    <div class="brand-slider">
                        @foreach ($partners as $partner)
                            <div class="brand-slider__item px-24">
                                <img src="{{ asset('storage') . '/' . $partner->image }}" alt="">
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ========================== Brand Section End =========================== -->

    <!-- ============================= Features Section Start ============================== -->
    <section class="features py-120 position-relative overflow-hidden">
        <img src="{{ asset('') }}frontend/images/shapes/shape2.png" alt=""
            class="shape two animation-scalation">
        <img src="{{ asset('') }}frontend/images/shapes/shape4.png" alt="" class="shape six animation-walking">

        <div class="container">
            <div class="section-heading text-center">
                <h2 class="mb-24 wow bounceIn">Kelas Unggulan</h2>
                <p class="wow bounceInUp">Program pendidikan khusus bagi siswa dengan pendampingan intensif. Program ini
                    bertujuan mengembangkan potensi akademik, keterampilan, dan karakter untuk mencetak individu unggul</p>
            </div>
            <div class="features-slider">
                @foreach ($programs as $program)
                    <div class="px-8" data-aos="zoom-in" data-aos-duration="400">
                        <div
                            class="features-item item-hover animation-item bg-main-25 border border-neutral-30 rounded-16 transition-1 hover-bg-main-600 hover-border-main-600">
                            <span class="mb-32 w-110 h-110 flex-center bg-white rounded-circle">
                                <img src="{{ asset('storage') . '/' . $program->image }}" class="animate__bounce"
                                    alt="" width="50px">
                            </span>
                            <h4 class="mb-16 transition-1 item-hover__text">{{ $program->program_name }}</h4>
                            <p class="transition-1 item-hover__text text-line-2">{{ strip_tags($program->description) }}
                            </p>
                            <a href="course-list-view.html"
                                class="item-hover__text flex-align gap-8 text-main-600 mt-24 hover-text-decoration-underline transition-1">
                                Lihat Selengkapnya
                                <i class="ph ph-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                @endforeach


            </div>
            <div class="flex-align gap-16 mt-40 justify-content-center">
                <button type="button" id="features-prev"
                    class="slick-prev slick-arrow flex-center rounded-circle border border-gray-100 hover-border-main-600 text-xl hover-bg-main-600 hover-text-white transition-1 w-48 h-48">
                    <i class="ph ph-caret-left"></i>
                </button>
                <button type="button" id="features-next"
                    class="slick-next slick-arrow flex-center rounded-circle border border-gray-100 hover-border-main-600 text-xl hover-bg-main-600 hover-text-white transition-1 w-48 h-48">
                    <i class="ph ph-caret-right"></i>
                </button>
            </div>
        </div>
    </section>
    <!-- ============================= Features Section End ============================== -->

    <!-- ================================== Explore Course Section Start =========================== -->
    {{-- <section class="explore-course py-120 bg-main-25 position-relative z-1">
        <img src="{{ asset('') }}frontend/images/shapes/shape2.png" alt=""
            class="shape six animation-scalation">

        <div class="container">
            <div class="section-heading text-center style-flex gap-24">
                <div class="section-heading__inner text-start">
                    <h2 class="mb-0 wow bounceIn">Explore 4,000+ Free Online Courses For Students</h2>
                </div>
                <div class="section-heading__content">
                    <p class="section-heading__desc text-start mt-0 text-line-2 wow bounceInUp">Welcome to our diverse and
                        dynamic course catalog. we're dedicated to providing you...</p>
                    <a href="course-list-view.html"
                        class="item-hover__text flex-align gap-8 text-main-600 mt-24 hover-text-decoration-underline transition-1"
                        tabindex="0">
                        See All Course
                        <i class="ph ph-arrow-right"></i>
                    </a>
                </div>
            </div>

            <div class="nav-tab-wrapper bg-white p-16 mb-40" data-aos="zoom-out">
                <ul class="nav nav-pills common-tab gap-16" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button
                            class="nav-link rounded-pill bg-main-25 text-md fw-medium text-neutral-500 flex-center w-100 gap-8 active"
                            id="pills-categories-tab" data-bs-toggle="pill" data-bs-target="#pills-categories"
                            type="button" role="tab" aria-controls="pills-categories" aria-selected="true">
                            <i class="text-xl d-flex ph-bold ph-squares-four"></i>
                            All Categories
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button
                            class="nav-link rounded-pill bg-main-25 text-md fw-medium text-neutral-500 flex-center w-100 gap-8"
                            id="pills-design-tab" data-bs-toggle="pill" data-bs-target="#pills-design" type="button"
                            role="tab" aria-controls="pills-design" aria-selected="false">
                            <i class="text-xl d-flex ph-bold ph-magic-wand"></i>
                            Design
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button
                            class="nav-link rounded-pill bg-main-25 text-md fw-medium text-neutral-500 flex-center w-100 gap-8"
                            id="pills-programming-tab" data-bs-toggle="pill" data-bs-target="#pills-programming"
                            type="button" role="tab" aria-controls="pills-programming" aria-selected="false">
                            <i class="text-xl d-flex ph-bold ph-code"></i>
                            Programming
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button
                            class="nav-link rounded-pill bg-main-25 text-md fw-medium text-neutral-500 flex-center w-100 gap-8"
                            id="pills-webDesign-tab" data-bs-toggle="pill" data-bs-target="#pills-webDesign"
                            type="button" role="tab" aria-controls="pills-webDesign" aria-selected="false">
                            <i class="text-xl d-flex ph-bold ph-code"></i>
                            web Design
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button
                            class="nav-link rounded-pill bg-main-25 text-md fw-medium text-neutral-500 flex-center w-100 gap-8"
                            id="pills-Academic-tab" data-bs-toggle="pill" data-bs-target="#pills-Academic"
                            type="button" role="tab" aria-controls="pills-Academic" aria-selected="false">
                            <i class="text-xl d-flex ph-bold ph-graduation-cap"></i>
                            Academic
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button
                            class="nav-link rounded-pill bg-main-25 text-md fw-medium text-neutral-500 flex-center w-100 gap-8"
                            id="pills-marketing-tab" data-bs-toggle="pill" data-bs-target="#pills-marketing"
                            type="button" role="tab" aria-controls="pills-marketing" aria-selected="false">
                            <i class="text-xl d-flex ph-bold ph-chart-pie-slice"></i>
                            Marketing
                        </button>
                    </li>
                </ul>
            </div>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-categories" role="tabpanel"
                    aria-labelledby="pills-categories-tab" tabindex="0">
                    <div class="row gy-4">
                        <div class="col-lg-4 col-sm-6 wow fadeInUp" data-aos="fade-up" data-aos-duration="200">
                            <div class="course-item bg-white rounded-16 p-12 h-100 box-shadow-md">
                                <div class="course-item__thumb rounded-12 overflow-hidden position-relative">
                                    <a href="course-details.html" class="w-100 h-100">
                                        <img src="{{ asset('') }}frontend/images/thumbs/course-img1.png"
                                            alt="Course Image" class="course-item__img rounded-12 cover-img transition-2">
                                    </a>
                                    <div
                                        class="flex-align gap-8 bg-main-600 rounded-pill px-24 py-12 text-white position-absolute inset-block-start-0 inset-inline-start-0 mt-20 ms-20 z-1">
                                        <span class="text-2xl d-flex"><i class="ph ph-clock"></i></span>
                                        <span class="text-lg fw-medium">9h 36m</span>
                                    </div>
                                    <button type="button"
                                        class="wishlist-btn w-48 h-48 bg-white text-main-two-600 flex-center position-absolute inset-block-start-0 inset-inline-end-0 mt-20 me-20 z-1 text-2xl rounded-circle transition-2">
                                        <i class="ph ph-heart"></i>
                                    </button>
                                </div>
                                <div class="course-item__content">
                                    <div class="">
                                        <h4 class="mb-28">
                                            <a href="course-details.html" class="link text-line-2">Introduction to Digital
                                                Marketing</a>
                                        </h4>
                                        <div class="flex-between gap-8 flex-wrap mb-16">
                                            <div class="flex-align gap-8">
                                                <span class="text-neutral-700 text-2xl d-flex"><i
                                                        class="ph-bold ph-video-camera"></i></span>
                                                <span class="text-neutral-700 text-lg fw-medium">20 Lessons</span>
                                            </div>
                                            <div class="flex-align gap-8">
                                                <span class="text-neutral-700 text-2xl d-flex"><i
                                                        class="ph-bold ph-chart-bar"></i></span>
                                                <span class="text-neutral-700 text-lg fw-medium">Beginner</span>
                                            </div>
                                        </div>
                                        <div class="flex-between gap-8 flex-wrap">
                                            <div class="flex-align gap-4">
                                                <span class="text-2xl fw-medium text-warning-600 d-flex"><i
                                                        class="ph-fill ph-star"></i></span>
                                                <span class="text-lg text-neutral-700">
                                                    4.7
                                                    <span class="text-neutral-100">(6.4k)</span>
                                                </span>
                                            </div>
                                            <div class="flex-align gap-8">
                                                <span class="text-neutral-700 text-2xl d-flex">
                                                    <img src="{{ asset('') }}frontend/images/thumbs/user-img1.png"
                                                        alt="User Image"
                                                        class="w-32 h-32 object-fit-cover rounded-circle">
                                                </span>
                                                <span class="text-neutral-700 text-lg fw-medium">AnikaZ</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="flex-between gap-8 pt-24 border-top border-neutral-50 mt-28 border-dashed border-0">
                                        <h4 class="mb-0 text-main-two-600">$148</h4>
                                        <a href="apply-admission.html"
                                            class="flex-align gap-8 text-main-600 hover-text-decoration-underline transition-1 fw-semibold"
                                            tabindex="0">
                                            Enroll Now
                                            <i class="ph ph-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 wow fadeInUp" data-aos="fade-up" data-aos-duration="400">
                            <div class="course-item bg-white rounded-16 p-12 h-100 box-shadow-md">
                                <div class="course-item__thumb rounded-12 overflow-hidden position-relative">
                                    <a href="course-details.html" class="w-100 h-100">
                                        <img src="{{ asset('') }}frontend/images/thumbs/course-img2.png"
                                            alt="Course Image" class="course-item__img rounded-12 cover-img transition-2">
                                    </a>
                                    <div
                                        class="flex-align gap-8 bg-main-600 rounded-pill px-24 py-12 text-white position-absolute inset-block-start-0 inset-inline-start-0 mt-20 ms-20 z-1">
                                        <span class="text-2xl d-flex"><i class="ph ph-clock"></i></span>
                                        <span class="text-lg fw-medium">25h 06m</span>
                                    </div>
                                    <button type="button"
                                        class="wishlist-btn w-48 h-48 bg-white text-main-two-600 flex-center position-absolute inset-block-start-0 inset-inline-end-0 mt-20 me-20 z-1 text-2xl rounded-circle transition-2">
                                        <i class="ph ph-heart"></i>
                                    </button>
                                </div>
                                <div class="course-item__content">
                                    <div class="">
                                        <h4 class="mb-28">
                                            <a href="course-details.html" class="link text-line-2">Introduction to Python
                                                Programming</a>
                                        </h4>
                                        <div class="flex-between gap-8 flex-wrap mb-16">
                                            <div class="flex-align gap-8">
                                                <span class="text-neutral-700 text-2xl d-flex"><i
                                                        class="ph-bold ph-video-camera"></i></span>
                                                <span class="text-neutral-700 text-lg fw-medium">20 Lessons</span>
                                            </div>
                                            <div class="flex-align gap-8">
                                                <span class="text-neutral-700 text-2xl d-flex"><i
                                                        class="ph-bold ph-chart-bar"></i></span>
                                                <span class="text-neutral-700 text-lg fw-medium">Beginner</span>
                                            </div>
                                        </div>
                                        <div class="flex-between gap-8 flex-wrap">
                                            <div class="flex-align gap-4">
                                                <span class="text-2xl fw-medium text-warning-600 d-flex"><i
                                                        class="ph-fill ph-star"></i></span>
                                                <span class="text-lg text-neutral-700">
                                                    4.7
                                                    <span class="text-neutral-100">(6.4k)</span>
                                                </span>
                                            </div>
                                            <div class="flex-align gap-8">
                                                <span class="text-neutral-700 text-2xl d-flex">
                                                    <img src="{{ asset('') }}frontend/images/thumbs/user-img2.png"
                                                        alt="User Image"
                                                        class="w-32 h-32 object-fit-cover rounded-circle">
                                                </span>
                                                <span class="text-neutral-700 text-lg fw-medium">Wade</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="flex-between gap-8 pt-24 border-top border-neutral-50 mt-28 border-dashed border-0">
                                        <h4 class="mb-0 text-main-two-600">$499</h4>
                                        <a href="apply-admission.html"
                                            class="flex-align gap-8 text-main-600 hover-text-decoration-underline transition-1 fw-semibold"
                                            tabindex="0">
                                            Enroll Now
                                            <i class="ph ph-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 wow fadeInUp" data-aos="fade-up" data-aos-duration="600">
                            <div class="course-item bg-white rounded-16 p-12 h-100 box-shadow-md">
                                <div class="course-item__thumb rounded-12 overflow-hidden position-relative">
                                    <a href="course-details.html" class="w-100 h-100">
                                        <img src="{{ asset('') }}frontend/images/thumbs/course-img3.png"
                                            alt="Course Image" class="course-item__img rounded-12 cover-img transition-2">
                                    </a>
                                    <div
                                        class="flex-align gap-8 bg-main-600 rounded-pill px-24 py-12 text-white position-absolute inset-block-start-0 inset-inline-start-0 mt-20 ms-20 z-1">
                                        <span class="text-2xl d-flex"><i class="ph ph-clock"></i></span>
                                        <span class="text-lg fw-medium">9h 36m</span>
                                    </div>
                                    <button type="button"
                                        class="wishlist-btn w-48 h-48 bg-white text-main-two-600 flex-center position-absolute inset-block-start-0 inset-inline-end-0 mt-20 me-20 z-1 text-2xl rounded-circle transition-2">
                                        <i class="ph ph-heart"></i>
                                    </button>
                                </div>
                                <div class="course-item__content">
                                    <div class="">
                                        <h4 class="mb-28">
                                            <a href="course-details.html" class="link text-line-2">Introduction to
                                                Photography Masterclass</a>
                                        </h4>
                                        <div class="flex-between gap-8 flex-wrap mb-16">
                                            <div class="flex-align gap-8">
                                                <span class="text-neutral-700 text-2xl d-flex"><i
                                                        class="ph-bold ph-video-camera"></i></span>
                                                <span class="text-neutral-700 text-lg fw-medium">20 Lessons</span>
                                            </div>
                                            <div class="flex-align gap-8">
                                                <span class="text-neutral-700 text-2xl d-flex"><i
                                                        class="ph-bold ph-chart-bar"></i></span>
                                                <span class="text-neutral-700 text-lg fw-medium">Beginner</span>
                                            </div>
                                        </div>
                                        <div class="flex-between gap-8 flex-wrap">
                                            <div class="flex-align gap-4">
                                                <span class="text-2xl fw-medium text-warning-600 d-flex"><i
                                                        class="ph-fill ph-star"></i></span>
                                                <span class="text-lg text-neutral-700">
                                                    4.7
                                                    <span class="text-neutral-100">(6.4k)</span>
                                                </span>
                                            </div>
                                            <div class="flex-align gap-8">
                                                <span class="text-neutral-700 text-2xl d-flex">
                                                    <img src="{{ asset('') }}frontend/images/thumbs/user-img3.png"
                                                        alt="User Image"
                                                        class="w-32 h-32 object-fit-cover rounded-circle">
                                                </span>
                                                <span class="text-neutral-700 text-lg fw-medium">Cody</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="flex-between gap-8 pt-24 border-top border-neutral-50 mt-28 border-dashed border-0">
                                        <h4 class="mb-0 text-main-two-600">$457</h4>
                                        <a href="apply-admission.html"
                                            class="flex-align gap-8 text-main-600 hover-text-decoration-underline transition-1 fw-semibold"
                                            tabindex="0">
                                            Enroll Now
                                            <i class="ph ph-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 wow fadeInUp" data-aos="fade-up" data-aos-duration="200">
                            <div class="course-item bg-white rounded-16 p-12 h-100 box-shadow-md">
                                <div class="course-item__thumb rounded-12 overflow-hidden position-relative">
                                    <a href="course-details.html" class="w-100 h-100">
                                        <img src="{{ asset('') }}frontend/images/thumbs/course-img4.png"
                                            alt="Course Image" class="course-item__img rounded-12 cover-img transition-2">
                                    </a>
                                    <div
                                        class="flex-align gap-8 bg-main-600 rounded-pill px-24 py-12 text-white position-absolute inset-block-start-0 inset-inline-start-0 mt-20 ms-20 z-1">
                                        <span class="text-2xl d-flex"><i class="ph ph-clock"></i></span>
                                        <span class="text-lg fw-medium">9h 36m</span>
                                    </div>
                                    <button type="button"
                                        class="wishlist-btn w-48 h-48 bg-white text-main-two-600 flex-center position-absolute inset-block-start-0 inset-inline-end-0 mt-20 me-20 z-1 text-2xl rounded-circle transition-2">
                                        <i class="ph ph-heart"></i>
                                    </button>
                                </div>
                                <div class="course-item__content">
                                    <div class="">
                                        <h4 class="mb-28">
                                            <a href="course-details.html" class="link text-line-2">Spanish Language
                                                Mastery: Beginner to Fluent</a>
                                        </h4>
                                        <div class="flex-between gap-8 flex-wrap mb-16">
                                            <div class="flex-align gap-8">
                                                <span class="text-neutral-700 text-2xl d-flex"><i
                                                        class="ph-bold ph-video-camera"></i></span>
                                                <span class="text-neutral-700 text-lg fw-medium">20 Lessons</span>
                                            </div>
                                            <div class="flex-align gap-8">
                                                <span class="text-neutral-700 text-2xl d-flex"><i
                                                        class="ph-bold ph-chart-bar"></i></span>
                                                <span class="text-neutral-700 text-lg fw-medium">Beginner</span>
                                            </div>
                                        </div>
                                        <div class="flex-between gap-8 flex-wrap">
                                            <div class="flex-align gap-4">
                                                <span class="text-2xl fw-medium text-warning-600 d-flex"><i
                                                        class="ph-fill ph-star"></i></span>
                                                <span class="text-lg text-neutral-700">
                                                    4.7
                                                    <span class="text-neutral-100">(6.4k)</span>
                                                </span>
                                            </div>
                                            <div class="flex-align gap-8">
                                                <span class="text-neutral-700 text-2xl d-flex">
                                                    <img src="{{ asset('') }}frontend/images/thumbs/user-img4.png"
                                                        alt="User Image"
                                                        class="w-32 h-32 object-fit-cover rounded-circle">
                                                </span>
                                                <span class="text-neutral-700 text-lg fw-medium">Dustin</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="flex-between gap-8 pt-24 border-top border-neutral-50 mt-28 border-dashed border-0">
                                        <h4 class="mb-0 text-main-two-600">$148</h4>
                                        <a href="apply-admission.html"
                                            class="flex-align gap-8 text-main-600 hover-text-decoration-underline transition-1 fw-semibold"
                                            tabindex="0">
                                            Enroll Now
                                            <i class="ph ph-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 wow fadeInUp" data-aos="fade-up" data-aos-duration="400">
                            <div class="course-item bg-white rounded-16 p-12 h-100 box-shadow-md">
                                <div class="course-item__thumb rounded-12 overflow-hidden position-relative">
                                    <a href="course-details.html" class="w-100 h-100">
                                        <img src="{{ asset('') }}frontend/images/thumbs/course-img5.png"
                                            alt="Course Image" class="course-item__img rounded-12 cover-img transition-2">
                                    </a>
                                    <div
                                        class="flex-align gap-8 bg-main-600 rounded-pill px-24 py-12 text-white position-absolute inset-block-start-0 inset-inline-start-0 mt-20 ms-20 z-1">
                                        <span class="text-2xl d-flex"><i class="ph ph-clock"></i></span>
                                        <span class="text-lg fw-medium">9h 36m</span>
                                    </div>
                                    <button type="button"
                                        class="wishlist-btn w-48 h-48 bg-white text-main-two-600 flex-center position-absolute inset-block-start-0 inset-inline-end-0 mt-20 me-20 z-1 text-2xl rounded-circle transition-2">
                                        <i class="ph ph-heart"></i>
                                    </button>
                                </div>
                                <div class="course-item__content">
                                    <div class="">
                                        <h4 class="mb-28">
                                            <a href="course-details.html" class="link text-line-2">Financial Planning for
                                                Millennials</a>
                                        </h4>
                                        <div class="flex-between gap-8 flex-wrap mb-16">
                                            <div class="flex-align gap-8">
                                                <span class="text-neutral-700 text-2xl d-flex"><i
                                                        class="ph-bold ph-video-camera"></i></span>
                                                <span class="text-neutral-700 text-lg fw-medium">20 Lessons</span>
                                            </div>
                                            <div class="flex-align gap-8">
                                                <span class="text-neutral-700 text-2xl d-flex"><i
                                                        class="ph-bold ph-chart-bar"></i></span>
                                                <span class="text-neutral-700 text-lg fw-medium">Beginner</span>
                                            </div>
                                        </div>
                                        <div class="flex-between gap-8 flex-wrap">
                                            <div class="flex-align gap-4">
                                                <span class="text-2xl fw-medium text-warning-600 d-flex"><i
                                                        class="ph-fill ph-star"></i></span>
                                                <span class="text-lg text-neutral-700">
                                                    4.7
                                                    <span class="text-neutral-100">(6.4k)</span>
                                                </span>
                                            </div>
                                            <div class="flex-align gap-8">
                                                <span class="text-neutral-700 text-2xl d-flex">
                                                    <img src="{{ asset('') }}frontend/images/thumbs/user-img5.png"
                                                        alt="User Image"
                                                        class="w-32 h-32 object-fit-cover rounded-circle">
                                                </span>
                                                <span class="text-neutral-700 text-lg fw-medium">Bruce</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="flex-between gap-8 pt-24 border-top border-neutral-50 mt-28 border-dashed border-0">
                                        <h4 class="mb-0 text-main-two-600">$546</h4>
                                        <a href="apply-admission.html"
                                            class="flex-align gap-8 text-main-600 hover-text-decoration-underline transition-1 fw-semibold"
                                            tabindex="0">
                                            Enroll Now
                                            <i class="ph ph-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 wow fadeInUp" data-aos="fade-up" data-aos-duration="600">
                            <div class="course-item bg-white rounded-16 p-12 h-100 box-shadow-md">
                                <div class="course-item__thumb rounded-12 overflow-hidden position-relative">
                                    <a href="course-details.html" class="w-100 h-100">
                                        <img src="{{ asset('') }}frontend/images/thumbs/course-img6.png"
                                            alt="Course Image" class="course-item__img rounded-12 cover-img transition-2">
                                    </a>
                                    <div
                                        class="flex-align gap-8 bg-main-600 rounded-pill px-24 py-12 text-white position-absolute inset-block-start-0 inset-inline-start-0 mt-20 ms-20 z-1">
                                        <span class="text-2xl d-flex"><i class="ph ph-clock"></i></span>
                                        <span class="text-lg fw-medium">9h 36m</span>
                                    </div>
                                    <button type="button"
                                        class="wishlist-btn w-48 h-48 bg-white text-main-two-600 flex-center position-absolute inset-block-start-0 inset-inline-end-0 mt-20 me-20 z-1 text-2xl rounded-circle transition-2">
                                        <i class="ph ph-heart"></i>
                                    </button>
                                </div>
                                <div class="course-item__content">
                                    <div class="">
                                        <h4 class="mb-28">
                                            <a href="course-details.html" class="link text-line-2">Nutrition Essentials
                                                for Healthy Living</a>
                                        </h4>
                                        <div class="flex-between gap-8 flex-wrap mb-16">
                                            <div class="flex-align gap-8">
                                                <span class="text-neutral-700 text-2xl d-flex"><i
                                                        class="ph-bold ph-video-camera"></i></span>
                                                <span class="text-neutral-700 text-lg fw-medium">20 Lessons</span>
                                            </div>
                                            <div class="flex-align gap-8">
                                                <span class="text-neutral-700 text-2xl d-flex"><i
                                                        class="ph-bold ph-chart-bar"></i></span>
                                                <span class="text-neutral-700 text-lg fw-medium">Beginner</span>
                                            </div>
                                        </div>
                                        <div class="flex-between gap-8 flex-wrap">
                                            <div class="flex-align gap-4">
                                                <span class="text-2xl fw-medium text-warning-600 d-flex"><i
                                                        class="ph-fill ph-star"></i></span>
                                                <span class="text-lg text-neutral-700">
                                                    4.7
                                                    <span class="text-neutral-100">(6.4k)</span>
                                                </span>
                                            </div>
                                            <div class="flex-align gap-8">
                                                <span class="text-neutral-700 text-2xl d-flex">
                                                    <img src="{{ asset('') }}frontend/images/thumbs/user-img6.png"
                                                        alt="User Image"
                                                        class="w-32 h-32 object-fit-cover rounded-circle">
                                                </span>
                                                <span class="text-neutral-700 text-lg fw-medium">Robert</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="flex-between gap-8 pt-24 border-top border-neutral-50 mt-28 border-dashed border-0">
                                        <h4 class="mb-0 text-main-two-600">$345</h4>
                                        <a href="apply-admission.html"
                                            class="flex-align gap-8 text-main-600 hover-text-decoration-underline transition-1 fw-semibold"
                                            tabindex="0">
                                            Enroll Now
                                            <i class="ph ph-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-design" role="tabpanel" aria-labelledby="pills-design-tab"
                    tabindex="0">
                    <div class="row gy-4">
                        <div class="col-lg-4 col-sm-6 wow fadeInUp" data-aos="fade-up" data-aos-duration="200">
                            <div class="course-item bg-white rounded-16 p-12 h-100 box-shadow-md">
                                <div class="course-item__thumb rounded-12 overflow-hidden position-relative">
                                    <a href="course-details.html" class="w-100 h-100">
                                        <img src="{{ asset('') }}frontend/images/thumbs/course-img1.png"
                                            alt="Course Image" class="course-item__img rounded-12 cover-img transition-2">
                                    </a>
                                    <div
                                        class="flex-align gap-8 bg-main-600 rounded-pill px-24 py-12 text-white position-absolute inset-block-start-0 inset-inline-start-0 mt-20 ms-20 z-1">
                                        <span class="text-2xl d-flex"><i class="ph ph-clock"></i></span>
                                        <span class="text-lg fw-medium">9h 36m</span>
                                    </div>
                                    <button type="button"
                                        class="wishlist-btn w-48 h-48 bg-white text-main-two-600 flex-center position-absolute inset-block-start-0 inset-inline-end-0 mt-20 me-20 z-1 text-2xl rounded-circle transition-2">
                                        <i class="ph ph-heart"></i>
                                    </button>
                                </div>
                                <div class="course-item__content">
                                    <div class="">
                                        <h4 class="mb-28">
                                            <a href="course-details.html" class="link text-line-2">Introduction to Digital
                                                Marketing</a>
                                        </h4>
                                        <div class="flex-between gap-8 flex-wrap mb-16">
                                            <div class="flex-align gap-8">
                                                <span class="text-neutral-700 text-2xl d-flex"><i
                                                        class="ph-bold ph-video-camera"></i></span>
                                                <span class="text-neutral-700 text-lg fw-medium">20 Lessons</span>
                                            </div>
                                            <div class="flex-align gap-8">
                                                <span class="text-neutral-700 text-2xl d-flex"><i
                                                        class="ph-bold ph-chart-bar"></i></span>
                                                <span class="text-neutral-700 text-lg fw-medium">Beginner</span>
                                            </div>
                                        </div>
                                        <div class="flex-between gap-8 flex-wrap">
                                            <div class="flex-align gap-4">
                                                <span class="text-2xl fw-medium text-warning-600 d-flex"><i
                                                        class="ph-fill ph-star"></i></span>
                                                <span class="text-lg text-neutral-700">
                                                    4.7
                                                    <span class="text-neutral-100">(6.4k)</span>
                                                </span>
                                            </div>
                                            <div class="flex-align gap-8">
                                                <span class="text-neutral-700 text-2xl d-flex">
                                                    <img src="{{ asset('') }}frontend/images/thumbs/user-img1.png"
                                                        alt="User Image"
                                                        class="w-32 h-32 object-fit-cover rounded-circle">
                                                </span>
                                                <span class="text-neutral-700 text-lg fw-medium">AnikaZ</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="flex-between gap-8 pt-24 border-top border-neutral-50 mt-28 border-dashed border-0">
                                        <h4 class="mb-0 text-main-two-600">$148</h4>
                                        <a href="apply-admission.html"
                                            class="flex-align gap-8 text-main-600 hover-text-decoration-underline transition-1 fw-semibold"
                                            tabindex="0">
                                            Enroll Now
                                            <i class="ph ph-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 wow fadeInUp" data-aos="fade-up" data-aos-duration="400">
                            <div class="course-item bg-white rounded-16 p-12 h-100 box-shadow-md">
                                <div class="course-item__thumb rounded-12 overflow-hidden position-relative">
                                    <a href="course-details.html" class="w-100 h-100">
                                        <img src="{{ asset('') }}frontend/images/thumbs/course-img2.png"
                                            alt="Course Image" class="course-item__img rounded-12 cover-img transition-2">
                                    </a>
                                    <div
                                        class="flex-align gap-8 bg-main-600 rounded-pill px-24 py-12 text-white position-absolute inset-block-start-0 inset-inline-start-0 mt-20 ms-20 z-1">
                                        <span class="text-2xl d-flex"><i class="ph ph-clock"></i></span>
                                        <span class="text-lg fw-medium">25h 06m</span>
                                    </div>
                                    <button type="button"
                                        class="wishlist-btn w-48 h-48 bg-white text-main-two-600 flex-center position-absolute inset-block-start-0 inset-inline-end-0 mt-20 me-20 z-1 text-2xl rounded-circle transition-2">
                                        <i class="ph ph-heart"></i>
                                    </button>
                                </div>
                                <div class="course-item__content">
                                    <div class="">
                                        <h4 class="mb-28">
                                            <a href="course-details.html" class="link text-line-2">Introduction to Python
                                                Programming</a>
                                        </h4>
                                        <div class="flex-between gap-8 flex-wrap mb-16">
                                            <div class="flex-align gap-8">
                                                <span class="text-neutral-700 text-2xl d-flex"><i
                                                        class="ph-bold ph-video-camera"></i></span>
                                                <span class="text-neutral-700 text-lg fw-medium">20 Lessons</span>
                                            </div>
                                            <div class="flex-align gap-8">
                                                <span class="text-neutral-700 text-2xl d-flex"><i
                                                        class="ph-bold ph-chart-bar"></i></span>
                                                <span class="text-neutral-700 text-lg fw-medium">Beginner</span>
                                            </div>
                                        </div>
                                        <div class="flex-between gap-8 flex-wrap">
                                            <div class="flex-align gap-4">
                                                <span class="text-2xl fw-medium text-warning-600 d-flex"><i
                                                        class="ph-fill ph-star"></i></span>
                                                <span class="text-lg text-neutral-700">
                                                    4.7
                                                    <span class="text-neutral-100">(6.4k)</span>
                                                </span>
                                            </div>
                                            <div class="flex-align gap-8">
                                                <span class="text-neutral-700 text-2xl d-flex">
                                                    <img src="{{ asset('') }}frontend/images/thumbs/user-img2.png"
                                                        alt="User Image"
                                                        class="w-32 h-32 object-fit-cover rounded-circle">
                                                </span>
                                                <span class="text-neutral-700 text-lg fw-medium">Wade</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="flex-between gap-8 pt-24 border-top border-neutral-50 mt-28 border-dashed border-0">
                                        <h4 class="mb-0 text-main-two-600">$499</h4>
                                        <a href="apply-admission.html"
                                            class="flex-align gap-8 text-main-600 hover-text-decoration-underline transition-1 fw-semibold"
                                            tabindex="0">
                                            Enroll Now
                                            <i class="ph ph-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 wow fadeInUp" data-aos="fade-up" data-aos-duration="600">
                            <div class="course-item bg-white rounded-16 p-12 h-100 box-shadow-md">
                                <div class="course-item__thumb rounded-12 overflow-hidden position-relative">
                                    <a href="course-details.html" class="w-100 h-100">
                                        <img src="{{ asset('') }}frontend/images/thumbs/course-img3.png"
                                            alt="Course Image" class="course-item__img rounded-12 cover-img transition-2">
                                    </a>
                                    <div
                                        class="flex-align gap-8 bg-main-600 rounded-pill px-24 py-12 text-white position-absolute inset-block-start-0 inset-inline-start-0 mt-20 ms-20 z-1">
                                        <span class="text-2xl d-flex"><i class="ph ph-clock"></i></span>
                                        <span class="text-lg fw-medium">9h 36m</span>
                                    </div>
                                    <button type="button"
                                        class="wishlist-btn w-48 h-48 bg-white text-main-two-600 flex-center position-absolute inset-block-start-0 inset-inline-end-0 mt-20 me-20 z-1 text-2xl rounded-circle transition-2">
                                        <i class="ph ph-heart"></i>
                                    </button>
                                </div>
                                <div class="course-item__content">
                                    <div class="">
                                        <h4 class="mb-28">
                                            <a href="course-details.html" class="link text-line-2">Introduction to
                                                Photography Masterclass</a>
                                        </h4>
                                        <div class="flex-between gap-8 flex-wrap mb-16">
                                            <div class="flex-align gap-8">
                                                <span class="text-neutral-700 text-2xl d-flex"><i
                                                        class="ph-bold ph-video-camera"></i></span>
                                                <span class="text-neutral-700 text-lg fw-medium">20 Lessons</span>
                                            </div>
                                            <div class="flex-align gap-8">
                                                <span class="text-neutral-700 text-2xl d-flex"><i
                                                        class="ph-bold ph-chart-bar"></i></span>
                                                <span class="text-neutral-700 text-lg fw-medium">Beginner</span>
                                            </div>
                                        </div>
                                        <div class="flex-between gap-8 flex-wrap">
                                            <div class="flex-align gap-4">
                                                <span class="text-2xl fw-medium text-warning-600 d-flex"><i
                                                        class="ph-fill ph-star"></i></span>
                                                <span class="text-lg text-neutral-700">
                                                    4.7
                                                    <span class="text-neutral-100">(6.4k)</span>
                                                </span>
                                            </div>
                                            <div class="flex-align gap-8">
                                                <span class="text-neutral-700 text-2xl d-flex">
                                                    <img src="{{ asset('') }}frontend/images/thumbs/user-img3.png"
                                                        alt="User Image"
                                                        class="w-32 h-32 object-fit-cover rounded-circle">
                                                </span>
                                                <span class="text-neutral-700 text-lg fw-medium">Cody</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="flex-between gap-8 pt-24 border-top border-neutral-50 mt-28 border-dashed border-0">
                                        <h4 class="mb-0 text-main-two-600">$457</h4>
                                        <a href="apply-admission.html"
                                            class="flex-align gap-8 text-main-600 hover-text-decoration-underline transition-1 fw-semibold"
                                            tabindex="0">
                                            Enroll Now
                                            <i class="ph ph-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 wow fadeInUp" data-aos="fade-up" data-aos-duration="200">
                            <div class="course-item bg-white rounded-16 p-12 h-100 box-shadow-md">
                                <div class="course-item__thumb rounded-12 overflow-hidden position-relative">
                                    <a href="course-details.html" class="w-100 h-100">
                                        <img src="{{ asset('') }}frontend/images/thumbs/course-img4.png"
                                            alt="Course Image" class="course-item__img rounded-12 cover-img transition-2">
                                    </a>
                                    <div
                                        class="flex-align gap-8 bg-main-600 rounded-pill px-24 py-12 text-white position-absolute inset-block-start-0 inset-inline-start-0 mt-20 ms-20 z-1">
                                        <span class="text-2xl d-flex"><i class="ph ph-clock"></i></span>
                                        <span class="text-lg fw-medium">9h 36m</span>
                                    </div>
                                    <button type="button"
                                        class="wishlist-btn w-48 h-48 bg-white text-main-two-600 flex-center position-absolute inset-block-start-0 inset-inline-end-0 mt-20 me-20 z-1 text-2xl rounded-circle transition-2">
                                        <i class="ph ph-heart"></i>
                                    </button>
                                </div>
                                <div class="course-item__content">
                                    <div class="">
                                        <h4 class="mb-28">
                                            <a href="course-details.html" class="link text-line-2">Spanish Language
                                                Mastery: Beginner to Fluent</a>
                                        </h4>
                                        <div class="flex-between gap-8 flex-wrap mb-16">
                                            <div class="flex-align gap-8">
                                                <span class="text-neutral-700 text-2xl d-flex"><i
                                                        class="ph-bold ph-video-camera"></i></span>
                                                <span class="text-neutral-700 text-lg fw-medium">20 Lessons</span>
                                            </div>
                                            <div class="flex-align gap-8">
                                                <span class="text-neutral-700 text-2xl d-flex"><i
                                                        class="ph-bold ph-chart-bar"></i></span>
                                                <span class="text-neutral-700 text-lg fw-medium">Beginner</span>
                                            </div>
                                        </div>
                                        <div class="flex-between gap-8 flex-wrap">
                                            <div class="flex-align gap-4">
                                                <span class="text-2xl fw-medium text-warning-600 d-flex"><i
                                                        class="ph-fill ph-star"></i></span>
                                                <span class="text-lg text-neutral-700">
                                                    4.7
                                                    <span class="text-neutral-100">(6.4k)</span>
                                                </span>
                                            </div>
                                            <div class="flex-align gap-8">
                                                <span class="text-neutral-700 text-2xl d-flex">
                                                    <img src="{{ asset('') }}frontend/images/thumbs/user-img4.png"
                                                        alt="User Image"
                                                        class="w-32 h-32 object-fit-cover rounded-circle">
                                                </span>
                                                <span class="text-neutral-700 text-lg fw-medium">Dustin</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="flex-between gap-8 pt-24 border-top border-neutral-50 mt-28 border-dashed border-0">
                                        <h4 class="mb-0 text-main-two-600">$148</h4>
                                        <a href="apply-admission.html"
                                            class="flex-align gap-8 text-main-600 hover-text-decoration-underline transition-1 fw-semibold"
                                            tabindex="0">
                                            Enroll Now
                                            <i class="ph ph-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 wow fadeInUp" data-aos="fade-up" data-aos-duration="400">
                            <div class="course-item bg-white rounded-16 p-12 h-100 box-shadow-md">
                                <div class="course-item__thumb rounded-12 overflow-hidden position-relative">
                                    <a href="course-details.html" class="w-100 h-100">
                                        <img src="{{ asset('') }}frontend/images/thumbs/course-img5.png"
                                            alt="Course Image" class="course-item__img rounded-12 cover-img transition-2">
                                    </a>
                                    <div
                                        class="flex-align gap-8 bg-main-600 rounded-pill px-24 py-12 text-white position-absolute inset-block-start-0 inset-inline-start-0 mt-20 ms-20 z-1">
                                        <span class="text-2xl d-flex"><i class="ph ph-clock"></i></span>
                                        <span class="text-lg fw-medium">9h 36m</span>
                                    </div>
                                    <button type="button"
                                        class="wishlist-btn w-48 h-48 bg-white text-main-two-600 flex-center position-absolute inset-block-start-0 inset-inline-end-0 mt-20 me-20 z-1 text-2xl rounded-circle transition-2">
                                        <i class="ph ph-heart"></i>
                                    </button>
                                </div>
                                <div class="course-item__content">
                                    <div class="">
                                        <h4 class="mb-28">
                                            <a href="course-details.html" class="link text-line-2">Financial Planning for
                                                Millennials</a>
                                        </h4>
                                        <div class="flex-between gap-8 flex-wrap mb-16">
                                            <div class="flex-align gap-8">
                                                <span class="text-neutral-700 text-2xl d-flex"><i
                                                        class="ph-bold ph-video-camera"></i></span>
                                                <span class="text-neutral-700 text-lg fw-medium">20 Lessons</span>
                                            </div>
                                            <div class="flex-align gap-8">
                                                <span class="text-neutral-700 text-2xl d-flex"><i
                                                        class="ph-bold ph-chart-bar"></i></span>
                                                <span class="text-neutral-700 text-lg fw-medium">Beginner</span>
                                            </div>
                                        </div>
                                        <div class="flex-between gap-8 flex-wrap">
                                            <div class="flex-align gap-4">
                                                <span class="text-2xl fw-medium text-warning-600 d-flex"><i
                                                        class="ph-fill ph-star"></i></span>
                                                <span class="text-lg text-neutral-700">
                                                    4.7
                                                    <span class="text-neutral-100">(6.4k)</span>
                                                </span>
                                            </div>
                                            <div class="flex-align gap-8">
                                                <span class="text-neutral-700 text-2xl d-flex">
                                                    <img src="{{ asset('') }}frontend/images/thumbs/user-img5.png"
                                                        alt="User Image"
                                                        class="w-32 h-32 object-fit-cover rounded-circle">
                                                </span>
                                                <span class="text-neutral-700 text-lg fw-medium">Bruce</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="flex-between gap-8 pt-24 border-top border-neutral-50 mt-28 border-dashed border-0">
                                        <h4 class="mb-0 text-main-two-600">$546</h4>
                                        <a href="apply-admission.html"
                                            class="flex-align gap-8 text-main-600 hover-text-decoration-underline transition-1 fw-semibold"
                                            tabindex="0">
                                            Enroll Now
                                            <i class="ph ph-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 wow fadeInUp" data-aos="fade-up" data-aos-duration="600">
                            <div class="course-item bg-white rounded-16 p-12 h-100 box-shadow-md">
                                <div class="course-item__thumb rounded-12 overflow-hidden position-relative">
                                    <a href="course-details.html" class="w-100 h-100">
                                        <img src="{{ asset('') }}frontend/images/thumbs/course-img6.png"
                                            alt="Course Image" class="course-item__img rounded-12 cover-img transition-2">
                                    </a>
                                    <div
                                        class="flex-align gap-8 bg-main-600 rounded-pill px-24 py-12 text-white position-absolute inset-block-start-0 inset-inline-start-0 mt-20 ms-20 z-1">
                                        <span class="text-2xl d-flex"><i class="ph ph-clock"></i></span>
                                        <span class="text-lg fw-medium">9h 36m</span>
                                    </div>
                                    <button type="button"
                                        class="wishlist-btn w-48 h-48 bg-white text-main-two-600 flex-center position-absolute inset-block-start-0 inset-inline-end-0 mt-20 me-20 z-1 text-2xl rounded-circle transition-2">
                                        <i class="ph ph-heart"></i>
                                    </button>
                                </div>
                                <div class="course-item__content">
                                    <div class="">
                                        <h4 class="mb-28">
                                            <a href="course-details.html" class="link text-line-2">Nutrition Essentials
                                                for Healthy Living</a>
                                        </h4>
                                        <div class="flex-between gap-8 flex-wrap mb-16">
                                            <div class="flex-align gap-8">
                                                <span class="text-neutral-700 text-2xl d-flex"><i
                                                        class="ph-bold ph-video-camera"></i></span>
                                                <span class="text-neutral-700 text-lg fw-medium">20 Lessons</span>
                                            </div>
                                            <div class="flex-align gap-8">
                                                <span class="text-neutral-700 text-2xl d-flex"><i
                                                        class="ph-bold ph-chart-bar"></i></span>
                                                <span class="text-neutral-700 text-lg fw-medium">Beginner</span>
                                            </div>
                                        </div>
                                        <div class="flex-between gap-8 flex-wrap">
                                            <div class="flex-align gap-4">
                                                <span class="text-2xl fw-medium text-warning-600 d-flex"><i
                                                        class="ph-fill ph-star"></i></span>
                                                <span class="text-lg text-neutral-700">
                                                    4.7
                                                    <span class="text-neutral-100">(6.4k)</span>
                                                </span>
                                            </div>
                                            <div class="flex-align gap-8">
                                                <span class="text-neutral-700 text-2xl d-flex">
                                                    <img src="{{ asset('') }}frontend/images/thumbs/user-img6.png"
                                                        alt="User Image"
                                                        class="w-32 h-32 object-fit-cover rounded-circle">
                                                </span>
                                                <span class="text-neutral-700 text-lg fw-medium">Robert</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="flex-between gap-8 pt-24 border-top border-neutral-50 mt-28 border-dashed border-0">
                                        <h4 class="mb-0 text-main-two-600">$345</h4>
                                        <a href="apply-admission.html"
                                            class="flex-align gap-8 text-main-600 hover-text-decoration-underline transition-1 fw-semibold"
                                            tabindex="0">
                                            Enroll Now
                                            <i class="ph ph-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-programming" role="tabpanel"
                    aria-labelledby="pills-programming-tab" tabindex="0">
                    <div class="row gy-4">
                        <div class="col-lg-4 col-sm-6 wow fadeInUp" data-aos="fade-up" data-aos-duration="200">
                            <div class="course-item bg-white rounded-16 p-12 h-100 box-shadow-md">
                                <div class="course-item__thumb rounded-12 overflow-hidden position-relative">
                                    <a href="course-details.html" class="w-100 h-100">
                                        <img src="{{ asset('') }}frontend/images/thumbs/course-img1.png"
                                            alt="Course Image" class="course-item__img rounded-12 cover-img transition-2">
                                    </a>
                                    <div
                                        class="flex-align gap-8 bg-main-600 rounded-pill px-24 py-12 text-white position-absolute inset-block-start-0 inset-inline-start-0 mt-20 ms-20 z-1">
                                        <span class="text-2xl d-flex"><i class="ph ph-clock"></i></span>
                                        <span class="text-lg fw-medium">9h 36m</span>
                                    </div>
                                    <button type="button"
                                        class="wishlist-btn w-48 h-48 bg-white text-main-two-600 flex-center position-absolute inset-block-start-0 inset-inline-end-0 mt-20 me-20 z-1 text-2xl rounded-circle transition-2">
                                        <i class="ph ph-heart"></i>
                                    </button>
                                </div>
                                <div class="course-item__content">
                                    <div class="">
                                        <h4 class="mb-28">
                                            <a href="course-details.html" class="link text-line-2">Introduction to Digital
                                                Marketing</a>
                                        </h4>
                                        <div class="flex-between gap-8 flex-wrap mb-16">
                                            <div class="flex-align gap-8">
                                                <span class="text-neutral-700 text-2xl d-flex"><i
                                                        class="ph-bold ph-video-camera"></i></span>
                                                <span class="text-neutral-700 text-lg fw-medium">20 Lessons</span>
                                            </div>
                                            <div class="flex-align gap-8">
                                                <span class="text-neutral-700 text-2xl d-flex"><i
                                                        class="ph-bold ph-chart-bar"></i></span>
                                                <span class="text-neutral-700 text-lg fw-medium">Beginner</span>
                                            </div>
                                        </div>
                                        <div class="flex-between gap-8 flex-wrap">
                                            <div class="flex-align gap-4">
                                                <span class="text-2xl fw-medium text-warning-600 d-flex"><i
                                                        class="ph-fill ph-star"></i></span>
                                                <span class="text-lg text-neutral-700">
                                                    4.7
                                                    <span class="text-neutral-100">(6.4k)</span>
                                                </span>
                                            </div>
                                            <div class="flex-align gap-8">
                                                <span class="text-neutral-700 text-2xl d-flex">
                                                    <img src="{{ asset('') }}frontend/images/thumbs/user-img1.png"
                                                        alt="User Image"
                                                        class="w-32 h-32 object-fit-cover rounded-circle">
                                                </span>
                                                <span class="text-neutral-700 text-lg fw-medium">AnikaZ</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="flex-between gap-8 pt-24 border-top border-neutral-50 mt-28 border-dashed border-0">
                                        <h4 class="mb-0 text-main-two-600">$148</h4>
                                        <a href="apply-admission.html"
                                            class="flex-align gap-8 text-main-600 hover-text-decoration-underline transition-1 fw-semibold"
                                            tabindex="0">
                                            Enroll Now
                                            <i class="ph ph-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 wow fadeInUp" data-aos="fade-up" data-aos-duration="400">
                            <div class="course-item bg-white rounded-16 p-12 h-100 box-shadow-md">
                                <div class="course-item__thumb rounded-12 overflow-hidden position-relative">
                                    <a href="course-details.html" class="w-100 h-100">
                                        <img src="{{ asset('') }}frontend/images/thumbs/course-img2.png"
                                            alt="Course Image" class="course-item__img rounded-12 cover-img transition-2">
                                    </a>
                                    <div
                                        class="flex-align gap-8 bg-main-600 rounded-pill px-24 py-12 text-white position-absolute inset-block-start-0 inset-inline-start-0 mt-20 ms-20 z-1">
                                        <span class="text-2xl d-flex"><i class="ph ph-clock"></i></span>
                                        <span class="text-lg fw-medium">25h 06m</span>
                                    </div>
                                    <button type="button"
                                        class="wishlist-btn w-48 h-48 bg-white text-main-two-600 flex-center position-absolute inset-block-start-0 inset-inline-end-0 mt-20 me-20 z-1 text-2xl rounded-circle transition-2">
                                        <i class="ph ph-heart"></i>
                                    </button>
                                </div>
                                <div class="course-item__content">
                                    <div class="">
                                        <h4 class="mb-28">
                                            <a href="course-details.html" class="link text-line-2">Introduction to Python
                                                Programming</a>
                                        </h4>
                                        <div class="flex-between gap-8 flex-wrap mb-16">
                                            <div class="flex-align gap-8">
                                                <span class="text-neutral-700 text-2xl d-flex"><i
                                                        class="ph-bold ph-video-camera"></i></span>
                                                <span class="text-neutral-700 text-lg fw-medium">20 Lessons</span>
                                            </div>
                                            <div class="flex-align gap-8">
                                                <span class="text-neutral-700 text-2xl d-flex"><i
                                                        class="ph-bold ph-chart-bar"></i></span>
                                                <span class="text-neutral-700 text-lg fw-medium">Beginner</span>
                                            </div>
                                        </div>
                                        <div class="flex-between gap-8 flex-wrap">
                                            <div class="flex-align gap-4">
                                                <span class="text-2xl fw-medium text-warning-600 d-flex"><i
                                                        class="ph-fill ph-star"></i></span>
                                                <span class="text-lg text-neutral-700">
                                                    4.7
                                                    <span class="text-neutral-100">(6.4k)</span>
                                                </span>
                                            </div>
                                            <div class="flex-align gap-8">
                                                <span class="text-neutral-700 text-2xl d-flex">
                                                    <img src="{{ asset('') }}frontend/images/thumbs/user-img2.png"
                                                        alt="User Image"
                                                        class="w-32 h-32 object-fit-cover rounded-circle">
                                                </span>
                                                <span class="text-neutral-700 text-lg fw-medium">Wade</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="flex-between gap-8 pt-24 border-top border-neutral-50 mt-28 border-dashed border-0">
                                        <h4 class="mb-0 text-main-two-600">$499</h4>
                                        <a href="apply-admission.html"
                                            class="flex-align gap-8 text-main-600 hover-text-decoration-underline transition-1 fw-semibold"
                                            tabindex="0">
                                            Enroll Now
                                            <i class="ph ph-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 wow fadeInUp" data-aos="fade-up" data-aos-duration="600">
                            <div class="course-item bg-white rounded-16 p-12 h-100 box-shadow-md">
                                <div class="course-item__thumb rounded-12 overflow-hidden position-relative">
                                    <a href="course-details.html" class="w-100 h-100">
                                        <img src="{{ asset('') }}frontend/images/thumbs/course-img3.png"
                                            alt="Course Image" class="course-item__img rounded-12 cover-img transition-2">
                                    </a>
                                    <div
                                        class="flex-align gap-8 bg-main-600 rounded-pill px-24 py-12 text-white position-absolute inset-block-start-0 inset-inline-start-0 mt-20 ms-20 z-1">
                                        <span class="text-2xl d-flex"><i class="ph ph-clock"></i></span>
                                        <span class="text-lg fw-medium">9h 36m</span>
                                    </div>
                                    <button type="button"
                                        class="wishlist-btn w-48 h-48 bg-white text-main-two-600 flex-center position-absolute inset-block-start-0 inset-inline-end-0 mt-20 me-20 z-1 text-2xl rounded-circle transition-2">
                                        <i class="ph ph-heart"></i>
                                    </button>
                                </div>
                                <div class="course-item__content">
                                    <div class="">
                                        <h4 class="mb-28">
                                            <a href="course-details.html" class="link text-line-2">Introduction to
                                                Photography Masterclass</a>
                                        </h4>
                                        <div class="flex-between gap-8 flex-wrap mb-16">
                                            <div class="flex-align gap-8">
                                                <span class="text-neutral-700 text-2xl d-flex"><i
                                                        class="ph-bold ph-video-camera"></i></span>
                                                <span class="text-neutral-700 text-lg fw-medium">20 Lessons</span>
                                            </div>
                                            <div class="flex-align gap-8">
                                                <span class="text-neutral-700 text-2xl d-flex"><i
                                                        class="ph-bold ph-chart-bar"></i></span>
                                                <span class="text-neutral-700 text-lg fw-medium">Beginner</span>
                                            </div>
                                        </div>
                                        <div class="flex-between gap-8 flex-wrap">
                                            <div class="flex-align gap-4">
                                                <span class="text-2xl fw-medium text-warning-600 d-flex"><i
                                                        class="ph-fill ph-star"></i></span>
                                                <span class="text-lg text-neutral-700">
                                                    4.7
                                                    <span class="text-neutral-100">(6.4k)</span>
                                                </span>
                                            </div>
                                            <div class="flex-align gap-8">
                                                <span class="text-neutral-700 text-2xl d-flex">
                                                    <img src="{{ asset('') }}frontend/images/thumbs/user-img3.png"
                                                        alt="User Image"
                                                        class="w-32 h-32 object-fit-cover rounded-circle">
                                                </span>
                                                <span class="text-neutral-700 text-lg fw-medium">Cody</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="flex-between gap-8 pt-24 border-top border-neutral-50 mt-28 border-dashed border-0">
                                        <h4 class="mb-0 text-main-two-600">$457</h4>
                                        <a href="apply-admission.html"
                                            class="flex-align gap-8 text-main-600 hover-text-decoration-underline transition-1 fw-semibold"
                                            tabindex="0">
                                            Enroll Now
                                            <i class="ph ph-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 wow fadeInUp" data-aos="fade-up" data-aos-duration="200">
                            <div class="course-item bg-white rounded-16 p-12 h-100 box-shadow-md">
                                <div class="course-item__thumb rounded-12 overflow-hidden position-relative">
                                    <a href="course-details.html" class="w-100 h-100">
                                        <img src="{{ asset('') }}frontend/images/thumbs/course-img4.png"
                                            alt="Course Image" class="course-item__img rounded-12 cover-img transition-2">
                                    </a>
                                    <div
                                        class="flex-align gap-8 bg-main-600 rounded-pill px-24 py-12 text-white position-absolute inset-block-start-0 inset-inline-start-0 mt-20 ms-20 z-1">
                                        <span class="text-2xl d-flex"><i class="ph ph-clock"></i></span>
                                        <span class="text-lg fw-medium">9h 36m</span>
                                    </div>
                                    <button type="button"
                                        class="wishlist-btn w-48 h-48 bg-white text-main-two-600 flex-center position-absolute inset-block-start-0 inset-inline-end-0 mt-20 me-20 z-1 text-2xl rounded-circle transition-2">
                                        <i class="ph ph-heart"></i>
                                    </button>
                                </div>
                                <div class="course-item__content">
                                    <div class="">
                                        <h4 class="mb-28">
                                            <a href="course-details.html" class="link text-line-2">Spanish Language
                                                Mastery: Beginner to Fluent</a>
                                        </h4>
                                        <div class="flex-between gap-8 flex-wrap mb-16">
                                            <div class="flex-align gap-8">
                                                <span class="text-neutral-700 text-2xl d-flex"><i
                                                        class="ph-bold ph-video-camera"></i></span>
                                                <span class="text-neutral-700 text-lg fw-medium">20 Lessons</span>
                                            </div>
                                            <div class="flex-align gap-8">
                                                <span class="text-neutral-700 text-2xl d-flex"><i
                                                        class="ph-bold ph-chart-bar"></i></span>
                                                <span class="text-neutral-700 text-lg fw-medium">Beginner</span>
                                            </div>
                                        </div>
                                        <div class="flex-between gap-8 flex-wrap">
                                            <div class="flex-align gap-4">
                                                <span class="text-2xl fw-medium text-warning-600 d-flex"><i
                                                        class="ph-fill ph-star"></i></span>
                                                <span class="text-lg text-neutral-700">
                                                    4.7
                                                    <span class="text-neutral-100">(6.4k)</span>
                                                </span>
                                            </div>
                                            <div class="flex-align gap-8">
                                                <span class="text-neutral-700 text-2xl d-flex">
                                                    <img src="{{ asset('') }}frontend/images/thumbs/user-img4.png"
                                                        alt="User Image"
                                                        class="w-32 h-32 object-fit-cover rounded-circle">
                                                </span>
                                                <span class="text-neutral-700 text-lg fw-medium">Dustin</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="flex-between gap-8 pt-24 border-top border-neutral-50 mt-28 border-dashed border-0">
                                        <h4 class="mb-0 text-main-two-600">$148</h4>
                                        <a href="apply-admission.html"
                                            class="flex-align gap-8 text-main-600 hover-text-decoration-underline transition-1 fw-semibold"
                                            tabindex="0">
                                            Enroll Now
                                            <i class="ph ph-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 wow fadeInUp" data-aos="fade-up" data-aos-duration="400">
                            <div class="course-item bg-white rounded-16 p-12 h-100 box-shadow-md">
                                <div class="course-item__thumb rounded-12 overflow-hidden position-relative">
                                    <a href="course-details.html" class="w-100 h-100">
                                        <img src="{{ asset('') }}frontend/images/thumbs/course-img5.png"
                                            alt="Course Image"
                                            class="course-item__img rounded-12 cover-img transition-2">
                                    </a>
                                    <div
                                        class="flex-align gap-8 bg-main-600 rounded-pill px-24 py-12 text-white position-absolute inset-block-start-0 inset-inline-start-0 mt-20 ms-20 z-1">
                                        <span class="text-2xl d-flex"><i class="ph ph-clock"></i></span>
                                        <span class="text-lg fw-medium">9h 36m</span>
                                    </div>
                                    <button type="button"
                                        class="wishlist-btn w-48 h-48 bg-white text-main-two-600 flex-center position-absolute inset-block-start-0 inset-inline-end-0 mt-20 me-20 z-1 text-2xl rounded-circle transition-2">
                                        <i class="ph ph-heart"></i>
                                    </button>
                                </div>
                                <div class="course-item__content">
                                    <div class="">
                                        <h4 class="mb-28">
                                            <a href="course-details.html" class="link text-line-2">Financial Planning
                                                for Millennials</a>
                                        </h4>
                                        <div class="flex-between gap-8 flex-wrap mb-16">
                                            <div class="flex-align gap-8">
                                                <span class="text-neutral-700 text-2xl d-flex"><i
                                                        class="ph-bold ph-video-camera"></i></span>
                                                <span class="text-neutral-700 text-lg fw-medium">20 Lessons</span>
                                            </div>
                                            <div class="flex-align gap-8">
                                                <span class="text-neutral-700 text-2xl d-flex"><i
                                                        class="ph-bold ph-chart-bar"></i></span>
                                                <span class="text-neutral-700 text-lg fw-medium">Beginner</span>
                                            </div>
                                        </div>
                                        <div class="flex-between gap-8 flex-wrap">
                                            <div class="flex-align gap-4">
                                                <span class="text-2xl fw-medium text-warning-600 d-flex"><i
                                                        class="ph-fill ph-star"></i></span>
                                                <span class="text-lg text-neutral-700">
                                                    4.7
                                                    <span class="text-neutral-100">(6.4k)</span>
                                                </span>
                                            </div>
                                            <div class="flex-align gap-8">
                                                <span class="text-neutral-700 text-2xl d-flex">
                                                    <img src="{{ asset('') }}frontend/images/thumbs/user-img5.png"
                                                        alt="User Image"
                                                        class="w-32 h-32 object-fit-cover rounded-circle">
                                                </span>
                                                <span class="text-neutral-700 text-lg fw-medium">Bruce</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="flex-between gap-8 pt-24 border-top border-neutral-50 mt-28 border-dashed border-0">
                                        <h4 class="mb-0 text-main-two-600">$546</h4>
                                        <a href="apply-admission.html"
                                            class="flex-align gap-8 text-main-600 hover-text-decoration-underline transition-1 fw-semibold"
                                            tabindex="0">
                                            Enroll Now
                                            <i class="ph ph-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 wow fadeInUp" data-aos="fade-up" data-aos-duration="600">
                            <div class="course-item bg-white rounded-16 p-12 h-100 box-shadow-md">
                                <div class="course-item__thumb rounded-12 overflow-hidden position-relative">
                                    <a href="course-details.html" class="w-100 h-100">
                                        <img src="{{ asset('') }}frontend/images/thumbs/course-img6.png"
                                            alt="Course Image"
                                            class="course-item__img rounded-12 cover-img transition-2">
                                    </a>
                                    <div
                                        class="flex-align gap-8 bg-main-600 rounded-pill px-24 py-12 text-white position-absolute inset-block-start-0 inset-inline-start-0 mt-20 ms-20 z-1">
                                        <span class="text-2xl d-flex"><i class="ph ph-clock"></i></span>
                                        <span class="text-lg fw-medium">9h 36m</span>
                                    </div>
                                    <button type="button"
                                        class="wishlist-btn w-48 h-48 bg-white text-main-two-600 flex-center position-absolute inset-block-start-0 inset-inline-end-0 mt-20 me-20 z-1 text-2xl rounded-circle transition-2">
                                        <i class="ph ph-heart"></i>
                                    </button>
                                </div>
                                <div class="course-item__content">
                                    <div class="">
                                        <h4 class="mb-28">
                                            <a href="course-details.html" class="link text-line-2">Nutrition Essentials
                                                for Healthy Living</a>
                                        </h4>
                                        <div class="flex-between gap-8 flex-wrap mb-16">
                                            <div class="flex-align gap-8">
                                                <span class="text-neutral-700 text-2xl d-flex"><i
                                                        class="ph-bold ph-video-camera"></i></span>
                                                <span class="text-neutral-700 text-lg fw-medium">20 Lessons</span>
                                            </div>
                                            <div class="flex-align gap-8">
                                                <span class="text-neutral-700 text-2xl d-flex"><i
                                                        class="ph-bold ph-chart-bar"></i></span>
                                                <span class="text-neutral-700 text-lg fw-medium">Beginner</span>
                                            </div>
                                        </div>
                                        <div class="flex-between gap-8 flex-wrap">
                                            <div class="flex-align gap-4">
                                                <span class="text-2xl fw-medium text-warning-600 d-flex"><i
                                                        class="ph-fill ph-star"></i></span>
                                                <span class="text-lg text-neutral-700">
                                                    4.7
                                                    <span class="text-neutral-100">(6.4k)</span>
                                                </span>
                                            </div>
                                            <div class="flex-align gap-8">
                                                <span class="text-neutral-700 text-2xl d-flex">
                                                    <img src="{{ asset('') }}frontend/images/thumbs/user-img6.png"
                                                        alt="User Image"
                                                        class="w-32 h-32 object-fit-cover rounded-circle">
                                                </span>
                                                <span class="text-neutral-700 text-lg fw-medium">Robert</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="flex-between gap-8 pt-24 border-top border-neutral-50 mt-28 border-dashed border-0">
                                        <h4 class="mb-0 text-main-two-600">$345</h4>
                                        <a href="apply-admission.html"
                                            class="flex-align gap-8 text-main-600 hover-text-decoration-underline transition-1 fw-semibold"
                                            tabindex="0">
                                            Enroll Now
                                            <i class="ph ph-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-webDesign" role="tabpanel"
                    aria-labelledby="pills-webDesign-tab" tabindex="0">
                    <div class="row gy-4">
                        <div class="col-lg-4 col-sm-6 wow fadeInUp" data-aos="fade-up" data-aos-duration="200">
                            <div class="course-item bg-white rounded-16 p-12 h-100 box-shadow-md">
                                <div class="course-item__thumb rounded-12 overflow-hidden position-relative">
                                    <a href="course-details.html" class="w-100 h-100">
                                        <img src="{{ asset('') }}frontend/images/thumbs/course-img1.png"
                                            alt="Course Image"
                                            class="course-item__img rounded-12 cover-img transition-2">
                                    </a>
                                    <div
                                        class="flex-align gap-8 bg-main-600 rounded-pill px-24 py-12 text-white position-absolute inset-block-start-0 inset-inline-start-0 mt-20 ms-20 z-1">
                                        <span class="text-2xl d-flex"><i class="ph ph-clock"></i></span>
                                        <span class="text-lg fw-medium">9h 36m</span>
                                    </div>
                                    <button type="button"
                                        class="wishlist-btn w-48 h-48 bg-white text-main-two-600 flex-center position-absolute inset-block-start-0 inset-inline-end-0 mt-20 me-20 z-1 text-2xl rounded-circle transition-2">
                                        <i class="ph ph-heart"></i>
                                    </button>
                                </div>
                                <div class="course-item__content">
                                    <div class="">
                                        <h4 class="mb-28">
                                            <a href="course-details.html" class="link text-line-2">Introduction to
                                                Digital Marketing</a>
                                        </h4>
                                        <div class="flex-between gap-8 flex-wrap mb-16">
                                            <div class="flex-align gap-8">
                                                <span class="text-neutral-700 text-2xl d-flex"><i
                                                        class="ph-bold ph-video-camera"></i></span>
                                                <span class="text-neutral-700 text-lg fw-medium">20 Lessons</span>
                                            </div>
                                            <div class="flex-align gap-8">
                                                <span class="text-neutral-700 text-2xl d-flex"><i
                                                        class="ph-bold ph-chart-bar"></i></span>
                                                <span class="text-neutral-700 text-lg fw-medium">Beginner</span>
                                            </div>
                                        </div>
                                        <div class="flex-between gap-8 flex-wrap">
                                            <div class="flex-align gap-4">
                                                <span class="text-2xl fw-medium text-warning-600 d-flex"><i
                                                        class="ph-fill ph-star"></i></span>
                                                <span class="text-lg text-neutral-700">
                                                    4.7
                                                    <span class="text-neutral-100">(6.4k)</span>
                                                </span>
                                            </div>
                                            <div class="flex-align gap-8">
                                                <span class="text-neutral-700 text-2xl d-flex">
                                                    <img src="{{ asset('') }}frontend/images/thumbs/user-img1.png"
                                                        alt="User Image"
                                                        class="w-32 h-32 object-fit-cover rounded-circle">
                                                </span>
                                                <span class="text-neutral-700 text-lg fw-medium">AnikaZ</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="flex-between gap-8 pt-24 border-top border-neutral-50 mt-28 border-dashed border-0">
                                        <h4 class="mb-0 text-main-two-600">$148</h4>
                                        <a href="apply-admission.html"
                                            class="flex-align gap-8 text-main-600 hover-text-decoration-underline transition-1 fw-semibold"
                                            tabindex="0">
                                            Enroll Now
                                            <i class="ph ph-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 wow fadeInUp" data-aos="fade-up" data-aos-duration="400">
                            <div class="course-item bg-white rounded-16 p-12 h-100 box-shadow-md">
                                <div class="course-item__thumb rounded-12 overflow-hidden position-relative">
                                    <a href="course-details.html" class="w-100 h-100">
                                        <img src="{{ asset('') }}frontend/images/thumbs/course-img2.png"
                                            alt="Course Image"
                                            class="course-item__img rounded-12 cover-img transition-2">
                                    </a>
                                    <div
                                        class="flex-align gap-8 bg-main-600 rounded-pill px-24 py-12 text-white position-absolute inset-block-start-0 inset-inline-start-0 mt-20 ms-20 z-1">
                                        <span class="text-2xl d-flex"><i class="ph ph-clock"></i></span>
                                        <span class="text-lg fw-medium">25h 06m</span>
                                    </div>
                                    <button type="button"
                                        class="wishlist-btn w-48 h-48 bg-white text-main-two-600 flex-center position-absolute inset-block-start-0 inset-inline-end-0 mt-20 me-20 z-1 text-2xl rounded-circle transition-2">
                                        <i class="ph ph-heart"></i>
                                    </button>
                                </div>
                                <div class="course-item__content">
                                    <div class="">
                                        <h4 class="mb-28">
                                            <a href="course-details.html" class="link text-line-2">Introduction to
                                                Python Programming</a>
                                        </h4>
                                        <div class="flex-between gap-8 flex-wrap mb-16">
                                            <div class="flex-align gap-8">
                                                <span class="text-neutral-700 text-2xl d-flex"><i
                                                        class="ph-bold ph-video-camera"></i></span>
                                                <span class="text-neutral-700 text-lg fw-medium">20 Lessons</span>
                                            </div>
                                            <div class="flex-align gap-8">
                                                <span class="text-neutral-700 text-2xl d-flex"><i
                                                        class="ph-bold ph-chart-bar"></i></span>
                                                <span class="text-neutral-700 text-lg fw-medium">Beginner</span>
                                            </div>
                                        </div>
                                        <div class="flex-between gap-8 flex-wrap">
                                            <div class="flex-align gap-4">
                                                <span class="text-2xl fw-medium text-warning-600 d-flex"><i
                                                        class="ph-fill ph-star"></i></span>
                                                <span class="text-lg text-neutral-700">
                                                    4.7
                                                    <span class="text-neutral-100">(6.4k)</span>
                                                </span>
                                            </div>
                                            <div class="flex-align gap-8">
                                                <span class="text-neutral-700 text-2xl d-flex">
                                                    <img src="{{ asset('') }}frontend/images/thumbs/user-img2.png"
                                                        alt="User Image"
                                                        class="w-32 h-32 object-fit-cover rounded-circle">
                                                </span>
                                                <span class="text-neutral-700 text-lg fw-medium">Wade</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="flex-between gap-8 pt-24 border-top border-neutral-50 mt-28 border-dashed border-0">
                                        <h4 class="mb-0 text-main-two-600">$499</h4>
                                        <a href="apply-admission.html"
                                            class="flex-align gap-8 text-main-600 hover-text-decoration-underline transition-1 fw-semibold"
                                            tabindex="0">
                                            Enroll Now
                                            <i class="ph ph-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 wow fadeInUp" data-aos="fade-up" data-aos-duration="600">
                            <div class="course-item bg-white rounded-16 p-12 h-100 box-shadow-md">
                                <div class="course-item__thumb rounded-12 overflow-hidden position-relative">
                                    <a href="course-details.html" class="w-100 h-100">
                                        <img src="{{ asset('') }}frontend/images/thumbs/course-img3.png"
                                            alt="Course Image"
                                            class="course-item__img rounded-12 cover-img transition-2">
                                    </a>
                                    <div
                                        class="flex-align gap-8 bg-main-600 rounded-pill px-24 py-12 text-white position-absolute inset-block-start-0 inset-inline-start-0 mt-20 ms-20 z-1">
                                        <span class="text-2xl d-flex"><i class="ph ph-clock"></i></span>
                                        <span class="text-lg fw-medium">9h 36m</span>
                                    </div>
                                    <button type="button"
                                        class="wishlist-btn w-48 h-48 bg-white text-main-two-600 flex-center position-absolute inset-block-start-0 inset-inline-end-0 mt-20 me-20 z-1 text-2xl rounded-circle transition-2">
                                        <i class="ph ph-heart"></i>
                                    </button>
                                </div>
                                <div class="course-item__content">
                                    <div class="">
                                        <h4 class="mb-28">
                                            <a href="course-details.html" class="link text-line-2">Introduction to
                                                Photography Masterclass</a>
                                        </h4>
                                        <div class="flex-between gap-8 flex-wrap mb-16">
                                            <div class="flex-align gap-8">
                                                <span class="text-neutral-700 text-2xl d-flex"><i
                                                        class="ph-bold ph-video-camera"></i></span>
                                                <span class="text-neutral-700 text-lg fw-medium">20 Lessons</span>
                                            </div>
                                            <div class="flex-align gap-8">
                                                <span class="text-neutral-700 text-2xl d-flex"><i
                                                        class="ph-bold ph-chart-bar"></i></span>
                                                <span class="text-neutral-700 text-lg fw-medium">Beginner</span>
                                            </div>
                                        </div>
                                        <div class="flex-between gap-8 flex-wrap">
                                            <div class="flex-align gap-4">
                                                <span class="text-2xl fw-medium text-warning-600 d-flex"><i
                                                        class="ph-fill ph-star"></i></span>
                                                <span class="text-lg text-neutral-700">
                                                    4.7
                                                    <span class="text-neutral-100">(6.4k)</span>
                                                </span>
                                            </div>
                                            <div class="flex-align gap-8">
                                                <span class="text-neutral-700 text-2xl d-flex">
                                                    <img src="{{ asset('') }}frontend/images/thumbs/user-img3.png"
                                                        alt="User Image"
                                                        class="w-32 h-32 object-fit-cover rounded-circle">
                                                </span>
                                                <span class="text-neutral-700 text-lg fw-medium">Cody</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="flex-between gap-8 pt-24 border-top border-neutral-50 mt-28 border-dashed border-0">
                                        <h4 class="mb-0 text-main-two-600">$457</h4>
                                        <a href="apply-admission.html"
                                            class="flex-align gap-8 text-main-600 hover-text-decoration-underline transition-1 fw-semibold"
                                            tabindex="0">
                                            Enroll Now
                                            <i class="ph ph-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 wow fadeInUp" data-aos="fade-up" data-aos-duration="200">
                            <div class="course-item bg-white rounded-16 p-12 h-100 box-shadow-md">
                                <div class="course-item__thumb rounded-12 overflow-hidden position-relative">
                                    <a href="course-details.html" class="w-100 h-100">
                                        <img src="{{ asset('') }}frontend/images/thumbs/course-img4.png"
                                            alt="Course Image"
                                            class="course-item__img rounded-12 cover-img transition-2">
                                    </a>
                                    <div
                                        class="flex-align gap-8 bg-main-600 rounded-pill px-24 py-12 text-white position-absolute inset-block-start-0 inset-inline-start-0 mt-20 ms-20 z-1">
                                        <span class="text-2xl d-flex"><i class="ph ph-clock"></i></span>
                                        <span class="text-lg fw-medium">9h 36m</span>
                                    </div>
                                    <button type="button"
                                        class="wishlist-btn w-48 h-48 bg-white text-main-two-600 flex-center position-absolute inset-block-start-0 inset-inline-end-0 mt-20 me-20 z-1 text-2xl rounded-circle transition-2">
                                        <i class="ph ph-heart"></i>
                                    </button>
                                </div>
                                <div class="course-item__content">
                                    <div class="">
                                        <h4 class="mb-28">
                                            <a href="course-details.html" class="link text-line-2">Spanish Language
                                                Mastery: Beginner to Fluent</a>
                                        </h4>
                                        <div class="flex-between gap-8 flex-wrap mb-16">
                                            <div class="flex-align gap-8">
                                                <span class="text-neutral-700 text-2xl d-flex"><i
                                                        class="ph-bold ph-video-camera"></i></span>
                                                <span class="text-neutral-700 text-lg fw-medium">20 Lessons</span>
                                            </div>
                                            <div class="flex-align gap-8">
                                                <span class="text-neutral-700 text-2xl d-flex"><i
                                                        class="ph-bold ph-chart-bar"></i></span>
                                                <span class="text-neutral-700 text-lg fw-medium">Beginner</span>
                                            </div>
                                        </div>
                                        <div class="flex-between gap-8 flex-wrap">
                                            <div class="flex-align gap-4">
                                                <span class="text-2xl fw-medium text-warning-600 d-flex"><i
                                                        class="ph-fill ph-star"></i></span>
                                                <span class="text-lg text-neutral-700">
                                                    4.7
                                                    <span class="text-neutral-100">(6.4k)</span>
                                                </span>
                                            </div>
                                            <div class="flex-align gap-8">
                                                <span class="text-neutral-700 text-2xl d-flex">
                                                    <img src="{{ asset('') }}frontend/images/thumbs/user-img4.png"
                                                        alt="User Image"
                                                        class="w-32 h-32 object-fit-cover rounded-circle">
                                                </span>
                                                <span class="text-neutral-700 text-lg fw-medium">Dustin</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="flex-between gap-8 pt-24 border-top border-neutral-50 mt-28 border-dashed border-0">
                                        <h4 class="mb-0 text-main-two-600">$148</h4>
                                        <a href="apply-admission.html"
                                            class="flex-align gap-8 text-main-600 hover-text-decoration-underline transition-1 fw-semibold"
                                            tabindex="0">
                                            Enroll Now
                                            <i class="ph ph-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 wow fadeInUp" data-aos="fade-up" data-aos-duration="400">
                            <div class="course-item bg-white rounded-16 p-12 h-100 box-shadow-md">
                                <div class="course-item__thumb rounded-12 overflow-hidden position-relative">
                                    <a href="course-details.html" class="w-100 h-100">
                                        <img src="{{ asset('') }}frontend/images/thumbs/course-img5.png"
                                            alt="Course Image"
                                            class="course-item__img rounded-12 cover-img transition-2">
                                    </a>
                                    <div
                                        class="flex-align gap-8 bg-main-600 rounded-pill px-24 py-12 text-white position-absolute inset-block-start-0 inset-inline-start-0 mt-20 ms-20 z-1">
                                        <span class="text-2xl d-flex"><i class="ph ph-clock"></i></span>
                                        <span class="text-lg fw-medium">9h 36m</span>
                                    </div>
                                    <button type="button"
                                        class="wishlist-btn w-48 h-48 bg-white text-main-two-600 flex-center position-absolute inset-block-start-0 inset-inline-end-0 mt-20 me-20 z-1 text-2xl rounded-circle transition-2">
                                        <i class="ph ph-heart"></i>
                                    </button>
                                </div>
                                <div class="course-item__content">
                                    <div class="">
                                        <h4 class="mb-28">
                                            <a href="course-details.html" class="link text-line-2">Financial Planning
                                                for Millennials</a>
                                        </h4>
                                        <div class="flex-between gap-8 flex-wrap mb-16">
                                            <div class="flex-align gap-8">
                                                <span class="text-neutral-700 text-2xl d-flex"><i
                                                        class="ph-bold ph-video-camera"></i></span>
                                                <span class="text-neutral-700 text-lg fw-medium">20 Lessons</span>
                                            </div>
                                            <div class="flex-align gap-8">
                                                <span class="text-neutral-700 text-2xl d-flex"><i
                                                        class="ph-bold ph-chart-bar"></i></span>
                                                <span class="text-neutral-700 text-lg fw-medium">Beginner</span>
                                            </div>
                                        </div>
                                        <div class="flex-between gap-8 flex-wrap">
                                            <div class="flex-align gap-4">
                                                <span class="text-2xl fw-medium text-warning-600 d-flex"><i
                                                        class="ph-fill ph-star"></i></span>
                                                <span class="text-lg text-neutral-700">
                                                    4.7
                                                    <span class="text-neutral-100">(6.4k)</span>
                                                </span>
                                            </div>
                                            <div class="flex-align gap-8">
                                                <span class="text-neutral-700 text-2xl d-flex">
                                                    <img src="{{ asset('') }}frontend/images/thumbs/user-img5.png"
                                                        alt="User Image"
                                                        class="w-32 h-32 object-fit-cover rounded-circle">
                                                </span>
                                                <span class="text-neutral-700 text-lg fw-medium">Bruce</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="flex-between gap-8 pt-24 border-top border-neutral-50 mt-28 border-dashed border-0">
                                        <h4 class="mb-0 text-main-two-600">$546</h4>
                                        <a href="apply-admission.html"
                                            class="flex-align gap-8 text-main-600 hover-text-decoration-underline transition-1 fw-semibold"
                                            tabindex="0">
                                            Enroll Now
                                            <i class="ph ph-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 wow fadeInUp" data-aos="fade-up" data-aos-duration="600">
                            <div class="course-item bg-white rounded-16 p-12 h-100 box-shadow-md">
                                <div class="course-item__thumb rounded-12 overflow-hidden position-relative">
                                    <a href="course-details.html" class="w-100 h-100">
                                        <img src="{{ asset('') }}frontend/images/thumbs/course-img6.png"
                                            alt="Course Image"
                                            class="course-item__img rounded-12 cover-img transition-2">
                                    </a>
                                    <div
                                        class="flex-align gap-8 bg-main-600 rounded-pill px-24 py-12 text-white position-absolute inset-block-start-0 inset-inline-start-0 mt-20 ms-20 z-1">
                                        <span class="text-2xl d-flex"><i class="ph ph-clock"></i></span>
                                        <span class="text-lg fw-medium">9h 36m</span>
                                    </div>
                                    <button type="button"
                                        class="wishlist-btn w-48 h-48 bg-white text-main-two-600 flex-center position-absolute inset-block-start-0 inset-inline-end-0 mt-20 me-20 z-1 text-2xl rounded-circle transition-2">
                                        <i class="ph ph-heart"></i>
                                    </button>
                                </div>
                                <div class="course-item__content">
                                    <div class="">
                                        <h4 class="mb-28">
                                            <a href="course-details.html" class="link text-line-2">Nutrition Essentials
                                                for Healthy Living</a>
                                        </h4>
                                        <div class="flex-between gap-8 flex-wrap mb-16">
                                            <div class="flex-align gap-8">
                                                <span class="text-neutral-700 text-2xl d-flex"><i
                                                        class="ph-bold ph-video-camera"></i></span>
                                                <span class="text-neutral-700 text-lg fw-medium">20 Lessons</span>
                                            </div>
                                            <div class="flex-align gap-8">
                                                <span class="text-neutral-700 text-2xl d-flex"><i
                                                        class="ph-bold ph-chart-bar"></i></span>
                                                <span class="text-neutral-700 text-lg fw-medium">Beginner</span>
                                            </div>
                                        </div>
                                        <div class="flex-between gap-8 flex-wrap">
                                            <div class="flex-align gap-4">
                                                <span class="text-2xl fw-medium text-warning-600 d-flex"><i
                                                        class="ph-fill ph-star"></i></span>
                                                <span class="text-lg text-neutral-700">
                                                    4.7
                                                    <span class="text-neutral-100">(6.4k)</span>
                                                </span>
                                            </div>
                                            <div class="flex-align gap-8">
                                                <span class="text-neutral-700 text-2xl d-flex">
                                                    <img src="{{ asset('') }}frontend/images/thumbs/user-img6.png"
                                                        alt="User Image"
                                                        class="w-32 h-32 object-fit-cover rounded-circle">
                                                </span>
                                                <span class="text-neutral-700 text-lg fw-medium">Robert</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="flex-between gap-8 pt-24 border-top border-neutral-50 mt-28 border-dashed border-0">
                                        <h4 class="mb-0 text-main-two-600">$345</h4>
                                        <a href="apply-admission.html"
                                            class="flex-align gap-8 text-main-600 hover-text-decoration-underline transition-1 fw-semibold"
                                            tabindex="0">
                                            Enroll Now
                                            <i class="ph ph-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-Academic" role="tabpanel" aria-labelledby="pills-Academic-tab"
                    tabindex="0">
                    <div class="row gy-4">
                        <div class="col-lg-4 col-sm-6 wow fadeInUp" data-aos="fade-up" data-aos-duration="200">
                            <div class="course-item bg-white rounded-16 p-12 h-100 box-shadow-md">
                                <div class="course-item__thumb rounded-12 overflow-hidden position-relative">
                                    <a href="course-details.html" class="w-100 h-100">
                                        <img src="{{ asset('') }}frontend/images/thumbs/course-img1.png"
                                            alt="Course Image"
                                            class="course-item__img rounded-12 cover-img transition-2">
                                    </a>
                                    <div
                                        class="flex-align gap-8 bg-main-600 rounded-pill px-24 py-12 text-white position-absolute inset-block-start-0 inset-inline-start-0 mt-20 ms-20 z-1">
                                        <span class="text-2xl d-flex"><i class="ph ph-clock"></i></span>
                                        <span class="text-lg fw-medium">9h 36m</span>
                                    </div>
                                    <button type="button"
                                        class="wishlist-btn w-48 h-48 bg-white text-main-two-600 flex-center position-absolute inset-block-start-0 inset-inline-end-0 mt-20 me-20 z-1 text-2xl rounded-circle transition-2">
                                        <i class="ph ph-heart"></i>
                                    </button>
                                </div>
                                <div class="course-item__content">
                                    <div class="">
                                        <h4 class="mb-28">
                                            <a href="course-details.html" class="link text-line-2">Introduction to
                                                Digital Marketing</a>
                                        </h4>
                                        <div class="flex-between gap-8 flex-wrap mb-16">
                                            <div class="flex-align gap-8">
                                                <span class="text-neutral-700 text-2xl d-flex"><i
                                                        class="ph-bold ph-video-camera"></i></span>
                                                <span class="text-neutral-700 text-lg fw-medium">20 Lessons</span>
                                            </div>
                                            <div class="flex-align gap-8">
                                                <span class="text-neutral-700 text-2xl d-flex"><i
                                                        class="ph-bold ph-chart-bar"></i></span>
                                                <span class="text-neutral-700 text-lg fw-medium">Beginner</span>
                                            </div>
                                        </div>
                                        <div class="flex-between gap-8 flex-wrap">
                                            <div class="flex-align gap-4">
                                                <span class="text-2xl fw-medium text-warning-600 d-flex"><i
                                                        class="ph-fill ph-star"></i></span>
                                                <span class="text-lg text-neutral-700">
                                                    4.7
                                                    <span class="text-neutral-100">(6.4k)</span>
                                                </span>
                                            </div>
                                            <div class="flex-align gap-8">
                                                <span class="text-neutral-700 text-2xl d-flex">
                                                    <img src="{{ asset('') }}frontend/images/thumbs/user-img1.png"
                                                        alt="User Image"
                                                        class="w-32 h-32 object-fit-cover rounded-circle">
                                                </span>
                                                <span class="text-neutral-700 text-lg fw-medium">AnikaZ</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="flex-between gap-8 pt-24 border-top border-neutral-50 mt-28 border-dashed border-0">
                                        <h4 class="mb-0 text-main-two-600">$148</h4>
                                        <a href="apply-admission.html"
                                            class="flex-align gap-8 text-main-600 hover-text-decoration-underline transition-1 fw-semibold"
                                            tabindex="0">
                                            Enroll Now
                                            <i class="ph ph-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 wow fadeInUp" data-aos="fade-up" data-aos-duration="400">
                            <div class="course-item bg-white rounded-16 p-12 h-100 box-shadow-md">
                                <div class="course-item__thumb rounded-12 overflow-hidden position-relative">
                                    <a href="course-details.html" class="w-100 h-100">
                                        <img src="{{ asset('') }}frontend/images/thumbs/course-img2.png"
                                            alt="Course Image"
                                            class="course-item__img rounded-12 cover-img transition-2">
                                    </a>
                                    <div
                                        class="flex-align gap-8 bg-main-600 rounded-pill px-24 py-12 text-white position-absolute inset-block-start-0 inset-inline-start-0 mt-20 ms-20 z-1">
                                        <span class="text-2xl d-flex"><i class="ph ph-clock"></i></span>
                                        <span class="text-lg fw-medium">25h 06m</span>
                                    </div>
                                    <button type="button"
                                        class="wishlist-btn w-48 h-48 bg-white text-main-two-600 flex-center position-absolute inset-block-start-0 inset-inline-end-0 mt-20 me-20 z-1 text-2xl rounded-circle transition-2">
                                        <i class="ph ph-heart"></i>
                                    </button>
                                </div>
                                <div class="course-item__content">
                                    <div class="">
                                        <h4 class="mb-28">
                                            <a href="course-details.html" class="link text-line-2">Introduction to
                                                Python Programming</a>
                                        </h4>
                                        <div class="flex-between gap-8 flex-wrap mb-16">
                                            <div class="flex-align gap-8">
                                                <span class="text-neutral-700 text-2xl d-flex"><i
                                                        class="ph-bold ph-video-camera"></i></span>
                                                <span class="text-neutral-700 text-lg fw-medium">20 Lessons</span>
                                            </div>
                                            <div class="flex-align gap-8">
                                                <span class="text-neutral-700 text-2xl d-flex"><i
                                                        class="ph-bold ph-chart-bar"></i></span>
                                                <span class="text-neutral-700 text-lg fw-medium">Beginner</span>
                                            </div>
                                        </div>
                                        <div class="flex-between gap-8 flex-wrap">
                                            <div class="flex-align gap-4">
                                                <span class="text-2xl fw-medium text-warning-600 d-flex"><i
                                                        class="ph-fill ph-star"></i></span>
                                                <span class="text-lg text-neutral-700">
                                                    4.7
                                                    <span class="text-neutral-100">(6.4k)</span>
                                                </span>
                                            </div>
                                            <div class="flex-align gap-8">
                                                <span class="text-neutral-700 text-2xl d-flex">
                                                    <img src="{{ asset('') }}frontend/images/thumbs/user-img2.png"
                                                        alt="User Image"
                                                        class="w-32 h-32 object-fit-cover rounded-circle">
                                                </span>
                                                <span class="text-neutral-700 text-lg fw-medium">Wade</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="flex-between gap-8 pt-24 border-top border-neutral-50 mt-28 border-dashed border-0">
                                        <h4 class="mb-0 text-main-two-600">$499</h4>
                                        <a href="apply-admission.html"
                                            class="flex-align gap-8 text-main-600 hover-text-decoration-underline transition-1 fw-semibold"
                                            tabindex="0">
                                            Enroll Now
                                            <i class="ph ph-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 wow fadeInUp" data-aos="fade-up" data-aos-duration="600">
                            <div class="course-item bg-white rounded-16 p-12 h-100 box-shadow-md">
                                <div class="course-item__thumb rounded-12 overflow-hidden position-relative">
                                    <a href="course-details.html" class="w-100 h-100">
                                        <img src="{{ asset('') }}frontend/images/thumbs/course-img3.png"
                                            alt="Course Image"
                                            class="course-item__img rounded-12 cover-img transition-2">
                                    </a>
                                    <div
                                        class="flex-align gap-8 bg-main-600 rounded-pill px-24 py-12 text-white position-absolute inset-block-start-0 inset-inline-start-0 mt-20 ms-20 z-1">
                                        <span class="text-2xl d-flex"><i class="ph ph-clock"></i></span>
                                        <span class="text-lg fw-medium">9h 36m</span>
                                    </div>
                                    <button type="button"
                                        class="wishlist-btn w-48 h-48 bg-white text-main-two-600 flex-center position-absolute inset-block-start-0 inset-inline-end-0 mt-20 me-20 z-1 text-2xl rounded-circle transition-2">
                                        <i class="ph ph-heart"></i>
                                    </button>
                                </div>
                                <div class="course-item__content">
                                    <div class="">
                                        <h4 class="mb-28">
                                            <a href="course-details.html" class="link text-line-2">Introduction to
                                                Photography Masterclass</a>
                                        </h4>
                                        <div class="flex-between gap-8 flex-wrap mb-16">
                                            <div class="flex-align gap-8">
                                                <span class="text-neutral-700 text-2xl d-flex"><i
                                                        class="ph-bold ph-video-camera"></i></span>
                                                <span class="text-neutral-700 text-lg fw-medium">20 Lessons</span>
                                            </div>
                                            <div class="flex-align gap-8">
                                                <span class="text-neutral-700 text-2xl d-flex"><i
                                                        class="ph-bold ph-chart-bar"></i></span>
                                                <span class="text-neutral-700 text-lg fw-medium">Beginner</span>
                                            </div>
                                        </div>
                                        <div class="flex-between gap-8 flex-wrap">
                                            <div class="flex-align gap-4">
                                                <span class="text-2xl fw-medium text-warning-600 d-flex"><i
                                                        class="ph-fill ph-star"></i></span>
                                                <span class="text-lg text-neutral-700">
                                                    4.7
                                                    <span class="text-neutral-100">(6.4k)</span>
                                                </span>
                                            </div>
                                            <div class="flex-align gap-8">
                                                <span class="text-neutral-700 text-2xl d-flex">
                                                    <img src="{{ asset('') }}frontend/images/thumbs/user-img3.png"
                                                        alt="User Image"
                                                        class="w-32 h-32 object-fit-cover rounded-circle">
                                                </span>
                                                <span class="text-neutral-700 text-lg fw-medium">Cody</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="flex-between gap-8 pt-24 border-top border-neutral-50 mt-28 border-dashed border-0">
                                        <h4 class="mb-0 text-main-two-600">$457</h4>
                                        <a href="apply-admission.html"
                                            class="flex-align gap-8 text-main-600 hover-text-decoration-underline transition-1 fw-semibold"
                                            tabindex="0">
                                            Enroll Now
                                            <i class="ph ph-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 wow fadeInUp" data-aos="fade-up" data-aos-duration="200">
                            <div class="course-item bg-white rounded-16 p-12 h-100 box-shadow-md">
                                <div class="course-item__thumb rounded-12 overflow-hidden position-relative">
                                    <a href="course-details.html" class="w-100 h-100">
                                        <img src="{{ asset('') }}frontend/images/thumbs/course-img4.png"
                                            alt="Course Image"
                                            class="course-item__img rounded-12 cover-img transition-2">
                                    </a>
                                    <div
                                        class="flex-align gap-8 bg-main-600 rounded-pill px-24 py-12 text-white position-absolute inset-block-start-0 inset-inline-start-0 mt-20 ms-20 z-1">
                                        <span class="text-2xl d-flex"><i class="ph ph-clock"></i></span>
                                        <span class="text-lg fw-medium">9h 36m</span>
                                    </div>
                                    <button type="button"
                                        class="wishlist-btn w-48 h-48 bg-white text-main-two-600 flex-center position-absolute inset-block-start-0 inset-inline-end-0 mt-20 me-20 z-1 text-2xl rounded-circle transition-2">
                                        <i class="ph ph-heart"></i>
                                    </button>
                                </div>
                                <div class="course-item__content">
                                    <div class="">
                                        <h4 class="mb-28">
                                            <a href="course-details.html" class="link text-line-2">Spanish Language
                                                Mastery: Beginner to Fluent</a>
                                        </h4>
                                        <div class="flex-between gap-8 flex-wrap mb-16">
                                            <div class="flex-align gap-8">
                                                <span class="text-neutral-700 text-2xl d-flex"><i
                                                        class="ph-bold ph-video-camera"></i></span>
                                                <span class="text-neutral-700 text-lg fw-medium">20 Lessons</span>
                                            </div>
                                            <div class="flex-align gap-8">
                                                <span class="text-neutral-700 text-2xl d-flex"><i
                                                        class="ph-bold ph-chart-bar"></i></span>
                                                <span class="text-neutral-700 text-lg fw-medium">Beginner</span>
                                            </div>
                                        </div>
                                        <div class="flex-between gap-8 flex-wrap">
                                            <div class="flex-align gap-4">
                                                <span class="text-2xl fw-medium text-warning-600 d-flex"><i
                                                        class="ph-fill ph-star"></i></span>
                                                <span class="text-lg text-neutral-700">
                                                    4.7
                                                    <span class="text-neutral-100">(6.4k)</span>
                                                </span>
                                            </div>
                                            <div class="flex-align gap-8">
                                                <span class="text-neutral-700 text-2xl d-flex">
                                                    <img src="{{ asset('') }}frontend/images/thumbs/user-img4.png"
                                                        alt="User Image"
                                                        class="w-32 h-32 object-fit-cover rounded-circle">
                                                </span>
                                                <span class="text-neutral-700 text-lg fw-medium">Dustin</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="flex-between gap-8 pt-24 border-top border-neutral-50 mt-28 border-dashed border-0">
                                        <h4 class="mb-0 text-main-two-600">$148</h4>
                                        <a href="apply-admission.html"
                                            class="flex-align gap-8 text-main-600 hover-text-decoration-underline transition-1 fw-semibold"
                                            tabindex="0">
                                            Enroll Now
                                            <i class="ph ph-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 wow fadeInUp" data-aos="fade-up" data-aos-duration="400">
                            <div class="course-item bg-white rounded-16 p-12 h-100 box-shadow-md">
                                <div class="course-item__thumb rounded-12 overflow-hidden position-relative">
                                    <a href="course-details.html" class="w-100 h-100">
                                        <img src="{{ asset('') }}frontend/images/thumbs/course-img5.png"
                                            alt="Course Image"
                                            class="course-item__img rounded-12 cover-img transition-2">
                                    </a>
                                    <div
                                        class="flex-align gap-8 bg-main-600 rounded-pill px-24 py-12 text-white position-absolute inset-block-start-0 inset-inline-start-0 mt-20 ms-20 z-1">
                                        <span class="text-2xl d-flex"><i class="ph ph-clock"></i></span>
                                        <span class="text-lg fw-medium">9h 36m</span>
                                    </div>
                                    <button type="button"
                                        class="wishlist-btn w-48 h-48 bg-white text-main-two-600 flex-center position-absolute inset-block-start-0 inset-inline-end-0 mt-20 me-20 z-1 text-2xl rounded-circle transition-2">
                                        <i class="ph ph-heart"></i>
                                    </button>
                                </div>
                                <div class="course-item__content">
                                    <div class="">
                                        <h4 class="mb-28">
                                            <a href="course-details.html" class="link text-line-2">Financial Planning
                                                for Millennials</a>
                                        </h4>
                                        <div class="flex-between gap-8 flex-wrap mb-16">
                                            <div class="flex-align gap-8">
                                                <span class="text-neutral-700 text-2xl d-flex"><i
                                                        class="ph-bold ph-video-camera"></i></span>
                                                <span class="text-neutral-700 text-lg fw-medium">20 Lessons</span>
                                            </div>
                                            <div class="flex-align gap-8">
                                                <span class="text-neutral-700 text-2xl d-flex"><i
                                                        class="ph-bold ph-chart-bar"></i></span>
                                                <span class="text-neutral-700 text-lg fw-medium">Beginner</span>
                                            </div>
                                        </div>
                                        <div class="flex-between gap-8 flex-wrap">
                                            <div class="flex-align gap-4">
                                                <span class="text-2xl fw-medium text-warning-600 d-flex"><i
                                                        class="ph-fill ph-star"></i></span>
                                                <span class="text-lg text-neutral-700">
                                                    4.7
                                                    <span class="text-neutral-100">(6.4k)</span>
                                                </span>
                                            </div>
                                            <div class="flex-align gap-8">
                                                <span class="text-neutral-700 text-2xl d-flex">
                                                    <img src="{{ asset('') }}frontend/images/thumbs/user-img5.png"
                                                        alt="User Image"
                                                        class="w-32 h-32 object-fit-cover rounded-circle">
                                                </span>
                                                <span class="text-neutral-700 text-lg fw-medium">Bruce</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="flex-between gap-8 pt-24 border-top border-neutral-50 mt-28 border-dashed border-0">
                                        <h4 class="mb-0 text-main-two-600">$546</h4>
                                        <a href="apply-admission.html"
                                            class="flex-align gap-8 text-main-600 hover-text-decoration-underline transition-1 fw-semibold"
                                            tabindex="0">
                                            Enroll Now
                                            <i class="ph ph-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 wow fadeInUp" data-aos="fade-up" data-aos-duration="600">
                            <div class="course-item bg-white rounded-16 p-12 h-100 box-shadow-md">
                                <div class="course-item__thumb rounded-12 overflow-hidden position-relative">
                                    <a href="course-details.html" class="w-100 h-100">
                                        <img src="{{ asset('') }}frontend/images/thumbs/course-img6.png"
                                            alt="Course Image"
                                            class="course-item__img rounded-12 cover-img transition-2">
                                    </a>
                                    <div
                                        class="flex-align gap-8 bg-main-600 rounded-pill px-24 py-12 text-white position-absolute inset-block-start-0 inset-inline-start-0 mt-20 ms-20 z-1">
                                        <span class="text-2xl d-flex"><i class="ph ph-clock"></i></span>
                                        <span class="text-lg fw-medium">9h 36m</span>
                                    </div>
                                    <button type="button"
                                        class="wishlist-btn w-48 h-48 bg-white text-main-two-600 flex-center position-absolute inset-block-start-0 inset-inline-end-0 mt-20 me-20 z-1 text-2xl rounded-circle transition-2">
                                        <i class="ph ph-heart"></i>
                                    </button>
                                </div>
                                <div class="course-item__content">
                                    <div class="">
                                        <h4 class="mb-28">
                                            <a href="course-details.html" class="link text-line-2">Nutrition Essentials
                                                for Healthy Living</a>
                                        </h4>
                                        <div class="flex-between gap-8 flex-wrap mb-16">
                                            <div class="flex-align gap-8">
                                                <span class="text-neutral-700 text-2xl d-flex"><i
                                                        class="ph-bold ph-video-camera"></i></span>
                                                <span class="text-neutral-700 text-lg fw-medium">20 Lessons</span>
                                            </div>
                                            <div class="flex-align gap-8">
                                                <span class="text-neutral-700 text-2xl d-flex"><i
                                                        class="ph-bold ph-chart-bar"></i></span>
                                                <span class="text-neutral-700 text-lg fw-medium">Beginner</span>
                                            </div>
                                        </div>
                                        <div class="flex-between gap-8 flex-wrap">
                                            <div class="flex-align gap-4">
                                                <span class="text-2xl fw-medium text-warning-600 d-flex"><i
                                                        class="ph-fill ph-star"></i></span>
                                                <span class="text-lg text-neutral-700">
                                                    4.7
                                                    <span class="text-neutral-100">(6.4k)</span>
                                                </span>
                                            </div>
                                            <div class="flex-align gap-8">
                                                <span class="text-neutral-700 text-2xl d-flex">
                                                    <img src="{{ asset('') }}frontend/images/thumbs/user-img6.png"
                                                        alt="User Image"
                                                        class="w-32 h-32 object-fit-cover rounded-circle">
                                                </span>
                                                <span class="text-neutral-700 text-lg fw-medium">Robert</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="flex-between gap-8 pt-24 border-top border-neutral-50 mt-28 border-dashed border-0">
                                        <h4 class="mb-0 text-main-two-600">$345</h4>
                                        <a href="apply-admission.html"
                                            class="flex-align gap-8 text-main-600 hover-text-decoration-underline transition-1 fw-semibold"
                                            tabindex="0">
                                            Enroll Now
                                            <i class="ph ph-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-marketing" role="tabpanel"
                    aria-labelledby="pills-marketing-tab" tabindex="0">
                    <div class="row gy-4">
                        <div class="col-lg-4 col-sm-6 wow fadeInUp" data-aos="fade-up" data-aos-duration="200">
                            <div class="course-item bg-white rounded-16 p-12 h-100 box-shadow-md">
                                <div class="course-item__thumb rounded-12 overflow-hidden position-relative">
                                    <a href="course-details.html" class="w-100 h-100">
                                        <img src="{{ asset('') }}frontend/images/thumbs/course-img1.png"
                                            alt="Course Image"
                                            class="course-item__img rounded-12 cover-img transition-2">
                                    </a>
                                    <div
                                        class="flex-align gap-8 bg-main-600 rounded-pill px-24 py-12 text-white position-absolute inset-block-start-0 inset-inline-start-0 mt-20 ms-20 z-1">
                                        <span class="text-2xl d-flex"><i class="ph ph-clock"></i></span>
                                        <span class="text-lg fw-medium">9h 36m</span>
                                    </div>
                                    <button type="button"
                                        class="wishlist-btn w-48 h-48 bg-white text-main-two-600 flex-center position-absolute inset-block-start-0 inset-inline-end-0 mt-20 me-20 z-1 text-2xl rounded-circle transition-2">
                                        <i class="ph ph-heart"></i>
                                    </button>
                                </div>
                                <div class="course-item__content">
                                    <div class="">
                                        <h4 class="mb-28">
                                            <a href="course-details.html" class="link text-line-2">Introduction to
                                                Digital Marketing</a>
                                        </h4>
                                        <div class="flex-between gap-8 flex-wrap mb-16">
                                            <div class="flex-align gap-8">
                                                <span class="text-neutral-700 text-2xl d-flex"><i
                                                        class="ph-bold ph-video-camera"></i></span>
                                                <span class="text-neutral-700 text-lg fw-medium">20 Lessons</span>
                                            </div>
                                            <div class="flex-align gap-8">
                                                <span class="text-neutral-700 text-2xl d-flex"><i
                                                        class="ph-bold ph-chart-bar"></i></span>
                                                <span class="text-neutral-700 text-lg fw-medium">Beginner</span>
                                            </div>
                                        </div>
                                        <div class="flex-between gap-8 flex-wrap">
                                            <div class="flex-align gap-4">
                                                <span class="text-2xl fw-medium text-warning-600 d-flex"><i
                                                        class="ph-fill ph-star"></i></span>
                                                <span class="text-lg text-neutral-700">
                                                    4.7
                                                    <span class="text-neutral-100">(6.4k)</span>
                                                </span>
                                            </div>
                                            <div class="flex-align gap-8">
                                                <span class="text-neutral-700 text-2xl d-flex">
                                                    <img src="{{ asset('') }}frontend/images/thumbs/user-img1.png"
                                                        alt="User Image"
                                                        class="w-32 h-32 object-fit-cover rounded-circle">
                                                </span>
                                                <span class="text-neutral-700 text-lg fw-medium">AnikaZ</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="flex-between gap-8 pt-24 border-top border-neutral-50 mt-28 border-dashed border-0">
                                        <h4 class="mb-0 text-main-two-600">$148</h4>
                                        <a href="apply-admission.html"
                                            class="flex-align gap-8 text-main-600 hover-text-decoration-underline transition-1 fw-semibold"
                                            tabindex="0">
                                            Enroll Now
                                            <i class="ph ph-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 wow fadeInUp" data-aos="fade-up" data-aos-duration="400">
                            <div class="course-item bg-white rounded-16 p-12 h-100 box-shadow-md">
                                <div class="course-item__thumb rounded-12 overflow-hidden position-relative">
                                    <a href="course-details.html" class="w-100 h-100">
                                        <img src="{{ asset('') }}frontend/images/thumbs/course-img2.png"
                                            alt="Course Image"
                                            class="course-item__img rounded-12 cover-img transition-2">
                                    </a>
                                    <div
                                        class="flex-align gap-8 bg-main-600 rounded-pill px-24 py-12 text-white position-absolute inset-block-start-0 inset-inline-start-0 mt-20 ms-20 z-1">
                                        <span class="text-2xl d-flex"><i class="ph ph-clock"></i></span>
                                        <span class="text-lg fw-medium">25h 06m</span>
                                    </div>
                                    <button type="button"
                                        class="wishlist-btn w-48 h-48 bg-white text-main-two-600 flex-center position-absolute inset-block-start-0 inset-inline-end-0 mt-20 me-20 z-1 text-2xl rounded-circle transition-2">
                                        <i class="ph ph-heart"></i>
                                    </button>
                                </div>
                                <div class="course-item__content">
                                    <div class="">
                                        <h4 class="mb-28">
                                            <a href="course-details.html" class="link text-line-2">Introduction to
                                                Python Programming</a>
                                        </h4>
                                        <div class="flex-between gap-8 flex-wrap mb-16">
                                            <div class="flex-align gap-8">
                                                <span class="text-neutral-700 text-2xl d-flex"><i
                                                        class="ph-bold ph-video-camera"></i></span>
                                                <span class="text-neutral-700 text-lg fw-medium">20 Lessons</span>
                                            </div>
                                            <div class="flex-align gap-8">
                                                <span class="text-neutral-700 text-2xl d-flex"><i
                                                        class="ph-bold ph-chart-bar"></i></span>
                                                <span class="text-neutral-700 text-lg fw-medium">Beginner</span>
                                            </div>
                                        </div>
                                        <div class="flex-between gap-8 flex-wrap">
                                            <div class="flex-align gap-4">
                                                <span class="text-2xl fw-medium text-warning-600 d-flex"><i
                                                        class="ph-fill ph-star"></i></span>
                                                <span class="text-lg text-neutral-700">
                                                    4.7
                                                    <span class="text-neutral-100">(6.4k)</span>
                                                </span>
                                            </div>
                                            <div class="flex-align gap-8">
                                                <span class="text-neutral-700 text-2xl d-flex">
                                                    <img src="{{ asset('') }}frontend/images/thumbs/user-img2.png"
                                                        alt="User Image"
                                                        class="w-32 h-32 object-fit-cover rounded-circle">
                                                </span>
                                                <span class="text-neutral-700 text-lg fw-medium">Wade</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="flex-between gap-8 pt-24 border-top border-neutral-50 mt-28 border-dashed border-0">
                                        <h4 class="mb-0 text-main-two-600">$499</h4>
                                        <a href="apply-admission.html"
                                            class="flex-align gap-8 text-main-600 hover-text-decoration-underline transition-1 fw-semibold"
                                            tabindex="0">
                                            Enroll Now
                                            <i class="ph ph-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 wow fadeInUp" data-aos="fade-up" data-aos-duration="600">
                            <div class="course-item bg-white rounded-16 p-12 h-100 box-shadow-md">
                                <div class="course-item__thumb rounded-12 overflow-hidden position-relative">
                                    <a href="course-details.html" class="w-100 h-100">
                                        <img src="{{ asset('') }}frontend/images/thumbs/course-img3.png"
                                            alt="Course Image"
                                            class="course-item__img rounded-12 cover-img transition-2">
                                    </a>
                                    <div
                                        class="flex-align gap-8 bg-main-600 rounded-pill px-24 py-12 text-white position-absolute inset-block-start-0 inset-inline-start-0 mt-20 ms-20 z-1">
                                        <span class="text-2xl d-flex"><i class="ph ph-clock"></i></span>
                                        <span class="text-lg fw-medium">9h 36m</span>
                                    </div>
                                    <button type="button"
                                        class="wishlist-btn w-48 h-48 bg-white text-main-two-600 flex-center position-absolute inset-block-start-0 inset-inline-end-0 mt-20 me-20 z-1 text-2xl rounded-circle transition-2">
                                        <i class="ph ph-heart"></i>
                                    </button>
                                </div>
                                <div class="course-item__content">
                                    <div class="">
                                        <h4 class="mb-28">
                                            <a href="course-details.html" class="link text-line-2">Introduction to
                                                Photography Masterclass</a>
                                        </h4>
                                        <div class="flex-between gap-8 flex-wrap mb-16">
                                            <div class="flex-align gap-8">
                                                <span class="text-neutral-700 text-2xl d-flex"><i
                                                        class="ph-bold ph-video-camera"></i></span>
                                                <span class="text-neutral-700 text-lg fw-medium">20 Lessons</span>
                                            </div>
                                            <div class="flex-align gap-8">
                                                <span class="text-neutral-700 text-2xl d-flex"><i
                                                        class="ph-bold ph-chart-bar"></i></span>
                                                <span class="text-neutral-700 text-lg fw-medium">Beginner</span>
                                            </div>
                                        </div>
                                        <div class="flex-between gap-8 flex-wrap">
                                            <div class="flex-align gap-4">
                                                <span class="text-2xl fw-medium text-warning-600 d-flex"><i
                                                        class="ph-fill ph-star"></i></span>
                                                <span class="text-lg text-neutral-700">
                                                    4.7
                                                    <span class="text-neutral-100">(6.4k)</span>
                                                </span>
                                            </div>
                                            <div class="flex-align gap-8">
                                                <span class="text-neutral-700 text-2xl d-flex">
                                                    <img src="{{ asset('') }}frontend/images/thumbs/user-img3.png"
                                                        alt="User Image"
                                                        class="w-32 h-32 object-fit-cover rounded-circle">
                                                </span>
                                                <span class="text-neutral-700 text-lg fw-medium">Cody</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="flex-between gap-8 pt-24 border-top border-neutral-50 mt-28 border-dashed border-0">
                                        <h4 class="mb-0 text-main-two-600">$457</h4>
                                        <a href="apply-admission.html"
                                            class="flex-align gap-8 text-main-600 hover-text-decoration-underline transition-1 fw-semibold"
                                            tabindex="0">
                                            Enroll Now
                                            <i class="ph ph-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 wow fadeInUp" data-aos="fade-up" data-aos-duration="200">
                            <div class="course-item bg-white rounded-16 p-12 h-100 box-shadow-md">
                                <div class="course-item__thumb rounded-12 overflow-hidden position-relative">
                                    <a href="course-details.html" class="w-100 h-100">
                                        <img src="{{ asset('') }}frontend/images/thumbs/course-img4.png"
                                            alt="Course Image"
                                            class="course-item__img rounded-12 cover-img transition-2">
                                    </a>
                                    <div
                                        class="flex-align gap-8 bg-main-600 rounded-pill px-24 py-12 text-white position-absolute inset-block-start-0 inset-inline-start-0 mt-20 ms-20 z-1">
                                        <span class="text-2xl d-flex"><i class="ph ph-clock"></i></span>
                                        <span class="text-lg fw-medium">9h 36m</span>
                                    </div>
                                    <button type="button"
                                        class="wishlist-btn w-48 h-48 bg-white text-main-two-600 flex-center position-absolute inset-block-start-0 inset-inline-end-0 mt-20 me-20 z-1 text-2xl rounded-circle transition-2">
                                        <i class="ph ph-heart"></i>
                                    </button>
                                </div>
                                <div class="course-item__content">
                                    <div class="">
                                        <h4 class="mb-28">
                                            <a href="course-details.html" class="link text-line-2">Spanish Language
                                                Mastery: Beginner to Fluent</a>
                                        </h4>
                                        <div class="flex-between gap-8 flex-wrap mb-16">
                                            <div class="flex-align gap-8">
                                                <span class="text-neutral-700 text-2xl d-flex"><i
                                                        class="ph-bold ph-video-camera"></i></span>
                                                <span class="text-neutral-700 text-lg fw-medium">20 Lessons</span>
                                            </div>
                                            <div class="flex-align gap-8">
                                                <span class="text-neutral-700 text-2xl d-flex"><i
                                                        class="ph-bold ph-chart-bar"></i></span>
                                                <span class="text-neutral-700 text-lg fw-medium">Beginner</span>
                                            </div>
                                        </div>
                                        <div class="flex-between gap-8 flex-wrap">
                                            <div class="flex-align gap-4">
                                                <span class="text-2xl fw-medium text-warning-600 d-flex"><i
                                                        class="ph-fill ph-star"></i></span>
                                                <span class="text-lg text-neutral-700">
                                                    4.7
                                                    <span class="text-neutral-100">(6.4k)</span>
                                                </span>
                                            </div>
                                            <div class="flex-align gap-8">
                                                <span class="text-neutral-700 text-2xl d-flex">
                                                    <img src="{{ asset('') }}frontend/images/thumbs/user-img4.png"
                                                        alt="User Image"
                                                        class="w-32 h-32 object-fit-cover rounded-circle">
                                                </span>
                                                <span class="text-neutral-700 text-lg fw-medium">Dustin</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="flex-between gap-8 pt-24 border-top border-neutral-50 mt-28 border-dashed border-0">
                                        <h4 class="mb-0 text-main-two-600">$148</h4>
                                        <a href="apply-admission.html"
                                            class="flex-align gap-8 text-main-600 hover-text-decoration-underline transition-1 fw-semibold"
                                            tabindex="0">
                                            Enroll Now
                                            <i class="ph ph-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 wow fadeInUp" data-aos="fade-up" data-aos-duration="400">
                            <div class="course-item bg-white rounded-16 p-12 h-100 box-shadow-md">
                                <div class="course-item__thumb rounded-12 overflow-hidden position-relative">
                                    <a href="course-details.html" class="w-100 h-100">
                                        <img src="{{ asset('') }}frontend/images/thumbs/course-img5.png"
                                            alt="Course Image"
                                            class="course-item__img rounded-12 cover-img transition-2">
                                    </a>
                                    <div
                                        class="flex-align gap-8 bg-main-600 rounded-pill px-24 py-12 text-white position-absolute inset-block-start-0 inset-inline-start-0 mt-20 ms-20 z-1">
                                        <span class="text-2xl d-flex"><i class="ph ph-clock"></i></span>
                                        <span class="text-lg fw-medium">9h 36m</span>
                                    </div>
                                    <button type="button"
                                        class="wishlist-btn w-48 h-48 bg-white text-main-two-600 flex-center position-absolute inset-block-start-0 inset-inline-end-0 mt-20 me-20 z-1 text-2xl rounded-circle transition-2">
                                        <i class="ph ph-heart"></i>
                                    </button>
                                </div>
                                <div class="course-item__content">
                                    <div class="">
                                        <h4 class="mb-28">
                                            <a href="course-details.html" class="link text-line-2">Financial Planning
                                                for Millennials</a>
                                        </h4>
                                        <div class="flex-between gap-8 flex-wrap mb-16">
                                            <div class="flex-align gap-8">
                                                <span class="text-neutral-700 text-2xl d-flex"><i
                                                        class="ph-bold ph-video-camera"></i></span>
                                                <span class="text-neutral-700 text-lg fw-medium">20 Lessons</span>
                                            </div>
                                            <div class="flex-align gap-8">
                                                <span class="text-neutral-700 text-2xl d-flex"><i
                                                        class="ph-bold ph-chart-bar"></i></span>
                                                <span class="text-neutral-700 text-lg fw-medium">Beginner</span>
                                            </div>
                                        </div>
                                        <div class="flex-between gap-8 flex-wrap">
                                            <div class="flex-align gap-4">
                                                <span class="text-2xl fw-medium text-warning-600 d-flex"><i
                                                        class="ph-fill ph-star"></i></span>
                                                <span class="text-lg text-neutral-700">
                                                    4.7
                                                    <span class="text-neutral-100">(6.4k)</span>
                                                </span>
                                            </div>
                                            <div class="flex-align gap-8">
                                                <span class="text-neutral-700 text-2xl d-flex">
                                                    <img src="{{ asset('') }}frontend/images/thumbs/user-img5.png"
                                                        alt="User Image"
                                                        class="w-32 h-32 object-fit-cover rounded-circle">
                                                </span>
                                                <span class="text-neutral-700 text-lg fw-medium">Bruce</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="flex-between gap-8 pt-24 border-top border-neutral-50 mt-28 border-dashed border-0">
                                        <h4 class="mb-0 text-main-two-600">$546</h4>
                                        <a href="apply-admission.html"
                                            class="flex-align gap-8 text-main-600 hover-text-decoration-underline transition-1 fw-semibold"
                                            tabindex="0">
                                            Enroll Now
                                            <i class="ph ph-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 wow fadeInUp" data-aos="fade-up" data-aos-duration="600">
                            <div class="course-item bg-white rounded-16 p-12 h-100 box-shadow-md">
                                <div class="course-item__thumb rounded-12 overflow-hidden position-relative">
                                    <a href="course-details.html" class="w-100 h-100">
                                        <img src="{{ asset('') }}frontend/images/thumbs/course-img6.png"
                                            alt="Course Image"
                                            class="course-item__img rounded-12 cover-img transition-2">
                                    </a>
                                    <div
                                        class="flex-align gap-8 bg-main-600 rounded-pill px-24 py-12 text-white position-absolute inset-block-start-0 inset-inline-start-0 mt-20 ms-20 z-1">
                                        <span class="text-2xl d-flex"><i class="ph ph-clock"></i></span>
                                        <span class="text-lg fw-medium">9h 36m</span>
                                    </div>
                                    <button type="button"
                                        class="wishlist-btn w-48 h-48 bg-white text-main-two-600 flex-center position-absolute inset-block-start-0 inset-inline-end-0 mt-20 me-20 z-1 text-2xl rounded-circle transition-2">
                                        <i class="ph ph-heart"></i>
                                    </button>
                                </div>
                                <div class="course-item__content">
                                    <div class="">
                                        <h4 class="mb-28">
                                            <a href="course-details.html" class="link text-line-2">Nutrition Essentials
                                                for Healthy Living</a>
                                        </h4>
                                        <div class="flex-between gap-8 flex-wrap mb-16">
                                            <div class="flex-align gap-8">
                                                <span class="text-neutral-700 text-2xl d-flex"><i
                                                        class="ph-bold ph-video-camera"></i></span>
                                                <span class="text-neutral-700 text-lg fw-medium">20 Lessons</span>
                                            </div>
                                            <div class="flex-align gap-8">
                                                <span class="text-neutral-700 text-2xl d-flex"><i
                                                        class="ph-bold ph-chart-bar"></i></span>
                                                <span class="text-neutral-700 text-lg fw-medium">Beginner</span>
                                            </div>
                                        </div>
                                        <div class="flex-between gap-8 flex-wrap">
                                            <div class="flex-align gap-4">
                                                <span class="text-2xl fw-medium text-warning-600 d-flex"><i
                                                        class="ph-fill ph-star"></i></span>
                                                <span class="text-lg text-neutral-700">
                                                    4.7
                                                    <span class="text-neutral-100">(6.4k)</span>
                                                </span>
                                            </div>
                                            <div class="flex-align gap-8">
                                                <span class="text-neutral-700 text-2xl d-flex">
                                                    <img src="{{ asset('') }}frontend/images/thumbs/user-img6.png"
                                                        alt="User Image"
                                                        class="w-32 h-32 object-fit-cover rounded-circle">
                                                </span>
                                                <span class="text-neutral-700 text-lg fw-medium">Robert</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="flex-between gap-8 pt-24 border-top border-neutral-50 mt-28 border-dashed border-0">
                                        <h4 class="mb-0 text-main-two-600">$345</h4>
                                        <a href="apply-admission.html"
                                            class="flex-align gap-8 text-main-600 hover-text-decoration-underline transition-1 fw-semibold"
                                            tabindex="0">
                                            Enroll Now
                                            <i class="ph ph-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- ================================== Explore Course Section End =========================== -->

    <!-- ================================ About Section Start ==================================== -->
    {{-- <section class="about py-120 position-relative z-1 mash-bg-main mash-bg-main-two">
        <img src="{{ asset('') }}frontend/images/shapes/shape2.png" alt=""
            class="shape one animation-scalation">
        <img src="{{ asset('') }}frontend/images/shapes/shape6.png" alt=""
            class="shape four animation-scalation">

        <div class="position-relative">
            <div class="container">
                <div class="row gy-xl-0 gy-5 flex-wrap-reverse align-items-center">
                    <div class="col-xl-6">
                        <div class="about-thumbs position-relative pe-lg-5">
                            <img src="{{ asset('') }}frontend/images/shapes/shape7.png" alt=""
                                class="shape seven animation-scalation">

                            <div
                                class="offer-message px-24 py-12 rounded-12 bg-main-two-50 fw-medium flex-align d-inline-flex gap-16 border border-neutral-30 animation-upDown">
                                <span
                                    class="flex-shrink-0 w-48 h-48 bg-main-two-600 text-white text-2xl flex-center rounded-circle"><i
                                        class="ph ph-watch"></i></span>
                                <div>
                                    <h6 class="mb-4">20% OFF</h6>
                                    <span class="text-neutral-500">For All Courses</span>
                                </div>
                            </div>
                            <div class="row gy-4">
                                <div class="col-sm-6">
                                    <img src="{{ asset('') }}frontend/images/thumbs/about-img1.png" alt=""
                                        class="rounded-12 w-100" data-tilt data-tilt-max="15" data-tilt-speed="500"
                                        data-tilt-perspective="5000" data-tilt-full-page-listening>
                                </div>
                                <div class="col-sm-6">
                                    <div class="flex-align gap-24 mb-24">
                                        <div class="bg-main-600 rounded-12 text-center py-24 px-2 w-50-percent"
                                            data-aos="fade-right">
                                            <h1 class="mb-0 text-white counter">16+</h1>
                                            <span class="text-white">Years of experience</span>
                                        </div>
                                        <div class="bg-neutral-700 rounded-12 text-center py-24 px-2 w-50-percent"
                                            data-aos="fade-left">
                                            <h1 class="mb-0 text-white counter">3.2k</h1>
                                            <span class="text-white">Years of experience</span>
                                        </div>
                                    </div>
                                    <img src="{{ asset('') }}frontend/images/thumbs/about-img2.png" alt=""
                                        class="rounded-12 w-100" data-tilt data-tilt-max="20" data-tilt-speed="500"
                                        data-tilt-perspective="5000" data-tilt-full-page-listening>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="about-content">
                            <div class="mb-40">
                                <div class="flex-align gap-8 mb-16 wow bounceInDown">
                                    <span class="w-8 h-8 bg-main-600 rounded-circle"></span>
                                    <h5 class="text-main-600 mb-0 ">Tentang Kami</h5>
                                </div>
                                <h2 class="mb-24 wow bounceIn">Mewadahi Bakat dan Minat Meraih Masa Depan</h2>
                                <p class="text-neutral-500 text-line-2 wow bounceInUp">SMP Negeri 2 Purwosari terletak di
                                    Jalan Raya Purwosari Ngambon Kabupaten Bojonegoro. Kawasan sekolah merupakan daerah yang
                                    terkenal dengan pertanian dan migas</p>
                            </div>

                            <div class="flex-align align-items-start gap-28 mb-32" data-aos="fade-left"
                                data-aos-duration="200">
                                <span
                                    class="w-80 h-80 bg-main-25 border border-neutral-30 flex-center rounded-circle flex-shrink-0">
                                    <img src="{{ asset('') }}frontend/images/icons/about-img1.png" alt="">
                                </span>
                                <div class="flex-grow-1">
                                    <h4 class="text-neutral-500 mb-12">Visi</h4>
                                    <p class="text-neutral-500">Driven by a team of dedicated educators, technologists,
                                        and visionaries, we strive to create a supportive</p>
                                </div>
                            </div>
                            <div class="flex-align align-items-start gap-28 mb-0" data-aos="fade-left"
                                data-aos-duration="400">
                                <span
                                    class="w-80 h-80 bg-main-25 border border-neutral-30 flex-center rounded-circle flex-shrink-0">
                                    <img src="{{ asset('') }}frontend/images/icons/about-img2.png" alt="">
                                </span>
                                <div class="flex-grow-1">
                                    <h4 class="text-neutral-500 mb-12">Misi</h4>
                                    <p class="text-neutral-500">A professional seeking to upskill, or a lifelong learner
                                        exploring new horizons, we're here to accompany you every step of the way. </p>
                                </div>
                            </div>

                            <div class="flex-align flex-wrap gap-32 pt-40 border-top border-neutral-50 mt-40 border-dashed border-0"
                                data-aos="fade-left" data-aos-duration="600">
                                <a href="course.html" class="btn btn-main rounded-pill flex-align gap-8">
                                    Baca Selengkapnya
                                    <i class="ph-bold ph-arrow-up-right d-flex text-lg"></i>
                                </a>
                                <div class="flex-align gap-20">
                                    <img src="{{ asset('') }}frontend/images/thumbs/ceo-img.png" alt=""
                                        class="w-52 h-52 rounded-circle object-fit-cover flex-shrink-0">
                                    <div class="flex-grow-1">
                                        <span class="mb-4">
                                            <img src="{{ asset('') }}frontend/images/thumbs/signature.png"
                                                alt="">
                                        </span>
                                        <span class="text-sm d-block">Kepala Sekolah</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- ================================ About Section End ==================================== -->
    <!-- =========================== CHoose Us Section Start ================================ -->
    <section class="choose-us pt-120 position-relative z-1 mash-bg-main mash-bg-main-two">
        <img src="{{ asset('') }}frontend/images/shapes/shape2.png" alt=""
            class="shape one animation-scalation">
        <img src="{{ asset('') }}frontend/images/shapes/shape2.png" alt=""
            class="shape six animation-scalation">

        <div class="container">
            <div class="row gy-4">
                <div class="col-xl-6">
                    <div class="choose-us__content">
                        <div class="mb-40">
                            <div class="flex-align gap-8 mb-16 wow bounceInDown">
                                <span class="w-8 h-8 bg-main-600 rounded-circle"></span>
                                <h5 class="text-main-600 mb-0">Tentang Kami</h5>
                            </div>
                            <h2 class="mb-24  wow bounceIn">Mewadahi Bakat dan Minat Meraih Masa Depan.</h2>
                            <p class="text-neutral-500 text-line-2  wow bounceInUp">Setiap anak dilahirkan memiliki
                                kelebihan dan kekurangan masing-masing, unik dan tidak ada yang bisa menyamainya. Berangkat
                                dari itu SMP Negeri 2 Purwosari SMP Negeri 2 Purwosari tidak hanya fokus pada kemampuan
                                akademik semata, namun juga aneka potensi siswa</p>
                        </div>

                        <div class="flex-align align-items-start gap-28 mb-32" data-aos="fade-left"
                            data-aos-duration="200">
                            <span
                                class="w-80 h-80 bg-main-25 border border-neutral-30 flex-center rounded-circle flex-shrink-0">
                                <img src="{{ asset('') }}frontend/images/icons/about-img1.png" alt="">
                            </span>
                            <div class="flex-grow-1">
                                <h4 class="text-neutral-500 mb-12">Visi</h4>
                                <p class="text-neutral-500">Terwujudnya Lulusan Yang Beriman dan Bertaqwa, Berkarakter,
                                    Kreatif,
                                    Produktif, dan Energik. Berdasarkan IPTEK Serta Berbudaya Lingkungan</p>
                            </div>
                        </div>
                        <div class="flex-align align-items-start gap-28 mb-0" data-aos="fade-left"
                            data-aos-duration="400">
                            <span
                                class="w-80 h-80 bg-main-25 border border-neutral-30 flex-center rounded-circle flex-shrink-0">
                                <img src="{{ asset('') }}frontend/images/icons/about-img2.png" alt="">
                            </span>
                            <div class="flex-grow-1">
                                <h4 class="text-neutral-500 mb-12">Misi</h4>
                                <p class="text-neutral-500">Mewujudkan fasilitas sekolah yang relevan, mutakhir, dan
                                    berwawasan
                                    kedepan</p>
                            </div>
                        </div>

                        {{-- <ul>
                        <li class="flex-align gap-12 mb-16" data-aos="fade-up-left" data-aos-duration="200">
                            <span class="flex-shrink-0 text-xl text-main-600 d-flex"><i
                                    class="ph-bold ph-checks"></i></span>
                            <span class="flex-grow-1 text-neutral-500">9/10 Average Satisfaction Rate</span>
                        </li>
                        <li class="flex-align gap-12 mb-16" data-aos="fade-up-left" data-aos-duration="400">
                            <span class="flex-shrink-0 text-xl text-main-600 d-flex"><i
                                    class="ph-bold ph-checks"></i></span>
                            <span class="flex-grow-1 text-neutral-500">96% Completitation Rate</span>
                        </li>
                        <li class="flex-align gap-12 mb-16" data-aos="fade-up-left" data-aos-duration="500">
                            <span class="flex-shrink-0 text-xl text-main-600 d-flex"><i
                                    class="ph-bold ph-checks"></i></span>
                            <span class="flex-grow-1 text-neutral-500">Friendly Environment & Expert Teacher</span>
                        </li>
                    </ul> --}}

                        <div class="pt-24 border-top border-neutral-50 mt-28 border-dashed border-0">
                            <a href="{{ route('about-us') }}"
                                class="btn btn-main rounded-pill flex-align d-inline-flex gap-8">
                                Selengkapnya
                                <i class="ph-bold ph-arrow-up-right d-flex text-lg"></i>
                            </a>
                        </div>

                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="choose-us__thumbs position-relative">

                        {{-- <div
                            class="offer-message style-two px-24 py-12 rounded-12 bg-white fw-medium flex-align d-inline-flex gap-16 box-shadow-lg animation-upDown">
                            <span
                                class="flex-shrink-0 w-48 h-48 bg-dark-yellow text-white text-2xl flex-center rounded-circle">
                                <img src="{{ asset('') }}frontend/images/icons/stars.png" alt="">
                            </span>
                            <div>
                                <span class="text-lg text-neutral-700 d-block">
                                    4.6
                                    <span class="text-neutral-100">(2.4k)</span>
                                </span>
                                <span class="text-neutral-500">AVG Reviews</span>
                            </div>
                        </div>

                        <div class="banner-box one style-two px-24 py-12 rounded-12 bg-white fw-medium box-shadow-lg d-inline-block"
                            data-aos="fade-left">
                            <span class="text-main-600">36k+</span> Enrolled Students
                            <div class="enrolled-students mt-12">
                                <img src="{{ asset('') }}frontend/images/thumbs/enroll-student-img1.png"
                                    alt="" class="w-48 h-48 rounded-circle object-fit-cover">
                                <img src="{{ asset('') }}frontend/images/thumbs/enroll-student-img2.png"
                                    alt="" class="w-48 h-48 rounded-circle object-fit-cover">
                                <img src="{{ asset('') }}frontend/images/thumbs/enroll-student-img3.png"
                                    alt="" class="w-48 h-48 rounded-circle object-fit-cover">
                                <img src="{{ asset('') }}frontend/images/thumbs/enroll-student-img4.png"
                                    alt="" class="w-48 h-48 rounded-circle object-fit-cover">
                                <img src="{{ asset('') }}frontend/images/thumbs/enroll-student-img5.png"
                                    alt="" class="w-48 h-48 rounded-circle object-fit-cover">
                                <img src="{{ asset('') }}frontend/images/thumbs/enroll-student-img6.png"
                                    alt="" class="w-48 h-48 rounded-circle object-fit-cover">
                            </div>
                        </div> --}}

                        <div class="text-end" data-aos="zoom-out">
                            <div class="d-sm-inline-block d-block position-relative">
                                <img src="{{ asset('') }}frontend/images/thumbs/choose-us-img1.png" alt=""
                                    class="choose-us__img rounded-12" data-tilt data-tilt-max="16" data-tilt-speed="500"
                                    data-tilt-perspective="5000" data-tilt-full-page-listening>
                                <span
                                    class="shadow-main-two w-80 h-80 flex-center bg-main-two-600 rounded-circle position-absolute inset-block-start-0 inset-inline-start-0 mt-40 ms--40 animation-upDown">
                                    <img src="{{ asset('') }}frontend/images/icons/book.png" alt="">
                                </span>
                            </div>
                        </div>
                        <div class="animation-video" data-aos="zoom-in">
                            <img src="{{ asset('frontend/images/youtube/cover.jpg') }}" alt=""
                                class="border border-white rounded-circle border-3" data-tilt width="300px">
                            <a href="https://www.youtube.com/watch?v=oFbaCU16pwk"
                                class="play-button w-48 h-48 flex-center bg-main-600 text-white rounded-circle text-xl position-absolute top-50 start-50 translate-middle">
                                <i class="ph-fill ph-play"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =========================== CHoose Us Section End ================================ -->

    <!-- ========================== Counter Section start ============================== -->
    <section class="counter py-120">
        <div class="container">
            <div class="row gy-4">
                <div class="col-xl-3 col-sm-6 col-xs-6" data-aos="fade-up" data-aos-duration="200">
                    <div
                        class="counter-item animation-item h-100 text-center px-16 py-32 rounded-12 bg-main-25 border border-neutral-30">
                        <span
                            class="w-80 h-80 flex-center d-inline-flex bg-white text-main-600 text-40 rounded-circle box-shadow-md mb-24">
                            <i class="animate__wobble ph ph-users"></i>
                        </span>
                        <h2 class="display-four mb-16 text-neutral-700 counter">6+</h2>
                        <span class="text-neutral-500 text-lg">Program Unggulan</span>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-xs-6" data-aos="fade-up" data-aos-duration="400">
                    <div
                        class="counter-item animation-item h-100 text-center px-16 py-32 rounded-12 bg-main-two-25 border border-neutral-30">
                        <span
                            class="w-80 h-80 flex-center d-inline-flex bg-white text-main-two-600 text-40 rounded-circle box-shadow-md mb-24">
                            <i class="animate__wobble ph ph-video-camera"></i>
                        </span>
                        <h2 class="display-four mb-16 text-neutral-700 counter"> 700+</h2>
                        <span class="text-neutral-500 text-lg">Siswa</span>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-xs-6" data-aos="fade-up" data-aos-duration="600">
                    <div
                        class="counter-item animation-item h-100 text-center px-16 py-32 rounded-12 bg-main-25 border border-neutral-30">
                        <span
                            class="w-80 h-80 flex-center d-inline-flex bg-white text-main-600 text-40 rounded-circle box-shadow-md mb-24">
                            <i class="animate__wobble ph ph-thumbs-up"></i>
                        </span>
                        <h2 class="display-four mb-16 text-neutral-700 counter">2000+</h2>
                        <span class="text-neutral-500 text-lg">Follower</span>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-xs-6" data-aos="fade-up" data-aos-duration="800">
                    <div
                        class="counter-item animation-item h-100 text-center px-16 py-32 rounded-12 bg-main-two-25 border border-neutral-30">
                        <span
                            class="w-80 h-80 flex-center d-inline-flex bg-white text-main-two-600 text-40 rounded-circle box-shadow-md mb-24">
                            <i class="animate__wobble ph ph-users-three"></i>
                        </span>
                        <h2 class="display-four mb-16 text-neutral-700 counter">25+</h2>
                        <span class="text-neutral-500 text-lg">Mitra Inovasi</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ========================== Counter Section End ============================== -->


    <!-- ================================ Instructor Section Start ==================================== -->
    {{-- <section class="instructor py-120 bg-main-25 position-relative z-1">
        <img src="{{ asset('') }}frontend/images/shapes/shape2.png" alt=""
            class="shape one animation-scalation">
        <img src="{{ asset('') }}frontend/images/shapes/shape6.png" alt=""
            class="shape six animation-scalation">

        <div class="container">
            <div class="section-heading text-center">
                <h2 class="mb-24 wow bounceIn">Course Instructors</h2>
                <p class=" wow bounceInUp">Join us on this journey of discovery, growth, and transformation. Together,
                    let's shape a brighter future</p>
            </div>
            <div class="instructor-slider">
                <div class="instructor-item scale-hover-item bg-white rounded-16 p-12 h-100 border border-neutral-30"
                    data-aos="fade-up" data-aos-duration="200">
                    <div class="rounded-12 overflow-hidden position-relative bg-dark-yellow">
                        <a href="instructor-details.html" class="w-100 h-100 d-flex align-items-end">
                            <img src="{{ asset('') }}frontend/images/thumbs/instructor-img1.png" alt="Course Image"
                                class="scale-hover-item__img rounded-12 cover-img transition-2">
                        </a>
                    </div>
                    <div class="p-24 position-relative">
                        <div class="social-infos">
                            <ul class="social-list flex-align flex-column gap-12 mb-12">
                                <li class="social-list__item">
                                    <a href="https://www.facebook.com"
                                        class=" flex-center border border-white text-white w-44 h-44 rounded-circle text-xl hover-text-main hover-bg-white"><i
                                            class="ph-bold ph-facebook-logo"></i></a>
                                </li>
                                <li class="social-list__item">
                                    <a href="https://www.twitter.com"
                                        class=" flex-center border border-white text-white w-44 h-44 rounded-circle text-xl hover-text-main hover-bg-white">
                                        <i class="ph-bold ph-twitter-logo"></i></a>
                                </li>
                                <li class="social-list__item">
                                    <a href="https://www.linkedin.com"
                                        class=" flex-center border border-white text-white w-44 h-44 rounded-circle text-xl hover-text-main hover-bg-white"><i
                                            class="ph-bold ph-instagram-logo"></i></a>
                                </li>
                            </ul>
                            <button
                                class="social-infos__button flex-center w-44 h-44 bg-white text-main-600 rounded-circle text-2xl transition-2">
                                <i class="ph-bold ph-plus"></i>
                            </button>
                        </div>
                        <div class="">
                            <h4 class="mb-28 pb-24 border-bottom border-neutral-50 mb-24 border-dashed border-0">
                                <a href="instructor-details.html" class="link text-line-2">Devon Lane</a>
                            </h4>
                            <div class="flex-between gap-8 flex-wrap mb-16">
                                <div class="flex-align gap-8">
                                    <span class="text-neutral-700 text-2xl d-flex"><i
                                            class="ph-bold ph-lightbulb"></i></span>
                                    <span class="text-neutral-700 text-lg fw-medium">Web Developer</span>
                                </div>
                                <div class="flex-align gap-8">
                                    <span class="text-neutral-700 text-2xl d-flex"><i class="ph-bold ph-watch"></i></span>
                                    <span class="text-neutral-700 text-lg fw-medium">7 Course</span>
                                </div>
                            </div>
                            <div class="flex-between gap-8 flex-wrap">
                                <div class="flex-align gap-8">
                                    <span class="text-neutral-700 text-2xl d-flex"><i class="ph-bold ph-users"></i></span>
                                    <span class="text-neutral-700 text-lg fw-medium">15k Students</span>
                                </div>
                                <div class="flex-align gap-4">
                                    <span class="text-2xl fw-medium text-warning-600 d-flex"><i
                                            class="ph-fill ph-star"></i></span>
                                    <span class="text-lg text-neutral-700">
                                        4.6
                                        <span class="text-neutral-100">(2.4k)</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="pt-24 border-top border-neutral-50 mt-28 border-dashed border-0">
                            <a href="instructor-details.html"
                                class="flex-align gap-8 text-main-600 hover-text-decoration-underline transition-1 fw-semibold"
                                tabindex="0">
                                View Profile
                                <i class="ph ph-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="instructor-item scale-hover-item bg-white rounded-16 p-12 h-100 border border-neutral-30"
                    data-aos="fade-up" data-aos-duration="400">
                    <div class="rounded-12 overflow-hidden position-relative bg-dark-yellow">
                        <a href="instructor-details.html" class="w-100 h-100 d-flex align-items-end">
                            <img src="{{ asset('') }}frontend/images/thumbs/instructor-img2.png" alt="Course Image"
                                class="scale-hover-item__img rounded-12 cover-img transition-2">
                        </a>
                    </div>
                    <div class="p-24 position-relative">
                        <div class="social-infos">
                            <ul class="social-list flex-align flex-column gap-12 mb-12">
                                <li class="social-list__item">
                                    <a href="https://www.facebook.com"
                                        class=" flex-center border border-white text-white w-44 h-44 rounded-circle text-xl hover-text-main hover-bg-white"><i
                                            class="ph-bold ph-facebook-logo"></i></a>
                                </li>
                                <li class="social-list__item">
                                    <a href="https://www.twitter.com"
                                        class=" flex-center border border-white text-white w-44 h-44 rounded-circle text-xl hover-text-main hover-bg-white">
                                        <i class="ph-bold ph-twitter-logo"></i></a>
                                </li>
                                <li class="social-list__item">
                                    <a href="https://www.linkedin.com"
                                        class=" flex-center border border-white text-white w-44 h-44 rounded-circle text-xl hover-text-main hover-bg-white"><i
                                            class="ph-bold ph-instagram-logo"></i></a>
                                </li>
                            </ul>
                            <button
                                class="social-infos__button flex-center w-44 h-44 bg-white text-main-600 rounded-circle text-2xl transition-2">
                                <i class="ph-bold ph-plus"></i>
                            </button>
                        </div>
                        <div class="">
                            <h4 class="mb-28 pb-24 border-bottom border-neutral-50 mb-24 border-dashed border-0">
                                <a href="instructor-details.html" class="link text-line-2">John Doe</a>
                            </h4>
                            <div class="flex-between gap-8 flex-wrap mb-16">
                                <div class="flex-align gap-8">
                                    <span class="text-neutral-700 text-2xl d-flex"><i
                                            class="ph-bold ph-lightbulb"></i></span>
                                    <span class="text-neutral-700 text-lg fw-medium">WordPress Expert</span>
                                </div>
                                <div class="flex-align gap-8">
                                    <span class="text-neutral-700 text-2xl d-flex"><i class="ph-bold ph-watch"></i></span>
                                    <span class="text-neutral-700 text-lg fw-medium">6 Course</span>
                                </div>
                            </div>
                            <div class="flex-between gap-8 flex-wrap">
                                <div class="flex-align gap-8">
                                    <span class="text-neutral-700 text-2xl d-flex"><i class="ph-bold ph-users"></i></span>
                                    <span class="text-neutral-700 text-lg fw-medium">55k Students</span>
                                </div>
                                <div class="flex-align gap-4">
                                    <span class="text-2xl fw-medium text-warning-600 d-flex"><i
                                            class="ph-fill ph-star"></i></span>
                                    <span class="text-lg text-neutral-700">
                                        4.6
                                        <span class="text-neutral-100">(2.4k)</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="pt-24 border-top border-neutral-50 mt-28 border-dashed border-0">
                            <a href="instructor-details.html"
                                class="flex-align gap-8 text-main-600 hover-text-decoration-underline transition-1 fw-semibold"
                                tabindex="0">
                                View Profile
                                <i class="ph ph-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="instructor-item scale-hover-item bg-white rounded-16 p-12 h-100 border border-neutral-30"
                    data-aos="fade-up" data-aos-duration="600">
                    <div class="rounded-12 overflow-hidden position-relative bg-dark-yellow">
                        <a href="instructor-details.html" class="w-100 h-100 d-flex align-items-end">
                            <img src="{{ asset('') }}frontend/images/thumbs/instructor-img3.png" alt="Course Image"
                                class="scale-hover-item__img rounded-12 cover-img transition-2">
                        </a>
                    </div>
                    <div class="p-24 position-relative">
                        <div class="social-infos">
                            <ul class="social-list flex-align flex-column gap-12 mb-12">
                                <li class="social-list__item">
                                    <a href="https://www.facebook.com"
                                        class=" flex-center border border-white text-white w-44 h-44 rounded-circle text-xl hover-text-main hover-bg-white"><i
                                            class="ph-bold ph-facebook-logo"></i></a>
                                </li>
                                <li class="social-list__item">
                                    <a href="https://www.twitter.com"
                                        class=" flex-center border border-white text-white w-44 h-44 rounded-circle text-xl hover-text-main hover-bg-white">
                                        <i class="ph-bold ph-twitter-logo"></i></a>
                                </li>
                                <li class="social-list__item">
                                    <a href="https://www.linkedin.com"
                                        class=" flex-center border border-white text-white w-44 h-44 rounded-circle text-xl hover-text-main hover-bg-white"><i
                                            class="ph-bold ph-instagram-logo"></i></a>
                                </li>
                            </ul>
                            <button
                                class="social-infos__button flex-center w-44 h-44 bg-white text-main-600 rounded-circle text-2xl transition-2">
                                <i class="ph-bold ph-plus"></i>
                            </button>
                        </div>
                        <div class="">
                            <h4 class="mb-28 pb-24 border-bottom border-neutral-50 mb-24 border-dashed border-0">
                                <a href="instructor-details.html" class="link text-line-2">Alexandar</a>
                            </h4>
                            <div class="flex-between gap-8 flex-wrap mb-16">
                                <div class="flex-align gap-8">
                                    <span class="text-neutral-700 text-2xl d-flex"><i
                                            class="ph-bold ph-lightbulb"></i></span>
                                    <span class="text-neutral-700 text-lg fw-medium">UI/UX Designer</span>
                                </div>
                                <div class="flex-align gap-8">
                                    <span class="text-neutral-700 text-2xl d-flex"><i class="ph-bold ph-watch"></i></span>
                                    <span class="text-neutral-700 text-lg fw-medium">12 Course</span>
                                </div>
                            </div>
                            <div class="flex-between gap-8 flex-wrap">
                                <div class="flex-align gap-8">
                                    <span class="text-neutral-700 text-2xl d-flex"><i class="ph-bold ph-users"></i></span>
                                    <span class="text-neutral-700 text-lg fw-medium">36k Students</span>
                                </div>
                                <div class="flex-align gap-4">
                                    <span class="text-2xl fw-medium text-warning-600 d-flex"><i
                                            class="ph-fill ph-star"></i></span>
                                    <span class="text-lg text-neutral-700">
                                        4.6
                                        <span class="text-neutral-100">(2.4k)</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="pt-24 border-top border-neutral-50 mt-28 border-dashed border-0">
                            <a href="instructor-details.html"
                                class="flex-align gap-8 text-main-600 hover-text-decoration-underline transition-1 fw-semibold"
                                tabindex="0">
                                View Profile
                                <i class="ph ph-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="instructor-item scale-hover-item bg-white rounded-16 p-12 h-100 border border-neutral-30"
                    data-aos="fade-up" data-aos-duration="200">
                    <div class="rounded-12 overflow-hidden position-relative bg-dark-yellow">
                        <a href="instructor-details.html" class="w-100 h-100 d-flex align-items-end">
                            <img src="{{ asset('') }}frontend/images/thumbs/instructor-img2.png" alt="Course Image"
                                class="scale-hover-item__img rounded-12 cover-img transition-2">
                        </a>
                    </div>
                    <div class="p-24 position-relative">
                        <div class="social-infos">
                            <ul class="social-list flex-align flex-column gap-12 mb-12">
                                <li class="social-list__item">
                                    <a href="https://www.facebook.com"
                                        class=" flex-center border border-white text-white w-44 h-44 rounded-circle text-xl hover-text-main hover-bg-white"><i
                                            class="ph-bold ph-facebook-logo"></i></a>
                                </li>
                                <li class="social-list__item">
                                    <a href="https://www.twitter.com"
                                        class=" flex-center border border-white text-white w-44 h-44 rounded-circle text-xl hover-text-main hover-bg-white">
                                        <i class="ph-bold ph-twitter-logo"></i></a>
                                </li>
                                <li class="social-list__item">
                                    <a href="https://www.linkedin.com"
                                        class=" flex-center border border-white text-white w-44 h-44 rounded-circle text-xl hover-text-main hover-bg-white"><i
                                            class="ph-bold ph-instagram-logo"></i></a>
                                </li>
                            </ul>
                            <button
                                class="social-infos__button flex-center w-44 h-44 bg-white text-main-600 rounded-circle text-2xl transition-2">
                                <i class="ph-bold ph-plus"></i>
                            </button>
                        </div>
                        <div class="">
                            <h4 class="mb-28 pb-24 border-bottom border-neutral-50 mb-24 border-dashed border-0">
                                <a href="instructor-details.html" class="link text-line-2">John Doe</a>
                            </h4>
                            <div class="flex-between gap-8 flex-wrap mb-16">
                                <div class="flex-align gap-8">
                                    <span class="text-neutral-700 text-2xl d-flex"><i
                                            class="ph-bold ph-lightbulb"></i></span>
                                    <span class="text-neutral-700 text-lg fw-medium">WordPress Expert</span>
                                </div>
                                <div class="flex-align gap-8">
                                    <span class="text-neutral-700 text-2xl d-flex"><i class="ph-bold ph-watch"></i></span>
                                    <span class="text-neutral-700 text-lg fw-medium">6 Course</span>
                                </div>
                            </div>
                            <div class="flex-between gap-8 flex-wrap">
                                <div class="flex-align gap-8">
                                    <span class="text-neutral-700 text-2xl d-flex"><i class="ph-bold ph-users"></i></span>
                                    <span class="text-neutral-700 text-lg fw-medium">55k Students</span>
                                </div>
                                <div class="flex-align gap-4">
                                    <span class="text-2xl fw-medium text-warning-600 d-flex"><i
                                            class="ph-fill ph-star"></i></span>
                                    <span class="text-lg text-neutral-700">
                                        4.6
                                        <span class="text-neutral-100">(2.4k)</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="pt-24 border-top border-neutral-50 mt-28 border-dashed border-0">
                            <a href="instructor-details.html"
                                class="flex-align gap-8 text-main-600 hover-text-decoration-underline transition-1 fw-semibold"
                                tabindex="0">
                                View Profile
                                <i class="ph ph-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex-align gap-16 mt-40 justify-content-center">
                <button type="button" id="instructor-prev"
                    class="slick-prev slick-arrow flex-center rounded-circle border border-gray-100 hover-border-main-600 text-xl hover-bg-main-600 hover-text-white transition-1 w-48 h-48">
                    <i class="ph ph-caret-left"></i>
                </button>
                <button type="button" id="instructor-next"
                    class="slick-next slick-arrow flex-center rounded-circle border border-gray-100 hover-border-main-600 text-xl hover-bg-main-600 hover-text-white transition-1 w-48 h-48">
                    <i class="ph ph-caret-right"></i>
                </button>
            </div>

        </div>
    </section> --}}
    <!-- ================================ Instructor Section End ==================================== -->

    <!-- ===================================== Event Section Start ================================= -->
    <section class="event py-120 overflow-hidden">
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-8 pe-lg-5">
                    <div class="section-heading style-left">
                        <div class="flex-align d-inline-flex gap-8 mb-16 wow bounceInDown">
                            <span class="text-main-600 text-2xl d-flex"><i class="ph-bold ph-book-open"></i></span>
                            <h5 class="text-main-600 mb-0">Event yang akan datang!</h5>
                        </div>
                        <h2 class="mb-24 wow bounceInRight">Ikuti Acara Kami yang Akan Datang </h2>
                        <p class="text-neutral-500 text-line-4 wow bounceInUp">JBergabunglah bersama kami dalam berbagai
                            acara menarik yang sesuai dengan minat dan kebutuhan belajar Anda. Acara kami dirancang untuk
                            menginspirasi dan memberikan wawasan baru.
                        </p>
                    </div>

                    @foreach ($events as $event)
                        <div class="event-item-wrapper overflow-x-auto scroll-sm scroll-sm-horizontal pb-4">
                            <div class="event-item bg-main-25 rounded-12 p-24 d-flex align-items-center border border-neutral-20 min-width-max-content hover-bg-main-600 hover-border-main-600 hover-text-white transition-1 mb-24"
                                data-aos="fade-up-left" data-aos-duration="200">
                                <div class="">
                                    <h3 class="mb-8 text-main-600">{{ dateFormatDay($event->start_date) }}</h3>
                                    <span class="text-neutral-500">{{ dateFormatMonth($event->start_date) }},
                                        {{ dateFormatYear($event->start_date) }}</span>
                                </div>
                                <span class="border border-neutral-40 border-dashed h-72"></span>
                                <div class="">
                                    <div class="flex-between gap-16 flex-wrap mb-16">
                                        <div class="flex-align gap-8">
                                            <span class="text-neutral-700 text-lg d-flex"><i
                                                    class="ph-bold ph-clock"></i></span>
                                            <span class="text-neutral-700 text-lg fw-normal">{{ $event->start_time }}
                                                WIB</span>
                                        </div>
                                        <div class="flex-align gap-8">
                                            <span class="text-neutral-700 text-lg d-flex"><i
                                                    class="ph-bold ph-map-trifold"></i></span>
                                            <span
                                                class="text-neutral-700 text-lg fw-normal">{{ $event->eventLocation->location_name }}</span>
                                        </div>
                                    </div>
                                    <h4 class="mt-12 mb-0">{{ $event->event_name }}</h4>
                                </div>
                                <span class="border border-neutral-40 border-dashed h-72"></span>
                                <div class="flex-shrink-0">
                                    <a href="about.html"
                                        class="btn btn-outline-main rounded-pill flex-align d-inline-flex gap-8">
                                        Join Now
                                        <i class="ph-bold ph-arrow-up-right d-flex text-lg"></i>
                                    </a>
                                </div>
                            </div>

                        </div>
                    @endforeach

                    <a href="{{ route('events') }}"
                        class="btn btn-outline-main rounded-pill flex-align d-inline-flex gap-8 mt-40">
                        Lihat Semua Event
                        <i class="ph-bold ph-arrow-up-right d-flex text-lg"></i>
                    </a>

                </div>
                <div class="col-lg-4">
                    <div class="event-video rounded-16 overflow-hidden position-relative h-100 wow bounceIn">
                        <img src="{{ asset('frontend/images/youtube/cover-event.jpg') }}" class="rounded-16 cover-img"
                            alt="" data-tilt data-tilt-max="8" data-tilt-speed="500"
                            data-tilt-perspective="5000" data-tilt-transition="1s" data-tilt-full-page-listening>
                        <a href="https://www.youtube.com/watch?v=y9UwPt_vnP0"
                            class="play-button position-absolute start-50 top-50 translate-middle z-1 w-72 h-72 flex-center bg-main-two-600 text-white rounded-circle text-2xl">
                            <i class="ph-fill ph-play"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ===================================== Event Section End ================================= -->


    <!-- ================================= testimonials Section Start ========================================= -->
    <section class="testimonials py-120 position-relative z-1 bg-main-25">
        <img src="{{ asset('') }}frontend/images/shapes/shape2.png" alt=""
            class="shape six animation-scalation">
        <img src="{{ asset('') }}frontend/images/shapes/shape3.png" alt=""
            class="shape four animation-rotation">

        <div class="container">
            <div class="row gy-5">
                <div class="col-lg-6">
                    <div class="testimonials__thumbs-slider pe-lg-5 me-xxl-5">
                        @foreach ($testimonials as $testimonial)
                            <div class="testimonials__thumbs wow bounceIn" data-tilt data-tilt-max="15"
                                data-tilt-speed="500" data-tilt-perspective="5000" data-tilt-full-page-listening>
                                <img src="{{ asset('storage') . '/' . $testimonial->image }}" alt="">
                            </div>
                        @endforeach

                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="testimonials__content">
                        <div class="section-heading style-left">
                            <div class="flex-align gap-8 mb-16 wow bounceInDown">
                                <span class="w-8 h-8 bg-main-600 rounded-circle"></span>
                                <h5 class="text-main-600 mb-0">Apa kata mereka?</h5>
                            </div>
                            <h2 class="mb-24 wow bounceIn">Testimoni Siswa dan Alumni</h2>
                            <p class="text-neutral-500 text-line-2 wow bounceInUp">Pengalaman yang Menginspirasi, Menjadi
                                Bukti Keberhasilan Pendidikan yang Berkualitas.</p>
                        </div>

                        <div class="testimonials__slider">
                            @foreach ($testimonials as $testimonial)
                                <div class="testimonials-item">

                                    <p class="text-neutral-700" data-aos="fade-left" data-aos-duration="1200"> "
                                        {{ strip_tags($testimonial->content) }} "</p>
                                    <h4 class="mt-48 mb-8" data-aos="fade-left">{{ $testimonial->name }}</h4>
                                    <span class="text-neutral-700"
                                        data-aos="fade-left">{{ $testimonial->status_position }}</span>
                                </div>
                            @endforeach

                        </div>
                        <div class="flex-align gap-16 mt-40">
                            <button type="button" id="testimonials-prev"
                                class="slick-prev slick-arrow flex-center rounded-circle border border-gray-100 hover-border-main-600 text-xl hover-bg-main-600 hover-text-white transition-1 w-48 h-48">
                                <i class="ph ph-caret-left"></i>
                            </button>
                            <button type="button" id="testimonials-next"
                                class="slick-next slick-arrow flex-center rounded-circle border border-gray-100 hover-border-main-600 text-xl hover-bg-main-600 hover-text-white transition-1 w-48 h-48">
                                <i class="ph ph-caret-right"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ================================= testimonials Section End ========================================= -->

    <!-- ================================= Blog Section Start ========================================= -->
    <section class="blog py-120 mash-bg-main mash-bg-main-two position-relative">
        <img src="{{ asset('') }}frontend/images/shapes/shape2.png" alt=""
            class="shape two animation-scalation">
        <img src="{{ asset('') }}frontend/images/shapes/shape6.png" alt=""
            class="shape four animation-scalation">

        <div class="container">
            <div class="section-heading text-center">
                <h2 class="mb-24 wow bounceIn">Berita Terbaru</h2>
                <p class="wow bounceInUp">Tetap up-to-date dengan Berita Terbaru kami, yang menghadirkan kabar tentang
                    perkembangan pendidikan, program unggulan, dan berbagai acara menarik yang berlangsung di lingkungan
                    sekolah</p>
            </div>
            <div class="row gy-4">
                @foreach ($blogs as $blog)
                    <div class="col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="200">
                        <div class="blog-item scale-hover-item bg-main-25 rounded-16 p-12 h-100 border border-neutral-30">
                            <div class="rounded-12 overflow-hidden position-relative">
                                <a href="{{ route('blogs-detail', $blog->slug) }}" class="w-100 h-100">
                                    <img src="{{ asset('storage') . '/' . $blog->image }}" alt="Blog Image"
                                        class="scale-hover-item__img rounded-12 cover-img transition-2">
                                </a>
                            </div>
                            <div class="p-24 pt-32">
                                <div class="">
                                    <span
                                        class="px-20 py-8 bg-main-two-600 rounded-8 text-white fw-medium mb-20">{{ $blog->categories->name }}</span>
                                    <h4 class="mb-28">
                                        <a href="{{ route('blogs-detail', $blog->slug) }}"
                                            class="link text-line-2">{{ $blog->title }}</a>
                                    </h4>
                                    <div class="flex-align gap-14 flex-wrap my-20">
                                        <div class="flex-align gap-8">
                                            <span class="text-neutral-500 text-2xl d-flex"><i
                                                    class="ph ph-user-circle"></i></span>
                                            <span class="text-neutral-500 ">{{ $blog->author->name }}</span>
                                        </div>
                                        <span class="w-8 h-8 bg-neutral-100 rounded-circle"></span>
                                        <div class="flex-align gap-8">
                                            <span class="text-neutral-500 text-2xl d-flex"><i
                                                    class="ph ph-calendar-dot"></i></span>
                                            <span class="text-neutral-500">{{ dateFormat($blog->created_at) }}</span>
                                        </div>

                                    </div>
                                    <p class="text-neutral-500 text-line-2"> {{ strip_tags($blog->description) }}</p>
                                </div>
                                <div class="pt-24 border-top border-neutral-50 mt-28 border-dashed border-0">
                                    <a href="{{ route('blogs-detail', $blog->slug) }}"
                                        class="flex-align gap-8 text-main-600 hover-text-decoration-underline transition-1 fw-semibold"
                                        tabindex="0">
                                        Selengkapnya
                                        <i class="ph ph-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- ================================= Blog Section End ========================================= -->



    <!-- ================================= Certificate Section End ================================= -->
@endsection
