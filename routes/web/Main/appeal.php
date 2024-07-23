<?php
use App\Http\Controllers\web\main\appeals\AppealController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    Route::get('/create', function(){
        return view('page.main.appeal.create');
    })->name('create');
    Route::get('/appeal', [AppealController::class, 'index'])->name('appeal');
    Route::get('/appeal/reset', [AppealController::class, 'reset'])->name('appeal.reset');
    Route::post('/appeal', [AppealController::class, 'store']);

    Route::get('/appeal/{appeal}/chat', [AppealController::class, 'index'])->name('appeal.chat');
});
