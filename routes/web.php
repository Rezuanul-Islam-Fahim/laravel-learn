<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;

Route::view('/', 'home', ['greeting' => 'Hello']);
Route::view('/contact', 'contact');
Route::resource('jobs', JobController::class);
