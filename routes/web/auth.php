<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Main\AuthController;

Route::controller(AuthController::class)->group(function () {
    Route::middleware('guest')->group(function () {
        Route::get('/registration', 'registration')->name('registration');
        Route::post('/registration', 'register')->name('register');

        Route::get('/login', 'login')->name('login');
        Route::post('/login', 'authenticate')->name('authenticate');

        /* HACK Реализовать смену пароля */
        Route::get('/recovery-password', 'recoveryPassword')->name('password.recovery');
        Route::post('/recovery-password', 'recoverPassword')->name('password.recover');
    });
    Route::middleware('auth')->group(function () {
        Route::get('/logout', 'logout')->name('logout');

        /* HACK Реализовать Подтверждение email */
        Route::get('/email/verify', 'noticeEmail')->name('verification.notice');
        Route::get('/email/verify/{id}/{hash}', 'verifyEmail')->name('verification.verify');
        Route::post('/email/verification-notification', 'sendEmail')->name('verification.send');
    });
});
