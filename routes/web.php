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

Route::group(['middleware'=>['web']],function()
{
    //route login,logout,register,home
    Route::get('logout','Auth\LoginController@logout')->name('logout');
    Route::get('login','Auth\LoginController@showLoginForm')->name('login');
    Route::post('login','Auth\LoginController@login')->name('login');
    Route::get('register',function (){return redirect('/');});
    Route::get('/barang', 'HomeController@index')->name('home');

    //route barang,ruangan,satuan,jenis
    Route::resource('pengguna','UserController');
    Route::get('barang/cari','BarangController@cari');
    Route::get('ruangan/cari','RuanganController@cari');
    Route::get('report','BarangController@displayreport');
    Route::resource('barang','BarangController');
    Route::resource('satuan','SatuanController');
    Route::resource('jenis','JenisController');
    Route::resource('ruangan','RuanganController');
    Route::get('pinjaman/create/{id}','PinjamanController@create');
    Route::get('pengembalian/{id}','PinjamanController@pengembalian');
    Route::patch('pengembalian/{id}','PinjamanController@simpanpengembalian');
    Route::resource('pinjaman','PinjamanController');

    Route::get('home',function(){return view('home');});
});
route::get('test','BarangController@test');
route::get('date-mutator','BarangController@dateMutator');
