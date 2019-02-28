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

Route::group(['middleware' => 'backstage.not.auth','prefix' => 'backstage'],function () {
    Route::get('user','Backstage\AccountController@index');
    Route::get('user/append','Backstage\AccountController@create');
    Route::post('user','Backstage\AccountController@append');
    Route::get('user/modify/{id}','Backstage\AccountController@update');
    Route::patch('user/{id}','Backstage\AccountController@modify');
    Route::delete('user/{id}','Backstage\AccountController@remove');
    Route::get('logout','Backstage\LoginController@logout');
});

Route::get('admin/login','Backstage\LoginController@index');
Route::post('admin/login','Backstage\LoginController@login');

Route::get('/', function () {
    return view('welcome');
});
