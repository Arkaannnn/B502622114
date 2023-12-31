<?php

use Illuminate\Support\Facades\Route;

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
Route::get('blog', function () {
    return view('blog');
});
Route::get('html1', function () {
    return view('html1');
});
Route::get('laravel', function () {
    return view('laravel');
});
Route::get('tugas1', function () {
    return view('tugas1');
});
Route::get('tugasweb', function () {
    return view('tugasweb');
});
Route::get('validasi', function () {
    return view('validasi');
});
Route::get('js1', function () {
    return view('js1');
});
Route::get('js2', function () {
    return view('js2');
});
Route::get('responsive', function () {
    return view('responsive');
});

Route::get('halo', function () {
	return "Halo, Selamat datang di tutorial laravel www.malasngoding.com";
});

Route::get('/halo2', function () {
    return "<h1>Halo world</h1>";
});

Route::get('blog', function () {
	return view('blog');
});

Route::get('perkalian', 'App\Http\Controllers\DosenController@index');
Route::get('biodata', 'App\Http\Controllers\DosenController@biodata');
Route::get('showjam/{jam}', 'App\Http\Controllers\DosenController@showjam');
Route::get('/formulir', 'App\Http\Controllers\DosenController@formulir');
Route::post('/formulir/proses', 'App\Http\Controllers\DosenController@proses');
//route CRUD
Route::get('/pegawai','App\Http\Controllers\PegawaiController@index');
Route::get('/pegawai/tambah','App\Http\Controllers\PegawaiController@tambah');
Route::post('/pegawai/store','App\Http\Controllers\PegawaiController@store');
Route::get('/pegawai/edit/{id}','App\Http\Controllers\PegawaiController@edit');
Route::post('/pegawai/update','App\Http\Controllers\PegawaiController@update');
Route::get('/pegawai/hapus/{id}','App\Http\Controllers\PegawaiController@hapus');
Route::get('/pegawai/cari','App\Http\Controllers\PegawaiController@cari');
Route::get('/pegawai/view/{id}','App\Http\Controllers\PegawaiController@view');

//nilai kuliah cowo
Route::get('/nilaikuliah','App\Http\Controllers\nilaikuliahController@indexnilaikuliah');
Route::get('/nilaikuliah/tambahdata','App\Http\Controllers\nilaikuliahController@tambahdata');
Route::post('/nilaikuliah/storenilai','App\Http\Controllers\nilaikuliahController@storenilai');

//nilai kuliah cewe
Route::get('/keranjangbelanja','App\Http\Controllers\KBController@indexkeranjangbeli');
Route::get('/keranjangbelanja/beli','App\Http\Controllers\KBController@beli');
Route::post('/keranjangbelanja/store','App\Http\Controllers\KBController@store');
Route::get('/keranjangbelanja/batal/{id}','App\Http\Controllers\KBController@batal');

//unggas
Route::get('/unggas','App\Http\Controllers\unggasController@indexunggas');
Route::get('/unggas/tambahunggas','App\Http\Controllers\unggasController@tambahunggas');
Route::post('/unggas/storedata','App\Http\Controllers\unggasController@storedata');

//chat
Route::get('/chat','App\Http\Controllers\kodesoalAAController@indexAA');



