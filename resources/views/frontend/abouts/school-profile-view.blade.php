@extends('frontend._partials.main')


@section('main-content')
    <div class="breadcumb-wrapper ">
        <div class="breadcumb-shape">
        </div>

        <div class="container">
            <div class="breadcumb-content text-center">
                <h1 class="breadcumb-title">Profil Sekolah</h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{ route('home-dashboard') }}">Home</a></li>
                    <li>Profil Sekolah</li>
                </ul>
            </div>
        </div>
    </div>
    <section class="space-top space-extra2-bottom">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="course-single">
                        <div class="course-single-top">
                            <div class="course-img">
                                <img src="{{ $settings['school_image4'] }}" alt="Course Image">
                                {{-- <span class="tag"><i class="fas fa-clock"></i> 03 WEEKS</span>
                                <span class="tag bg-theme">BEST SELLER</span> --}}
                            </div>

                            <div class="course-description">
                                <h5 class="h5">Profil Sekolah</h5>
                                <p>{{ strip_tags($settings['school_history']) }}</p>



                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
