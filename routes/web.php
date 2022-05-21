<?php

use App\Http\Controllers\AboutPageController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminCoursesController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\CoursesPageController;
use App\Http\Controllers\EnrollmentController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\StudentUserController;
use Illuminate\Support\Facades\Route;


// static route
Route::get('/', [HomePageController::class, 'index'])->name('home');
Route::get('/about-us', [AboutPageController::class, 'index'])->name('about-us');
Route::get('/courses', [CoursesPageController::class, 'index'])->name('courses');
Route::get('/contact-us', [ContactUsController::class, 'index'])->name('contact-us');


Route::get('/enroll', [EnrollmentController::class, 'index'])->name('enroll');
Route::post('/enroll', [EnrollmentController::class, 'store'])->name('enroll');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login');

Route::group(['prefix' => 'admin'], function () {
    Route::get('/student/dashboard', [StudentUserController::class, 'index'])->name('student.dashboard');

    Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::delete('/dashboard/student/delete/{id}', [StudentUserController::class, 'destroy'])
        ->name('student.delete');
    Route::get('/dashboard/courses', [AdminCoursesController::class, 'index'])->name('admin.courses');
    Route::delete('/dashboard/delete/{id}', [AdminCoursesController::class, 'destroy'])->name('admin.courses.delete');
    Route::get('/dashboard/courses/create', [AdminCoursesController::class, 'create'])->name('admin.courses.create');
    Route::post('/dashboard/courses/create', [AdminCoursesController::class, 'store'])->name('admin.courses.create');
});
