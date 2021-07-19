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

//Route Mahasiswa
Route::get('mahasiswa', 'MahasiswaController@index')-> name('mahasiswa');
Route::get('mahasiswa-tambah', 'MahasiswaController@tambah')-> name('tambah.mahasiswa');
Route::post('mahasiswa-simpan', 'MahasiswaController@store')-> name('simpan.mahasiswa');

Route::get('mahasiswal-edit/{id}', 'MahasiswaController@edit')-> name('edit.mahasiswa');
Route::post('mahasiswa-update/{id}', 'MahasiswaController@update')-> name('update.mahasiswa');
Route::get('mahasiswa-delete/{id}', 'MahasiswaController@destroy')-> name('delete.mahasiswa');

// Route Makul
Route::get('makul', 'MakulController@index')-> name('makul');
Route::get('makul-tambah', 'MakulController@tambah')-> name('tambah.makul');
Route::post('makul-simpan', 'MakulController@store')-> name('simpan.makul');

Route::get('makul-edit/{id}', 'MakulController@edit')-> name('edit.makul');
Route::post('makul-update/{id}', 'MakulController@update')-> name('update.makul');
Route::get('makul-delete/{id}', 'MakulController@destroy')-> name('delete.makul');

// Route Nilai
Route::get('nilai', 'NilaiController@index')-> name('nilai');
Route::get('nilai-tambah', 'NilaiController@tambah')-> name('tambah.nilai');
Route::post('nilai-simpan', 'NilaiController@store')-> name('simpan.nilai');

Route::get('nilai-edit/{id}', 'NilaiController@edit')-> name('edit.nilai');
Route::post('nilai-update/{id}', 'NilaiController@update')-> name('update.nilai');
Route::get('nilai-delete/{id}', 'NilaiController@destroy')-> name('delete.nilai');