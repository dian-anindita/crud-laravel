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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/barang', 'BarangController@index')->name('barang.index');
Route::get('/barang/create', 'BarangController@create')->name('barang.create');
Route::post('/barang/create', 'BarangController@store')->name('barang.store');
Route::get('/barang/{id}/edit', 'BarangController@edit')->name('barang.edit');
Route::patch('/barang/{id}/edit', 'BarangController@update')->name('barang.update');
Route::delete('/barang/{id}/delete', 'BarangController@destroy')->name('barang.destroy');