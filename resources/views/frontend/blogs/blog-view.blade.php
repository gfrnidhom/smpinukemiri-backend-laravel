@extends('frontend._partials.main')


@section('main-content')
    <div class="breadcumb-wrapper ">
        <div class="breadcumb-shape">
        </div>

        <div class="container">
            <div class="breadcumb-content text-center">
                <h1 class="breadcumb-title">Berita Terbaru</h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{ route('home-dashboard') }}">Home</a></li>
                    <li>Berita Terbaru</li>
                </ul>
            </div>
        </div>
    </div>
    <section class="overflow-hidden space gr-bg2" id="blog-sec">
        <div class="container">
            <div class="row ">
                @foreach ($blogs as $blog)
                    <div class="col-md-6 col-xl-4 mt-5">
                        <div class="th-blog blog-single style2">
                            <div class="blog-img">
                                <a href="{{ url('blogs', $blog->slug) }}"><img
                                        src="{{ asset('storage' . '/' . $blog->image) }}" alt="Blog Image"></a>
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <a class="author" href="{{ route('blogs') }}"><i class="fa-light fa-user"></i>by
                                        {{ $blog->author->name }}</a>
                                    <a href="{{ route('blogs') }}"><i
                                            class="fa-light fa-clock"></i>{{ \Carbon\Carbon::parse($blog->created_at)->format('d M Y') }}</a>
                                </div>
                                <h4 class="box-title text-title-blogs"><a
                                        href="{{ url('blogs', $blog->slug) }}">{{ $blog->title }}</a>
                                </h4>
                                <a href="{{ url('blogs', $blog->slug) }}" class="link-btn">Baca Selengkapnya<i
                                        class="fas fa-arrow-right ms-2"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
            <div class="row mt-40">
                <div class="col-12 text-center">
                    <div class="th-pagination">
                        {{ $blogs->links() }}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
