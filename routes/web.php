<?php

use App\Http\Controllers\AudioController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FavoriteController;

/* Pages */
Route::get('/', [AudioController::class, 'index'])->name('home');

Route::get('/manage', [AudioController::class, 'manage'])->name('manage');

Route::get('/about', function () {
    return view('about');
})->name('about');

/* Audio */
Route::get('/audio', [AudioController::class, 'index'])->name('audio.index');
Route::get('/audio/create', [AudioController::class, 'create'])->name('audio.create');
Route::post('/audio', [AudioController::class, 'store'])->name('audio.store');
Route::get('/audio/{name}', [AudioController::class, 'show'])->name('audio.show');
Route::get('/audio/{id}/edit', [AudioController::class, 'edit'])->name('audio.edit');
Route::put('/audio/{id}', [AudioController::class, 'update'])->name('audio.update');
Route::delete('/audio/{id}', [AudioController::class, 'destroy'])->name('audio.destroy');

/* Favorite */
Route::post('/audio/{audioId}/favorite', [FavoriteController::class, 'toggle'])->name('audio.favorite');

require __DIR__ . '/auth.php';
