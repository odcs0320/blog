<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::get('/', function () {
    return view('welcome');
});
//呼叫字串
Route::get('/hello', 'App\Http\Controllers\SiteController@hello');

//指定POSTS與COMMENTS的內容
Route::get('/posts/{post}/comments/{comment}', function ($post, $comment) {
    return "posts $post , comments $comment";
});

Route::prefix('/users')->group(function () {
//處理路徑 /users
//若沒有指定ID則呼叫預設的ID
    Route::get('/users/{id?}', 'App\Http\Controllers\UserController@show');
    Route::get('/users', 'App\Http\Controllers\UserController@show2');
});

Route::namespace ('App\Http\Controllers')->group(function () {
// 裡頭的控制器都包含在 以下命名空間” App\Http\Controllers"
    Route::get('admin', 'SiteController@dashboard');
    Route::get('admin1', 'SiteController@dashboard1');
});

Route::middleware(['auth'])->group(function () {
// 訪問裡頭的路由都需要先經過驗證，即登入查詢用戶資料路由
});

Route::resource('posts', 'App\Http\Controllers\PostController');