<?php

use App\Http\Controllers\FileController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->get('/', function () {
    return redirect()->route('dashboard');
})->name('home');

Route::get('/files/{file}', [FileController::class, 'index'])
    ->where('file', '(.*)')
    ->name('files');

Route::group([], [
    base_path('routes/web/main/auth.php'),
    base_path('routes/web/main/alerts.php'),
    base_path('routes/web/main/dashboard.php'),

    base_path('routes/web/CSVI/appeal.php'),
    base_path('routes/web/CSVI/technical.php'),

]);
