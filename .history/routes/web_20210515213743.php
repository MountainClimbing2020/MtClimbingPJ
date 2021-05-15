<?php

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
// トップページ
Route::get('/', function () {
    return view('top');
})->name('top');
// ログイン機能
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::group(['prefix'=>'uses'], function(){
// 新規登録
    Route::group(['middleware' => 'guest'], function(){
        Route::get('/signup',[
            'uses' =>'UserController@getSignup',
            'as' => 'user.signup'
        ]);
        Route::post('/signup',[
            'uses' => 'UserController@postSignup',
            'as' => 'user.signup'
            ]);
    });
    Route::group(['middleware' =>'auth'], function(){
        Route::get('/profile',[
            'uses' => 'UserController@getProfile',
            'as' => 'user.profile'
            ]);
    });
// ログイン
    Route::group(['middleware' => 'guest'], function(){
        Route::get('/signin',[
            'uses' => 'UserController@getSignin',
            'as' => 'user.signin'
            ]);
        Route::post('/signin',[
            'uses' => 'UserController@postsignin',
            'as' => 'user.success'
        ]);
    });
// ログアウト
    Route::group(['middleware' =>'auth'], function(){
        Route::get('/logout',[
            'uses' => 'UserController@getLogout',
            'as' => 'user.logout'
            ]);
    });
});
// このサイトについて
Route::get('/about', function () {
    return view('about');
})->name('about');
// あなたの思い出の景色
Route::get('/memory/board', function () {
    return view('memory/board');
})->name('memory/board');
Route::get('/memory/submit', function () {
    return view('memory/submit');
})->name('memory/submit');
/*
Route::post('/memory/confirm', 'ImageController@upload')->name('memory/confirm');
*/
Route::post('/memory/complete', 'ImageController@upload')->name('memory/complete');
//お問い合わせフォーム
/*ログインアカウント限定機能*/
Route::group(['middleware'=>'auth'],function(){
// おすすめの山情報
    Route::get('/recommended', 'MountainController@index')->name('/recommended');
//持ち物リスト
    Route::get('/belongings/top','belongingsController@index');
->name('belongings/top');

});
