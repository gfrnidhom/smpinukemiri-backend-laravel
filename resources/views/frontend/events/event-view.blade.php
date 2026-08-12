@extends('frontend._partials.main')


@section('main-content')
    <div class="breadcumb-wrapper ">
        <div class="breadcumb-shape">
        </div>

        <div class="container">
            <div class="breadcumb-content text-center">
                <h1 class="breadcumb-title">Event Kami</h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{ route('home-dashboard') }}">Home</a></li>
                    <li>Event Kami</li>
                </ul>
            </div>
        </div>
    </div>
    <section class="space-top space-extra-bottom">
        <div class="container">
            <div class="row gy-40 gx-70">

                @foreach ($events as $event)
                    <div class="col-md-6 col-xl-4 mt-5">
                        <div class="th-blog blog-single style2">
                            <div class="blog-img">
                                <a href="{{ route('events-detail', $event->slug) }}"><img src="{{ asset('storage' . '/' . $event->image) }}"
                                        alt="Blog Image"></a>
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <a class="author" href="#"><i class="fa-light fa-user"></i>
                                        {{ $event->eventCategories->category_name }}</a>
                                    <a href="#"><i
                                            class="fa-light fa-clock"></i>{{ \Carbon\Carbon::parse($event->start_date)->format('d M Y') }}</a>
                                </div>
                                <h4 class="box-title"><a
                                        href="{{ route('events-detail', $event->slug) }}">{{ $event->event_name }}</a>
                                </h4>
                                <a href="{{ route('events-detail', $event->slug) }}" class="link-btn">Lihat Event<i
                                        class="fas fa-arrow-right ms-2"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="col-12 text-center">
                    <div class="th-pagination ">
                        {{ $events->links() }}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
