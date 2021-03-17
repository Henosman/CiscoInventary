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

Route::get('/', 'DeveloperController@index');

Route::get('/Inventary', 'InventaryController@index');
Route::get('/Channels', 'ChannelsController@index');
Route::get('/Loans', 'LoanController@index');
Route::get('/Charts', 'ChartsController@index');
Route::get('/Gallery', 'GalleryController@index');