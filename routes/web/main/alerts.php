<?php

use App\Http\Controllers\Main\AlertController;
use Illuminate\Support\Facades\Route;

Route::controller(AlertController::class)
    ->middleware('auth')
    ->group(function () {
        Route::get('/get-id', 'getId')->name('get-id');
        Route::get('/read-alert', 'read')->name('read-alert');
    });
