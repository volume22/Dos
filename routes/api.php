<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('products', [\App\Http\Controllers\ProductController::class, 'showpro']);
Route::post('product', [\App\Http\Controllers\ProductController::class, 'create']);
Route::put('product/{id}', [\App\Http\Controllers\ProductController::class, 'update']);
Route::delete('product/{id}', [\App\Http\Controllers\ProductController::class, 'delete']);

Route::get('providers', [\App\Http\Controllers\ProviderController::class, 'showprov']);
Route::post('provider', [\App\Http\Controllers\ProviderController::class, 'createprov']);
Route::put('provider/{id}', [\App\Http\Controllers\ProviderController::class, 'updateprov']);
Route::delete('provider/{id}', [\App\Http\Controllers\ProviderController::class, 'deleteprov']);

Route::get('orders', [\App\Http\Controllers\OrderController::class, 'show']);
Route::post('order', [\App\Http\Controllers\OrderController::class, 'create']);
Route::put('order/{id}', [\App\Http\Controllers\OrderController::class, 'update']);
Route::delete('order/{id}', [\App\Http\Controllers\OrderController::class, 'delete']);

Route::get('transactions', [\App\Http\Controllers\TransactionController::class, 'show']);
Route::post('transaction', [\App\Http\Controllers\TransactionController::class, 'create']);
Route::put('transaction/{id}', [\App\Http\Controllers\TransactionController::class, 'update']);
Route::delete('transaction/{id}', [\App\Http\Controllers\TransactionController::class, 'delete']);

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
