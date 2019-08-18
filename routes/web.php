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

Route::get('/', 'PageController@index');
Route::get('/bantuan', 'PageController@bantuan');
Route::get('/tentang', 'PageController@tentang');
Route::get('/dashboard', 'LapanganController@index')->name('home');
Route::resource('lapangan', 'LapanganController');
Auth::routes();


