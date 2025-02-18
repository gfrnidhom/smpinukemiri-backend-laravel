 <!--==============================
 Footer Area
==============================-->
 <footer class="footer-wrapper footer-layout8" data-bg-src="{{ asset('frontend') }}/img/update1/bg/footer_bg_3.jpg">
     <div class="footer-top">
         <div class="container">
             <div class="footer-contact-wrap">
                 <div class="footer-contact">
                     <div class="footer-contact_icon icon-btn">
                         <i class="fas fa-phone"></i>
                     </div>
                     <div class="media-body">
                         <p class="footer-contact_text">No. Handphone/WA</p>
                         <a href="tel+11234567890" class="footer-contact_link">{{ $settings['phone'] }}</a>
                     </div>
                 </div>
                 <div class="divider"></div>
                 <div class="footer-contact">
                     <div class="footer-contact_icon icon-btn">
                         <i class="fas fa-envelope"></i>
                     </div>
                     <div class="media-body">
                         <p class="footer-contact_text">Email</p>
                         <a href="mailto:hi@aduca-edu.com" class="footer-contact_link">{{ $settings['email'] }}</a>
                     </div>
                 </div>
                 <div class="divider"></div>
                 <div class="footer-contact">
                     <div class="footer-contact_icon icon-btn">
                         <i class="fas fa-share"></i>
                     </div>
                     <div class="media-body">
                         <p class="footer-contact_text">Media Sosial Kami</p>
                         <div class="th-social">
                             <a href="{{ $settings['facebook'] }}"><i class="fab fa-facebook-f"></i></a>
                             {{-- <a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a> --}}
                             {{-- <a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a> --}}
                             <a href="{{ $settings['instagram'] }}"><i class="fab fa-instagram"></i></a>
                             <a href="{{ $settings['tiktok'] }}"><i class="fab fa-tiktok"></i></a>
                             <a href="{{ $settings['youtube'] }}"><i class="fab fa-youtube"></i></a>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <div class="widget-area">
         <div class="container">
             <div class="row justify-content-between">
                 <div class="col-md-6 col-xl-3">
                     <div class="widget newsletter-widget footer-widget style2">
                         <div class="newsletter-logo mb-30">
                             <a href="{{ route('home-dashboard') }}"><img src="{{ $settings['second_logo'] }}"
                                     width="270px" alt="SMP Islam Nurul Ulum"></a>
                         </div>
                         <p class="footer-text">Subscribe our newsletter to get our latest
                             Update & news</p>
                         <form class="newsletter-form form-group">
                             <input class="form-control" type="email" placeholder="Email Email" required="">
                             <i class="far fa-envelope"></i>
                             <button type="submit" class="th-btn style3">Subscribe Now <i
                                     class="far fa-arrow-right ms-1"></i></button>
                         </form>
                     </div>
                 </div>
                 <div class="col-md-6 col-xl-auto">
                     <div class="widget widget_nav_menu footer-widget style2">
                         <h3 class="widget_title">Kategori</h3>
                         <div class="menu-all-pages-container">
                             <ul class="menu">
                                 <li><a href="about.html">About Us</a></li>
                                 <li><a href="course.html">Resource Center</a></li>
                                 <li><a href="course.html">Careers</a></li>
                                 <li><a href="team.html">Instructor</a></li>
                                 <li><a href="contact.html">Become A Teacher</a></li>
                             </ul>
                         </div>
                     </div>
                 </div>
                 <div class="col-md-6 col-xl-auto">
                     <div class="widget widget_nav_menu footer-widget style2">
                         <h3 class="widget_title">Profil Kami</h3>
                         <div class="menu-all-pages-container">
                             <ul class="menu">
                                 <li><a href="course.html">Visi dan Misi</a></li>
                                 <li><a href="course-2.html">Sejarah Sekolah</a></li>
                                 <li><a href="course-3.html">Kepala Sekolah</a></li>
                                 <li><a href="course-details.html">Guru & Staff</a></li>
                             </ul>
                         </div>
                     </div>
                 </div>
                 <div class="col-md-6 col-xl-auto">
                     <div class="widget footer-widget style2">
                         <h3 class="widget_title">RECENT GALLERY</h3>
                         <div class="sidebar-gallery">
                             <div class="gallery-thumb">
                                 <img src="{{ asset('frontend') }}/img/update1/widget/gal-1-1.jpg" alt="Gallery Image">
                                 <a href="{{ asset('frontend') }}/img/update1/widget/gal-1-1.jpg"
                                     class="gallery-btn popup-image"><i class="fab fa-instagram"></i></a>
                             </div>
                             <div class="gallery-thumb">
                                 <img src="{{ asset('frontend') }}/img/update1/widget/gal-1-2.jpg" alt="Gallery Image">
                                 <a href="{{ asset('frontend') }}/img/update1/widget/gal-1-2.jpg"
                                     class="gallery-btn popup-image"><i class="fab fa-instagram"></i></a>
                             </div>
                             <div class="gallery-thumb">
                                 <img src="{{ asset('frontend') }}/img/update1/widget/gal-1-3.jpg" alt="Gallery Image">
                                 <a href="{{ asset('frontend') }}/img/update1/widget/gal-1-3.jpg"
                                     class="gallery-btn popup-image"><i class="fab fa-instagram"></i></a>
                             </div>
                             <div class="gallery-thumb">
                                 <img src="{{ asset('frontend') }}/img/update1/widget/gal-1-4.jpg" alt="Gallery Image">
                                 <a href="{{ asset('frontend') }}/img/update1/widget/gal-1-4.jpg"
                                     class="gallery-btn popup-image"><i class="fab fa-instagram"></i></a>
                             </div>
                             <div class="gallery-thumb">
                                 <img src="{{ asset('frontend') }}/img/update1/widget/gal-1-5.jpg"
                                     alt="Gallery Image">
                                 <a href="{{ asset('frontend') }}/img/update1/widget/gal-1-5.jpg"
                                     class="gallery-btn popup-image"><i class="fab fa-instagram"></i></a>
                             </div>
                             <div class="gallery-thumb">
                                 <img src="{{ asset('frontend') }}/img/update1/widget/gal-1-6.jpg"
                                     alt="Gallery Image">
                                 <a href="{{ asset('frontend') }}/img/update1/widget/gal-1-6.jpg"
                                     class="gallery-btn popup-image"><i class="fab fa-instagram"></i></a>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <div class="copyright-wrap">
         <div class="container">
             <div class="row justify-content-between align-items-center">
                 <div class="col-lg-6">
                     <p class="copyright-text">Copyright <i class="fal fa-copyright"></i> 2023 <a
                             href="https://themeforest.net/user/themeholy">Themeholy</a>. All Rights Reserved.</p>
                 </div>
                 <div class="col-lg-6 text-end d-none d-lg-block">
                     <div class="footer-links">
                         <ul>
                             <li><a href="about.html">Privacy Policy</a></li>
                             <li><a href="about.html">Terms of Use</a></li>
                         </ul>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </footer>

 <!-- Scroll To Top -->
 <div class="scroll-top">
     <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
         <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
             style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;">
         </path>
     </svg>
 </div>
 <!--********************************
        Code End  Here
