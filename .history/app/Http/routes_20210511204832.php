<?php
namespace App\Http;

Route::group(['prefix' =>'user'], function(){
    Route::group(['middleware' =>'auth'], function(){
// ユーザープロフィール
    Route::get('/profile',[
        'uses' => 'UserController@getProfile',
        'as' => 'user.profile'
    ]);
// ログアウト
Route::get('/logout',[
    'uses' => 'UserController@getLogout',
    'as' => 'user.Logout'
]);
// 登録
Route::get('')
    });
})
