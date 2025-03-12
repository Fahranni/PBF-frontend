<?php

use App\Http\Controllers\TugasakhirController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});

Route::resource('tugasakhir',TugasakhirController::class);