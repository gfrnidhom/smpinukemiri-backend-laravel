<?php

use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\HomeController;
use Illuminate\Support\Facades\Route;



Route::get('/', [HomeController::class, 'index'])->name('home-dashboard');

Route::get('/about-us', [AboutController::class, 'index'])->name('about-us');

Route::post('/about-us', [ContactController::class, 'store'])->name('contact-us.sendMessage');
