<!-- ==================== Footer Start Here ==================== -->
<footer class="footer bg-main-25 position-relative z-1">
    <img src="frontend/images/shapes/shape2.png" alt="" class="shape five animation-scalation">
    <img src="frontend/images/shapes/shape6.png" alt="" class="shape one animation-scalation">

    <div class="py-120 ">
        <div class="container container-two">
            <div class="row row-cols-xxl-5 row-cols-lg-3 row-cols-sm-2 row-cols-1 gy-5">
                <div class="col" data-aos="fade-up" data-aos-duration="300">
                    <div class="footer-item">
                        <div class="footer-item__logo">
                            <a href="{{ route('home') }}"> <img
                                    src="{{ asset('frontend/images/logo/logo-colour.png') }}" alt=""></a>
                        </div>
                        <p class="my-32">Mewadahi Bakat dan Minat Meraih Masa Depan</p>
                        <ul class="social-list flex-align gap-24">
                            <li class="social-list__item">
                                <a href="https://www.facebook.com"
                                    class="text-main-600 text-2xl hover-text-main-two-600"><i
                                        class="ph-bold ph-facebook-logo"></i></a>
                            </li>
                            <li class="social-list__item">
                                <a href="https://www.twitter.com"
                                    class="text-main-600 text-2xl hover-text-main-two-600"> <i
                                        class="ph-bold ph-twitter-logo"></i></a>
                            </li>
                            <li class="social-list__item">
                                <a href="https://www.linkedin.com"
                                    class="text-main-600 text-2xl hover-text-main-two-600"><i
                                        class="ph-bold ph-instagram-logo"></i></a>
                            </li>
                            <li class="social-list__item">
                                <a href="https://www.pinterest.com"
                                    class="text-main-600 text-2xl hover-text-main-two-600"><i
                                        class="ph-bold ph-pinterest-logo"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col" data-aos="fade-up" data-aos-duration="400">
                    <div class="footer-item">
                        <h4 class="footer-item__title mb-32">Halaman</h4>
                        <ul class="footer-menu">
                            <li class="mb-16">
                                <a href=""
                                    class="text-neutral-500 hover-text-main-600 hover-text-decoration-underline">Program</a>
                            </li>
                            <li class="mb-16">
                                <a href="{{ route('events') }}"
                                    class="text-neutral-500 hover-text-main-600 hover-text-decoration-underline">Event</a>
                            </li>
                            <li class="mb-16">
                                <a href=""
                                    class="text-neutral-500 hover-text-main-600 hover-text-decoration-underline">Team</a>
                            </li>
                            <li class="mb-16">
                                <a href="{{ route('contact-us') }}"
                                    class="text-neutral-500 hover-text-main-600 hover-text-decoration-underline">Kontak</a>
                            </li>

                        </ul>
                    </div>
                </div>
                <div class="col" data-aos="fade-up" data-aos-duration="600">
                    <div class="footer-item">
                        <h4 class="footer-item__title mb-32">Kategori</h4>
                        <ul class="footer-menu">
                            <li class="mb-16">
                                <a href="courses.html"
                                    class="text-neutral-500 hover-text-main-600 hover-text-decoration-underline">Berita</a>
                            </li>
                            <li class="mb-16">
                                <a href="courses.html"
                                    class="text-neutral-500 hover-text-main-600 hover-text-decoration-underline">Pengembangan
                                    Talenta</a>
                            </li>
                            <li class="mb-16">
                                <a href="courses.html"
                                    class="text-neutral-500 hover-text-main-600 hover-text-decoration-underline">Kilas
                                    Event</a>
                            </li>

                        </ul>
                    </div>
                </div>
                <div class="col" data-aos="fade-up" data-aos-duration="800">
                    <div class="footer-item">
                        <h4 class="footer-item__title mb-32">Kontak Kami</h4>
                        <div class="flex-align gap-20 mb-24">
                            <span class="icon d-flex text-32 text-main-600"><i class="ph ph-phone"></i></span>
                            <div class="">
                                <a href="tel:(207)555-0119"
                                    class="text-neutral-500 d-block hover-text-main-600 mb-4">0882 2614 9241</a>

                            </div>
                        </div>
                        <div class="flex-align gap-20 mb-24">
                            <span class="icon d-flex text-32 text-main-600"><i class="ph ph-envelope-open"></i></span>
                            <div class="">
                                <a href="mailto:dwallo@gmail.com"
                                    class="text-neutral-500 d-block hover-text-main-600 mb-4">smp.pelem@gmail.com</a>

                            </div>
                        </div>
                        <div class="flex-align gap-20 mb-24">
                            <span class="icon d-flex text-32 text-main-600"><i class="ph ph-map-trifold"></i></span>
                            <div class="">
                                <span class="text-neutral-500 d-block mb-4">Purwosari, Bojonegoro, jawa Timur</span>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col" data-aos="fade-up" data-aos-duration="1000">
                    <div class="footer-item">
                        <h4 class="footer-item__title mb-32">Berlangganan di sini</h4>
                        <p class="text-neutral-500">Masukkan alamat email Anda untuk mendaftar langganan newsletter
                            kami
                        </p>
                        <form action="#" class="mt-24 position-relative">
                            <input type="email"
                                class="form-control bg-white shadow-none border border-neutral-30 rounded-pill h-52 ps-24 pe-40 focus-border-main-600"
                                placeholder="Email...">
                            <button type="submit"
                                class="w-36 h-36 flex-center rounded-circle bg-main-600 text-white hover-bg-main-800 position-absolute top-50 translate-middle-y inset-inline-end-0 me-8">
                                <i class="ph ph-paper-plane-tilt"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <!-- bottom Footer -->
        <div class="bottom-footer bg-main-25 border-top border-dashed border-main-100 border-0 py-32">
            <div class="container container-two">
                <div class="bottom-footer__inner flex-between gap-3 flex-wrap">
                    <p class="bottom-footer__text" data-aos="fade-right" data-aos-duration="1000"> Copyright &copy;
                        {{ \Carbon\Carbon::now()->format('Y') }} <span class="fw-semibold">SMP
                            Negeri 2 Purwosari</span> All Rights
                        Reserved.</p>
                    <div class="footer-links" data-aos="fade-left" data-aos-duration="1000">
                        <a href="#"
                            class="text-neutral-500 hover-text-main-600 hover-text-decoration-underline">Privacy
                            Policy</a>
                        <a href="#"
                            class="text-neutral-500 hover-text-main-600 hover-text-decoration-underline">Terms &
                            Conditions</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- ==================== Footer End Here ==================== -->


