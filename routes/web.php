<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PersebaranController;


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

Route::get('listgiziproduct', 'IkanController@listproduk');

Route::get('gizi/cari', 'IkanController@cari');

//Fitur Kualitas
Route::get('kualitas', 'IkanController@indexKualitas');

Route::get('listkualitasproduct', function () {
    return view('kualitas.listproduct');
});

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



