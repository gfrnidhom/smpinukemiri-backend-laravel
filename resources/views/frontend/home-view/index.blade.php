@extends('frontend._partials.main')


@section('main-content')
    <!--==============================
                                                                                                                                                                                                                                                                                                            Hero Area
                                                                                                                                                                                                                                                                                                            ==============================-->
    <div class="th-hero-wrapper hero-14" data-bg-src="{{ asset('frontend') }}/img/update1/bg/category_bg_1.jpg" id="hero">
        <div class="container">
            <div class="row align-items-center">
                <!-- Kolom Teks -->
                <div class="col-lg-6">
                    <div class="hero-style14 pt-100 pb-100">
                        <span class="hero-name">{{ $settings['site_name'] }}</span>
                        <h1 class="hero-title">Memberikan yang</h1>
                        <h1 class="hero-title">Terbaik Bagi Siswa</h1>
                        <p class="hero-text">{{ strip_tags($settings['description_sort']) }}</p>
                        <div class="btn-group">
                            <a href="{{ route('profileSchool') }}" class="th-btn">Lihat Selengkapnya<i class="fas fa-long-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <!-- Kolom Gambar -->
                <div class="col-lg-6 text-center text-lg-end">
                    <div class="hero-img-box mt-4 mt-lg-0 pb-5 pb-lg-0">
                        <img src="{{ $settings['home_image'] }}" alt="Hero Image" class="img-fluid rounded-4 shadow-sm" style="max-height: 500px; object-fit: contain;">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="space" id="about-sec">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-5 mb-30 mb-xl-0">
                    <div class="img-box11">
                        <div class="img1">
                            <img src="{{ $settings['school_image'] }}" alt="about" height="601px">
                        </div>
                    </div>
                </div>
                <div class="col-xl-7">
                    <div class="ps-xxl-5 ms-xl-2">
                        <div class="title-area mb-35">
                            <span class="sub-title">Tentang Kami</span>
                            <h2 class="sec-title fw-semibold">{{ strip_tags($settings['vision']) }}</h2>
                        </div>
                        <p class="mt-n2 mb-35">{{ strip_tags($settings['description_sort']) }}</p>
                        <a href="{{ route('profileSchool') }}" class="th-btn">Lihat Selengkapnya<i class="fas fa-long-arrow-right ms-2"></i></a>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--==============================
                                                                                                                                                                                                                                                                                                            Course Area
                                                                                                                                                                                                                                                                                                            ==============================-->
    <!--==============================
                                                                                                                            Feature Area
                                                                                                                            ==============================-->
    <section class="space-top feature-sec">
        <div class="container">
            <div class="row gy-4 justify-content-center">
                <div class="col-xl-3 col-md-6">
                    <div class="feature-list">
                        <div class="feature-list_icon">
                            <i class="fal fa-landmark"></i>
                        </div>
                        <h3 class="feature-list_title"><a href="{{ route('profileSchool') }}">Pendidikan Berkualitas</a></h3>
                        <p class="feature-list_text">Kurikulum yang inovatif dan tenaga
                            pendidik profesional untuk mendukung perkembangan akademik dan karakter siswa.</p>
                        <a href="{{ route('profileSchool') }}" class="icon-btn"><i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="feature-list">
                        <div class="feature-list_icon">
                            <i class="fal fa-user-graduate"></i>
                        </div>
                        <h3 class="feature-list_title"><a href="{{ route('profileSchool') }}">Berdampak</a></h3>
                        <p class="feature-list_text">Program dan kegiatan yang melibatkan
                            komunitas untuk menciptakan lingkungan yang lebih baik dan berdaya.</p>
                        <a href="{{ route('profileSchool') }}" class="icon-btn"><i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="feature-list">
                        <div class="feature-list_icon">
                            <i class="fal fa-graduation-cap"></i>
                        </div>
                        <h3 class="feature-list_title"><a href="{{ route('profileSchool') }}">Fasilitas Nyaman</a></h3>
                        <p class="feature-list_text">Sarana dan prasarana yang mendukung
                            proses belajar
                            mengajar serta pengembangan keterampilan siswa.</p>
                        <a href="{{ route('profileSchool') }}" class="icon-btn"><i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="feature-list">
                        <div class="feature-list_icon">
                            <i class="fal fa-book-open-cover"></i>
                        </div>
                        <h3 class="feature-list_title"><a href="{{ route('profileSchool') }}">Pendekatan Inklusif</a></h3>
                        <p class="feature-list_text">Memberikan perhatian khusus pada setiap
                            siswa untuk
                            memastikan mereka berkembang sesuai dengan potensi terbaiknya.</p>
                        <a href="{{ route('profileSchool') }}" class="icon-btn"><i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
                        serta program inovatif yang membangun karakter dan keterampilan. Melalui kolaborasi dan dedikasi,
                        kami berusaha menciptakan dampak positif yang berkelanjutan bagi generasi mendatang.</p>
                    <div class="row gy-30">
                        <div class="list-column2 mb-45">
                            <div class="checklist style4">
                                <ul>
                                    <li>Inovatif.</li>
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
                                                                                                                                                                                                                                                                                                            Counter Area
                                                                                                                                                                                                                                                                                                            ==============================-->
    <div class="counter-area-2 " style="background: #036c37">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-sm-6 col-xl-3 counter-card-wrap">
                    <div class="counter-card">
                        <h2 class="counter-card_number"><span class="counter-number">{{ $totalStudents }}</span><span
                                class="fw-normal">+</span></h2>
                        <p class="counter-card_text">Total<strong> Siswa</strong></p>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3 counter-card-wrap">
                    <div class="counter-card">
                        <h2 class="counter-card_number"><span class="counter-number">{{ $totalTeachers }}</span><span
                                class="fw-normal">+</span></h2>
                        <p class="counter-card_text">Total<strong> Guru</strong></p>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3 counter-card-wrap">
                    <div class="counter-card">
                        <h2 class="counter-card_number"><span class="counter-number">{{ $totalClasses }}</span><span
                                class="fw-normal">+</span></h2>
                        <p class="counter-card_text">Total <strong>Kelas</strong></p>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3 counter-card-wrap">
                    <div class="counter-card">
                        <h2 class="counter-card_number"><span class="counter-number">{{ $totalExtra }}</span><span
                                class="fw-normal">+</span></h2>
                        <p class="counter-card_text">Total<strong></strong> Ekstrakurikuler</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--==============================
                                                                                                                                                                                                                                                                                                            Product Area
                                                                                                                                                                                                                                                                                                            ==============================-->

    <!--==============================
                                                                                                                                                                                                                                                                                                            Testimonial Area
                                                                                                                                                                                                                                                                                                            ==============================-->
    <section class="space-bottom bg-auto mt-5" data-bg-src="{{ asset('frontend') }}/img/update1/bg/testi_bg_4.png">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 mb-5 mb-xl-0">
                    <div class="testi-block-wrap">
                        <div class="title-area mb-30">
                            <span class="sub-title">Apa Kata Siswa</span>
                            <h2 class="sec-title fw-semibold">Testimoni Siswa</h2>
                            <p class="sec-text">Pendidikan Berkualitas, Lingkungan Positif, Semua Ada di SMP Nurul Islam!
                            </p>
                        </div>
                        <div class="testi-block-slide th-carousel" data-slide-show="1" data-fade="true">
                            @foreach ($testimonials as $item)
                                <div class="">
                                    <div class="testi-block">
                                        <p class="testi-block_text"><i
                                                class="fa-solid fa-quote-left"></i>{{ strip_tags($item->content) }}<i
                                                class="fa-solid fa-quote-right"></i></p>
                                        <div class="testi-block_profile">
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
                        <div class="icon-box">
                            <button data-slick-prev=".testi-block-slide" class="slick-arrow default"><i
                                    class="far fa-arrow-left"></i></button>
                            <button data-slick-next=".testi-block-slide" class="slick-arrow default"><i
                                    class="far fa-arrow-right"></i></button>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <form action="{{ route('contact-us.sendMessage') }}" method="POST" class="consult-form">
                        @csrf
                        <div class="row gx-24">
                            <div class="col-md-6">
                                <div class="form-group ">
                                    <input type="text" class="form-control" name="name" id="name"
                                        placeholder="Enter Your Name" value="{{ old('name') }}"
                                        @error('name') is-invalid @enderror required>
                                    <i class="fal fa-user"></i>
                                    @error('name')
                                        <div class="alert text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Email Address" @error('email') is-invalid @enderror
                                        value="{{ old('email') }}" required>
                                    <i class="fal fa-envelope"></i>
                                    @error('email')
                                        <div class="alert text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <input type="tel" class="form-control" name="no_telp" id="no_telp"
                                        placeholder="Phone Number" @error('no_telp') is-invalid @enderror
                                        value="{{ old('no_telp') }}" required>
                                    <i class="fal fa-phone"></i>
                                    @error('no_telp')
                                        <div class="alert text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group col-12">
                                <textarea name="message" id="message" cols="30" rows="3" class="form-control" placeholder="Message"
                                    @error('message') is-invalid @enderror required> {{ old('message') }}</textarea>
                                <i class="fal fa-comment"></i>
                                @error('message')
                                    <div class="alert text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-btn col-12">
                                <button type="submit" class="th-btn">Send Message<i
                                        class="far fa-arrow-right ms-2"></i></button>
                            </div>
                        </div>
                        <p class="form-messages mb-0 mt-3"></p>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!--==============================
                                                                                                                                                                                                                                                                                                            Blog Area
                                                                                                                                                                                                                                                                                                            ==============================-->
    <section class="overflow-hidden space gr-bg2" id="blog-sec">
        <div class="container">
            <div class="mb-35 text-center text-md-start">
                <div class="row align-items-center justify-content-between">
                    <div class="col-md-8">
                        <div class="title-area mb-md-0">
                            <span class="sub-title"><i class="fal fa-book me-2"></i> Berita & Blog Kami</span>
                            <h2 class="sec-title">Berita & Blog Terbaru</h2>
                        </div>
                    </div>
                    <div class="col-md-auto">
                        <a href="{{ route('blogs') }}" class="th-btn">Lihat Semua Berita<i
                                class="fa-solid fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
            <div class="row slider-shadow th-carousel blog-slider-1" data-slide-show="3" data-lg-slide-show="2"
                data-md-slide-show="2" data-sm-slide-show="1" data-arrows="true">
                @foreach ($blogs as $blog)
                    <div class="col-md-6 col-xl-4">
                        <div class="th-blog blog-single style2">
                            <div class="blog-img">
                                <a href="{{ url('blogs', $blog->slug) }}"><img src="{{ asset('storage' . '/' . $blog->image) }}"
                                        alt="Blog Image"></a>
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <a class="author" href="{{ route('blogs') }}"><i class="fa-light fa-user"></i>by
                                        {{ $blog->author->name }}</a>
                                    <a href="{{ route('blogs') }}"><i
                                            class="fa-light fa-clock"></i>{{ \Carbon\Carbon::parse($blog->created_at)->format('d M Y') }}</a>
                                </div>
                                <h4 class="box-title text-title-blogs"><a
                                        href="{{ url('blogs', $blog->slug) }}">{{ $blog->title }}</a>
                                </h4>
                                <a href="{{ route('blogs-detail', $blog->slug) }}" class="link-btn">Baca Selengkapnya<i
                                        class="fas fa-arrow-right ms-2"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
        </div>
    </section>
@endsection
