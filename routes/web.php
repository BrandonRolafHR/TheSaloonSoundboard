<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/manage', function () {
    return view('manage');
})->name('manage');

Route::get('/about', function () {
    return view('about');
})->name('about');
