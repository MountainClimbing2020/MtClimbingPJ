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
// おすすめの山情報
Route::get('/recommended', 'MountainController@index')->name('/recommended');
//お問い合わせフォーム
//持ち物リスト
Route::get('/belongings/top', function () {
    return view('belongings/top2');
})->name('belongings/top2');
Route::post('/belongings/list_api', 'belongingsController@getAllMessage'); // メッセージ取得API
Route::post('/belongings/messeage_api',  'belongingsController@sendMessage');   // メッセージ送信API


