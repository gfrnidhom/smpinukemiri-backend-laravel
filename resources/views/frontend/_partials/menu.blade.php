    <!-- ==================== Header Start Here ==================== -->
    <header class="header">
        <div class="container container--xl">
            <nav class="header-inner flex-between gap-8">

                <div class="header-content-wrapper flex-align flex-grow-1">
                    <!-- Logo Start -->
                    <div class="logo">
                        <a href="{{ route('home') }}" class="link">
                            <img src="{{ asset('frontend/images/logo/logo-colour.png') }}" alt="Logo">
                        </a>
                    </div>
                    <!-- Logo End  -->

                    <!-- Menu Start  -->
                    <div class="header-menu d-lg-block d-none">
                        <ul class="nav-menu flex-align">
                            <li class="nav-menu__item {{ Request::routeIs('home*') ? 'activePage' : '' }}">
                                <a href="{{ route('home') }}"
                                    class="nav-menu__link {{ Request::routeIs('home*') ? 'activePage' : '' }}">Beranda</a>
                            </li>
                            <li class="nav-menu__item has-submenu ">
                                <a href="javascript:void(0)" class="nav-menu__link">Profil Kami</a>
                                <ul class="nav-submenu scroll-sm">
                                    <li class="nav-submenu__item">
                                        <a href="index.html" class="nav-submenu__link hover-bg-neutral-30"> Visi dan
                                            Misi</a>
                                    </li>
                                    <li class="nav-submenu__item">
                                        <a href="index-2.html" class="nav-submenu__link hover-bg-neutral-30"> Organisasi & Staff
                                        </a>
                                    </li>
                                    <li class="nav-submenu__item">
                                        <a href="{{ route('about-us') }}"
                                            class="nav-submenu__link hover-bg-neutral-30 {{ Request::routeIs('about-us*') ? 'activePage' : '' }}">
                                            Tentang
                                            Kami
                                        </a>
                                    </li>

                                </ul>
                            </li>
                            <li class="nav-menu__item {{ Request::routeIs('flagship-programs*') ? 'activePage' : '' }}">
                                <a href="{{ route('flagship-programs') }}"
                                    class="nav-menu__link {{ Request::routeIs('flagship-programs*') ? 'activePage' : '' }}">Program
                                    Unggulan</a>
                            </li>
                            <li class="nav-menu__item {{ Request::routeIs('events*') ? 'activePage' : '' }}">
                                <a href="{{ route('events') }}"
                                    class="nav-menu__link {{ Request::routeIs('events*') ? 'activePage' : '' }}">Event</a>
                            </li>
                            <li class="nav-menu__item {{ Request::routeIs('blogs*') ? 'activePage' : '' }}">
                                <a href="{{ route('blogs') }}"
                                    class="nav-menu__link {{ Request::routeIs('blogs*') ? 'activePage' : '' }}">Portal
                                    Informasi</a>
                            </li>
                            <li class="nav-menu__item {{ Request::routeIs('gallery*') ? 'activePage' : '' }}">
                                <a href="{{ route('gallery') }}"
                                    class="nav-menu__link {{ Request::routeIs('gallery*') ? 'activePage' : '' }}">Galeri</a>
                            </li>
                            <li class="nav-menu__item {{ Request::routeIs('contact-us*') ? 'activePage' : '' }}">
                                <a href="{{ route('contact-us') }}"
                                    class="nav-menu__link {{ Request::routeIs('contact-us*') ? 'activePage' : '' }}">Kontak
                                    Kami</a>
                            </li>
                        </ul>
                    </div>
                    <!-- Menu End  -->
                </div>

                <!-- Header Right start -->
                <div class="header-right flex-align">
                    <form action="#" class="search-form position-relative d-xl-block d-none">
                        <input type="text" class="common-input rounded-pill bg-main-25 pe-44 border-neutral-30"
                            placeholder="Search...">
                        <button type="submit"
                            class="w-36 h-36 bg-main-600 hover-bg-main-700 rounded-circle flex-center text-md text-white position-absolute top-50 translate-middle-y inset-inline-end-0 me-8">
                            <i class="ph-bold ph-magnifying-glass"></i>
                        </button>
                    </form>
                    {{-- <a href="sign-in.html"
                        class="info-action w-52 h-52 bg-main-25 hover-bg-main-600 border border-neutral-30 rounded-circle flex-center text-2xl text-neutral-500 hover-text-white hover-border-main-600">
                        <i class="ph ph-user-circle"></i>
                    </a> --}}
                    <button type="button" class="toggle-mobileMenu d-lg-none text-neutral-200 flex-center">
                        <i class="ph ph-list"></i>
                    </button>
                </div>
                <!-- Header Right End  -->
            </nav>
        </div>
    </header>
    <!-- ==================== Header End Here ==================== -->
