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
    Route::get('/home', 'HomeController@index')->name('home');

    //route barang,ruangan,satuan,jenis
    Route::resource('pengguna','UserController');
    Route::get('barang/cari','BarangController@cari');
    Route::get('ruangan/cari','RuanganController@cari');
    Route::resource('barang','BarangController');
    Route::resource('satuan','SatuanController');
    Route::resource('jenis','JenisController');
    Route::resource('ruangan','RuanganController');
});
route::get('tes-collection','BarangController@tesCollection');
route::get('date-mutator','BarangController@dateMutator');
