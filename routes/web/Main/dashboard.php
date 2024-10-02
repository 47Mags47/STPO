<?php
use App\Http\Controllers\web\auth\EmailController;
use App\Http\Controllers\web\main\DashboardController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::post('/dashboard', [DashboardController::class, 'update']);
    Route::get('/logout', [DashboardController::class, 'logout'])->name('logout');

    Route::get('/email/verify', [EmailController::class, 'notice'])->name('verification.notice');
    Route::post('/email/verify', [EmailController::class, 'send'])->name('verification.send');
    Route::get('/email/verify/{id}/{hash}', [EmailController::class, 'verify'])->name('verification.verify');
});
