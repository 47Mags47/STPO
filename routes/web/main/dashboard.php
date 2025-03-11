<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Main\DashboardController;

Route::middleware('auth')->prefix('dashboard')->controller(DashboardController::class)->group(function () {
    Route::get('/', 'index')->name('dashboard');
});
