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
Route::get('/profile',[
    'uses' => 'UserController@getProfile',
    'as' => 'user.profile'
]);
    });
})
