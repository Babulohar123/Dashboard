<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//frontend
Route::get('/', function () {
    return view('frontend.index');
});
Route::view('/index', 'frontend.index')->name('index');
Route::view('/master', 'frontend.layouts.master')->name('master');
Route::view('/about', 'frontend.pages.about')->name('about');
Route::post('/signup', [SignupController::class, 'store'])->name('signup');


//backend
//Route::get('/', function () {
 //return view('backend.index');
//});


//Route::view('/index', 'backend.index')->name('index');
Route::view('/master', 'backend.layouts.master')->name('master');
Route::view('/dashboard', 'backend.dashboard')->name('dashboard');


Route::view('/sidebar', 'backend.includes.sidebar')->name('sidebar');
Route::view('/header', 'backend.includes.header')->name('header');

