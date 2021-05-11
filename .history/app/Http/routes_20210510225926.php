<?php
namespace App\Http;

Route::group(['prefix' =>'user'], function(){
    Route::group(['middleware' =>'auth'], function(){
// ユーザープロフィール
    Route::get('/pro')
    });
})
