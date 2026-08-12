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
                                     width="220px" alt="SMP Islam Nurul Ulum"></a>
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
                                         <li><a href="{{ route('visionMission') }}">Visi dan Misi</a></li>
                                         <li><a href="{{ route('profileSchool') }}">Profil Sekolah</a></li>
                                         <li><a href="{{ route('headmaster', optional($headmaster)->name ?? '') }}">Kepala Sekolah</a>
                                         </li>
                                         <li><a href="{{ route('teacherandstaff') }}">Guru & Staff</a></li>
                                     </ul>
                                 </li>


                                 <li>
                                     <a href="{{ route('events') }}">Event</a>
                                 </li>
                                 <li>
                                     <a href="{{ route('blogs') }}">Berita</a>
                                 </li>
                                 <li>
                                     <a href="{{ route('contact-us') }}">Kontak Kami</a>
                                 </li>
                                 <li>
                                     <a href="{{ route('ppdb') }}">PPDB {{ date('Y') }}</a>
                                 </li>
                             </ul>
                         </nav>
                         <button type="button" class="th-menu-toggle d-block d-lg-none"><i
                                 class="far fa-bars"></i></button>
                     </div>

                     @guest
                         <div class="col-auto d-none d-xl-block">
                             <div class="header-button">
                                 <a href="{{ route('login') }}" class="th-btn ml-25">Masuk/Daftar</a>
                             </div>
                         </div>
                     @endguest

                     @auth
                         <div class="col-auto d-none d-xl-block">
                             <div class="header-button">
                                 <div class="category-menu-wrap mr-5">
                                     <a class="menu-expand" href="#"><i
                                             class="fa-solid fa-user me-2 text-theme"></i>{{ ' ' . Auth::user()->name . ' ' }}
                                         &nbsp; <i class="fa-solid fa-angle-down ms-auto"></i></a>
                                     <nav class="category-menu">
                                         <ul>
                                             {{-- <li><a href="course">Profile</a></li> --}}
                                             <li><a href="{{ route('ppdb.showRegistrationResult') }}">Riwayat
                                                     Pendaftaran</a></li>
                                             <li><a href="{{ route('logout') }}">Logout</a></li>

                                         </ul>
                                     </nav>

                                 </div>

                             </div>
                         </div>
                     @endauth


                 </div>
             </div>
         </div>
     </div>
 </header>