******************************** -->

 <!--==============================
All Js File
============================== -->
 <!-- Jquery -->
 <script src="{{ asset('frontend') }}/js/vendor/jquery-3.6.0.min.js"></script>
 <!-- Slick Slider -->
 <script src="{{ asset('frontend') }}/js/slick.min.js"></script>
 <!-- Bootstrap -->
 <script src="{{ asset('frontend') }}/js/bootstrap.min.js"></script>
 <!-- Magnific Popup -->
 <script src="{{ asset('frontend') }}/js/jquery.magnific-popup.min.js"></script>
 <!-- Counter Up -->
 <script src="{{ asset('frontend') }}/js/jquery.counterup.min.js"></script>
 <!-- Circle Progress -->
 <script src="{{ asset('frontend') }}/js/circle-progress.js"></script>
 <!-- Range Slider -->
 <script src="{{ asset('frontend') }}/js/jquery-ui.min.js"></script>
 <!-- Isotope Filter -->
 <script src="{{ asset('frontend') }}/js/imagesloaded.pkgd.min.js"></script>
 <script src="{{ asset('frontend') }}/js/isotope.pkgd.min.js"></script>
 <!-- Tilt JS -->
 <script src="{{ asset('frontend') }}/js/tilt.jquery.min.js"></script>
 <!-- Tweenmax JS -->
 <script src="{{ asset('frontend') }}/js/tweenmax.min.js"></script>
 <!-- Nice Select JS -->
 <script src="{{ asset('frontend') }}/js/nice-select.min.js"></script>

 <!-- Main Js File -->
 <script src="{{ asset('frontend') }}/js/main.js"></script>

 </body>

 </html>
