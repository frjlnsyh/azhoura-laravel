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

// Route::get('/', function () {
//     return view('welcome');
// });;
Route::get('/', ['uses'=>'App\Http\Controllers\HomeController@index'])->name('home');
Route::get('/about-us', ['uses'=>'App\Http\Controllers\AboutController@index'])->name('about-us');
Route::get('/product', ['uses'=>'App\Http\Controllers\ProdukController@index'])->name('product');
Route::get('/seller', ['uses'=>'App\Http\Controllers\SellerController@index'])->name('seller');
Route::get('/media', ['uses'=>'App\Http\Controllers\MediaController@index'])->name('media');
Route::get('/berita', ['uses'=>'App\Http\Controllers\BeritaController@index'])->name('berita');
Route::get('/product/{id}', ['uses'=>'App\Http\Controllers\ProdukController@detail'])->name('product-detail');

