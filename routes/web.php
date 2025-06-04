<?php

use App\Http\Controllers\JobController;
use Illuminate\Contracts\Queue\Job;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/job', [JobController::class, 'getJob']);

