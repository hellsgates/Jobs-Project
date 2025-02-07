<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Models\Job;


Route::get('/', function () {
    $jobs = Job::all();
    dd($jobs[0]);
});

// index
Route::get('/jobs', function ()  {
    $jobs = Job::with('employer')->latest()->simplePaginate(3);

    return view('jobs.index', [
        'jobs' => $jobs
    ]);
});

// create
Route::get('/jobs/create', function ()  {
    return view('jobs.create');
});

// show one job
Route::get('/jobs/{id}', function ($id)  {
    $job = Job::find($id);

    return view('jobs.show', ['job' => $job]);
});

// store
Route::post('/jobs', function ()  {
    request()->validate([
        'title' => ['required', 'min:3'],
        'salary' => ['required'],
    ]);

    Job::create([
        'title' => request('title'),
        'salary' => request('salary'),
        'employer_id' => 1
    ]);

    return redirect('/jobs');
});

Route::get('/jobs/{id}/edit', function ($id)  {
    $job = Job::find($id);

    return view('jobs.edit', ['job' => $job]);
});

// update
Route::patch('/jobs/{id}', function ($id)  {
    request()->validate([
        'title' => ['required', 'min:3'],
        'salary' => ['required'],
    ]);

    // todo authorize

    $job = Job::findOrFail($id);

    $job->update([
        'title' => request('title'),
        'salary' => request('salary'),
    ]);

    return redirect('/jobs/' . $job->id);
});

// delete
Route::delete('/jobs/{id}', function ($id)  {
    // todo authorize

    Job::findOrFail($id)->delete();

    return redirect('/jobs');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});
