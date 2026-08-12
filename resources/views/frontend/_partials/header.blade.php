<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{ $title ?? 'SMP Islam Nurul Ulum' }}</title>
    
    @hasSection('seo')
        @yield('seo')
    @else
        <meta name="description" content="SMP Islam Nurul Ulum Kemiri - Memberikan yang Terbaik Bagi Siswa. Pendidikan berkualitas dan lingkungan positif.">
        <meta name="keywords" content="smp islam nurul ulum, smp nu kemiri, sekolah islam, pendidikan menengah">
        <meta name="author" content="SMP Islam Nurul Ulum">
        
        <!-- Open Graph / Facebook -->
        <meta property="og:type" content="website">
        <meta property="og:url" content="{{ url()->current() }}">
        <meta property="og:title" content="{{ $title ?? 'SMP Islam Nurul Ulum' }}">
        <meta property="og:description" content="SMP Islam Nurul Ulum Kemiri - Memberikan yang Terbaik Bagi Siswa. Pendidikan berkualitas dan lingkungan positif.">
        <meta property="og:image" content="{{ asset('frontend/img/logo_smp.png') }}">
        
        <!-- Twitter -->
        <meta property="twitter:card" content="summary_large_image">
        <meta property="twitter:url" content="{{ url()->current() }}">
        <meta property="twitter:title" content="{{ $title ?? 'SMP Islam Nurul Ulum' }}">
        <meta property="twitter:description" content="SMP Islam Nurul Ulum Kemiri - Memberikan yang Terbaik Bagi Siswa. Pendidikan berkualitas dan lingkungan positif.">
        <meta property="twitter:image" content="{{ asset('frontend/img/logo_smp.png') }}">
    @endif
    
    <link rel="canonical" href="{{ url()->current() }}">
    <meta name="robots" content="INDEX,FOLLOW">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicons - Menggunakan logo_smp.png -->
    <!-- Favicons - Menggunakan logo_smp.png -->
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('frontend') }}/img/logo_smp.png">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('frontend') }}/img/logo_smp.png">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('frontend') }}/img/logo_smp.png">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('frontend') }}/img/logo_smp.png">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('frontend') }}/img/logo_smp.png">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('frontend') }}/img/logo_smp.png">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('frontend') }}/img/logo_smp.png">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('frontend') }}/img/logo_smp.png">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('frontend') }}/img/logo_smp.png">

    <!-- Favicon untuk berbagai ukuran -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('frontend') }}/img/logo_smp.png">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('frontend') }}/img/logo_smp.png">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('frontend') }}/img/logo_smp.png">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('frontend') }}/img/logo_smp.png">

    <!-- Untuk browser lama yang mencari favicon.ico -->
    <link rel="shortcut icon" href="{{ asset('frontend') }}/img/logo_smp.png" type="image/png">

    <!-- Meta untuk Windows Tile -->
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ asset('frontend') }}/img/logo_smp.png">

    <!-- File manifest untuk PWA -->
    <link rel="manifest" href="{{ asset('frontend') }}/img/manifest.json">


    <meta name="theme-color" content="#ffffff">

    <!--==============================
 Google Fonts
 ============================== -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@400;500;600;700;800&family=Jost:wght@300;400;500;600;700;800;900&family=Roboto:wght@100;300;400;500;700&display=swap"
        rel="stylesheet">


    <!--==============================
 All CSS File
 ============================== -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/bootstrap.min.css">
    <!-- Fontawesome Icon -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/fontawesome.min.css">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/magnific-popup.min.css">
    <!-- Slick Slider -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/slick.min.css">
    <!-- Nice Select -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/nice-select.min.css">
    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/style.css?v={{ time() }}">
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/custom.css?v={{ time() }}">

</head>

<body>


    <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->



    <!--********************************
   Code Start From Here
 ******************************** -->
