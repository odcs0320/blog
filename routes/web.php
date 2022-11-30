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
    // Route::get('admin', 'SiteController@dashboard');
    // Route::get('admin1', 'SiteController@dashboard1');
    Route::get('admin', 'SiteController@master');
    Route::get('senkawa_chihiro', 'SiteController@senkawa_chihiro');
    Route::get('black_haired_girl', 'SiteController@black_haired_girl');
    Route::get('ol_chan', 'SiteController@ol_chan');
    Route::get('/store', 'SiteController@store');

});

Route::middleware(['auth'])->group(function () {
// 訪問裡頭的路由都需要先經過驗證，即登入查詢用戶資料路由
});

Route::resource('posts', 'App\Http\Controllers\PostController');
Route::post('store', 'App\Http\Controllers\PostController@store');
// Route::apiResource('posts', 'App\Http\Controllers\Api\PostController');
Route::post('items', 'App\Http\Controllers\Api\ItemController@store');

Route::get('senkawa_chihiro', function () {
    return view('senkawa_chihiro');
})->name('senkawa_chihiro');

Route::get('black_haired_girl', function () {
    return view('black_haired_girl');
})->name('black_haired_girl');

Route::get('ol_chan', function () {
    $id1 = ['https://cdn.donmai.us/original/f2/38/__ol_chan_original_drawn_by_oouso__f238a56f207aa1c38253fc0c4abe7db3.jpg',
        'https://cdn.donmai.us/original/d9/db/__ol_chan_original_drawn_by_oouso__d9db7afa9be6be29afe875915bbdfccb.jpg',
        'https://cdn.donmai.us/original/53/cb/__ol_chan_original_drawn_by_oouso__53cb462d3506ee728d348caa13f21f67.jpg',
        'https://cdn.donmai.us/original/a3/93/__ol_chan_original_drawn_by_oouso__a3937f65542b1f1084789d4cfe3793a3.jpg',
        'https://cdn.donmai.us/original/b8/5e/__ol_chan_original_and_1_more_drawn_by_oouso__b85eed238b3c0ee575c26492df1f1bcf.jpg',
        'https://cdn.donmai.us/original/c4/a3/__ol_chan_original_drawn_by_oouso__c4a3ad4ab939ac915a1cb9413e924d10.jpg',
        'https://cdn.donmai.us/original/08/68/__ol_chan_and_jk_chan_original_drawn_by_oouso__086851d24d176f44686e6065ad663ee5.jpg',
        'https://cdn.donmai.us/original/7f/66/__ol_chan_original_drawn_by_oouso__7f6647add4c4b759cbed6e35c96424fd.jpg',
        'https://cdn.donmai.us/original/32/5e/__ol_chan_original_drawn_by_oouso__325ec81fca64109d5b65253f70799aa3.jpg',
        'https://cdn.donmai.us/original/f4/6b/__ol_chan_original_drawn_by_oouso__f46bd16801c1524773b4b1edc7f8f92c.jpg',
        'https://cdn.donmai.us/original/59/08/__ol_chan_original_drawn_by_oouso__59086aef843fffa7be08104eac192dcf.jpg',
        'https://cdn.donmai.us/original/c0/d1/__ol_chan_original_drawn_by_oouso__c0d1f504210d6d67fbd604327dd91f2d.jpg',
        'https://cdn.donmai.us/original/5e/84/__ol_chan_original_drawn_by_oouso__5e84c30041c058cda0489cad04cbff66.jpg',
        'https://cdn.donmai.us/original/65/4d/__ol_chan_original_drawn_by_oouso__654d4014d2312eab01a09de00c8b7569.jpg',
        'https://cdn.donmai.us/original/b3/e6/__ol_chan_original_drawn_by_oouso__b3e69ce0ac0a495833163767ae992418.jpg',
        'https://cdn.donmai.us/original/e0/26/__ol_chan_original_and_1_more_drawn_by_oouso__e026a862071fb6fa67364e8230bb2e8e.jpg',
        'https://cdn.donmai.us/original/9f/f7/__ol_chan_original_drawn_by_oouso__9ff7495d75ed074442adae0687a52c35.jpg',
        'https://cdn.donmai.us/original/34/e6/__ol_chan_original_drawn_by_oouso__34e6ac8c1ff3729ff9f636daeb4e0203.jpg',
        'https://cdn.donmai.us/original/cb/da/__ol_chan_original_drawn_by_oouso__cbda6879c55f30a9920bf597985622a9.jpg',
        'https://cdn.donmai.us/original/e7/e1/__ol_chan_original_drawn_by_oouso__e7e16e01ca56f3ff57e2dba5ec62927b.jpg'];

    $id2 = ['https://cdn.donmai.us/original/66/20/__ol_chan_original_drawn_by_oouso__6620b97e078708bc5af8c797dddc3ee7.jpg',
        'https://cdn.donmai.us/original/73/17/__ol_chan_original_drawn_by_oouso__73170aae9b08721ed820372a477fbc47.jpg',
        'https://cdn.donmai.us/original/8f/db/__ol_chan_original_drawn_by_oouso__8fdbe35fd95a57e5cd9f498b683828e5.jpg',
        'https://cdn.donmai.us/original/e0/41/__ol_chan_original_drawn_by_oouso__e041a75669cd79e1aad926a481a5d6be.jpg',
        'https://cdn.donmai.us/original/1f/5a/__ol_chan_original_drawn_by_oouso__1f5a6db8b7ffc99d78a86a935ba87d6d.jpg',
        'https://cdn.donmai.us/original/2f/d4/__ol_chan_original_drawn_by_oouso__2fd4983406f0c4cf1f5025478c376721.jpg',
        'https://cdn.donmai.us/original/58/89/__ol_chan_original_drawn_by_oouso__588910912464d33af4be5a1922270efc.jpg',
        'https://cdn.donmai.us/original/31/73/__ol_chan_original_drawn_by_oouso__3173f6c5fdc92c6f3f6e3d467f07b563.jpg',
        'https://cdn.donmai.us/original/f7/d3/__ol_chan_original_drawn_by_oouso__f7d31d2c66a1a50ed8826de8d1105096.jpg',
        'https://cdn.donmai.us/original/4d/2b/__ol_chan_original_drawn_by_oouso__4d2b85a199292cb1c16554d60b3267b0.jpg',
        'https://cdn.donmai.us/original/28/9e/__ol_chan_original_drawn_by_oouso__289edf7ad7c47c33f6210ad8a4737bc3.jpg',
        'https://cdn.donmai.us/original/f4/53/__ol_chan_original_drawn_by_oouso__f4537f7689df1879494513865dfa35d1.jpg',
        'https://cdn.donmai.us/original/cb/4c/__ol_chan_original_drawn_by_oouso__cb4c91476ce30ef153a173b6d4870408.jpg',
        'https://cdn.donmai.us/original/6e/fd/__ol_chan_original_drawn_by_oouso__6efd7865cfeb2b0aa7b6d21767ab24dc.jpg',
        'https://cdn.donmai.us/original/92/e3/__ol_chan_original_drawn_by_oouso__92e3285baeed90233c01ef21900d6f2d.jpg',
        'https://cdn.donmai.us/original/e1/dd/__ol_chan_original_drawn_by_oouso__e1dd3fac27b275b354f24b2c08870fe0.jpg',
        'https://cdn.donmai.us/original/03/b9/__ol_chan_original_drawn_by_oouso__03b9f62f947e8e15dfd8c623bb06d959.jpg',
        'https://cdn.donmai.us/original/6e/ea/__ol_chan_original_drawn_by_oouso__6eea8fbd144f543ff2008e41d081ae2b.jpg',
        'https://cdn.donmai.us/original/7a/d5/__ol_chan_original_drawn_by_oouso__7ad50a8e298499d6ef8f1f27242ff9ae.jpg',
        'https://cdn.donmai.us/original/eb/4a/__ol_chan_original_drawn_by_oouso__eb4a62fe0af3677b00f4a6bfaed1fc18.jpg'];

    $id3 = ['https://cdn.donmai.us/original/1a/0c/__ol_chan_original_drawn_by_oouso__1a0cd97a15d03b57b665541400330db1.jpg',
        'https://cdn.donmai.us/original/ff/f5/__ol_chan_original_drawn_by_oouso__fff5685152f51705b56d896aaf11490e.jpg',
        'https://cdn.donmai.us/original/c9/a6/__ol_chan_original_drawn_by_oouso__c9a62858fcd0dedefc7f3b8f6f567b22.jpg',
        'https://cdn.donmai.us/original/69/f9/__ol_chan_original_drawn_by_oouso__69f95ba0db49445d88017c4dd2632491.jpg',
        'https://cdn.donmai.us/original/13/54/__ol_chan_original_drawn_by_oouso__13545bbff9f66ea7efe5162c1541d2a2.jpg',
        'https://cdn.donmai.us/original/63/07/__ol_chan_original_drawn_by_oouso__630773a97b080a3f22e2b3ef07505dd5.jpg',
        'https://cdn.donmai.us/original/a6/b3/__ol_chan_original_drawn_by_oouso__a6b3941f6f6a0239c5bef41bc491af6b.jpg',
        'https://cdn.donmai.us/original/7e/82/__ol_chan_original_drawn_by_oouso__7e82ced93fc2f136f8f44186e36d6f1d.jpg',
        'https://cdn.donmai.us/original/83/83/__ol_chan_original_drawn_by_oouso__83836279a8c4d7e3f8d4375cc2847be9.jpg',
        'https://cdn.donmai.us/original/fc/41/__ol_chan_original_drawn_by_oouso__fc4152fb1279aa9fdc2625fea1663700.jpg',
        'https://cdn.donmai.us/original/eb/31/__ol_chan_original_drawn_by_oouso__eb31d0b7e58bb3c93f899646cd571dd8.jpg',
        'https://cdn.donmai.us/original/d7/f1/__ol_chan_original_drawn_by_oouso__d7f18b1d909efd679d66f1b30d239bc9.jpg',
        'https://cdn.donmai.us/original/19/6c/__ol_chan_original_drawn_by_oouso__196c0d1a788a07f91e8a0bc153cea0d3.jpg',
        'https://cdn.donmai.us/original/e5/d7/__ol_chan_original_drawn_by_oouso__e5d7683c676058f6621870482fc9693e.jpg',
        'https://cdn.donmai.us/original/92/d9/__ol_chan_original_drawn_by_oouso__92d94608a589985a151ae5bdd6ab7d85.jpg',
        'https://cdn.donmai.us/original/ff/2e/__ol_chan_original_drawn_by_oouso__ff2efdc4df030eff20fe0a31dd69bf6f.jpg',
        'https://cdn.donmai.us/original/24/30/__ol_chan_original_drawn_by_oouso__2430cf53f407126f8ac0d520ac4186d0.jpg',
        'https://cdn.donmai.us/original/db/bc/__ol_chan_original_drawn_by_oouso__dbbcc903ba506d6a46eaf3b2fef494ba.jpg'];

    return view('ol_chan', compact('id1', 'id2', 'id3'));

})->name('ol_chan');

Route::get('/url', function () {
    //return url('black_haired_girl');
    return route('black_haired_girl');
    //return action([SiteController::class, 'black_haired_girl']);
    //return url()->full(); //會指定位置
    //return url()->current();
    return route('ol_chan');
    return route('senkawa_chihiro');
});

//Route::put('/user/{id}'[UserController::class,'update']);