<?php
use App\Http\Controllers\web\csvi\appeals\AppealController;
use App\Http\Controllers\web\csvi\appeals\ChatController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    //Appeal
    Route::get('/appeal', [AppealController::class, 'index'])->name('appeal');
    Route::post('/appeal', [AppealController::class, 'index']);
    Route::get('/appeal/reset', [AppealController::class, 'reset'])->name('appeal.reset');

    Route::get('/appeal/create', [AppealController::class, 'create'])->name('appeal.create');
    Route::post('/appeal/store', [AppealController::class, 'store'])->name('appeal.store');
    Route::get('/appeal/{appeal}/accept', [AppealController::class, 'accept'])->name('appeal.accept');
    Route::get('/appeal/{appeal}/close', [AppealController::class, 'close'])->name('appeal.close');
    Route::get('/appeal/{appeal}/restore', [AppealController::class, 'restore'])->name('appeal.restore');
    Route::get('/appeal/{appeal}/dontMath', [ChatController::class, 'dontMath'])
        ->middleware('logget-administrators')
        ->name('appeal.dontMath');


    //Chat
    Route::get('/appeal/{appeal}/chat', [ChatController::class, 'index'])->name('appeal.chat');
    Route::post('/appeal/{appeal}/chat/message/store', [ChatController::class, 'message_store'])->name('appeal.chat.message.store');
    Route::get('/appeal/{appeal}/{file_name}', [ChatController::class, 'download'])->name('appeal.download');
});
