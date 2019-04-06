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
/*
|--------------------------------------------------------------------------
| Routes Barang
|--------------------------------------------------------------------------
*/
Route::group(['middleware'=>['web']],function (){
    Route::get('barang/cari','BarangController@cari');

    Route::resource('barang','BarangController');
//
//    Route::get('barang', "BarangController@index");
//    Route::get('barang/create', "BarangController@create");
//
//    Route::get('barang/{id}', "BarangController@show");
//
//    Route::post('barang',"BarangController@store");
//    Route::get('barang/{id}/edit',"BarangController@edit");
//    Route::patch('barang/{id}',"BarangController@update");
//    Route::delete('barang/{id}',"BarangController@destroy");

});
/*
|--------------------------------------------------------------------------
| Routes Barang End
|--------------------------------------------------------------------------
*/



/*
|--------------------------------------------------------------------------
| Routes Ruangan
|--------------------------------------------------------------------------
*/
Route::group(['middleware'=>['web']],function(){
    Route::get('ruangan/cari','RuanganController@cari');
    Route::resource('ruangan','RuanganController');
//    Route::get('ruangan', "RuanganController@index");
//    Route::get('ruangan/tambah', "RuanganController@create");
//    Route::get('ruangan/{id}', "RuanganController@show");
//    Route::post('ruangan', "RuanganController@store");
//    Route::get('ruangan/{id}/edit',"RuanganController@edit");
//    Route::patch('ruangan/{id}',"RuanganController@update");
//    Route::delete('ruangan/{id}',"RuanganController@destroy");
});

/*
|--------------------------------------------------------------------------
| Routes Ruangan End
|--------------------------------------------------------------------------
*/

/*
|--------------------------------------------------------------------------
| Routes Jenis
|--------------------------------------------------------------------------
*/
Route::group(['middleware'=>['web']],function(){
    Route::get('jenis/cari','jenisController@cari');
    Route::resource('jenis','JenisController');

//    Route::get('jenis', "JenisController@index");
//    Route::get('jenis/tambah', "JenisController@create");
//    Route::get('jenis/{id}', "JenisController@show");
//    Route::post('jenis', "JenisController@store");
//    Route::get('jenis/{id}/edit',"JenisController@edit");
//    Route::patch('jenis/{id}',"JenisController@update");
//    Route::delete('jenis/{id}',"JenisController@destroy");
});

/*
|--------------------------------------------------------------------------
| Routes Jenis End
|--------------------------------------------------------------------------
*/

/*
|--------------------------------------------------------------------------
| Routes Satuan
|--------------------------------------------------------------------------
*/

Route::group(['middleware'=>['web']],function(){
    Route::get('satuan/cari','SatuanController@cari');
    Route::resource('satuan','SatuanController');

//    Route::get('satuan', "SatuanController@index");
//    Route::get('satuan/tambah', "SatuanController@create");
//    Route::get('satuan/{id}', "SatuanController@show");
//    Route::post('satuan', "SatuanController@store");
//    Route::get('satuan/{id}/edit',"SatuanController@edit");
//    Route::patch('satuan/{id}',"SatuanController@update");
//    Route::delete('satuan/{id}',"SatuanController@destroy");
});

/*
|--------------------------------------------------------------------------
| Routes Satuan End
|--------------------------------------------------------------------------
*/

route::get('tes-collection','BarangController@tesCollection');
route::get('date-mutator','BarangController@dateMutator');

Route::get('masuk', function () {return view('masuk/masuk');});