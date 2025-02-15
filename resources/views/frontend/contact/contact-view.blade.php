  @extends('frontend._partials.main')


  @section('main-content')
      <!-- ==================== Breadcrumb Start Here ==================== -->
      <section class="breadcrumb py-120 bg-main-25 position-relative z-1 overflow-hidden mb-0">
          {{-- <img src="{{ asset('') }}frontend/images/shapes/shape1.png" alt="" class="shape one animation-rotation d-md-block d-none"> --}}
          <img src="{{ asset('') }}frontend/images/shapes/shape2.png" alt=""
              class="shape two animation-scalation d-md-block d-none">
          {{-- <img src="{{ asset('') }}frontend/images/shapes/shape3.png" alt="" class="shape eight animation-walking d-md-block d-none"> --}}
          {{-- <img src="{{ asset('') }}frontend/images/shapes/shape5.png" alt="" class="shape six animation-walking d-md-block d-none"> --}}
          <img src="{{ asset('') }}frontend/images/shapes/shape4.png" alt=""
              class="shape four animation-scalation">
          {{-- <img src="{{ asset('') }}frontend/images/shapes/shape4.png" alt="" class="shape nine animation-scalation"> --}}

          <div class="container">
              <div class="row justify-content-center">
                  <div class="col-lg-8">
                      <div class="breadcrumb__wrapper">
                          <h1 class="breadcrumb__title display-4 fw-semibold text-center"> Kontak Kami</h1>
                          <ul class="breadcrumb__list d-flex align-items-center justify-content-center gap-4">
                              <li class="breadcrumb__item">
                                  <a href="{{ route('home') }}"
                                      class="breadcrumb__link text-neutral-500 hover-text-main-600 fw-medium">
                                      <i class="text-lg d-inline-flex ph-bold ph-house"></i> Home</a>
                              </li>
                              <li class="breadcrumb__item">
                                  <i class="text-neutral-500 d-flex ph-bold ph-caret-right"></i>
                              </li>
                              <li class="breadcrumb__item">
                                  <a href="course.html"
                                      class="breadcrumb__link text-neutral-500 hover-text-main-600 fw-medium"> </a>
                              </li>
                              <li class="breadcrumb__item d-none">
                                  <i class="text-neutral-500 d-flex ph-bold ph-caret-right"></i>
                              </li>
                              <li class="breadcrumb__item">
                                  <span class="text-main-two-600"> Kontak Kami </span>
                              </li>
                          </ul>
                      </div>
                  </div>
              </div>
          </div>
      </section>
      <!-- ==================== Breadcrumb End Here ==================== -->

      <!-- =============================== Contact Section Start ================================== -->
      <section class="contact py-120">
          <div class="container">
              <div class="section-heading text-center">
                  <div class="flex-align d-inline-flex gap-8 mb-16">
                      <span class="text-main-600 text-2xl d-flex"><i class="ph-bold ph-book"></i></span>
                      <h5 class="text-main-600 mb-0">Hubungi Kami</h5>
                  </div>
                  <h2 class="mb-24">Biarkan kami membantu Anda</h2>
                  <p class="">Platform kami dibangun berdasarkan prinsip inovasi, kualitas, dan inklusivitas, dengan
                      tujuan memberikan pengalaman belajar yang mudah dan menyenangkan</p>
              </div>
              <div class="row gy-4">
                  <div class="col-xl-4 col-md-6">
                      <div
                          class="contact-item bg-main-25 border border-neutral-30 rounded-12 px-32 py-40 d-flex align-items-start gap-24 hover-bg-main-600 transition-2 hover-border-main-600">
                          <span
                              class="contact-item__icon w-60 h-60 text-32 flex-center rounded-circle bg-main-600 text-white flex-shrink-0">
                              <i class="ph ph-map-pin-line"></i>
                          </span>
                          <div class="flex-grow-1">
                              <h4 class="mb-12">Alamat Sekolah</h4>
                              <p class="text-neutral-500">Pelem, Purwosari, Bojonegoro, Jawa Timur, 62161 </p>
                              <a href="javascript:void(0)"
                                  class="text-main-600 fw-semibold text-decoration-underline mt-16">Lihat Lokasi</a>
                          </div>
                      </div>
                  </div>
                  <div class="col-xl-4 col-md-6">
                      <div
                          class="contact-item bg-main-25 border border-neutral-30 rounded-12 px-32 py-40 d-flex align-items-start gap-24 hover-bg-main-600 transition-2 hover-border-main-600">
                          <span
                              class="contact-item__icon w-60 h-60 text-32 flex-center rounded-circle bg-main-600 text-white flex-shrink-0">
                              <i class="ph ph-envelope-open"></i>
                          </span>
                          <div class="flex-grow-1">
                              <h4 class="mb-12">Email </h4>
                              <p class="text-neutral-500">smp.pelem@gmail.com</p>
                              <p class="text-neutral-500">smp.purwosari@gmail.com</p>
                              <a href="mailto:infoexample@gmail.com"
                                  class="text-main-600 fw-semibold text-decoration-underline mt-16">Kirim Pesan</a>
                          </div>
                      </div>
                  </div>
                  <div class="col-xl-4 col-md-6">
                      <div
                          class="contact-item bg-main-25 border border-neutral-30 rounded-12 px-32 py-40 d-flex align-items-start gap-24 hover-bg-main-600 transition-2 hover-border-main-600">
                          <span
                              class="contact-item__icon w-60 h-60 text-32 flex-center rounded-circle bg-main-600 text-white flex-shrink-0">
                              <i class="ph ph-phone-call"></i>
                          </span>
                          <div class="flex-grow-1">
                              <h4 class="mb-12">Nomor Handphone/WA</h4>
                              <p class="text-neutral-500">+62 811-3401-337</p>
                              {{-- <p class="text-neutral-500">(406) 555-0120</p> --}}
                              <a href="tel:(406)555-0120"
                                  class="text-main-600 fw-semibold text-decoration-underline mt-16">Hubungi Sekarang!</a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </section>
      <!-- =============================== Contact Section End ================================== -->

      <!-- ====================== Contact Form Section Start ========================= -->
      <section class="contact-form-section py-240 bg-main-25 position-relative z-1">
          <img src="{{ asset('') }}frontend/images/bg/wave-bg.png" alt=""
              class="position-absolute top-0 start-0 w-100 h-100 z-n1 d-lg-block d-none">
          <div class="container">
              <div class="row gy-5 align-items-center">
                  <div class="col-xl-7 col-lg-6 pe-lg-5">
                      <div class="mb-40 md-xl-5">
                          <div class="flex-align d-inline-flex gap-8 mb-16">
                              <span class="text-main-600 text-2xl d-flex"><i class="ph-bold ph-book"></i></span>
                              <h5 class="text-main-600 mb-0">Hubungi Kami</h5>
                          </div>
                          <h2 class="mb-24">Ada pertanyaan? Jangan ragu untuk menghubungi kami.</h2>
                          <p class="text-neutral-500 text-line-3 max-w-636">Kami bersemangat untuk mengubah kehidupan
                              melalui pendidikan. Didirikan dengan visi untuk membuat pembelajaran dapat diakses oleh semua
                              orang, kami percaya pada kekuatan pengetahuan untuk membuka peluang dan membentuk masa depan.
                          </p>
                      </div>
                      <div class="flex-align gap-40 flex-wrap">
                          <div class="enrolled-students mt-12 d-block">
                              <img src="{{ asset('') }}frontend/images/thumbs/enroll-student-img1.png" alt=""
                                  class="w-48 h-48 rounded-circle object-fit-cover">
                              <img src="{{ asset('') }}frontend/images/thumbs/enroll-student-img2.png" alt=""
                                  class="w-48 h-48 rounded-circle object-fit-cover">
                              <img src="{{ asset('') }}frontend/images/thumbs/enroll-student-img3.png" alt=""
                                  class="w-48 h-48 rounded-circle object-fit-cover">
                              <img src="{{ asset('') }}frontend/images/thumbs/enroll-student-img4.png" alt=""
                                  class="w-48 h-48 rounded-circle object-fit-cover">
                              <img src="{{ asset('') }}frontend/images/thumbs/enroll-student-img5.png" alt=""
                                  class="w-48 h-48 rounded-circle object-fit-cover">
                              <img src="{{ asset('') }}frontend/images/thumbs/enroll-student-img6.png" alt=""
                                  class="w-48 h-48 rounded-circle object-fit-cover">
                          </div>
                          <div class="">
                              <ul class="flex-align gap-4 mb-10">
                                  <li class="text-warning-600 text-2xl d-flex"><i class="ph-fill ph-star"></i></li>
                                  <li class="text-warning-600 text-2xl d-flex"><i class="ph-fill ph-star"></i></li>
                                  <li class="text-warning-600 text-2xl d-flex"><i class="ph-fill ph-star"></i></li>
                                  <li class="text-warning-600 text-2xl d-flex"><i class="ph-fill ph-star"></i></li>
                                  <li class="text-warning-600 text-2xl d-flex"><i class="ph-fill ph-star-half"></i></li>
                              </ul>
                              {{-- <span class="text-neutral-700 fw-medium"> 2.5k+ reviews (4.95 of 5)</span> --}}
                          </div>
                      </div>
                  </div>
                  <div class="col-xl-5 col-lg-6">
                      <div class="p-24 bg-white rounded-12 box-shadow-md">
                          <div class="border border-neutral-30 rounded-8 bg-main-25 p-24">
                              <form action="{{ route('form-contact-us') }}" id="commentForm" method="POST">
                                  @csrf
                                  <h4 class="mb-0">Hubungi Kami</h4>
                                  <span class="d-block border border-neutral-30 my-24 border-dashed"></span>
                                  <div class="mb-24">
                                      <label for="name" class="text-neutral-700 text-lg fw-medium mb-12">Nama Lengkap
                                      </label>
                                      <input type="text" name="name" value="{{ old('name') }}"
                                          class="common-input rounded-pill border-transparent focus-border-main-600 @error('name') is-invalid @enderror"
                                          id="name" placeholder="Enter Name...">
                                      @error('name')
                                          <div class="alert text-danger">{{ $message }}</div>
                                      @enderror
                                  </div>
                                  <div class="mb-24">
                                      <label for="email" class="text-neutral-700 text-lg fw-medium mb-12">Email
                                      </label>
                                      <input type="email" name="email" value="{{ old('email') }}"
                                          class="common-input rounded-pill border-transparent focus-border-main-600 @error('email') is-invalid @enderror"
                                          id="email" placeholder="Enter Email...">
                                      @error('email')
                                          <div class="alert text-danger">{{ $message }}</div>
                                      @enderror
                                  </div>
                                  <div class="mb-24">
                                      <label for="phone" class="text-neutral-700 text-lg fw-medium mb-12">Nomor Telp
                                      </label>
                                      <input type="tel" name="no_telp" value="{{ old('no_telp') }}"
                                          class="common-input rounded-pill border-transparent focus-border-main-600 @error('no_telp') is-invalid @enderror"
                                          id="phone" placeholder="Enter Your Number...">
                                      @error('no_telp')
                                          <div class="alert text-danger">{{ $message }}</div>
                                      @enderror
                                  </div>
                                  <div class="mb-24">
                                      <label for="desc" class="text-neutral-700 text-lg fw-medium mb-12">Pesan</label>
                                      <textarea id="desc" name="message"
                                          class="common-input rounded-24 border-transparent focus-border-main-600 h-110 @error('message') is-invalid @enderror"
                                          placeholder="Enter Your Message...">{{ old('message') }}</textarea>
                                      @error('message')
                                          <div class="alert text-danger">{{ $message }}</div>
                                      @enderror
                                  </div>
                                  <div class="mb-0">
                                      <button type="submit" class="btn btn-main rounded-pill flex-center gap-8 mt-40">
                                          Kirim Pesan
                                          <i class="ph-bold ph-arrow-up-right d-flex text-lg"></i>
                                      </button>
                                  </div>
                              </form>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </section>
      <!-- ====================== Contact Form Section End ========================= -->

      @include('sweetalert::alert')
  @endsection
