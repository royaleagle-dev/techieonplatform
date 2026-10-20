<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ApplicantController;
use App\Http\Controllers\Api\SolutionRequestController;

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