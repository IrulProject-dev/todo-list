<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Route::get('/', [AuthController::class, 'showLoginForm'])->name('login.form');
// Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register.form');
// Route::post('/login', [AuthController::class, 'login'])->name('login');
// Route::post('/register', [AuthController::class, 'register'])->name('register');

// Route::middleware('auth')->group(function () {
//     Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');

//     Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
// });


Route::get('users',[UserController::class, 'index'])->name('users.index');
Route::get('users/{id}', [UserController::class, 'show'])->name('users.show');
Route::delete('users/{id}', [UserController::class, 'destroy'])->name('users.destroy');
Route::get('create', [UserController::class, 'create'])->name('users.create');
Route::post('users', [UserController::class, 'store'])->name('users.store');
