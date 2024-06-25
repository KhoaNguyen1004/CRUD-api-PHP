<?php

use App\Http\Controllers\Api\StudentController;
use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Protected routes

Route::middleware(['auth:sanctum'])->group(function() {
    Route::post('/logout', [AuthController::class, 'logout']);

    // Admin role routes
    Route::middleware('role:admin')->group(function() {
        Route::prefix('admin/student')->group(function() {
            Route::get('/', [StudentController::class, 'index']);
            Route::get('{id}', [StudentController::class, 'getById']);
            Route::post('create', [StudentController::class, 'save']);
            Route::put('update/{id}', [StudentController::class, 'updateById']);
            Route::delete('delete/{id}', [StudentController::class, 'deleteById']);
        });
    });

    // User role routes
    Route::middleware('role:user')->group(function() {
        Route::prefix('user/student')->group(function() {
            Route::get('/', [StudentController::class, 'index']);
            Route::get('{id}', [StudentController::class, 'getById']);
        });
    });
});

// Public routes
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);


