<!DOCTYPE html>
<!--
Template Name: Midone - HTML Admin Dashboard Template
Author: Left4code
Website: http://www.left4code.com/
Contact: muhammadrizki@left4code.com
Purchase: https://themeforest.net/user/left4code/portfolio
Renew Support: https://themeforest.net/user/left4code/portfolio
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en" class="light">
<!-- BEGIN: Head -->

<head>
    <meta charset="utf-8">
    <link href="{{ asset('auth') }}/images/logo.svg" rel="shortcut icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="Midone admin is super flexible, powerful, clean & modern responsive tailwind admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, Midone Admin Template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="LEFT4CODE">
    <title>{{ $title }}</title>
    <!-- BEGIN: CSS Assets-->
    <link rel="stylesheet" href="{{ asset('auth') }}/css/app.css" />
    <!-- END: CSS Assets-->
</head>
<!-- END: Head -->
@include('sweetalert::alert')

<body class="login">
    <div class="container sm:px-10">
        <div class="block xl:grid grid-cols-2 gap-4">
            <!-- BEGIN: Login Info -->
            <div class="hidden xl:flex flex-col min-h-screen">
                <a href="" class="-intro-x flex items-center pt-5">
                    <img alt="Midone - HTML Admin Template" width="300px" src="{{ $settings['second_logo'] }}">

                </a>
                <div class="my-auto">
                    <img alt="Midone - HTML Admin Template" class="-intro-x w-1/2 -mt-16"
                        src="{{ asset('auth') }}/images/illustration.svg">
                    <div class="-intro-x text-white font-medium text-4xl leading-tight mt-10">
                        Hanya beberapa langkah
                        <br>
                        untuk membuat akun Anda.
                    </div>
                    <div class="-intro-x mt-5 text-lg text-white text-opacity-70 dark:text-slate-400">Kelola semua informasi
                        sekolah Anda di satu tempat</div>
                </div>
            </div>
            <!-- END: Login Info -->
            <!-- BEGIN: Login Form -->
            <form class="h-screen xl:h-auto flex py-5 xl:py-0 my-10 xl:my-0"
                action="{{ route('registrationPost') }}" method="post">
                @csrf
                <div class="h-screen xl:h-auto flex py-5 xl:py-0 my-10 xl:my-0">
                    <div
                        class="my-auto mx-auto xl:ml-20 bg-white dark:bg-darkmode-600 xl:bg-transparent px-5 sm:px-8 py-8 xl:p-0 rounded-md shadow-md xl:shadow-none w-full sm:w-3/4 lg:w-2/4 xl:w-auto">
                        <h2 class="intro-x font-bold text-2xl xl:text-3xl text-center xl:text-left">
                            Registrasi Akun
                        </h2>
                        <div class="intro-x mt-2 text-slate-400 xl:hidden text-center">Hanya beberapa langkah untuk membuat
                            akun
                            Anda. Kelola semua informasi sekolah Anda di satu tempat</div>
                        <div class="intro-x mt-8">
                            <div class="form-group">
                                <input type="text" name="name"
                                    class="intro-x login__input form-control py-3 px-4 block" placeholder="Nama Lengkap"
                                    value="{{ old('name') }}" @error('name') is-invalid @enderror>
                                @error('name')
                                    <div class="text-danger mt-1">{{ $message }}</div>
                                @enderror
                            </div>
                            <input type="text" name="username"
                                class="intro-x login__input form-control py-3 px-4 block mt-4 " placeholder="Username"
                                value="{{ old('username') }}" @error('username') is-invalid @enderror>
                            @error('username')
                                <div class="text-danger mt-1">{{ $message }}</div>
                            @enderror
                            <input type="text" name="email"
                                class="intro-x login__input form-control py-3 px-4 block mt-4" placeholder="Email"
                                value="{{ old('email') }}" @error('email') is-invalid @enderror>
                            @error('email')
                                <div class="text-danger mt-1">{{ $message }}</div>
                            @enderror
                            <input type="password" name="password"
                                class="intro-x login__input form-control py-3 px-4 block mt-4" placeholder="Password">
                            @error('password')
                                <div class="text-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="intro-x mt-5 xl:mt-8 text-center xl:text-left">
                            <button type="submit"
                                class="btn btn-primary py-3 px-4 w-full xl:w-32 xl:mr-3 align-top">Buat
                                Akun</button>
                        </div>
                        <div class="intro-x mt-10 xl:mt-24 text-slate-600 dark:text-slate-500 text-center xl:text-left">
                            Sudah mempunyai akun? <a class="text-primary dark:text-slate-200"
                                href="{{ route('login') }}">Masuk akun</a>
                        </div>
                    </div>
                </div>
            </form>
            <!-- END: Login Form -->
        </div>
    </div>


    <!-- BEGIN: JS Assets-->
    <script src="{{ asset('auth') }}/js/app.js"></script>
    <!-- END: JS Assets-->
</body>

</html>
