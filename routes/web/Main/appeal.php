<?php
use App\Http\Controllers\web\main\AppealController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    Route::get('/appeal', [AppealController::class, 'index'])->name('appeal');
    Route::post('/appeal', [AppealController::class, 'index']);

    Route::get('/appeal/{appeal}/chat', [AppealController::class, 'index'])->name('appeal.chat');
});
