@extends('frontend._partials.main')


@section('main-content')
    <!--==============================
        Breadcumb
    ============================== -->
    <div class="breadcumb-wrapper ">
        <div class="breadcumb-shape">
        </div>
        <div class="container">
            <div class="breadcumb-content text-center">
                <h1 class="breadcumb-title">Tentang Kami</h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{ route('home-dashboard') }}">Home</a></li>
                    <li>Tentang Kami</li>
                </ul>
            </div>
        </div>
    </div>

    <!--==============================
    About Area
    ==============================-->
    <div class="space" id="about-sec">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-5 mb-30 mb-xl-0">
                    <div class="img-box11">
                        <div class="img1">
                            <img src="{{ $settings['school_image'] }}" alt="Tentang Sekolah">
                        </div>
                    </div>
                </div>
                <div class="col-xl-7">
                    <div class="ps-xxl-5 ms-xl-2">
                        <div class="title-area mb-35">
                            <span class="sub-title"><i class="fal fa-book me-2"></i> Tentang Kami</span>
                            <h2 class="sec-title fw-semibold">{{ strip_tags($settings['vision']) }}</h2>
                        </div>
                        <p class="mt-n2 mb-35">{{ strip_tags($settings['description_sort']) }}</p>
                        <a href="{{ route('profileSchool') }}" class="th-btn">Lihat Profil Sekolah<i
                                class="fas fa-long-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--==============================
    Program / Ekstrakurikuler
    ==============================-->
    @if($programs->count() > 0)
    <section class="overflow-hidden space bg-smoke">
        <div class="container">
            <div class="title-area text-center">
                <span class="sub-title"><i class="fal fa-book me-2"></i> Program Kami</span>
                <h2 class="sec-title">Program & Ekstrakurikuler</h2>
            </div>
            <div class="row gy-4 justify-content-center">
                @foreach($programs as $program)
                <div class="col-md-6 col-lg-4">
                    <div class="service-card style3">
                        <div class="service-card-content">
                            <div class="service-card-icon">
                                <i class="fal fa-medal"></i>
                            </div>
                            <h3 class="box-title">{{ $program->name }}</h3>
                            <p class="service-card-text text-body-blogs">{{ strip_tags($program->description) }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    @endif

    <!--==============================
    Keunggulan / Video Section
    ==============================-->
    <div class="space">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 mb-45 mb-xl-0">
                    <div class="title-area text-center text-xl-start mb-35">
                        <span class="sub-title">Keunggulan Sekolah Kami</span>
                        <h2 class="sec-title fw-semibold">{{ strip_tags($settings['site_tagline']) }}</h2>
                    </div>
                    <p class="mt-n2 mb-35 text-center text-xl-start">Kami berkomitmen untuk memberikan yang terbaik bagi
                        siswa dan masyarakat sekitar dengan menyediakan pendidikan berkualitas, lingkungan yang mendukung,
                        serta program inovatif yang membangun karakter dan keterampilan.</p>
                    <div class="row gy-30">
                        <div class="list-column2 mb-45">
                            <div class="checklist style4">
                                <ul>
                                    <li>Inovatif</li>
                                    <li>Kolaboratif</li>
                                </ul>
                            </div>
                            <div class="checklist style4">
                                <ul>
                                    <li>Berdampak ke Masyarakat</li>
                                    <li>Berkelanjutan</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="ps-xxl-5 ms-xl-2">
                        <div class="video-box2">
                            <img src="{{ $settings['school_image2'] }}" alt="video">
                            <a href="{{ $settings['video_youtube1'] }}" class="play-btn popup-video"><i
                                    class="fas fa-play"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--==============================
    Testimonial Area
    ==============================-->
    @if($testimonials->count() > 0)
    <section class="space bg-auto" data-bg-src="{{ asset('frontend') }}/img/update1/bg/testi_bg_4.png">
        <div class="container">
            <div class="title-area text-center">
                <span class="sub-title">Apa Kata Siswa</span>
                <h2 class="sec-title fw-semibold">Testimoni Siswa</h2>
                <p class="sec-text">Pendidikan Berkualitas, Lingkungan Positif, Semua Ada di {{ $settings['site_name'] }}!</p>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <div class="testi-block-slide th-carousel" data-slide-show="1" data-fade="true">
                        @foreach ($testimonials as $item)
                            <div class="">
                                <div class="testi-block text-center">
                                    <p class="testi-block_text"><i
                                            class="fa-solid fa-quote-left"></i>{{ strip_tags($item->content) }}<i
                                            class="fa-solid fa-quote-right"></i></p>
                                    <div class="testi-block_profile justify-content-center">
                                        <div class="testi-block_avater">
                                            <img src="{{ asset('storage') . '/' . $item->image }}" alt="Avater"
                                                width="100px">
                                        </div>
                                        <div class="media-body">
                                            <h3 class="testi-block_name box-title">{{ $item->name }}</h3>
                                            <span class="testi-block_desig">{{ $item->status_position }}</span>
                                            <div class="testi-block_review">
                                                <i class="fa-solid fa-star-sharp"></i><i
                                                    class="fa-solid fa-star-sharp"></i><i
                                                    class="fa-solid fa-star-sharp"></i><i
                                                    class="fa-solid fa-star-sharp"></i><i
                                                    class="fa-solid fa-star-sharp"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="icon-box text-center mt-30">
                        <button data-slick-prev=".testi-block-slide" class="slick-arrow default"><i
                                class="far fa-arrow-left"></i></button>
                        <button data-slick-next=".testi-block-slide" class="slick-arrow default"><i
                                class="far fa-arrow-right"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endif

    <!--==============================
    CTA Area
    ==============================-->
    <section class="cta-area-3 ">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-30 mb-lg-0">
                    <div class="cta-card" style="background: #036c37; border-radius: 15px; padding: 40px;">
                        <div class="title-area mb-40">
                            <span class="sub-title text-white"><i class="fal fa-book me-2"></i>Visi Sekolah</span>
                            <h4 class="sec-title text-white">{{ Str::limit(strip_tags($settings['vision']), 100) }}</h4>
                        </div>
                        <a href="{{ route('visionMission') }}" class="th-btn style8">Lihat Selengkapnya<i
                                class="fas fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="cta-card" style="background: #1a4d2e; border-radius: 15px; padding: 40px;">
                        <div class="title-area mb-40">
                            <span class="sub-title text-white"><i class="fal fa-book me-2"></i>PPDB {{ date('Y') }}</span>
                            <h4 class="sec-title text-white">Daftarkan Putra/Putri Anda <br>Sekarang Juga!</h4>
                        </div>
                        <a href="{{ route('ppdb') }}" class="th-btn style8">Daftar Sekarang<i
                                class="fas fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
