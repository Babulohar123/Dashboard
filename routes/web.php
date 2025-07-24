<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\Frontend\AuthController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ParentController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;

// Frontend Routes (Public)
Route::get('/', [FrontendController::class, 'index'])->name('frontend.index');
Route::view('/about', 'frontend.partial.about')->name('about');
Route::view('/team', 'frontend.partial.team')->name('team');
Route::view('/contact', 'frontend.partial.contact')->name('contact');

// Courses
Route::get('/courses', [CourseController::class, 'index'])->name('courses.list');
Route::get('/courses/{id}', [CourseController::class, 'show'])->name('courses.show');

// Authentication Routes
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login.form');
Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::get('/register', [RegisterController::class, 'showRegisterForm'])->name('register.form');
Route::post('/register', [RegisterController::class, 'register'])->name('register');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Backend Routes (Protected)
Route::middleware('auth')->group(function () {
    // Main Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Settings
    Route::get('/settings', [SettingController::class, 'index'])->name('site.setting');
    Route::post('/settings/update', [SettingController::class, 'update'])->name('site.setting.update');

    // Admin Routes
    Route::prefix('admin')->group(function () {
        // Admin Dashboard
     Route::get('/admin-dashboard', [AdminController::class, 'adminDashboard'])->name('admin.admin.dashboard');

    Route::get ('/users', [UserController::class, 'index'])->name('users.index');
    Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
    Route::post('/users', [UserController::class, 'store'])->name('users.store');
    Route::get('/users/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
    Route::put('/users/{user}', [UserController::class, 'update'])->name('users.update');
    Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('users.destroy');
//teacher routes
        Route::resource('teachers', TeacherController::class);
 //parent routes
        Route::resource('parents', ParentController::class);



        // Parent Dashboard + CRUD
        Route::get('/parents-dashboard', [ParentController::class, 'index'])->name('admin.parents.dashboard');
        Route::resource('parents', ParentController::class);

        // Teacher & Student Dashboards
        Route::get('/teachers-dashboard', [AdminController::class, 'teachersDashboard'])->name('admin.teachers.dashboard');
        Route::get('/students-dashboard', [AdminController::class, 'studentsDashboard'])->name('admin.students.dashboard');

        // Teacher Table
        Route::get('/table', [AdminController::class, 'showTeacherTable'])->name('admin.table');
    });
});

// User Management Routes

