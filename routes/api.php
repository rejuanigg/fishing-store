<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\CalificationController;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\ImageController;
use App\Http\Controllers\Api\OrderController;
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
        Route::patch('/edit_profile', [UserController::class, 'update']);
        Route::delete('/delete_profile', [UserController::class, 'destroy']);

        Route::apiResource('sections', SectionController::class)->names('api.')->middleware('owner')->only('store', 'update', 'destroy');
        Route::apiResource('sections', SectionController::class)->names('api.')->only('index');

        Route::apiResource('categories', CategoryController::class)->names('api.')->middleware('owner')->only('store', 'update', 'destroy');
        Route::apiResource('categories', CategoryController::class)->names('api.')->only('index');

        Route::apiResource('products', ProductController::class)->names('api.')->middleware('owner')->only('store', 'update', 'destroy');
        Route::apiResource('products', ProductController::class)->names('api.')->only('index', 'show');

        Route::apiResource('stocks', StockController::class)->names('api.')->middleware('owner')->only('store', 'update', 'destroy');
        Route::apiResource('stocks', StockController::class)->names('api.')->only('index');

        Route::apiResource('orders', OrderController::class)->names('api.')->middleware('owner')->only('store', 'update', 'destroy');
        Route::apiResource('orders', OrderController::class)->names('api.')->only('index');

        Route::apiResource('images', ImageController::class)->names('api.')->middleware('owner')->only('store', 'update', 'destroy');
        Route::apiResource('images', ImageController::class)->names('api.')->only('index');

        Route::apiResource('califications', CalificationController::class)->names('api.');
});
