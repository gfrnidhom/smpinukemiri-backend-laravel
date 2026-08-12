@extends('frontend._partials.main')

@section('seo')
    <meta name="description" content="{{ Str::limit(strip_tags($blogs['description']), 160) }}">
    <meta name="keywords" content="smp islam nurul ulum, {{ $blogs['title'] }}">
    <meta name="author" content="{{ $author['name'] ?? 'SMP Islam Nurul Ulum' }}">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="article">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="{{ $blogs['title'] }}">
    <meta property="og:description" content="{{ Str::limit(strip_tags($blogs['description']), 160) }}">
    <meta property="og:image" content="{{ asset('storage/' . $blogs['image']) }}">
    
    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ url()->current() }}">
    <meta property="twitter:title" content="{{ $blogs['title'] }}">
    <meta property="twitter:description" content="{{ Str::limit(strip_tags($blogs['description']), 160) }}">
    <meta property="twitter:image" content="{{ asset('storage/' . $blogs['image']) }}">
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
                <h1 class="breadcumb-title">{{ $blogs['title'] }}</h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{ route('home-dashboard') }}">Beranda</a></li>
                    <li><a href="{{ route('blogs') }}">Berita</a></li>
                    <li>Detail</li>
                </ul>
            </div>
        </div>
    </div>

    <!--==============================
    Blog Area
    ==============================-->
    <section class="th-blog-wrapper blog-details space-top space-extra-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="th-blog blog-single">
                        <div class="blog-img">
                            <img src="{{ asset('storage/' . $blogs['image']) }}" alt="Blog Image">
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <a class="author" href="{{ route('blogs') }}"><i class="fal fa-user"></i>{{ $author['name'] }}</a>
                                <a href="{{ route('blogs') }}"><i class="fal fa-calendar-days"></i>{{ \Carbon\Carbon::parse($blogs['created_at'])->format('d M Y') }}</a>
                            </div>
                            <h2 class="blog-title">{{ $blogs['title'] }}</h2>
                            <div class="blog-text">
                                {!! $blogs['description'] !!}
                            </div>
                        </div>
                    </div>

                    <!--==============================
                    Komentar
                    ==============================-->
                    <div class="th-comments-wrap ">
                        <h2 class="blog-inner-title h3"> Komentar ({{ count($comments) }})</h2>
                        <ul class="comment-list">
                            @foreach ($comments as $comment)
                            <li class="th-comment-item">
                                <div class="th-post-comment">
                                    <div class="comment-avater">
                                        <img src="{{ asset('frontend/images/profile/profile.jpeg') }}" alt="Comment Author">
                                    </div>
                                    <div class="comment-content">
                                        <span class="commented-on"><i class="fal fa-calendar-alt"></i>{{ dateFormat($comment->created_at) }}</span>
                                        <h3 class="name">{{ $comment->name }}</h3>
                                        <p class="text">{{ strip_tags($comment->description) }}</p>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div> <!-- Comment Form -->
                    <div class="th-comment-form ">
                        <div class="form-title">
                            <h3 class="blog-inner-title h3 mb-2">Tinggalkan Komentar</h3>
                            <p class="form-text">Alamat email Anda tidak akan dipublikasikan. Ruas yang wajib ditandai *</p>
                        </div>
                        <form action="{{ route('sendComment', $blogs['slug']) }}" id="commentForm" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Nama Lengkap *" required>
                                    <i class="fal fa-user"></i>
                                    @error('name')
                                        <div class="alert text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6 form-group">
                                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email *" required>
                                    <i class="fal fa-envelope"></i>
                                    @error('email')
                                        <div class="alert text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-12 form-group">
                                    <textarea name="description" id="desc" class="form-control @error('description') is-invalid @enderror" placeholder="Komentar *" required></textarea>
                                    <i class="fal fa-pencil"></i>
                                    @error('description')
                                        <div class="alert text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-12 form-group mb-0">
                                    <button type="submit" class="th-btn">Kirim Komentar <i class="fas fa-arrow-right ms-1"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <!--==============================
                Sidebar
                ==============================-->
                <div class="col-lg-4">
                    <aside class="sidebar-area">
                        <div class="widget widget_search  ">
                            <form class="search-form">
                                <input type="text" placeholder="Cari Berita...">
                                <button type="submit"><i class="far fa-search"></i></button>
                            </form>
                        </div>
                        <div class="widget widget_categories  ">
                            <h3 class="widget_title">Kategori</h3>
                            <ul>
                                @foreach ($categories as $cat)
                                <li>
                                    <a href="{{ route('blogs') }}">{{ $cat->name }}</a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="widget  ">
                            <h3 class="widget_title">Berita Terkait</h3>
                            <div class="recent-post-wrap">
                                @foreach ($relatedPosts as $post)
                                <div class="recent-post">
                                    <div class="media-img">
                                        <a href="{{ route('blogs-detail', $post->slug) }}"><img src="{{ asset('storage/' . $post->image) }}" alt="Blog Image"></a>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="post-title"><a class="text-inherit" href="{{ route('blogs-detail', $post->slug) }}">{{ $post->title }}</a></h4>
                                        <div class="recent-post-meta">
                                            <a href="{{ route('blogs-detail', $post->slug) }}"><i class="fal fa-calendar-days"></i>{{ dateFormat($post->created_at) }}</a>
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
