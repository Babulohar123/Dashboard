<?php
use App\Http\Controllers\CourseController;

// Frontend
Route::view('index', 'frontend.index')->name('home');
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
Route::view('/sidebar', 'backend.includes.sidebar')->name('sidebar');
