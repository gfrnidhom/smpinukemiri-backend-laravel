 <!--==============================
 Header Area
==============================-->
 <header class="th-header header-layout4">
     <div class="sticky-wrapper">
         <!-- Main Menu Area -->
         <div class="menu-area">
             <div class="container th-container3">
                 <div class="row align-items-center justify-content-between">
                     <div class="col-auto">
                         <div class="header-logo">
                             <a href="{{ route('home-dashboard') }}"><img src="{{ $settings['first_logo'] }}"
                                     width="270px" alt="SMP Islam Nurul Ulum"></a>
                         </div>
                     </div>
                     <div class="col-auto">
                         <nav class="main-menu d-none d-lg-inline-block">
                             <ul>
                                 <li>
                                     <a href="{{ route('home-dashboard') }}">Beranda</a>
                                 </li>
                                 <li class="menu-item-has-children">
                                     <a href="#">Profil Kami</a>
                                     <ul class="sub-menu">
                                         <li><a href="course.html">Visi dan Misi</a></li>
                                         <li><a href="course-2.html">Sejarah Sekolah</a></li>
                                         <li><a href="course-3.html">Kepala Sekolah</a></li>
                                         <li><a href="course-details.html">Guru & Staff</a></li>
                                     </ul>
                                 </li>
                                 <li class="menu-item-has-children">
                                     <a href="#">Teachers</a>
                                     <ul class="sub-menu">
                                         <li><a href="team.html">Instructors</a></li>
                                         <li><a href="team-details.html">Instructors Details</a></li>
                                     </ul>
                                 </li>
                                 <li class="menu-item-has-children">
                                     <a href="#">Pages</a>
                                     <ul class="sub-menu">
                                         <li><a href="about.html">About Us</a></li>
                                         <li class="menu-item-has-children">
                                             <a href="#">Shop</a>
                                             <ul class="sub-menu">
                                                 <li><a href="shop.html">Shop</a></li>
                                                 <li><a href="shop-details.html">Shop Details</a></li>
                                                 <li><a href="cart.html">Cart Page</a></li>
                                                 <li><a href="checkout.html">Checkout</a></li>
                                                 <li><a href="wishlist.html">Wishlist</a></li>
                                             </ul>
                                         </li>
                                         <li><a href="event.html">Events</a></li>
                                         <li><a href="event-details.html">Event Details</a></li>
                                         <li><a href="gallery.html">Gallery</a></li>
                                         <li><a href="error.html">Error Page</a></li>
                                     </ul>
                                 </li>

                                 <li>
                                     <a href="{{ route('about-us') }}">Event</a>
                                 </li>
                                 <li>
                                     <a href="{{ route('about-us') }}">Berita</a>
                                 </li>
                                 <li>
                                     <a href="{{ route('about-us') }}">Kontak Kami</a>
                                 </li>
                             </ul>
                         </nav>
                         <button type="button" class="th-menu-toggle d-block d-lg-none"><i
                                 class="far fa-bars"></i></button>
                     </div>
                     <div class="col-auto d-none d-xl-block">
                         <div class="header-button">


                             <a href="contact.html" class="th-btn ml-25">Masuk/Daftar</a>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </header>
