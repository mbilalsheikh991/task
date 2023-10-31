<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\ProductController;



/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post('register', [UserController::class, 'register']);
Route::post('login', [UserController::class, 'login']);
Route::middleware('token:api')->group(function () {
    Route::get('/product-index', [ProductController::class, 'index']);
    Route::post('/category-store', [CategoryController::class, 'store']);
    Route::post('/product-store', [ProductController::class, 'store']);
    Route::post('/product-show', [ProductController::class, 'show']);
    Route::post('/product-update', [ProductController::class, 'productUpdae']);
    Route::post('product-delete', [ProductController::class, 'productDelete']);
});
