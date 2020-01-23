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

Route::get('', 'ShopController@index');
Route::get('/', 'ShopController@index');
Route::get('/shop', 'ShopController@index');
Route::get('/shop2', 'ShopController@index')->middleware('pagespeed');

Route::get('/welcome', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//cart to buy
Route::get('/mycart', 'HomeController@mycart')->name('mycart');
Route::post('/mycart', 'HomeController@add_mycart');
Route::post('/cartdelete', 'HomeController@delete_mycart');
Route::post('/buydone', 'HomeController@buy_done');

//mypage
Route::get('/home', 'HomeController@index')->name('home');

Route::get('login/github', 'Auth\LoginController@redirectToProvider');
Route::get('login/github/callback', 'Auth\LoginController@handleProviderCallback');


Route::get('login/twitter', 'Auth\LoginController@redirectToTwitterProvider');
Route::get('login/twitter/callback', 'Auth\LoginController@handleTwitterProviderCallback');
