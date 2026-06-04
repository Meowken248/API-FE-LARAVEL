<?php

use App\Http\Controllers\Api\ProductController as ApiProductController;
use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CommentController as ApiCommentController;
use Symfony\Component\Routing\Loader\Configurator\Routes;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('products',ApiProductController::class);
Route::post('products/{id}/like', [ApiProductController::class, 'like']);
Route::get('products/{id}/comments', [ApiCommentController::class, 'index']);
Route::post('products/{id}/comments', [ApiCommentController::class, 'store']);
