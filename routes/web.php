<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ApplicantController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::view('/', 'index')->name('index');
Route::view('/courses', 'courses')->name('courses');
Route::view('/about', 'about')->name('about');
Route::view('/scholarship', 'application')->name('apply');
Route::view('/solutions', 'solutions')->name('solutions');
Route::view('/create-password', 'create-password')->name('create-password');
Route::view('/user-login', 'user-login')->name('user-login');
Route::view('/course-detail', 'course-detail')->name('course-detail');

// Route::get('/create-password', function () {
//     return view('create-password');
// });
