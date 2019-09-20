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

Route::get('barang', 'BarangController@index');
Route::get('barang/tambah','BarangController@tambah');
Route::post('barang/simpan', 'BarangController@simpan');
Route::get('barang/ubah/{id}', 'BarangController@ubah');
Route::post('barang/update/{id}', 'BarangController@update');
Route::get('barang/hapus/{id}', 'BarangController@hapus');
Auth::routes();

Route::get('test', 'TestController@index');


Route::get('user', 'UserController@index');
Route::get('user/tambah','UserController@tambah');
Route::post('user/simpan', 'UserController@simpan');
Route::get('user/ubah/{id}', 'UserController@ubah');
Route::post('user/update/{id}', 'UserController@update');
Route::get('user/hapus/{id}', 'UserController@hapus');

Route::get('/home', 'HomeController@index')->name('home');
