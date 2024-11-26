<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PortfolioController;
use Illuminate\Support\Facades\Route;

// Home Page
Route::get('/', function () {
    return view('welcome'); // Landing page or a description of the service
})->name('home');

// Dashboard (after login)
Route::get('/dashboard', function () {
    return view('dashboard'); // User dashboard
})->middleware(['auth', 'verified'])->name('dashboard');

// Profile Routes (for user account management)
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Portfolio Routes (for managing user portfolios)
Route::middleware('auth')->group(function() {
    Route::get('/dashboard', [PortfolioController::class, 'index'])->name('dashboard');
    Route::get('/portfolio/create', [PortfolioController::class, 'create'])->name('portfolio.create');
    Route::post('/portfolio', [PortfolioController::class, 'store'])->name('portfolio.store');
    Route::get('/portfolio/{id}', [PortfolioController::class, 'show'])->name('portfolio.show');
    Route::get('/portfolio/{id}/edit', [PortfolioController::class, 'edit'])->name('portfolio.edit');
    Route::put('/portfolio/{id}', [PortfolioController::class, 'update'])->name('portfolio.update');
    Route::delete('/portfolio/{id}', [PortfolioController::class, 'destroy'])->name('portfolio.destroy');
});


require __DIR__.'/auth.php';
