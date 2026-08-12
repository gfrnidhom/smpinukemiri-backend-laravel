@extends('frontend._partials.main')

@section('seo')
    <meta name="description" content="{{ Str::limit(strip_tags($event->description), 160) }}">
    <meta name="keywords" content="smp islam nurul ulum, {{ $event->event_name }}">
    <meta name="author" content="SMP Islam Nurul Ulum">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="article">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="{{ $event->event_name }}">
    <meta property="og:description" content="{{ Str::limit(strip_tags($event->description), 160) }}">
    <meta property="og:image" content="{{ asset('storage/' . $event->image) }}">
    
    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ url()->current() }}">
    <meta property="twitter:title" content="{{ $event->event_name }}">
    <meta property="twitter:description" content="{{ Str::limit(strip_tags($event->description), 160) }}">
    <meta property="twitter:image" content="{{ asset('storage/' . $event->image) }}">
@endsection

@section('main-content')
    <!--==============================
    Breadcumb
    ============================== -->
    <div class="breadcumb-wrapper ">
        <div class="breadcumb-shape">
        </div>
        <div class="container">
            <div class="breadcumb-content text-center">
                <h1 class="breadcumb-title">{{ $event->event_name }}</h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{ route('home-dashboard') }}">Beranda</a></li>
                    <li><a href="{{ route('events') }}">Event</a></li>
                    <li>Detail</li>
                </ul>
            </div>
        </div>
    </div>

    <!--==============================
    Event Detail Area
    ==============================-->
    <section class="th-blog-wrapper blog-details space-top space-extra-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="th-blog blog-single">
                        <div class="blog-img">
                            <img src="{{ asset('storage/' . $event->image) }}" alt="Event Image">
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <a class="author" href="#"><i class="fal fa-user"></i>SMP Islam Nurul Ulum</a>
                                <a href="#"><i class="fal fa-calendar-days"></i>{{ \Carbon\Carbon::parse($event->event_date)->format('d M Y') }}</a>
                            </div>
                            <h2 class="blog-title">{{ $event->event_name }}</h2>
                            <div class="blog-text">
                                {!! $event->description !!}
                            </div>
                        </div>
                    </div>
                </div>

                <!--==============================
                Sidebar
                ==============================-->
                <div class="col-lg-4">
                    <aside class="sidebar-area">
                        <div class="widget  ">
                            <h3 class="widget_title">Event Terbaru Lainnya</h3>
                            <div class="recent-post-wrap">
                                @foreach ($recentEvents as $post)
                                <div class="recent-post">
                                    <div class="media-img">
                                        <a href="{{ route('events-detail', $post->slug) }}"><img src="{{ asset('storage/' . $post->image) }}" alt="Event Image"></a>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="post-title"><a class="text-inherit" href="{{ route('events-detail', $post->slug) }}">{{ $post->event_name }}</a></h4>
                                        <div class="recent-post-meta">
                                            <a href="{{ route('events-detail', $post->slug) }}"><i class="fal fa-calendar-days"></i>{{ \Carbon\Carbon::parse($post->event_date)->format('d M Y') }}</a>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>
@endsection
