<?php

use Illuminate\Support\Facades\Route;

Route::middleware('auth')->get('/', function () {
    return redirect()->route('dashboard');
})->name('home');

Route::group([], [
    base_path('routes/web/auth.php'),
    base_path('routes/web/dashboard.php'),
    base_path('routes/web/CSVI/appeal.php'),
]);
