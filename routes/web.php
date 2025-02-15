<?php

use App\Filament\Resources\ProgramResource;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\BlogController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\EventController;
use App\Http\Controllers\Frontend\GalleryController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\ProgramController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/contact-us', [ContactController::class, 'index'])->name('contact-us');

Route::get('/blogs', [BlogController::class, 'index'])->name('blogs');
Route::get('/blogs/{slug}', [BlogController::class, 'show'])->name('blogs-detail');

Route::post('/blogs/{slug}/sendComment', [BlogController::class, 'sendComment'])->name('sendComment');

Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery');

Route::get('/events', [EventController::class, 'index'])->name('events');
Route::get('/flagship-programs', [ProgramController::class, 'index'])->name('flagship-programs');

Route::post('/form-contact-us', [ContactController::class, 'store'])->name('form-contact-us');

Route::get('/about-us', [AboutController::class, 'index'])->name('about-us');
