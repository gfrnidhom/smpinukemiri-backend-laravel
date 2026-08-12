@extends('frontend._partials.main')


@section('main-content')
    <!--==============================
                                                                                                                                                                                                                                                                                                    Hero Area
                                                     <!--==============================
                                                Breadcumb
                                            ============================== -->
    <div class="breadcumb-wrapper ">
        <div class="breadcumb-shape">
        </div>

        <div class="container">
            <div class="breadcumb-content text-center">
                <h1 class="breadcumb-title">Guru dan Staf</h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{ route('home-dashboard') }}">Home</a></li>
                    <li>Guru dan Staf</li>
                </ul>
            </div>
        </div>
    </div>
    <!--==============================
                                            Team Area
                                            ==============================-->
    <div class="team-area overflow-hidden space">
        <div class="container">
            <div class="row align-items-center gy-4">
                <!-- Single Item -->
                @foreach ($teacher as $item)
                    <div class="col-sm-6 col-lg-4 col-xl-3">
                        <div class="team-card style3">
                            <div class="team-img-wrap">
                                <div class="team-img">
                                    <img src="{{ asset('storage') . '/' . $item->image }}" alt="Team">
                                </div>
                            </div>
                            <div class="team-hover-wrap">
                                <div class="team-social">
                                    <a href="#" class="icon-btn">
                                        <i class="far fa-plus"></i>
                                    </a>

                                </div>
                                <div class="team-content">
                                    <h3 class="team-title"><a
                                            href="#">{{ $item->first_name . ' ' . $item->last_name . ', ' . $item->title }}</a>
                                    </h3>
                                    <span class="team-desig">{{ $item->specialization }}</span>
                                    <span class="team-desig">NIP : {{ $item->nip }}</span>
                                </div>
                                {{-- <div class="team-info">
                                    <span><i class="fal fa-file-check"></i>2 Courses</span>
                                    <span><i class="fa-light fa-users"></i>Students 60+</span>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                @endforeach

                @foreach ($staff as $item)
                    <div class="col-sm-6 col-lg-4 col-xl-3">
                        <div class="team-card style3">
                            <div class="team-img-wrap">
                                <div class="team-img">
                                    <img src="{{ asset('storage') . '/' . $item->image }}" alt="Team">
                                </div>
                            </div>
                            <div class="team-hover-wrap">
                                <div class="team-social">
                                    <a href="#" class="icon-btn">
                                        <i class="far fa-plus"></i>
                                    </a>

                                </div>
                                <div class="team-content">
                                    <h3 class="team-title"><a
                                            >{{ $item->first_name . ' ' . $item->last_name . ', ' . $item->title }}</a>
                                    </h3>
                                    <span class="team-desig to-black">{{ $item->specialization }}</span>
                                    <span class="team-desig">NIP : {{ $item->nip }}</span>
                                </div>
                                {{-- <div class="team-info">
                                    <span><i class="fal fa-file-check"></i>2 Courses</span>
                                    <span><i class="fa-light fa-users"></i>Students 60+</span>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
@endsection
