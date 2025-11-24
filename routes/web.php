<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['greeting' => 'Hello']);
});

Route::get('/jobs', function () {
    return view('jobs', [
        'jobs' => [
            ['id' => 1, 'title' => 'Job 1', 'salary' => 20000],
            ['id' => 2, 'title' => 'Job 2', 'salary' => 40000],
            ['id' => 3, 'title' => 'Job 3', 'salary' => 60000],
        ],
    ]);
});

Route::get('/contact', function () {
    return view('contact');
});
