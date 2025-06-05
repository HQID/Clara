<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MobilController;
use App\Http\Controllers\ReviewController;

Route::get('/', [DashboardController::class, "index"])->name('dashboard');

Route::prefix('mobil')->group(function () {
    Route::get('/', [MobilController::class, "index"])->name('mobil.index');
    Route::get('/create', [MobilController::class, "create"])->name('mobil.create');
    Route::post('/store', [MobilController::class, "store"])->name('mobil.store');
    Route::get('/edit/{id}', [MobilController::class, "edit"])->name('mobil.edit');
    Route::put('/update/{id}', [MobilController::class, "update"])->name('mobil.update');
    Route::get('/show/{id}', [MobilController::class, "show"])->name('mobil.show');
});

Route::prefix('review')->group(function () {
    Route::get('/', [ReviewController::class, 'index'])->name('review.index');
    Route::get('/create', [ReviewController::class, 'create'])->name('review.create');
    Route::post('/store', [ReviewController::class, 'store'])->name('review.store');
    Route::get('/edit/{id}', [ReviewController::class, 'edit'])->name('review.edit');
    Route::put('/update/{id}', [ReviewController::class, 'update'])->name('review.update');
    Route::get('/show/{id}', [ReviewController::class, 'show'])->name('review.show');
    Route::delete('/delete/{id}', [ReviewController::class, 'destroy'])->name('review.destroy');
});
