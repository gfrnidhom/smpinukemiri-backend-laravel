<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title -->
    <title> {{ $blogs['title'] ?? $title }}</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('frontend/images/logo/logo_favicon.png') }}">

    <!-- Meta Umum -->
    <meta name="description" content="{!! $blogs['description'] ?? 'Mewadahi Bakat dan Minat Meraih Masa Depan' !!}">

    <!-- Open Graph -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="{{ $blogs['title'] ?? 'SMPN 2 Purwosari' }}">
    <meta property="og:description" content="{!! $blogs['description'] ?? 'Mewadahi Bakat dan Minat Meraih Masa Depan' !!}">
    <meta property="og:image" content="{{ $blogs['image'] ?? asset('frontend/images/logo/logo-colour.png') }}">
    <meta property="og:url" content="{{ $blogs['url'] ?? url('/') }}">
    <meta property="og:site_name" content="{{ config('app.name') }}">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $meta['title'] ?? 'Default title' }}">
    <meta name="twitter:description"
        content="{{ $meta['description'] ?? 'Mewadahi Bakat dan Minat Meraih Masa Depan' }}">
    <meta name="twitter:image" content="{{ $meta['image'] ?? asset('frontend/images/logo/logo-colour.png') }}">
    <meta name="twitter:site" content="@YourTwitterHandle">


    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">
    <!-- select2 -->
    <link rel="stylesheet" href="{{ asset('frontend/css/select2.min.css') }}">
    <!-- Slick -->
    <link rel="stylesheet" href="{{ asset('frontend/css/slick.css') }}">
    <!-- Slick -->
    <link rel="stylesheet" href="{{ asset('frontend/css/magnific-popup.css') }}">
    <!-- jquery-ui -->
    <link rel="stylesheet" href="{{ asset('frontend/css/jquery-ui.css') }}">
    <!-- plyr Css -->
    <link rel="stylesheet" href="{{ asset('frontend/css/plyr.css') }}">
    <!-- animate -->
    <link rel="stylesheet" href="{{ asset('frontend/css/animate.css') }}">

    <link rel="stylesheet" href="{{ asset('frontend/css/aos.css') }}">
    <!-- Main css -->
    <link rel="stylesheet" href="{{ asset('frontend/css/main.css') }}">


    <style>
        .description-text {
            display: -webkit-box;
            -webkit-line-clamp: 2;
            /* Number of lines */
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-overflow: ellipsis;
        }
    </style>
</head>

<body>

    <!--==================== Preloader Start ====================-->
    <div class="preloader">
        <img src="{{ asset('frontend/images/logo/logo_favicon.png') }}" alt="" width="100px">
    </div>
    <!--==================== Preloader End ====================-->

    <!--==================== Overlay Start ====================-->
    <div class="overlay"></div>
    <!--==================== Overlay End ====================-->

    <!--==================== Sidebar Overlay End ====================-->
    <div class="side-overlay"></div>
    <!--==================== Sidebar Overlay End ====================-->

    <!-- ==================== Scroll to Top End Here ==================== -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!-- ==================== Scroll to Top End Here ==================== -->
