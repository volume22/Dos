<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('products', [\App\Http\Controllers\ProductController::class, 'show']);
Route::post('product', [\App\Http\Controllers\ProductController::class, 'create']);
Route::put('product/{id}', [\App\Http\Controllers\ProductController::class, 'update'])->where('id', '[0-9]+');
Route::delete('product/{id}', [\App\Http\Controllers\ProductController::class, 'delete'])->where('id', '[0-9]+');;

Route::get('providers', [\App\Http\Controllers\ProviderController::class, 'show']);
Route::post('provider', [\App\Http\Controllers\ProviderController::class, 'create']);
Route::put('provider/{id}', [\App\Http\Controllers\ProviderController::class, 'update'])->where('id', '[0-9]+');;
Route::delete('provider/{id}', [\App\Http\Controllers\ProviderController::class, 'delete'])->where('id', '[0-9]+');;

Route::get('orders', [\App\Http\Controllers\OrderController::class, 'show']);
Route::post('order', [\App\Http\Controllers\OrderController::class, 'create']);
Route::put('order/{id}', [\App\Http\Controllers\OrderController::class, 'update'])->where('id', '[0-9]+');;
Route::delete('order/{id}', [\App\Http\Controllers\OrderController::class, 'delete'])->where('id', '[0-9]+');;

Route::get('transactions', [\App\Http\Controllers\TransactionController::class, 'show']);
Route::post('transaction', [\App\Http\Controllers\TransactionController::class, 'create']);
Route::put('transactions/{id}', [\App\Http\Controllers\TransactionController::class, 'update'])->where('id', '[0-9]+');;
Route::delete('transaction/{id}', [\App\Http\Controllers\TransactionController::class, 'delete'])->where('id', '[0-9]+');;

Route::get('like', [\App\Http\Controllers\LikeController::class, 'show']);
Route::post('like', [\App\Http\Controllers\LikeController::class, 'addLikes']);
Route::delete('like/{id}', [\App\Http\Controllers\LikeController::class, 'delete'])->where('id', '[0-9]+');;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
