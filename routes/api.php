<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/products', [ProductController::class, 'index']);
Route::get('/products/{id}', [ProductController::class, 'show']);
Route::post('/createProduct', [ProductController::class, 'store']);
Route::put('/updateProduct/{id}', [ProductController::class, 'update']);
Route::delete('/deleteProduct/{id}', [ProductController::class, 'destroy']);


