<?php

use App\Http\Controllers\Api\StudentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('students', [StudentController::class, 'index']);
Route::get('students/{id}', [StudentController::class, 'getById']);
Route::post('students', [StudentController::class, 'save']);
Route::put('students/{id}', [StudentController::class, 'updateById']);
Route::delete('students/{id}', [StudentController::class, 'deleteById']);
