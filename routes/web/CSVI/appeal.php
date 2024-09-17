<?php
use App\Http\Controllers\web\csvi\appeals\AppealController;
use App\Http\Controllers\web\csvi\appeals\ChatController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    //Appeal
    Route::get('/appeal', [AppealController::class, 'index'])->name('appeal');
    Route::get('/appeal/reset', [AppealController::class, 'reset'])->name('appeal.reset');
    Route::get('/appeal/{appeal}/close', [AppealController::class, 'close'])->name('appeal.close');
    Route::get('/appeal/{appeal}/restore', [AppealController::class, 'restore'])->name('appeal.restore');
    Route::post('/appeal', [AppealController::class, 'store']);

    Route::middleware('logget-administrators')->group(function () {
        Route::get('/appeal/{appeal}/accept', [AppealController::class, 'accept'])->name('appeal.accept');
        Route::get('/appeal/{appeal}/dontMath', [ChatController::class, 'dontMath'])->name('appeal.dontMath');
    });

    //Chat
    Route::get('/appeal/{appeal}/chat', [ChatController::class, 'index'])->name('appeal.chat');
    Route::post('/appeal/{appeal}/chat', [ChatController::class, 'store']);
    Route::get('/appeal/{appeal}/{file_name}', [ChatController::class, 'download'])->name('appeal.download');
});
