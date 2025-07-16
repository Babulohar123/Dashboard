<?php
use App\Http\Controllers\CourseController;
use App\Http\Controllers\SettingController;


// Frontend
Route::view('index', 'frontend.index')->name('home');
Route::view('/about', 'frontend.partial.about')->name('about');
Route::view('/courses', 'frontend.partial.courses')->name('courses');
Route::view('/team', 'frontend.partial.team')->name('team');
Route::view('/contact', 'frontend.partial.contact')->name('contact');

// For courses with controller (optional if dynamic)
Route::get('/courses', [CourseController::class, 'index'])->name('courses.list');
Route::get('/courses/{id}', [CourseController::class, 'show'])->name('courses.show');



//Backend routes
Route::view('/master', 'backend.layouts.master')->name('master');
Route::view('/dashboard', 'backend.dashboard')->name('dashboard');

Route::get('/settings', [SettingController::class, 'index'])->name('site.setting');
Route::post('/settings/update', [SettingController::class, 'update'])->name('site.setting.update');
// Site Settings routes
//Route::get('/settings', 'SettingController@index')->name('site.setting');
//Route::post('/settings/update', 'SettingController@update')->name('site.setting.update');

// Site setting form
//Route::get('/settings/form', 'SettingController@form')->name('site.setting.form');
//Route::post('/settings/form/update', 'SettingController@formUpdate')->name('site.setting.form.update');

// Route::view('/form', 'backend.settings.form')->name('form');