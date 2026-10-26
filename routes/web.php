<?php

use App\Http\Controllers\AudioController;
use Illuminate\Support\Facades\Route;

/* Pages */
Route::get('/', [AudioController::class, 'index'])->name('home');

Route::get('/manage', function () {
    return view('manage');
})->name('manage');

Route::get('/about', function () {
    return view('about');
})->name('about');

/* Audio */
Route::get('/audio', [AudioController::class, 'index'])->name('audio.index');
Route::get('/audio/create', [AudioController::class, 'create'])->name('audio.create');
Route::post('/audio', [AudioController::class, 'store'])->name('audio.store');
Route::get('/audio/{name}', [AudioController::class, 'show'])->name('audio.show');
