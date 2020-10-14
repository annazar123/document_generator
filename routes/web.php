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

// use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'dashboard'], function(){
    Route::get('/', 'DashboardController@index')->name('dashboard');
});

Route::group(['prefix' => 'koneksi'], function(){
    Route::get('/', 'KoneksiController@index')->name('koneksi');
});

Route::group(['prefix' => 'start'], function(){
    Route::get('/', 'StartController@start')->name('start');
});

Route::group(['prefix' => 'objek'], function(){
    Route::get('/', 'ObjekController@index')->name('objek');
    Route::get('get', 'ObjekController@get')->name('objek.get');
    Route::get('create', 'ObjekController@create')->name('objek.create');
    Route::post('store', 'ObjekController@store')->name('objek.store');
    Route::get('edit/{id?}', 'ObjekController@edit')->name('objek.edit');
    Route::get('delete/{id?}', 'ObjekController@delete')->name('objek.delete');
    Route::get('view/{id?}', 'ObjekController@view')->name('objek.view');
    Route::post('update/{id?}', 'ObjekController@update')->name('objek.update');
});

Route::group(['prefix' => 'jenis_dokumen'], function(){
    Route::get('/', 'Jenis_Dokumen_Controller@index')->name('jenis_dokumen');
});

Route::group(['prefix' => 'cetak'], function(){
    Route::get('/', 'CetakController@index')->name('cetak');
});