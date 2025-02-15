@extends('frontend._partials.main')


@section('main-content')
    <!-- ==================== Breadcrumb Start Here ==================== -->
    <section class="breadcrumb py-120 bg-main-25 position-relative z-1 overflow-hidden mb-0">
        {{-- <img src="{{ asset('') }}frontend/images/shapes/shape1.png" alt="" class="shape one animation-rotation d-md-block d-none"> --}}
        <img src="{{ asset('') }}frontend/images/shapes/shape2.png" alt=""
            class="shape two animation-scalation d-md-block d-none">
        {{-- <img src="{{ asset('') }}frontend/images/shapes/shape3.png" alt="" class="shape eight animation-walking d-md-block d-none"> --}}
        {{-- <img src="{{ asset('') }}frontend/images/shapes/shape5.png" alt="" class="shape six animation-walking d-md-block d-none"> --}}
        <img src="{{ asset('') }}frontend/images/shapes/shape4.png" alt="" class="shape four animation-scalation">
        {{-- <img src="{{ asset('') }}frontend/images/shapes/shape4.png" alt="" class="shape nine animation-scalation"> --}}

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="breadcrumb__wrapper">
                        <h1 class="breadcrumb__title display-4 fw-semibold text-center"> Tentang Kami</h1>
                        <ul class="breadcrumb__list d-flex align-items-center justify-content-center gap-4">
                            <li class="breadcrumb__item">
                                <a href="{{ route('home') }}"
                                    class="breadcrumb__link text-neutral-500 hover-text-main-600 fw-medium">
                                    <i class="text-lg d-inline-flex ph-bold ph-house"></i> Beranda</a>
                            </li>
                            <li class="breadcrumb__item">
                                <i class="text-neutral-500 d-flex ph-bold ph-caret-right"></i>
                            </li>
                            <li class="breadcrumb__item">
                                <a href="course.html"
                                    class="breadcrumb__link text-neutral-500 hover-text-main-600 fw-medium"> </a>
                            </li>
                            <li class="breadcrumb__item d-none">
                                <i class="text-neutral-500 d-flex ph-bold ph-caret-right"></i>
                            </li>
                            <li class="breadcrumb__item">
                                <span class="text-main-two-600"> Tentang Kami </span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==================== Breadcrumb End Here ==================== -->
    <!-- ================================ About Three Section Start ==================================== -->
    <section class="about-three pt-120 position-relative z-1">
        <div class="position-relative">
            <div class="container">
                <div class="row gy-xl-0 gy-5 flex-wrap-reverse align-items-center">
                    <div class="col-xl-6 pe-xl-5">
                        <div class="about-three-thumbs position-relative me-xxl-5">
                            <div class="row gy-4">
                                <div class="col-sm-8">
                                    <img src="{{ asset('frontend/images/youtube/cover-event.jpg') }}" alt=""
                                        class="about-three-thumbs__one rounded-16 " width="900px">
                                </div>
                                <div class="col-sm-4">

                                    <img src="{{ asset('frontend/images/home/home-slider.png') }}" alt=""
                                        class="about-three-thumbs__two rounded-16 w-100">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="about-three-content">
                            <div class="mb-40">
                                <div class="flex-align d-inline-flex gap-8 mb-16">
                                    <span class="text-main-600 text-2xl d-flex"><i class="ph-bold ph-book-open"></i></span>
                                    <h5 class="text-main-600 mb-0">Tentang Kami</h5>
                                </div>
                                <h2 class="mb-24">Mewadahi Bakat dan Minat Meraih Masa Depan</h2>
                                <p class="text-neutral-500 text-line-2">etiap anak dilahirkan memiliki
                                    kelebihan dan kekurangan masing-masing, unik dan tidak ada yang bisa menyamainya.
                                    Berangkat
                                    dari itu SMP Negeri 2 Purwosari SMP Negeri 2 Purwosari tidak hanya fokus pada kemampuan
                                    akademik semata, namun juga aneka potensi siswa</p>
                            </div>

                            <div class="grid-cols-2">
                                @foreach ($programs as $program)
                                    <div class="flex-align align-items-start gap-20 animation-item">
                                        <span
                                            class="flex-shrink-0 w-60 h-60 flex-center d-inline-flex bg-white text-main-600 text-40 rounded-16 box-shadow-md">
                                            <img src="{{ asset('storage') . '/' . $program->image }}" width="40px"
                                                class="animate__swing" alt="">
                                        </span>
                                        <div class="flex-grow-1">
                                            <h6 class="text-neutral-800 text-xl fw-medium mb-8">{{ $program->program_name }}
                                            </h6>
                                            <div class="flex-align gap-8 text-neutral-500 text-line-2"
                                                style="font-size: 12px">

                                                {{ strip_tags($program->description) }}
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                            </div>

                            <div class="pt-40 border-top border-neutral-50 mt-40 border-dashed border-0">
                                <a href="{{ route('flagship-programs') }}"
                                    class="btn btn-main rounded-pill flex-align d-inline-flex gap-8">
                                    Lihat Program
                                    <i class="ph-bold ph-arrow-up-right d-flex text-lg"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- ================================ About Three Section End ==================================== -->

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

    <!-- ========================== Brand Section Start =========================== -->
    {{-- <div class="brand wow fadeInUpBig" data-wow-duration="1s" data-wow-delay=".5s">
        <div class="container container--lg">
            <div class="brand-box py-80 px-16 ">
                <h5 class="mb-40 text-center text-neutral-500">TRUSTED BY OVER 17,300 GREAT TEAMS</h5>
                <div class="container">
                    <div class="brand-slider">
                        <div class="brand-slider__item px-24">
                            <img src="assets/images/thumbs/brand-img1.png" alt="">
                        </div>
                        <div class="brand-slider__item px-24">
                            <img src="assets/images/thumbs/brand-img2.png" alt="">
                        </div>
                        <div class="brand-slider__item px-24">
                            <img src="assets/images/thumbs/brand-img3.png" alt="">
                        </div>
                        <div class="brand-slider__item px-24">
                            <img src="assets/images/thumbs/brand-img4.png" alt="">
                        </div>
                        <div class="brand-slider__item px-24">
                            <img src="assets/images/thumbs/brand-img5.png" alt="">
                        </div>
                        <div class="brand-slider__item px-24">
                            <img src="assets/images/thumbs/brand-img6.png" alt="">
                        </div>
                        <div class="brand-slider__item px-24">
                            <img src="assets/images/thumbs/brand-img7.png" alt="">
                        </div>
                        <div class="brand-slider__item px-24">
                            <img src="assets/images/thumbs/brand-img3.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- ========================== Brand Section End =========================== -->

    <!-- =================================== Video Section Start ============================= -->
    <section class="video">
        <div class="container">
            <div class="section-heading text-center">
                <div class="flex-align d-inline-flex gap-8 mb-16">
                    <span class="text-main-600 text-2xl d-flex"><i class="ph-bold ph-book-open"></i></span>
                    <h5 class="text-main-600 mb-0">Kegiatan Sekolah</h5>
                </div>
                <h2 class="mb-24">PRADA Higlights</h2>
                <p class="">Selamat datang di kampus kami yang penuh semangat, di mana pembelajaran menjadi hidup
                    dalam lingkungan yang dinamis dan inspiratif..</p>
            </div>
        </div>

        <div class="video-img position-relative half-bg">
            <div class="container">
                <img src="{{ asset('storage/cover/cover-about-us.jpg') }}" class="rounded-12 cover-img" alt="">
                <a href="https://www.youtube.com/watch?v=oFbaCU16pwk"
                    class="play-button position-absolute start-50 top-50 translate-middle z-1 w-72 h-72 flex-center bg-main-two-600 text-white rounded-circle text-2xl">
                    <i class="ph-fill ph-play"></i>
                </a>
            </div>
        </div>
    </section>
    <!-- =================================== Video Section End ============================= -->

    <!-- ===================================== Testimonials Section Three Start ================================= -->
    <section class="testimonials-three py-120 bg-main-25 position-relative z-1 overflow-hidden">
        <img src="assets/images/shapes/shape2.png" alt="" class="shape two animation-scalation">
        <img src="assets/images/shapes/shape6.png" alt="" class="shape four animation-scalation">
        <img src="assets/images/shapes/shape4.png" alt="" class="shape one animation-scalation">

        <div class="container">
            <div class="row gy-4 align-items-center flex-wrap-reverse">
                <div class="col-xl-7">
                    <div class="testimonials-three-slider">
                        @foreach ($testimonials as $testi)
                            <div class="testimonials-three-item bg-white p-24 rounded-12 box-shadow-md">
                                <div class="w-90 h-90 rounded-circle position-relative mb-4">
                                    <img src="{{ asset('storage') . '/' . $testi->image }}" alt=""
                                        class="cover-img rounded-circle">
                                    <span
                                        class="w-40 h-40 bg-main-two-600 flex-center border border-white border-2 rounded-circle position-absolute inset-block-end-0 inset-inline-end-0 mt--5 me--5">
                                        <img src="assets/images/icons/quote-two-icon.png" alt="">
                                    </span>
                                </div>
                                <p class="text-neutral-500 my-24" style="font-size: 12px">
                                    "{{ strip_tags($testi->content) }}"</p>

                                <h4 class="mb-16 text-lg">{{ $testi->name }}</h4>
                                <span class="text-neutral-500"
                                    style="font-size: 12px">{{ $testi->status_position }}</span>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="col-xl-5 ps-xl-5">
                    <div class="flex-align d-inline-flex gap-8 mb-16 wow bounceInDown">
                        <span class="text-main-600 text-2xl d-flex"><i class="ph-bold ph-book-open"></i></span>
                        <h5 class="text-main-600 mb-0">Apa Kata Mereka?</h5>
                    </div>
                    <h2 class="mb-24 wow bounceInRight">Testimoni Siswa dan Alumni</h2>
                    <p class="text-neutral-500 text-line-4 wow bounceInUp">Pengalaman yang Menginspirasi, Menjadi Bukti
                        Keberhasilan Pendidikan yang Berkualitas.</p>
                    <div class="flex-align gap-16 mt-40">
                        <button type="button" id="testimonials-three-prev"
                            class="slick-prev slick-arrow flex-center rounded-circle border border-gray-100 hover-border-main-600 text-xl hover-bg-main-600 hover-text-white transition-1 w-48 h-48"
                            style="">
                            <i class="ph ph-caret-left"></i>
                        </button>
                        <button type="button" id="testimonials-three-next"
                            class="slick-next slick-arrow flex-center rounded-circle border border-gray-100 hover-border-main-600 text-xl hover-bg-main-600 hover-text-white transition-1 w-48 h-48"
                            style="">
                            <i class="ph ph-caret-right"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ===================================== Testimonials Section Three End ================================= -->
@endsection
