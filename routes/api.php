<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DailyProgressController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


// Route::post('/login', [AuthController::class, 'login'])->name('api.login');

// Route::middleware(['auth:sanctum'])->group(function () {
//     Route::get('/user', function (Request $request) {
//         return $request->user();
//     });
    
//     Route::apiResource('user', UserController::class);
    
    
    
//     Route::post('/logout', [AuthController::class, 'logout'])->name('api.logout');
// });

Route::get('users',[UserController::class, 'index']);
