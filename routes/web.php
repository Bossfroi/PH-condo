<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ReservationController;

Route::get('/', function () {
    return view('welcome1');
});

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/contact', function () {
    return view('pages.contact');
});

Route::post('/', [ReservationController::class, 'store'])->name('submit-reservation');

Route::get('/news', [NewsController::class, 'getTopHeadlines'])->name('news');

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/dashboard', [ReservationController::class, 'index'])->name('dashboard');
});
