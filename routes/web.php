<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisteredUserController;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;


Route::get('test', function () {

    return 'Done';
});

Route::view('/', 'home');
Route::view('/contact', 'contact');

// Jobs
Route::controller(JobController::class)->group(function () {
    Route::get('/jobs', 'index');
    Route::get('/jobs/create', 'create')->middleware('auth');
    Route::get('/jobs/{job}', 'show');
    Route::post('/jobs', 'store')->middleware('auth');
    Route::get('/jobs/{job}/edit', 'edit')
        ->middleware('auth')
        ->can('edit-job' ,'job');
    Route::patch('/jobs/{job}', 'update')->middleware('auth')
        ->middleware('auth')
        ->can('edit-job' ,'job');
    Route::delete('/jobs/{job}', 'destroy')
        ->middleware('auth')
        ->can('edit-job' ,'job');
});

// Authorization
Route::get('/register', [RegisteredUserController::class, 'create']);
Route::post('/register', [RegisteredUserController::class, 'store']);

Route::get('/login', [LoginController::class, 'create']);
Route::post('/login', [LoginController::class, 'store']);
Route::post('/logout', [LoginController::class, 'destroy']);


