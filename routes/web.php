<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PersebaranController;
use GuzzleHttp\Psr7\Request;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\IkanController;
use Illuminate\Routing\RouteGroup;

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

Route::get('/', 'IkanController@index');

//Fitur Gizi
Route::get('gizi', 'IkanController@indexGizi');

Route::get('gizi/listproduct', 'IkanController@listprodukgizi');
Route::get('gizi/listproduct/filter', 'IkanController@filterprodukgizi')->name('filtergizi');
Route::get('gizi/listproduct/cari', 'IkanController@carigizi');

Route::get('gizi/cari', 'IkanController@carigizi');
Route::get('gizi/product/{id}','IkanController@giziIkan'); //halaman kandungan gizi pada ika
Route::get('gizi/product/detail/{id}','IkanController@detailIkan'); //halaman detail produk dari route gizi
Route::get('manfaat/{idmanfaat}', 'IkanController@detailManfaat')->name('detailManfaat'); //halaman detail manfaat


//Fitur Kualitas
Route::get('kualitas', 'IkanController@indexKualitas');//Halaman produk kualitas
Route::get('kualitas/cari', 'IkanController@carikualitas'); //Fitur cari kualitas

Route::get('kualitas/listproduct', 'IkanController@listprodukkualitas'); //Halaman list produk kualitas
Route::get('kualitas/listproduct/filter', 'IkanController@filterprodukkualitas')->name('filterkualitas'); //filter list produk kualitas
Route::get('kualitas/listproduct/cari', 'IkanController@carikualitas'); //Fitur cari dari list kualitas
Route::get('kualitas/product/detail/{idikan}','IkanController@detailIkan')->name('detailproduk');
Route::post('kualitas/product/detail/{idikan}','IkanController@postulasan')->name('postulasan');
Route::get('kualitas/product/{id}','IkanController@kualitas');

//Fitur Mitra
Route::get('/mitra', 'MitraController@index');
Route::get('/mitra/udbarokah', 'MitraController@productbarokah');
Route::post('/mitra/udbarokah/cari', 'MitraController@cariproductbarokah');
Route::get('/mitra/cvwijayasuksesbersama', 'MitraController@productcvwijaya');
Route::post('/mitra/cvwijayasuksesbersama/cari', 'MitraController@cariproductcvwijaya');

Route::get('listkualitasproduct/kualitas', 'IkanController@kualitas');
Route::get('/detailproduct', function () {
    return view('kualitas.detailproduct');
});

Route::get('/tentangkami', function () {
    return view('tentangkami');
});

//Dashboard
Route::group(['middleware' => 'mitra'], function() {
    Route::get('/dashboard', 'DashboardController@index');
    Route::get('/dashboard', 'DashboardController@landing');
    Route::get('/dashboard/index','DashboardController@index');
    Route::get('/dashboard/index/tambah','DashboardController@tambah');
    Route::post('/dashboard/index/store','DashboardController@store');
    Route::get('/dashboard/index/edit/{id}','DashboardController@edit');
    Route::post('/dashboard/index/update','DashboardController@update');
    Route::get('/dashboard/index/hapus/{id}','DashboardController@hapus');
});

//Login
Route::get('/login', 'LoginController@index')->middleware('guest');
Route::post('/login', 'LoginController@authenticate');
Route::post('/logout', 'LoginController@logout');

Route::get('/register', 'RegisterController@index');
Route::post('/register', 'RegisterController@store');



Route::get('/detailgizi/{idgizi}', 'IkanController@detailgizi')->name('detailgizi'); //halaman detail gizi

Route::get('/detailracun/{idracun}', 'IkanController@detailracun')->name('detailracun'); //halaman detail gizi

Route::get('/listpenjual/{persebaran}', 'OutletController@index')->name('listoutlet'); //halaman list outlet

Route::get('/faktaikan', 'IkanController@faktaikan')->name("fakta"); //halaman fakta ikan

Route::get('/penjual/{namaikan}', 'IkanController@listpenjual'); //fitur hubungi penjual dari detail product

Route::post('/faktaikan', 'IkanController@simpancomment')->name('simpancomment'); //simpan comment di fakta ikan

Route::post('summernoteeditor',array('as'=>'summernoteeditor.post','uses'=>'SummernoteController@postSummernoteeditor')); //buat nyimpan komentar di halaman fakta ikan

Route::get('tentangkami', 'DashboardController@tentangkami')->name("tentangkami");

Route::get('/efeksamping/{idefeksamping}', 'IkanController@detailEfekSamping')->name('detailefeksamping');
