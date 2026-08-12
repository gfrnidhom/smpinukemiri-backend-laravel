<?php

use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\AuthController;
use App\Http\Controllers\Frontend\BlogController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\EventController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\PPDBController;
use App\Http\Controllers\Frontend\TeacherController;
use App\Http\Controllers\Frontend\SitemapController;
use Illuminate\Support\Facades\Route;



Route::get('/', [HomeController::class, 'index'])->name('home-dashboard');
Route::get('/sitemap.xml', [SitemapController::class, 'index'])->name('sitemap');

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/postLogin', [AuthController::class, 'postLogin'])->name('loginPost');
Route::post('/postRegister', [AuthController::class, 'postRegister'])->name('registrationPost');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/about-us', [AboutController::class, 'index'])->name('about-us');
Route::get('/vision-mission', [AboutController::class, 'visionandmission'])->name('visionMission');
Route::get('/school-profile', [AboutController::class, 'profileSchool'])->name('profileSchool');

Route::get('/ppdb', [PPDBController::class, 'index'])->name('ppdb');

Route::post('/get-cities', [PPDBController::class, 'getCities']);
Route::post('/get-districts', [PPDBController::class, 'getDistricts']);
Route::post('/get-villages', [PPDBController::class, 'getVillages']);

Route::get('/teacher-and-staff', [TeacherController::class, 'index'])->name('teacherandstaff');
Route::get('/events', [EventController::class, 'index'])->name('events');
Route::get('/events/{slug}', [EventController::class, 'show'])->name('events-detail');

Route::get('/blogs', [BlogController::class, 'index'])->name('blogs');
Route::get('/blogs/{slug}', [BlogController::class, 'show'])->name('blogs-detail');
Route::post('/blogs/{slug}/sendComment', [BlogController::class, 'sendComment'])->name('sendComment');
Route::get('/headmaster/{name?}', [TeacherController::class, 'headmaster'])->name('headmaster');

Route::get('/contact-us', [ContactController::class, 'index'])->name('contact-us');
Route::post('/contact-us/sendMessage', [ContactController::class, 'store'])->name('contact-us.sendMessage');

Route::middleware('auth')->group(function () {
    Route::get('/ppdb/registration/{id}', [PPDBController::class, 'create'])->name('ppdb.registration');
    Route::post('/ppdb/registrationProcess', [PPDBController::class, 'store'])->name('ppdb.registrationStudenPost');
    Route::get('/ppdb/showRegistrationResult', [PPDBController::class, 'result'])->name('ppdb.showRegistrationResult');
    Route::get('/ppdb/showRegistrationResult/{registration_number}', [PPDBController::class, 'resultDetail'])->name('ppdb.showRegistrationResultDetail');

    Route::get('/ppdb/showResumeRegistration/{registration_number}', [PPDBController::class, 'showResumeRegistration'])->name('ppdb.showResumeRegistration');
    Route::get('/download-student-files/{id}', [PPDBController::class, 'downloadStudentFiles'])->name('ppdb.downloadFiles');
});
