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
    return view('landing.main');
});

Route::group(['middleware'=>['web']],function (){

    Route::get('barang', "BarangController@index");
    Route::get('barang/tambah', "BarangController@create");
    Route::get('barang/{id}', "BarangController@detail");
    Route::post('barang',"BarangController@store");
    Route::get('barang/{id}/edit',"BarangController@edit");
    Route::patch('barang/{id}',"BarangController@update");
    Route::delete('barang/{id}',"BarangController@destroy");

});

route::get('tes-collection','BarangController@tesCollection');
route::get('date-mutator','BarangController@dateMutator');

Route::get('masuk', function () {return view('masuk/masuk');});


Route::group(['middleware'=>['web']],function(){
    Route::get('ruangan', "RuanganController@index");
    Route::get('ruangan/tambah', "RuanganController@create");
    Route::get('ruangan/{id}', "RuanganController@detail");
    Route::post('ruangan', "RuanganController@store");
    Route::get('ruangan/{id}/edit',"RuanganController@edit");
    Route::patch('ruangan/{id}',"RuanganController@update");
    Route::delete('ruangan/{id}',"RuanganController@destroy");
});

Route::group(['middleware'=>['web']],function(){
    Route::get('jenis', "JenisController@index");
    Route::get('jenis/tambah', "JenisController@create");
    Route::get('jenis/{id}', "JenisController@detail");
    Route::post('jenis', "JenisController@store");
    Route::get('jenis/{id}/edit',"JenisController@edit");
    Route::patch('jenis/{id}',"JenisController@update");
    Route::delete('jenis/{id}',"JenisController@destroy");
});

Route::group(['middleware'=>['web']],function(){
    Route::get('satuan', "SatuanController@index");
    Route::get('satuan/tambah', "SatuanController@create");
    Route::get('satuan/{id}', "SatuanController@detail");
    Route::post('satuan', "SatuanController@store");
    Route::get('satuan/{id}/edit',"SatuanController@edit");
    Route::patch('satuan/{id}',"SatuanController@update");
    Route::delete('satuan/{id}',"SatuanController@destroy");
});