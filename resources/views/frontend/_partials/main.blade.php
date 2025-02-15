@include('frontend._partials.header')

@include('frontend._partials.mobile-menu')

@include('frontend._partials.menu')


@yield('main-content')

<!-- ================================= Certificate Section Start ================================= -->
<div class="certificate">
    <div class="container container--lg">
        <div class="certificate-box px-16 bg-main-600 rounded-16">
            <div class="container">
                <div class="position-relative py-80">
                    <div class="row align-items-center">
                        <div class="col-xl-6">
                            <div class="certificate__content">
                                <div class="flex-align gap-8 mb-16 wow bounceInDown">
                                    <span class="w-8 h-8 bg-white rounded-circle"></span>
                                    <h5 class="text-white mb-0">Ayo!</h5>
                                </div>
                                <h2 class="text-white mb-40 fw-medium wow bounceIn">Jadikan bakat dan minatmu sebagai
                                    langkah awal meraih masa depan gemilang bersama kami!</h2>
                                <a href=""
                                    class="btn btn-white rounded-pill flex-align d-inline-flex gap-8 hover-bg-main-800 wow bounceInUp">
                                    Daftar Sekarang
                                    <i class="ph-bold ph-arrow-up-right d-flex text-lg"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-6 d-xl-block d-none">
                            <div class="certificate__thumb" data-aos="fade-up-left">
                                <img src="{{ asset('frontend/images/home/home-bottom.png') }}" alt="" width="500"
                                    data-tilt data-tilt-max="8" data-tilt-speed="500" data-tilt-perspective="5000"
                                    data-tilt-full-page-listening>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('frontend._partials.footer')
