<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ApplicantController;
use App\Http\Controllers\Api\SolutionRequestController;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\UserPasswordController;
use App\Http\Controllers\Api\UserController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Routes in this file are automatically loaded by your application and
| assigned the "api" middleware group. These routes are stateless and
| do NOT require CSRF token validation.
|
*/

// POST endpoint to handle the applicant registration form submission
Route::post('/applicants', [ApplicantController::class, 'store']);
Route::post('/solution-requests', [SolutionRequestController::class, 'store']);
Route::post('/login', [AuthController::class, 'login']);


// Protected routes (Requires Bearer token)
Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout']);
});
Route::middleware('auth:sanctum')->group(function () {
    Route::post('/user/create-password', [UserPasswordController::class, 'store']);
});
Route::middleware('auth:sanctum')->group(function () {
    Route::post('/user/get', [UserController::class, 'fetchUser']);
});
Route::middleware('auth:sanctum')->group(function () {
    Route::get('/applicants/getByEmail', [ApplicantController::class, 'getByEmail']);
});