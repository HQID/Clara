<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MobilController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TransactionController;

Route::get('/', function () {
    return redirect()->route('login');
})->name('home');

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::post('/login', [AuthController::class, 'login'])->name('login.post');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');

Route::post('/register', [AuthController::class, 'register'])->name('register.post');

Route::middleware('auth')->group(function () {
    Route::middleware('can:admin')->prefix('admin')->group(function () {
        Route::get('/', [DashboardController::class, 'adminIndex'])->name('admin.dashboard');
    });

    Route::middleware('can:user')->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    });

    Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
    Route::put('/profile', [ProfileController::class, 'update'])->name('profile.update');
});

Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/mobil', [MobilController::class, 'adminIndex'])->name('mobil.index');
    Route::get('/mobil/create', [MobilController::class, 'create'])->name('mobil.create');
    Route::post('/mobil', [MobilController::class, 'store'])->name('mobil.store');
    Route::get('/mobil/{id}/edit', [MobilController::class, 'edit'])->name('mobil.edit');
    Route::put('/mobil/{id}', [MobilController::class, 'update'])->name('mobil.update');
    Route::delete('/mobil/{id}', [MobilController::class, 'destroy'])->name('mobil.destroy');
});

Route::middleware(['auth', 'can:admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/review', [ReviewController::class, 'adminIndex'])->name('review.index');
    Route::delete('/review/{id}', [ReviewController::class, 'adminDestroy'])->name('review.destroy');
    Route::get('/transaction', [TransactionController::class, 'adminIndex'])->name('transactions.index');
    Route::get('/users', [UserController::class, 'index'])->name('users.index');
    Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('users.destroy');
    Route::put('/transaction/{id}/complete', [TransactionController::class, 'markAsCompleted'])->name('transaction.complete');
});

Route::middleware('auth')->group(function () {
    Route::get('/mobil', [MobilController::class, 'index'])->name('mobil.index');
    Route::get('/mobil/{id}', [MobilController::class, 'show'])->name('mobil.show');

    Route::prefix('review')->group(function () {
        Route::get('/', [ReviewController::class, 'index'])->name('review.index');
        Route::get('/create', [ReviewController::class, 'create'])->name('review.create');
        Route::post('/store', [ReviewController::class, 'store'])->name('review.store');
        Route::get('/edit/{id}', [ReviewController::class, 'edit'])->name('review.edit');
        Route::put('/update/{id}', [ReviewController::class, 'update'])->name('review.update');
        Route::get('/show/{id}', [ReviewController::class, 'show'])->name('review.show');
        Route::delete('/delete/{id}', [ReviewController::class, 'destroy'])->name('review.destroy');
    });
});

Route::middleware('auth')->group(function () {
    Route::get('/transactions', [TransactionController::class, 'index'])->name('transactions.index');
    Route::get('/transactions/create', [TransactionController::class, 'create'])->name('transactions.create');
    Route::post('/transactions', [TransactionController::class, 'store'])->name('transactions.store');
    Route::put('/transactions/{id}', [TransactionController::class, 'update'])->name('transactions.update');
});

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
