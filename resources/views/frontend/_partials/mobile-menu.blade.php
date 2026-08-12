  <!--==============================
    Mobile Menu
  ============================== -->
  <div class="th-menu-wrapper">
      <div class="th-menu-area text-center">
          <button class="th-menu-toggle"><i class="fal fa-times"></i></button>
          <div class="mobile-logo">
              <a href="{{ route('home-dashboard') }}"><img src="{{ $settings['first_logo'] }}" width="250px"></a>
          </div>
          <div class="th-mobile-menu">
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
                  @guest
                      <li>
                          <a href="{{ route('login') }}" class="th-btn ml-25">Masuk/Daftar</a>
                      </li>
                  @endguest

                  @auth
                      <li class="menu-item-has-children">
                          <a  href="#"><i
                                  class="fa-solid fa-user me-2 text-theme"></i>{{ ' ' . Auth::user()->name . ' ' }}
                              &nbsp; </a>
                          <ul class="sub-menu">
                              {{-- <li><a href="course">Profile</a></li> --}}
                              <li><a href="{{ route('ppdb.showRegistrationResult') }}">Riwayat
                                      Pendaftaran</a></li>
                              <li><a href="{{ route('logout') }}">Logout</a></li>
                          </ul>
                      </li>

                  @endauth
              </ul>


          </div>


      </div>
  </div>
