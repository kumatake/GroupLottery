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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/lottery', function () {
    return view('lottery');
});

Route::get('/setting', 'SettingsController@index');

Route::get('/result', function () {
    return view('result');
});

/*
 * 抽選ユーザー設定関連
 */
Route::get('/setting/user/add', 'LotteryUsersController@add');
Route::post('/setting/user/create', 'LotteryUsersController@create');
Route::post('/setting/user/update', 'LotteryUsersController@update');
Route::get('/setting/edit/{id}', 'LotteryUsersController@edit');
