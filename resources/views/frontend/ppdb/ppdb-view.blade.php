@extends('frontend._partials.main')


@section('main-content')
    <div class="breadcumb-wrapper ">
        <div class="breadcumb-shape">
        </div>

        <div class="container">
            <div class="breadcumb-content text-center">
                <h1 class="breadcumb-title">PPDB {{ date('Y') }}</h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{ route('home-dashboard') }}">Home</a></li>
                    <li>PPDB {{ date('Y') }}</li>
                </ul>
            </div>
        </div>
    </div>
    <section class="space" data-bg-src="assets/img/bg/event-bg_2.png">
        {{-- <div class="shape-mockup event-shape1 jump" data-top="3%" data-left="-3%">
            <img src="{{  }}" alt="img">
        </div> --}}
        <div class="container">
            {{-- <div class="title-area text-center">
                <span class="sub-title"><i class="fal fa-book me-2"></i> Fetaured Events</span>
                <h2 class="sec-title">Our Upcoming Events</h2>
            </div> --}}
            @if ($ppdb->isNotEmpty())
                @foreach ($ppdb as $item)
                    <div class="event-grid">
                        <div class="event-img">
                            <img src="{{ $settings['school_image2'] }}" alt="course">
                        </div>
                        <div class="event-content">
                            <div class="event-bg-shape" data-mask-src="assets/img/event/event_shape2.png"></div>
                            <div class="media-left">
                                <h3 class="event-title"><a href="#">PPDB {{ $item->period_name }}</a>
                                </h3>
                                <div class="event-meta">
                                    <p><i class="fal fa-calendar"></i>Periode PPDB :
                                        {{ \Carbon\Carbon::parse($item->start_date)->format('d M Y') . ' s.d ' . \Carbon\Carbon::parse($item->end_date)->format('d M Y') }}
                                    </p>
                                    {{-- <p><i class="far fa-clock"></i>8 am - 10 am</p> --}}
                                    <p><i class="far fa-location-dot"></i>Kuota : {{ $item->quota }}</p>
                                </div>
                            </div>
                            <div class="media-body">
                                @guest
                                    <div class="media-body">
                                        <a class="th-btn" href="{{ route('login') }}">Daftar Sekarang <i
                                                class="far fa-arrow-right"></i></a>
                                    </div>
                                @endguest

                                @auth
                                    @if ($registrationStudent->where('enrollment_period_id', $item->id)->where('user_id', Auth::user()->id)->isEmpty())
                                        <a class="th-btn" href="{{ route('ppdb.registration', $item->id) }}">Daftar Sekarang <i
                                                class="far fa-arrow-right"></i></a>
                                    @else
                                        <a class="th-btn" href="{{ route('ppdb.showRegistrationResult') }}">Lihat Riwayat
                                            Pendaftaran <i class="far fa-arrow-right"></i></a>
                                    @endif
                                @endauth
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <div class="event-grid">
                    <div class="event-content">
                        <div class="text-center">
                            <h3 class="event-title"><a href="#">Penerimaan Peserta Didik Baru Tidak
                                    Tersedia.!</a>
                            </h3>
                        </div>
                    </div>
                </div>
            @endif

        </div>
    </section>
@endsection
