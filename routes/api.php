<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\ImageController;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\SectionController;
use App\Http\Controllers\Api\StockController;
use App\Http\Controllers\Api\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/register', [UserController::class, 'register']);

Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(
    function()
    {
        Route::post('/logout', [AuthController::class, 'logout']);
        Route::apiResource('sections', SectionController::class)->names('api.');
        Route::apiResource('categories', CategoryController::class)->names('api.');
        Route::apiResource('products', ProductController::class)->names('api.');
        Route::apiResource('images', ImageController::class)->names('api.');
        Route::apiResource('stocks', StockController::class)->names('api.');
        Route::patch('/edit_profile', [UserController::class, 'update']);
        Route::delete('/delete_profile', [UserController::class, 'destroy']);
});
