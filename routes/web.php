<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\AudioController;
use Illuminate\Support\Facades\Route;

/* Pages */
Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/manage', function () {
    return view('manage');
})->name('manage');

Route::get('/about', function () {
    return view('about');
})->name('about');

/* Classes */
Route::resource('audio', AudioController::class)->name('audio.index');

//Route::get('/audio/create', [AudioController::class, 'create']);
//Route::post('audio', [AudioController::class, 'store'])->name('audio.store');
//Route::get('/audio/{name}', [AudioController::class, 'show']);
