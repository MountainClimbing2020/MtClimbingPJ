<?php
namespace App\Http;

Route::group(['prefix' =>'user'], function(){
    Route::prefix('admin')->group(function () {

    });
})
