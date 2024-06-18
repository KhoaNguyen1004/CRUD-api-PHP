<?php

use App\Http\Controllers\Api\StudentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => 'students'], function () {
    Route::get('/', [StudentController::class, 'index']);
    Route::get('{id}', [StudentController::class, 'getById']);
    Route::post('create', [StudentController::class, 'save']);
    Route::put('update/{id}', [StudentController::class, 'updateById']);
    Route::delete('delete/{id}', [StudentController::class, 'deleteById']);
});