<!-- Jquery js -->
<script src="{{ asset('frontend/js/jquery-3.7.1.min.js') }}"></script>
<!-- Bootstrap Bundle Js -->
<script src="{{ asset('frontend/js/boostrap.bundle.min.js') }}"></script>
<!-- select2 Js -->
<script src="{{ asset('frontend/js/select2.min.js') }}"></script>
<!-- Phosphor Icon Js -->
<script src="{{ asset('frontend/js/phosphor-icon.js') }}"></script>
<!-- Slick js -->
<script src="{{ asset('frontend/js/slick.min.js') }}"></script>
<!-- Slick js -->
<script src="{{ asset('frontend/js/counter.min.js') }}"></script>
<!-- magnific popup -->
<script src="{{ asset('frontend/js/magnific-popup.min.js') }}"></script>
<!-- Jquery Ui js -->
<script src="{{ asset('frontend/js/jquery-ui.js') }}"></script>
<!-- plyr Js -->
<script src="{{ asset('frontend/js/plyr.js') }}"></script>
<!-- vanilla Tilt -->
<script src="{{ asset('frontend/js/vanilla-tilt.min.js') }}"></script>
<!-- wow -->
<script src="{{ asset('frontend/js/wow.min.js') }}"></script>

<script src="{{ asset('frontend/js/aos.js') }}"></script>

<!-- main js -->
<script src="{{ asset('frontend/js/main.js') }}"></script>


</body>

</html>
