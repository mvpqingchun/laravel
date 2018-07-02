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

Route::get('user/profile', 'UserController@showProfile')->name('profile');

//Route::get('user/show/{id?}', 'UserController@show')->name('show');

Route::match(['get', 'post'], 'user/show/{id?}', 'UserController@show')->name('show');

Route::match(['get', 'post'], 'memo/index/{id?}', 'MemoController@index')->name('memo');

Route::prefix('home')->group(function () {
    Route::get( 'auxUser/index', 'Home\AuxUserController@index')->name('index');
    
    Route::get( 'auxUser/create', 'Home\AuxUserController@create')->name('create');

    Route::post( 'auxUser/store', 'Home\AuxUserController@store')->name('store');
    
});

//Route::get( '/home/auxUser/create', 'Home\AuxUserController@create')->name('create');


