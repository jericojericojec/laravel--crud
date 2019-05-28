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


Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', ['as' => 'homepage', 'uses' => 'ProductsController@index']);
Route::get('/create', ['as' => 'create', 'uses' => 'ProductsController@create']);
Route::post('/create', ['as' => 'store', 'uses' => 'ProductsController@store']);
Route::get('/update/{id?}', ['as' => 'update', 'uses' => 'ProductsController@update']);
Route::post('/update/{id?}', ['as' => 'update', 'uses' => 'ProductsController@modify']);
Route::any('/{id?}', ['as' => 'delete', 'uses' => 'ProductsController@destroy']);
