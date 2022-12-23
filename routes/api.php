<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

//API加入JWT保護
Route::middleware('auth:api')->group(function () {
    Route::apiResource('items', 'App\Http\Controllers\Api\ItemController');
    Route::get('all/{item}', 'App\Http\Controllers\Api\ItemController@selectAll');

});

Route::apiResource('posts', 'App\Http\Controllers\Api\PostController');

Route::post('store2', 'App\Http\Controllers\Api\PostController@store');

Route::post('items', 'App\Http\Controllers\Api\ItemController@store');

Route::group(['prefix' => 'auth', 'namespace' => 'App\Http\Controllers\Api'], function () {
    Route::get('/', 'AuthController@me')->name('me');
    Route::post('login', 'AuthController@login')->name('login');
    Route::post('logout', 'AuthController@logout')->name('logout');
});