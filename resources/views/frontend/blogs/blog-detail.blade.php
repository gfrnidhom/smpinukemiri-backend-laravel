@extends('frontend._partials.main')


@section('main-content')
    <!-- ==================== Breadcrumb Start Here ==================== -->
    <section class="breadcrumb py-120 bg-main-25 position-relative z-1 overflow-hidden mb-0">
        {{-- <img src="{{ asset('') }}frontend/images/shapes/shape1.png" alt="" class="shape one animation-rotation d-md-block d-none"> --}}
        <img src="{{ asset('') }}frontend/images/shapes/shape2.png" alt=""
            class="shape two animation-scalation d-md-block d-none">
        {{-- <img src="{{ asset('') }}frontend/images/shapes/shape3.png" alt="" class="shape eight animation-walking d-md-block d-none"> --}}
        {{-- <img src="{{ asset('') }}frontend/images/shapes/shape5.png" alt="" class="shape six animation-walking d-md-block d-none"> --}}
        <img src="{{ asset('') }}frontend/images/shapes/shape4.png" alt="" class="shape four animation-scalation">
        {{-- <img src="{{ asset('') }}frontend/images/shapes/shape4.png" alt="" class="shape nine animation-scalation"> --}}

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="breadcrumb__wrapper">
                        <h1 class="breadcrumb__title display-4 fw-semibold text-center"> {{ $blogs['title'] }}</h1>
                        <ul class="breadcrumb__list d-flex align-items-center justify-content-center gap-4">
                            <li class="breadcrumb__item">
                                <a href="index.html"
                                    class="breadcrumb__link text-neutral-500 hover-text-main-600 fw-medium">
                                    <i class="text-lg d-inline-flex ph-bold ph-house"></i> Beranda</a>
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
                                <span class="text-neutral-500"> Berita </span>
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
                                <span class="text-main-two-600"> {{ $blogs['title'] }} </span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==================== Breadcrumb End Here ==================== -->

    <!-- ================================ Blog Details Section Start =================================== -->
    <div class="blog-page-section py-120">
        <div class="container">
            <div class="flex-between gap-16 flex-wrap mb-40">
                <span class="text-neutral-500">Showing 9 of 600 Results </span>
                <div class="flex-align gap-16">
                    <div class="flex-align gap-8">
                        <span class="text-neutral-500 flex-shrink-0">Sort By :</span>
                        <select
                            class="form-select ps-20 pe-28 py-8 fw-medium rounded-pill bg-main-25 border border-neutral-30 text-neutral-700">
                            <option value="1">Newest</option>
                            <option value="1">Trending</option>
                            <option value="1">Popular</option>
                        </select>
                    </div>
                    <button type="button"
                        class="list-bar-btn text-xl w-40 h-40 bg-main-600 text-white rounded-8 flex-center d-lg-none">
                        <i class="ph-bold ph-funnel"></i>
                    </button>
                </div>
            </div>
            <div class="row gy-4">
                <div class="col-lg-8">
                    <div class="bg-main-25 rounded-16 p-12 border border-neutral-30">
                        <div class="rounded-12 overflow-hidden position-relative">
                            <img src="{{ $blogs['image'] }}" alt="Course Image"
                                class="rounded-12 cover-img transition-2">
                            {{-- <div
                                class="position-absolute inset-inline-end-0 inset-block-end-0 me-16 mb-16 py-12 px-24 rounded-8 bg-main-two-600 text-white fw-medium">
                                <h3 class="mb-0 text-white fw-medium">21</h3>
                                DEC
                            </div> --}}
                        </div>
                        <div class="pt-32 pb-24 px-16 position-relative">
                            <div class="flex-align gap-14 flex-wrap mb-20">
                                <div class="flex-align gap-8">
                                    <span class="text-neutral-500 text-2xl d-flex"><i class="ph ph-user-circle"></i></span>
                                    <span class="text-neutral-500">{{ $author['name'] }}</span>
                                </div>
                                <span class="w-8 h-8 bg-neutral-100 rounded-circle"></span>
                                <div class="flex-align gap-8">
                                    {{-- <span class="text-neutral-500 text-2xl d-flex"><i class="ph-bold ph-eye"></i></span> --}}
                                    <span class="text-neutral-500">{{ $blogs['created_at'] }}</span>
                                </div>

                            </div>
                            <h2 class="mb-24"> {{ $blogs['title'] }} </h2>
                            <p class="text-neutral-500 mb-32">{!! $blogs['description'] !!}</p>


                        </div>
                    </div>

                    <!-- Review Start -->
                    <div class="border border-neutral-30 rounded-12 bg-main-25 p-32 mt-24">
                        <div class="flex-between gap-16 flex-wrap mb-24">
                            <h4 class="mb-0">All Comments</h4>
                            <div class="flex-align gap-16">
                                <div class="flex-align gap-8">
                                    <span class="text-neutral-500 flex-shrink-0">Sort By :</span>
                                    <select
                                        class="form-select ps-20 pe-28 py-8 fw-medium rounded-pill bg-main-25 border border-neutral-30 text-neutral-700">
                                        <option value="1">Newest</option>
                                        <option value="1">Trending</option>
                                        <option value="1">Popular</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <!-- Review Item -->
                        @foreach ($comments as $comment)
                            <div class="border border-neutral-30 rounded-12 bg-white p-32 mb-16">
                                <p class="text-neutral-700">{{ strip_tags($comment->description) }}</p>
                                <span class="d-block border border-neutral-30 my-24 border-dashed"></span>
                                <div class="flex-align gap-24">
                                    <img src="{{ asset('frontend/images/profile/profile.jpeg') }}" alt=""
                                        class="w-60 h-60 rounded-circle cover-img">
                                    <div class="">
                                        <h6 class="text-xl mb-8 fw-medium">{{ $comment->name }}</h6>
                                        <span class="text-neutral-700 text-sm">Waktu :
                                            {{ dateFormat($comment->created_at) }}</span>
                                    </div>
                                </div>
                                <span class="d-block border border-neutral-30 my-24 border-dashed"></span>


                            </div>
                        @endforeach
                        <!-- Review Item -->


                    </div>
                    <!-- Review End -->

                    <!-- Review Form Start -->
                    <div class="border border-neutral-30 rounded-12 bg-main-25 p-32 mt-24">
                        <form action="{{ route('sendComment', $blogs['slug']) }}" id="commentForm" method="POST">
                            @csrf
                            <h5 class="mb-0">Tulis Komentar</h5>
                            <span class="d-block border border-neutral-30 my-32 border-dashed"></span>
                            <div class="mb-24">
                                <label for="name" class="text-neutral-700 text-lg fw-medium mb-12">Nama Lengkap
                                </label>
                                <input type="text" name="name"
                                    class="common-input rounded-pill @error('title') is-invalid @enderror" id="name"
                                    placeholder="Enter Name...">
                                @error('name')
                                    <div class="alert text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-24">
                                <label for="email" class="text-neutral-700 text-lg fw-medium mb-12">Email </label>
                                <input type="email" name="email"
                                    class="common-input rounded-pill @error('email') is-invalid @enderror" id="email"
                                    placeholder="Enter Email...">
                                @error('email')
                                    <div class="alert text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-24">
                                <label for="desc" class="text-neutral-700 text-lg fw-medium mb-12">Komentar
                                </label>
                                <textarea id="desc" name="description"
                                    class="common-input rounded-24 @error('description') is-invalid @enderror" placeholder="Enter Komentar..."></textarea>
                                @error('description')
                                    <div class="alert text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-0">
                                <button type="submit" class="btn btn-main rounded-pill flex-center gap-8 mt-40">
                                    Kirim Komentar
                                    <i class="ph-bold ph-arrow-up-right d-flex text-lg"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                    <!-- Review Form End -->
                </div>
                <div class="col-lg-4">
                    <div class="border border-neutral-30 rounded-12 bg-main-25 p-32 bg-main-25">
                        <h4 class="mb-16">Search</h4>
                        <span class="d-block border border-neutral-30 my-24 border-dashed"></span>
                        <form action="#" class="position-relative">
                            <input type="text" class="common-input rounded-pill py-18 pe-64" placeholder="Search...">
                            <button type="submit"
                                class="flex-center w-44 h-44 rounded-circle bg-main-600 hover-bg-main-700 text-white text-2xl position-absolute inset-inline-end-0 top-50 translate-middle-y me-8"><i
                                    class="ph ph-magnifying-glass"></i></button>
                        </form>
                    </div>
                    <div class="border border-neutral-30 rounded-12 bg-main-25 p-32 bg-main-25 mt-24">
                        <h4 class="mb-16">Related Post</h4>
                        <span class="d-block border border-neutral-30 my-24 border-dashed"></span>

                        @foreach ($relatedPosts as $post)
                            <div class="flex-align gap-16">
                                <a href="{{ route('blogs-detail', $post->slug) }}" class="flex-shrink-0">
                                    <img src="{{ asset('storage', $post->image) }}" alt=""
                                        class="w-80 h-80 rounded-8 object-fit-cover">
                                </a>
                                <div class="flex-grow-1">
                                    <h6 class="text-xl mb-10">
                                        <a href="{{ route('blogs-detail', $post->slug) }}"
                                            class="hover-text-main-600 text-line-2">{{ $post->title }}
                                        </a>
                                    </h6>
                                    <span class="text-neutral-500">{{ dateFormat($post->created_at) }}</span>
                                </div>
                            </div>
                            <span class="d-block border border-neutral-30 my-24 border-dashed"></span>
                        @endforeach


                        <a href="" class="h6 mb-0 text-main-600 fw-semibold hover-text-decoration-underline">
                            Lihat Semua
                            <i class="ph-bold ph-arrow-right"></i>
                        </a>
                    </div>
                    <div class="border border-neutral-30 rounded-12 bg-main-25 p-32 bg-main-25 mt-24">
                        <h4 class="mb-16">Kategori Populer</h4>
                        <span class="d-block border border-neutral-30 my-24 border-dashed"></span>
                        <div class="flex-align flex-wrap gap-8">
                            @foreach ($categories as $cat)
                                <a href="blog.html"
                                    class="border border-neutral-30 px-20 py-12 rounded-pill text-sm bg-white text-neutral-500 hover-border-main-600 hover-text-main-600">{{ $cat->name }}</a>
                            @endforeach

                        </div>
                        <span class="d-block border border-neutral-30 my-24 border-dashed"></span>
                        <a href="{{ route('blogs') }}"
                            class="h6 mb-0 text-main-600 fw-semibold hover-text-decoration-underline">
                            Lihat Semua
                            <i class="ph-bold ph-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ================================ Blog Details Section End =================================== -->
@endsection
