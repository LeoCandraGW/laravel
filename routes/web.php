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
Route::get('/pegawai', 'cntrl@pegawai');
Route::post('/ftambah', 'cntrl@ftambah');
Route::get('/tambah', 'cntrl@tambah');
Route::get('/delete/{id}', 'cntrl@delete');
Route::get('/update/{id}', 'cntrl@update');
Route::post('/pegawai/fedit', 'cntrl@fedit');
Route::get('/daafn', 'cntrl@daafn');
Route::get('/daafn1', 'cntrl@daafn1');
Route::get('/daafn2', 'cntrl@daafn2');
