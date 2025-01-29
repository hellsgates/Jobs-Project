<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {
    return view('jobs', [
        'jobs' => [
            [
                'id' => 1,
                'title' => 'Manager',
                'salary' => '$50.000'
            ],
            [
                'id' => 2,
                'title' => 'Programmer',
                'salary' => '$60.000'
            ],
            [
                'id' => 3,
                'title' => 'Rapper',
                'salary' => '5 stones'
            ]
        ]
    ]);
});

Route::get('/jobs/{id}', function ($id) {
    $jobs = [
        [
            'id' => 1,
            'title' => 'Manager',
            'salary' => '$50.000'
        ],
        [
            'id' => 2,
            'title' => 'Programmer',
            'salary' => '$60.000'
        ],
        [
            'id' => 3,
            'title' => 'Rapper',
            'salary' => '5 stones'
        ]
    ];

    $job = Arr::first($jobs, fn($job) => $job['id'] == $id);


    return view('job', ['job' => $job]);
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});
