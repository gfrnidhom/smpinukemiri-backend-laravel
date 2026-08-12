  @extends('frontend._partials.main')


  @section('main-content')
      <div class="breadcumb-wrapper ">
          <div class="breadcumb-shape">
          </div>

          <div class="container">
              <div class="breadcumb-content text-center">
                  <h1 class="breadcumb-title">Kontak Kami</h1>
                  <ul class="breadcumb-menu">
                      <li><a href="{{ route('home-dashboard') }}">Home</a></li>
                      <li>Kontak Kami</li>
                  </ul>
              </div>
          </div>
      </div>
      <div class="space" id="contact-sec">
          <div class="container">
              <div class="map-sec">
                  <div class="map">
                      <iframe src="{{ $settings['google_maps'] }}" allowfullscreen="" loading="lazy"></iframe>
                  </div>
              </div>
              <div class="row">
                  <div class="col-xl-5 mb-30 mb-xl-0">
                      <div class="me-xxl-5 mt-60">
                          <div class="title-area mb-25">
                              <h2 class="border-title h3">Ada Pertanyaan?</h2>
                          </div>
                          <p class="mt-n2 mb-25">Punya pertanyaan atau masukan untuk kami? Isi formulir <br> di bawah ini
                              untuk menghubungi tim kami.</p>
                          <div class="contact-feature">
                              <div class="contact-feature-icon">
                                  <i class="fal fa-location-dot"></i>
                              </div>
                              <div class="media-body">
                                  <p class="contact-feature_label">Alamat:</p>
                                  <a href="https://www.google.com/maps"
                                      class="contact-feature_link">{{ strip_tags($settings['address']) }}</a>
                              </div>
                          </div>
                          <div class="contact-feature">
                              <div class="contact-feature-icon">
                                  <i class="fal fa-phone"></i>
                              </div>
                              <div class="media-body">
                                  <p class="contact-feature_label">Nomor Handphone/WA:</p>
                                  <a href="tel:{{ $settings['phone'] }}"
                                      class="contact-feature_link">{{ $settings['phone'] }}</a>

                              </div>
                          </div>
                          <div class="contact-feature">
                              <div class="contact-feature-icon">
                                  <i class="fal fa-clock"></i>
                              </div>
                              <div class="media-body">
                                  <p class="contact-feature_label">Jam Operasional:</p>
                                  <span class="contact-feature_link">Senin - Sabtu: 07:00 - 17:00</span>
                                  {{-- <span class="contact-feature_link">Sunday & Saturday: 10:30 - 22:00</span> --}}
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-xl-7">
                      <div class="contact-form-wrap" data-bg-src="assets/img/bg/contact_bg_1.png">
                          {{-- <span class="sub-title">Hubungi Kami!</span> --}}
                          <h2 class="border-title">Hubungi Kami</h2>
                          <p class="mt-n1 mb-30 sec-text">Ada pertanyaan atau butuh bantuan? Jangan ragu untuk menghubungi
                              kami kapan saja! Tim kami selalu siap memberikan informasi, solusi, dan bantuan terbaik untuk
                              memenuhi kebutuhan Anda. Kami dengan senang hati akan membantu Anda secepat mungkin</p>
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
          </div>
      </div>
  @endsection
