<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PersebaranController;
use GuzzleHttp\Psr7\Request;

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
Route::get('gizi/listproduct/cari', 'IkanController@carigizi');

Route::get('gizi/cari', 'IkanController@carigizi');
Route::get('gizi/product/{id}','IkanController@indexIkan');

//Fitur Kualitas
Route::get('kualitas', 'IkanController@indexKualitas');//Halaman produk kualitas
Route::get('kualitas/cari', 'IkanController@carikualitas'); //Fitur cari kualitas

Route::get('kualitas/listproduct', 'IkanController@listprodukkualitas'); //Halaman list produk kualitas
Route::get('kualitas/listproduct/cari', 'IkanController@carikualitas'); //Fitur cari dari list kualitas

//Fitur Mitra
Route::get('mitra', function () {
    return view('mitra.mitra');
});
Route::get('/mitra/udbarokah', function () {
    return view('mitra.udbarokah');
});
Route::get('/mitra/cvwijayasuksesbersama', function () {
    return view('mitra.cvwijaya');
});

Route::get('listkualitasproduct/kualitas', 'IkanController@kualitas');

//Dashboard
Route::get('/dashboard', 'DashboardController@index');


