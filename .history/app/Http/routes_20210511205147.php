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
    Route::get('/signup',[
        'uses' => 'UserController@getSignup',
        'as' => 'user.signup'
    ]);
    Route::post('/signup',[
        'uses' => 'UserController@postSignup',
        'as' => 'user.signup'
    ]);
// ログイン
    Route::get('/signin',[
        'uses' => 'UserController@postSignin',
        'as' => 'user.signin'
    ]);
    Route::post('/signup',[
        'uses' => 'UserController@postSignin',
        'as' => 'user.signin'
    ]);
    });
}
