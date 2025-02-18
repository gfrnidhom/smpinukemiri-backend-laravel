@extends('frontend._partials.main')

@include('sweetalert::alert')

@section('main-content')
    <!--==============================
                                                                                                                                Hero Area
                                                                                                                                ==============================-->
    <div class="th-hero-wrapper hero-14" data-bg-src="{{ asset('frontend') }}/img/update1/hero/hero_bg_9_1.jpg" id="hero">
        <div class="hero-img">
            <img class="image-desktop" src="{{ asset('frontend') }}/img/update1/hero/hero_9_1.png" alt="Hero Image">
            <img class="image-mobile" src="{{ asset('frontend') }}/img/update1/hero/hero_9_1_2.png" alt="Hero Image">
        </div>
        <div class="hero-shape shape1">
            <img src="{{ asset('frontend') }}/img/update1/hero/shape_9_3.png" alt="shape">
        </div>
        <div class="hero-shape shape2">
            <img src="{{ asset('frontend') }}/img/update1/hero/shape_9_4.png" alt="shape">
        </div>
        <div class="container">
            <div class="hero-style14">
                <span class="hero-name">Michel Richard</span>
                <h1 class="hero-title">The Best Certified </h1>
                <h1 class="hero-title">Educational Consultant</h1>
                <p class="hero-text">Credibly embrace leading-edge testing procedures rather than customer directed
                    solutions. Progressively recaptiualize customer service.</p>
                <div class="btn-group">
                    <a href="about.html" class="th-btn">Discover More<i class="fas fa-long-arrow-right ms-2"></i></a>
                    <a href="course.html" class="th-btn style4">View Course<i class="fas fa-long-arrow-right ms-2"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!--======== / Hero Section ========-->
    <!--==============================
                                                                                                                                About Area
                                                                                                                                ==============================-->
    <div class="space" id="about-sec">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-5 mb-30 mb-xl-0">
                    <div class="img-box11">
                        <div class="img1">
                            <img src="{{ asset('frontend') }}/img/update1/normal/about_7_1.jpg" alt="about">
                        </div>
                    </div>
                </div>
                <div class="col-xl-7">
                    <div class="ps-xxl-5 ms-xl-2">
                        <div class="title-area mb-35">
                            <span class="sub-title">Hello There</span>
                            <h2 class="sec-title fw-semibold">Hi, I am <span class="text-theme">Michel Richard</span> Coach
                                Of Professional Mentor</h2>
                        </div>
                        <p class="mt-n2 mb-35">Enthusiastically facilitate distinctive experiences whereas excellent
                            metrics. Dynamically fashion fully tested methodologies with cost effective data. Completely
                            synergize ethical web services rather than professional applications. Progressively empower
                            value-added sources before cost effective users. Assertively engineer magnetic benefits before
                            parallel initiatives.</p>
                        <a href="course.html" class="th-btn">Learn More<i class="fas fa-long-arrow-right ms-2"></i></a>
                        <div class="award-box-wrap">
                            <div class="award-box">
                                <div class="award-box_icon">
                                    <img src="{{ asset('frontend') }}/img/update1/icon/award_1_1.png" alt="award">
                                </div>
                                <h3 class="award-box_title box-title">Best Trainer</h3>
                                <p class="award-box_time">2012 - 2018</p>
                            </div>
                            <div class="award-box">
                                <div class="award-box_icon">
                                    <img src="{{ asset('frontend') }}/img/update1/icon/award_1_2.png" alt="award">
                                </div>
                                <h3 class="award-box_title box-title">Best Performance</h3>
                                <p class="award-box_time">2014 - 2015</p>
                            </div>
                            <div class="award-box">
                                <div class="award-box_icon">
                                    <img src="{{ asset('frontend') }}/img/update1/icon/award_1_3.png" alt="award">
                                </div>
                                <h3 class="award-box_title box-title">Editors Choice</h3>
                                <p class="award-box_time">2010 - 2016</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--==============================
                                                                                                                                Course Area
                                                                                                                                ==============================-->
    <section class="space bg-smoke" id="course-sec">
        <div class="container">
            <div class="title-area text-center">
                <span class="sub-title">Popular Courses</span>
                <h2 class="sec-title fw-medium">Explore Featured Courses</h2>
            </div>
            <div class="row th-carousel" data-slide-show="3" data-ml-slide-show="3" data-lg-slide-show="2"
                data-md-slide-show="2" data-sm-slide-show="1">

                <div class="col-md-6 col-xl-4 filter-item cat1 cat3 cat5 cat7">
                    <div class="course-box2">
                        <div class="course-img">
                            <img src="{{ asset('frontend') }}/img/update1/course/course_3_1.jpg" alt="course">
                            <span class="tag">Free</span>
                        </div>
                        <div class="course-content">
                            <h3 class="course-title"><a href="course-details.html">React Tutorial Beginners For Skills
                                    Building Carrer</a></h3>
                            <div class="course-author">
                                <div class="author-info">
                                    <img src="{{ asset('frontend') }}/img/update1/course/author_2.jpg" alt="author">
                                    <div class="info">
                                        <a href="course.html" class="author-name">Kevin Perry</a>
                                        <span class="desig">Instructor</span>
                                    </div>

                                </div>
                                <div class="course-rating">
                                    <div class="star-rating" role="img" aria-label="Rated 4.00 out of 5">
                                        <span style="width:79%">Rated <strong class="rating">4.00</strong> out of 5</span>
                                    </div>
                                    (4.00)
                                </div>
                            </div>
                            <div class="course-meta">
                                <span><i class="fal fa-file"></i>Lesson 8</span>
                                <span><i class="fal fa-user"></i>Students 50</span>
                                <span><i class="fal fa-eye"></i>View: 12K</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-xl-4 filter-item cat2 cat4 cat6">
                    <div class="course-box2">
                        <div class="course-img">
                            <img src="{{ asset('frontend') }}/img/update1/course/course_3_2.jpg" alt="course">
                            <span class="tag">22.9$</span>
                        </div>
                        <div class="course-content">
                            <h3 class="course-title"><a href="course-details.html">Techs Tutorial Beginners For Skills
                                    Building Morani</a></h3>
                            <div class="course-author">
                                <div class="author-info">
                                    <img src="{{ asset('frontend') }}/img/update1/course/author_2.jpg" alt="author">
                                    <div class="info">
                                        <a href="course.html" class="author-name">Kevin Perry</a>
                                        <span class="desig">Instructor</span>
                                    </div>

                                </div>
                                <div class="course-rating">
                                    <div class="star-rating" role="img" aria-label="Rated 4.00 out of 5">
                                        <span style="width:79%">Rated <strong class="rating">4.00</strong> out of 5</span>
                                    </div>
                                    (4.00)
                                </div>
                            </div>
                            <div class="course-meta">
                                <span><i class="fal fa-file"></i>Lesson 9</span>
                                <span><i class="fal fa-user"></i>Students 55</span>
                                <span><i class="fal fa-eye"></i>View: 13K</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-xl-4 filter-item cat3 cat5 cat7">
                    <div class="course-box2">
                        <div class="course-img">
                            <img src="{{ asset('frontend') }}/img/update1/course/course_3_3.jpg" alt="course">
                            <span class="tag">11.9$</span>
                        </div>
                        <div class="course-content">
                            <h3 class="course-title"><a href="course-details.html">Start Tutorial Beginners For Skills
                                    Building Korans</a></h3>
                            <div class="course-author">
                                <div class="author-info">
                                    <img src="{{ asset('frontend') }}/img/update1/course/author_2.jpg" alt="author">
                                    <div class="info">
                                        <a href="course.html" class="author-name">Kevin Perry</a>
                                        <span class="desig">Instructor</span>
                                    </div>

                                </div>
                                <div class="course-rating">
                                    <div class="star-rating" role="img" aria-label="Rated 4.00 out of 5">
                                        <span style="width:79%">Rated <strong class="rating">4.00</strong> out of 5</span>
                                    </div>
                                    (4.00)
                                </div>
                            </div>
                            <div class="course-meta">
                                <span><i class="fal fa-file"></i>Lesson 6</span>
                                <span><i class="fal fa-user"></i>Students 60</span>
                                <span><i class="fal fa-eye"></i>View: 12K</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-xl-4 filter-item cat1 cat4 cat6">
                    <div class="course-box2">
                        <div class="course-img">
                            <img src="{{ asset('frontend') }}/img/update1/course/course_3_4.jpg" alt="course">
                            <span class="tag">20.1$</span>
                        </div>
                        <div class="course-content">
                            <h3 class="course-title"><a href="course-details.html">Learn Tutorial Beginners For Skills
                                    Building Bakand</a></h3>
                            <div class="course-author">
                                <div class="author-info">
                                    <img src="{{ asset('frontend') }}/img/update1/course/author_2.jpg" alt="author">
                                    <div class="info">
                                        <a href="course.html" class="author-name">Kevin Perry</a>
                                        <span class="desig">Instructor</span>
                                    </div>

                                </div>
                                <div class="course-rating">
                                    <div class="star-rating" role="img" aria-label="Rated 4.00 out of 5">
                                        <span style="width:79%">Rated <strong class="rating">4.00</strong> out of 5</span>
                                    </div>
                                    (4.00)
                                </div>
                            </div>
                            <div class="course-meta">
                                <span><i class="fal fa-file"></i>Lesson 5</span>
                                <span><i class="fal fa-user"></i>Students 50</span>
                                <span><i class="fal fa-eye"></i>View: 14K</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-xl-4 filter-item cat2 cat5 cat6 cat7">
                    <div class="course-box2">
                        <div class="course-img">
                            <img src="{{ asset('frontend') }}/img/update1/course/course_3_5.jpg" alt="course">
                            <span class="tag">Free</span>
                        </div>
                        <div class="course-content">
                            <h3 class="course-title"><a href="course-details.html">Start Tutorial Beginners For Skills
                                    Building Tonals</a></h3>
                            <div class="course-author">
                                <div class="author-info">
                                    <img src="{{ asset('frontend') }}/img/update1/course/author_2.jpg" alt="author">
                                    <div class="info">
                                        <a href="course.html" class="author-name">Kevin Perry</a>
                                        <span class="desig">Instructor</span>
                                    </div>

                                </div>
                                <div class="course-rating">
                                    <div class="star-rating" role="img" aria-label="Rated 4.00 out of 5">
                                        <span style="width:79%">Rated <strong class="rating">4.00</strong> out of 5</span>
                                    </div>
                                    (4.00)
                                </div>
                            </div>
                            <div class="course-meta">
                                <span><i class="fal fa-file"></i>Lesson 12</span>
                                <span><i class="fal fa-user"></i>Students 70</span>
                                <span><i class="fal fa-eye"></i>View: 12K</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-xl-4 filter-item cat3 cat1 cat2 cat4">
                    <div class="course-box2">
                        <div class="course-img">
                            <img src="{{ asset('frontend') }}/img/update1/course/course_3_6.jpg" alt="course">
                            <span class="tag">Free</span>
                        </div>
                        <div class="course-content">
                            <h3 class="course-title"><a href="course-details.html">Techs Tutorial Beginners For Skills
                                    Building Toiani</a></h3>
                            <div class="course-author">
                                <div class="author-info">
                                    <img src="{{ asset('frontend') }}/img/update1/course/author_2.jpg" alt="author">
                                    <div class="info">
                                        <a href="course.html" class="author-name">Kevin Perry</a>
                                        <span class="desig">Instructor</span>
                                    </div>

                                </div>
                                <div class="course-rating">
                                    <div class="star-rating" role="img" aria-label="Rated 4.00 out of 5">
                                        <span style="width:79%">Rated <strong class="rating">4.00</strong> out of 5</span>
                                    </div>
                                    (4.00)
                                </div>
                            </div>
                            <div class="course-meta">
                                <span><i class="fal fa-file"></i>Lesson 11</span>
                                <span><i class="fal fa-user"></i>Students 50</span>
                                <span><i class="fal fa-eye"></i>View: 11K</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="shape-mockup" data-top="0%" data-right="0%"><img
                src="{{ asset('frontend') }}/img/update1/shape/shadow_2.png" alt="shapes"></div>
        <div class="shape-mockup jump" data-top="13%" data-left="0%"><img
                src="{{ asset('frontend') }}/img/update1/shape/line_4.png" alt="shapes"></div>
        <div class="shape-mockup jump-reverse" data-bottom="3%" data-right="0%"><img
                src="{{ asset('frontend') }}/img/update1/shape/dot_shape_4.png" alt="shapes"></div>
    </section>
    <!--==============================
                                                                                                                                Feature Area
                                                                                                                                ==============================-->
    <div class="space">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 mb-45 mb-xl-0">
                    <div class="title-area text-center text-xl-start mb-35">
                        <span class="sub-title">Why Choose Me</span>
                        <h2 class="sec-title fw-semibold">Get An Experience Person in Personal Learning</h2>
                    </div>
                    <p class="mt-n2 mb-35 text-center text-xl-start">Enthusiastically facilitate distinctive experiences
                        whereas excellent metrics. Dynamically fashion fully tested methodologies with cost effective data.
                        Completely synergize ethical web services rather than professional applications.</p>
                    <div class="row gy-30">
                        <div class="col-md-6">
                            <div class="feature-block">
                                <div class="feature-block_icon">
                                    <img src="{{ asset('frontend') }}/img/update1/icon/feature_3_1.svg" alt="icon">
                                </div>
                                <div class="media-body">
                                    <h3 class="feature-block_title">Highly Experienced</h3>
                                    <p class="feature-block_text">Quickly iterate reliable infomediarie vis-a-vis top-line
                                        action items.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="feature-block">
                                <div class="feature-block_icon">
                                    <img src="{{ asset('frontend') }}/img/update1/icon/feature_3_2.svg" alt="icon">
                                </div>
                                <div class="media-body">
                                    <h3 class="feature-block_title">Dedicated Support</h3>
                                    <p class="feature-block_text">Quickly iterate reliable infomediarie vis-a-vis top-line
                                        action items.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="feature-block">
                                <div class="feature-block_icon">
                                    <img src="{{ asset('frontend') }}/img/update1/icon/feature_3_3.svg" alt="icon">
                                </div>
                                <div class="media-body">
                                    <h3 class="feature-block_title">Question, Quiz & Test</h3>
                                    <p class="feature-block_text">Quickly iterate reliable infomediarie vis-a-vis top-line
                                        action items.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="feature-block">
                                <div class="feature-block_icon">
                                    <img src="{{ asset('frontend') }}/img/update1/icon/feature_3_4.svg" alt="icon">
                                </div>
                                <div class="media-body">
                                    <h3 class="feature-block_title">Live Coaching</h3>
                                    <p class="feature-block_text">Quickly iterate reliable infomediarie vis-a-vis top-line
                                        action items.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="ps-xxl-5 ms-xl-2">
                        <div class="video-box2">
                            <img src="{{ asset('frontend') }}/img/update1/normal/video_3.jpg" alt="video">
                            <a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk" class="play-btn popup-video"><i
                                    class="fas fa-play"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--==============================
                                                                                                                                Counter Area
                                                                                                                                ==============================-->
    <div class="counter-area-2" data-bg-src="{{ asset('frontend') }}/img/bg/counter-bg_1.png">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-sm-6 col-xl-3 counter-card-wrap">
                    <div class="counter-card">
                        <h2 class="counter-card_number"><span class="counter-number">3.9</span>k<span
                                class="fw-normal">+</span></h2>
                        <p class="counter-card_text"><strong>Successfully</strong> Trained</p>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3 counter-card-wrap">
                    <div class="counter-card">
                        <h2 class="counter-card_number"><span class="counter-number">15.8</span>k<span
                                class="fw-normal">+</span></h2>
                        <p class="counter-card_text"><strong>Classes</strong> Completed</p>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3 counter-card-wrap">
                    <div class="counter-card">
                        <h2 class="counter-card_number"><span class="counter-number">97.5</span>k<span
                                class="fw-normal">+</span></h2>
                        <p class="counter-card_text"><strong>Satisfaction</strong> Rate</p>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3 counter-card-wrap">
                    <div class="counter-card">
                        <h2 class="counter-card_number"><span class="counter-number">100.2</span>k<span
                                class="fw-normal">+</span></h2>
                        <p class="counter-card_text"><strong>Students</strong> Community</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--==============================
                                                                                                                                Product Area
                                                                                                                                ==============================-->
    <section class="space bg-top-center" data-bg-src="{{ asset('frontend') }}/img/update1/bg/product_bg_1.jpg">
        <div class="container">
            <div class="title-area text-center">
                <span class="sub-title">Books & Publications</span>
                <h2 class="sec-title text-white fw-semibold">Read My Books & Start <br> a Beautiful Life</h2>
            </div>
            <div class="row">
                <div class="col-xl-4 d-none d-xl-block">
                    <div>
                        <img class="w-100 rounded-10" src="{{ asset('frontend') }}/img/update1/normal/publisher.jpg"
                            alt="publisher">
                    </div>
                </div>
                <div class="col-xl-8">
                    <div class="row d-none d-xl-flex align-items-end justify-content-between">
                        <div class="col-lg-6">
                            <div class="title-area mb-40">
                                <p class="mb-0 text-white">Rapidiously actualize customized methods of empowerment with
                                    turnkey initiatives. Energistically maintain granular information whereas high-payoff.
                                </p>
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="sec-btn mb-40">
                                <div class="icon-box">
                                    <button data-slick-prev="#publishedBook" class="slick-arrow default"><i
                                            class="far fa-arrow-left"></i></button>
                                    <button data-slick-next="#publishedBook" class="slick-arrow default"><i
                                            class="far fa-arrow-right"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row th-carousel" id="publishedBook" data-slide-show="4" data-lg-slide-show="3"
                        data-md-slide-show="2" data-sm-slide-show="2" data-xs-slide-show="1">

                        <div class="col-xl-3 col-lg-4 col-sm-6">
                            <div class="th-product product-grid">
                                <div class="product-img">
                                    <img src="{{ asset('frontend') }}/img/product/product_1_1.jpg" alt="Product Image">
                                    <div class="actions">
                                        <a href="#QuickView" class="icon-btn popup-content"><i
                                                class="far fa-eye"></i></a>
                                        <a href="cart.html" class="icon-btn"><i class="far fa-cart-plus"></i></a>
                                        <a href="wishlist.html" class="icon-btn"><i class="far fa-heart"></i></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                                        <span>Rated <strong class="rating">5.00</strong> out of 5 based on <span
                                                class="rating">1</span> customer rating</span>
                                    </div>
                                    <h3 class="product-title"><a href="shop-details.html">Floating Pen</a></h3>
                                    <span class="price">$370.85</span>
                                </div>
                            </div>
                        </div>


                        <div class="col-xl-3 col-lg-4 col-sm-6">
                            <div class="th-product product-grid">
                                <div class="product-img">
                                    <img src="{{ asset('frontend') }}/img/product/product_1_2.jpg" alt="Product Image">
                                    <div class="actions">
                                        <a href="#QuickView" class="icon-btn popup-content"><i
                                                class="far fa-eye"></i></a>
                                        <a href="cart.html" class="icon-btn"><i class="far fa-cart-plus"></i></a>
                                        <a href="wishlist.html" class="icon-btn"><i class="far fa-heart"></i></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                                        <span>Rated <strong class="rating">5.00</strong> out of 5 based on <span
                                                class="rating">1</span> customer rating</span>
                                    </div>
                                    <h3 class="product-title"><a href="shop-details.html">Pense Positivo Book</a></h3>
                                    <span class="price">$390.85</span>
                                </div>
                            </div>
                        </div>


                        <div class="col-xl-3 col-lg-4 col-sm-6">
                            <div class="th-product product-grid">
                                <div class="product-img">
                                    <img src="{{ asset('frontend') }}/img/product/product_1_3.jpg" alt="Product Image">
                                    <div class="actions">
                                        <a href="#QuickView" class="icon-btn popup-content"><i
                                                class="far fa-eye"></i></a>
                                        <a href="cart.html" class="icon-btn"><i class="far fa-cart-plus"></i></a>
                                        <a href="wishlist.html" class="icon-btn"><i class="far fa-heart"></i></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                                        <span>Rated <strong class="rating">5.00</strong> out of 5 based on <span
                                                class="rating">1</span> customer rating</span>
                                    </div>
                                    <h3 class="product-title"><a href="shop-details.html">Blog Planer</a></h3>
                                    <span class="price">$360.85</span>
                                </div>
                            </div>
                        </div>


                        <div class="col-xl-3 col-lg-4 col-sm-6">
                            <div class="th-product product-grid">
                                <div class="product-img">
                                    <img src="{{ asset('frontend') }}/img/product/product_1_4.jpg" alt="Product Image">
                                    <div class="actions">
                                        <a href="#QuickView" class="icon-btn popup-content"><i
                                                class="far fa-eye"></i></a>
                                        <a href="cart.html" class="icon-btn"><i class="far fa-cart-plus"></i></a>
                                        <a href="wishlist.html" class="icon-btn"><i class="far fa-heart"></i></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                                        <span>Rated <strong class="rating">5.00</strong> out of 5 based on <span
                                                class="rating">1</span> customer rating</span>
                                    </div>
                                    <h3 class="product-title"><a href="shop-details.html">Plastic Book Bags</a></h3>
                                    <span class="price">$380.85<del>$650.99</del></span>
                                </div>
                            </div>
                        </div>


                        <div class="col-xl-3 col-lg-4 col-sm-6">
                            <div class="th-product product-grid">
                                <div class="product-img">
                                    <img src="{{ asset('frontend') }}/img/product/product_1_5.jpg" alt="Product Image">
                                    <div class="actions">
                                        <a href="#QuickView" class="icon-btn popup-content"><i
                                                class="far fa-eye"></i></a>
                                        <a href="cart.html" class="icon-btn"><i class="far fa-cart-plus"></i></a>
                                        <a href="wishlist.html" class="icon-btn"><i class="far fa-heart"></i></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                                        <span>Rated <strong class="rating">5.00</strong> out of 5 based on <span
                                                class="rating">1</span> customer rating</span>
                                    </div>
                                    <h3 class="product-title"><a href="shop-details.html">Floating Pen</a></h3>
                                    <span class="price">$320.85</span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </section>
    <!--==============================
                                                                                                                                Testimonial Area
                                                                                                                                ==============================-->
    <section class="space-bottom bg-auto" data-bg-src="{{ asset('frontend') }}/img/update1/bg/testi_bg_4.png">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 mb-5 mb-xl-0">
                    <div class="testi-block-wrap">
                        <div class="title-area mb-30">
                            <span class="sub-title">Apa Kata Siswa</span>
                            <h2 class="sec-title fw-semibold">Testimoni Siswa</h2>
                            <p class="sec-text">Pendidikan Berkualitas, Lingkungan Positif, Semua Ada di SMP Nurul Islam!
                            </p>
                        </div>
                        <div class="testi-block-slide th-carousel" data-slide-show="1" data-fade="true">
                            @foreach ($testimonials as $item)
                                <div class="">
                                    <div class="testi-block">
                                        <p class="testi-block_text"><i
                                                class="fa-solid fa-quote-left"></i>{{ strip_tags($item->content) }}<i
                                                class="fa-solid fa-quote-right"></i></p>
                                        <div class="testi-block_profile">
                                            <div class="testi-block_avater">
                                                <img src="{{ asset('storage') . '/' . $item->image }}" alt="Avater"
                                                    width="100px">
                                            </div>
                                            <div class="media-body">
                                                <h3 class="testi-block_name box-title">{{ $item->name }}</h3>
                                                <span class="testi-block_desig">{{ $item->status_position }}</span>
                                                <div class="testi-block_review">
                                                    <i class="fa-solid fa-star-sharp"></i><i
                                                        class="fa-solid fa-star-sharp"></i><i
                                                        class="fa-solid fa-star-sharp"></i><i
                                                        class="fa-solid fa-star-sharp"></i><i
                                                        class="fa-solid fa-star-sharp"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                        <div class="icon-box">
                            <button data-slick-prev=".testi-block-slide" class="slick-arrow default"><i
                                    class="far fa-arrow-left"></i></button>
                            <button data-slick-next=".testi-block-slide" class="slick-arrow default"><i
                                    class="far fa-arrow-right"></i></button>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <form action="{{ route('contact-us.sendMessage') }}" method="POST" class="consult-form">
                        @csrf
                        <div class="row gx-24">
                            <div class="col-md-6">
                                <div class="form-group ">
                                    <input type="text" class="form-control" name="name" id="name"
                                        placeholder="Enter Your Name" value="{{ old('name') }}"
                                        @error('name') is-invalid @enderror>
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
                                        value="{{ old('email') }}">
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
                                        value="{{ old('no_telp') }}">
                                    <i class="fal fa-phone"></i>
                                    @error('no_telp')
                                        <div class="alert text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group col-12">
                                <textarea name="message" id="message" cols="30" rows="3" class="form-control" placeholder="Message"
                                    @error('message') is-invalid @enderror> {{ old('message') }}</textarea>
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
    </section>
    <!--==============================
                                                                                                                                Blog Area
                                                                                                                                ==============================-->
    <section class="overflow-hidden space gr-bg2" id="blog-sec">
        <div class="container">
            <div class="mb-35 text-center text-md-start">
                <div class="row align-items-center justify-content-between">
                    <div class="col-md-8">
                        <div class="title-area mb-md-0">
                            <span class="sub-title"><i class="fal fa-book me-2"></i> Berita & Blog Kami</span>
                            <h2 class="sec-title">Berita & Blog Terbaru</h2>
                        </div>
                    </div>
                    <div class="col-md-auto">
                        <a href="blog.html" class="th-btn">Lihat Semua Berita<i
                                class="fa-solid fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
            <div class="row slider-shadow th-carousel blog-slider-1" data-slide-show="3" data-lg-slide-show="2"
                data-md-slide-show="2" data-sm-slide-show="1" data-arrows="true">
                @foreach ($blogs as $blog)
                    <div class="col-md-6 col-xl-4">
                        <div class="th-blog blog-single style2">
                            <div class="blog-img">
                                <a href="blog-details.html"><img src="{{ asset('storage' . '/' . $blog->image) }}"
                                        alt="Blog Image" style="height: 250px"></a>
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <a class="author" href="blog.html"><i class="fa-light fa-user"></i>by
                                        {{ $blog->author->name }}</a>
                                    <a href="blog.html"><i
                                            class="fa-light fa-clock"></i>{{ \Carbon\Carbon::parse($blog->created_at)->format('d M Y') }}</a>
                                </div>
                                <h4 class="box-title text-title-blogs"><a
                                        href="blog-details.html">{{ $blog->title }}</a>
                                </h4>
                                <a href="{{ $blog->slug }}" class="link-btn">Baca Selengkapnya<i
                                        class="fas fa-arrow-right ms-2"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
        </div>
    </section>
@endsection
