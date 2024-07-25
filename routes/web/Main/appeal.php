<?php
use App\Http\Controllers\web\main\appeals\AppealController;
use App\Http\Controllers\web\main\appeals\ChatController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    //Appeal
    Route::get('/create', function(){
        return view('page.main.appeal.create');
    })->name('create');
    Route::get('/appeal', [AppealController::class, 'index'])->name('appeal');
    Route::get('/appeal/reset', [AppealController::class, 'reset'])->name('appeal.reset');
    Route::post('/appeal', [AppealController::class, 'store']);

    //Chat
    Route::get('/appeal/{appeal}/chat', [ChatController::class, 'index'])->name('appeal.chat');
});
