<?php

use App\Http\Controllers\AboutPageController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminCoursesController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\CoursesPageController;
use App\Http\Controllers\EnrollmentController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\StudentUserController;
use Illuminate\Support\Facades\Route;


// static page route
Route::get('/', [HomePageController::class, 'index'])->name('home');
Route::get('/about-us', [AboutPageController::class, 'index'])->name('about-us');
Route::get('/courses', [CoursesPageController::class, 'index'])->name('courses');
Route::get('/contact-us', [ContactUsController::class, 'index'])->name('contact-us');


// enroll or register route
Route::get('/enroll', [EnrollmentController::class, 'index'])->name('enroll');
Route::post('/enroll', [EnrollmentController::class, 'store'])->name('enroll');

// login route
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('login');
Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function () {

    // student dashboard
    Route::get('/student/dashboard', [StudentUserController::class, 'index'])->name('student.dashboard');


    // admin dashboard
    Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::delete('/dashboard/student/delete/{id}', [StudentUserController::class, 'destroy'])
        ->name('student.delete');

    // courses
    Route::get('/dashboard/courses', [AdminCoursesController::class, 'index'])->name('admin.courses');
    Route::get('/dashboard/courses/create', [AdminCoursesController::class, 'create'])->name('admin.courses.create');
    Route::post('/dashboard/courses/create', [AdminCoursesController::class, 'store'])->name('admin.courses.create');
    Route::get('/dashboard/courses/edit/{id}', [AdminCoursesController::class, 'edit'])->name('admin.courses.edit');
    Route::put('/dashboard/courses/edit/{id}', [AdminCoursesController::class, 'update'])->name('admin.courses.update');
    Route::delete('/dashboard/courses/delete/{id}', [AdminCoursesController::class, 'destroy'])->name('admin.courses.delete');

    // payments
    Route::resource('/dashboard/payments', PaymentController::class);


});
