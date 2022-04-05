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
Route::get('gizi', function () {
    return view('gizi.product');
});

Route::get('listgiziproduct', function () {
    return view('gizi.listproduct');
});

//Fitur Kualitas
Route::get('kualitas', function () {
    return view('kualitas.product');
});

Route::get('listkualitasproduct', function () {
    return view('kualitas.listproduct');
});

