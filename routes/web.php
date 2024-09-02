<?php

use App\Http\Controllers\web\main\DownloadCoontroller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('dashboard');
})->name('home');

Route::get('download/{path}/{name}', [DownloadCoontroller::class, 'download'])->where('path', '.*')->name('download');