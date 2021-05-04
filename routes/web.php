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
// このサイトについて
Route::get('/about', function () {
    return view('about');
})->name('about');
// あなたの思い出の尾瀬
Route::get('/memory/board', function () {
    return view('memory/board');
})->name('memory/board');
Route::get('/memory/submit', function () {
    return view('memory/submit');
})->name('memory/submit');
/*確認画面を将来的に追加予定2021.04.20
Route::post('/memory/confirm', 'ImageController@upload')->name('memory/confirm');
*/
Route::post('/memory/complete', 'ImageController@upload')->name('memory/complete');
// 尾瀬の見どころ
Route::get('/recommended/top', 'MountainController@index')->name('/recommended/top');
