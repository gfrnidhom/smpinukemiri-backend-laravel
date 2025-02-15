<!-- ==================== Mobile Menu Start Here ==================== -->
<div class="mobile-menu scroll-sm d-lg-none d-block">
    <button type="button" class="close-button"><i class="ph ph-x"></i> </button>
    <div class="mobile-menu__inner">
        <a href="index.html" class="mobile-menu__logo">
            <img src="{{ asset('') }}frontend/images/logo/logo-colour.png" alt="Logo">
        </a>
        <div class="mobile-menu__menu">
            <ul class="nav-menu flex-align nav-menu--mobile">
                <li class="nav-menu__item {{ Request::routeIs('home*') ? 'activePage' : '' }}">
                    <a href="{{ route('home') }}"
                        class="nav-menu__link {{ Request::routeIs('home*') ? 'activePage' : '' }}">Beranda</a>
                </li>
                <li class="nav-menu__item has-submenu {{ Request::routeIs('about-us*') ? 'activePage' : '' }}">
                    <a href="" class="nav-menu__link">Profil Kami</a>
                    <ul class="nav-submenu scroll-sm ">
                        <li class="nav-submenu__item">
                            <a href="index.html" class="nav-submenu__link hover-bg-neutral-30"> Visi dan
                                Misi</a>
                        </li>
                        <li class="nav-submenu__item">
                            <a href="index-2.html" class="nav-submenu__link hover-bg-neutral-30"> Organisasi & Staff
                            </a>
                        </li>
                        <li class="nav-submenu__item {{ Request::routeIs('about-us*') ? 'activePage' : '' }}">
                            <a href="{{ route('about-us') }}"
                                class="nav-submenu__link hover-bg-neutral-30 {{ Request::routeIs('about-us*') ? 'activePage' : '' }}">
                                Tentang Kami
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


            {{-- <div class="d-sm-none d-block mt-24">
                <div class="header-select border border-neutral-30 bg-main-25 rounded-pill position-relative">
                    <span
                        class="select-icon position-absolute top-50 translate-middle-y inset-inline-start-0 z-1 ms-lg-4 ms-12 text-xl pointer-event-none d-flex">
                        <i class="ph-bold ph-squares-four"></i>
                    </span>
                    <select class="js-example-basic-single border-0" name="state">
                        <option value="1" selected disabled>Categories</option>
                        <option value="1">Design</option>
                        <option value="1">Development</option>
                        <option value="1">Architecture</option>
                        <option value="1">Life Style</option>
                        <option value="1">Data Science</option>
                        <option value="1">Marketing</option>
                        <option value="1">Music</option>
                        <option value="1">Typography</option>
                        <option value="1">Finance</option>
                        <option value="1">Motivation</option>
                    </select>
                </div>
            </div> --}}

        </div>
    </div>
</div>
<!-- ==================== Mobile Menu End Here ==================== -->
