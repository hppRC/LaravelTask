<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//products endpoint
Route::get('products', function () {
    return response()->json(\App\Product::query()->select(['id', 'title', 'description', 'price'])->get());
});
Route::post('products', function () {});

Route::get('products/{product_id}', function () {});
Route::put('products/{product_id}', function () {});
Route::delete('products/{product_id}', function () {});


//shops endpoint
Route::get('shops', function () {
    return response()->json(\App\Shop::query()->select(['id', 'name'])->get());
});

Route::post('shops', function () {});

Route::get('shops/{shop_id}', function () {});
Route::put('shops/{shop_id}', function () {});
Route::delete('shops/{shop_id}', function () {});