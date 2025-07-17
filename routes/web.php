<?php
use App\Http\Controllers\CourseController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\Frontend\AuthController;

// Frontend
Route::get('/', function () {
    return view('frontend.index');
});
Route::view('/about', 'frontend.partial.about')->name('about');
Route::view('/courses', 'frontend.partial.courses')->name('courses');
Route::view('/team', 'frontend.partial.team')->name('team');
Route::view('/contact', 'frontend.partial.contact')->name('contact');

// For courses with controller (optional if dynamic)
Route::get('/courses', [CourseController::class, 'index'])->name('courses.list');
Route::get('/courses/{id}', [CourseController::class, 'show'])->name('courses.show');

// Backend routes
Route::view('/master', 'backend.layouts.master')->name('master');
Route::view('/dashboard', 'backend.dashboard')->name('dashboard');

Route::get('/settings', [SettingController::class, 'index'])->name('site.setting');
Route::post('/settings/update', [SettingController::class, 'update'])->name('site.setting.update');

// Auth Routes (Custom Frontend AuthController)
Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::post('logout', [AuthController::class, 'logout'])->name('logout');

Route::get('register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('register', [AuthController::class, 'register']);
