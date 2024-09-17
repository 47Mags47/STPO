<?php

use App\Http\Controllers\web\main\DownloadCoontroller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('dashboard');
})->name('home');