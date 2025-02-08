<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisteredUserController;
use Illuminate\Support\Facades\Route;



Route::view('/', 'home');

// Jobs
Route::controller(JobController::class)->group(function () {
    Route::get('/jobs', 'index');
    Route::get('/jobs/create', 'create');
    Route::get('/jobs/{job}', 'show');
    Route::post('/jobs', 'store');
    Route::get('/jobs/{job}/edit', 'edit');
    Route::patch('/jobs/{job}', 'update');
    Route::delete('/jobs/{job}', 'destroy');
});

// Authorization
Route::get('/register', [RegisteredUserController::class, 'create']);
Route::post('/register', [RegisteredUserController::class, 'store']);

Route::get('/login', [LoginController::class, 'create']);
Route::post('/login', [LoginController::class, 'store']);
Route::post('/logout', [LoginController::class, 'destroy']);

Route::view('/contact', 'contact');
