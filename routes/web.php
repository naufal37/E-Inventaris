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




Route::get('masuk', function () {
    return view('masuk/masuk');
});
