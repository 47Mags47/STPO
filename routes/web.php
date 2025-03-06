<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('login');
});

Route::group([], [
    base_path('routes/web/auth.php'),
]);
