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
                        <h1 class="breadcrumb__title display-4 fw-semibold text-center"> Galeri</h1>
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
                                <span class="text-main-two-600"> Galeri </span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==================== Breadcrumb End Here ==================== -->

    <!-- ============================== Course Grid View Section Start ============================== -->
    <section class="course-grid-view py-120">
        <div class="container">
            <div class="flex-between gap-16 flex-wrap mb-40">
                <span class="text-neutral-500">Showing 9 of 600 Results </span>
                <div class="flex-align gap-8">
                    <span class="text-neutral-500 flex-shrink-0">Sort By :</span>
                    <select
                        class="form-select ps-20 pe-28 py-8 fw-semibold rounded-pill bg-main-25 border border-neutral-30 text-neutral-700">
                        <option value="1">Newest</option>
                        <option value="1">Trending</option>
                        <option value="1">Popular</option>
                    </select>
                </div>
            </div>
            <div class="row gy-4">
                {{-- @foreach ($gallery as $item)
                    <div class="col-lg-4 col-sm-6">
                        <div class="course-item bg-main-25 rounded-16 p-12 h-100 border border-neutral-30">
                            <div class="course-item__thumb rounded-12 overflow-hidden position-relative">
                                <a href="course-details.html" class="w-100 h-100">
                                    <img src="{{ asset('storage/' . $item->getRelativePathname()) }}" alt="Course Image"
                                        class="course-item__img rounded-12 cover-img transition-2">
                                </a>

                            </div>

                        </div>
                    </div>
                @endforeach --}}

            </div>
            <ul class="pagination mt-40 flex-align gap-12 flex-wrap justify-content-center">
                <li class="page-item">
                    <a class="page-link text-neutral-700 fw-semibold w-40 h-40 bg-main-25 rounded-circle hover-bg-main-600 border-neutral-30 hover-border-main-600 hover-text-white flex-center p-0"
                        href="#"><i class="ph-bold ph-caret-left"></i></a>
                </li>
                <li class="page-item">
                    <a class="page-link text-neutral-700 fw-semibold w-40 h-40 bg-main-25 rounded-circle hover-bg-main-600 border-neutral-30 hover-border-main-600 hover-text-white flex-center p-0"
                        href="#">1</a>
                </li>
                <li class="page-item">
                    <a class="page-link text-neutral-700 fw-semibold w-40 h-40 bg-main-25 rounded-circle hover-bg-main-600 border-neutral-30 hover-border-main-600 hover-text-white flex-center p-0"
                        href="#">2</a>
                </li>
                <li class="page-item">
                    <a class="page-link text-neutral-700 fw-semibold w-40 h-40 bg-main-25 rounded-circle hover-bg-main-600 border-neutral-30 hover-border-main-600 hover-text-white flex-center p-0"
                        href="#">3</a>
                </li>
                <li class="page-item">
                    <a class="page-link text-neutral-700 fw-semibold w-40 h-40 bg-main-25 rounded-circle hover-bg-main-600 border-neutral-30 hover-border-main-600 hover-text-white flex-center p-0"
                        href="#">...</a>
                </li>
                <li class="page-item">
                    <a class="page-link text-neutral-700 fw-semibold w-40 h-40 bg-main-25 rounded-circle hover-bg-main-600 border-neutral-30 hover-border-main-600 hover-text-white flex-center p-0"
                        href="#"><i class="ph-bold ph-caret-right"></i></a>
                </li>
            </ul>
        </div>
    </section>
    <!-- ============================== Course Grid View Section End ============================== -->
@endsection
