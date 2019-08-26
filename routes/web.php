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

Route::get('/', 'User_Controller@index');
Route::post('/state', 'User_Controller@states');
Route::post('/city', 'User_Controller@cities');
Route::post('/country', 'User_Controller@countries');
Route::post('submit', 'User_Controller@submit');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
