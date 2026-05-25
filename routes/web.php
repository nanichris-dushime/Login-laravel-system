<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

// Show the Login Form
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');

// Process the Login Form submission
Route::post('/login', [LoginController::class, 'login']);

// Secure Dashboard (Only logged-in users can access)
Route::get('/dashboard', function () {
    return 'Welcome to your secure dashboard!';
})->middleware('auth');

// Register Routes
Route::get('/register', [RegisterController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

// Logout Route
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
