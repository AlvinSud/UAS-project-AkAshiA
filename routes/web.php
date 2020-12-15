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

//Route::get('/[linknya]', ControllerYgHandleRequest);
//Route::post('/[linknya]', ControllerYgHandleRequest);

/*Route::post('/', function () {
    return view('welcome');
});*/

/*Route::get('/', function () {
    return view('welcome');
});*/

//$basepath_controller = "App\Http\Controllers\";


Route::get('/', 'App\Http\Controllers\AwalController@index');

Route::get('/login', 'App\Http\Controllers\AwalController@login');
Route::post('/authenticate', 'App\Http\Controllers\AwalController@authentication');
Route::get('/logout', 'App\Http\Controllers\AwalController@logout');

//REGISTRATION
Route::post('/register', 'App\Http\Controllers\AwalController@daftar_baru');
Route::get('/register', 'App\Http\Controllers\AwalController@register');

//PROFIL: ubah
Route::get('/profil', 'App\Http\Controllers\AwalController@profil');
Route::post('/ubah-profil', 'App\Http\Controllers\AwalController@ubah_profil');

//HAPUS AKUN
Route::post('/delete-account','App\Http\Controllers\AwalController@hapus_account');

Route::get('/items', 'App\Http\Controllers\AwalController@items');
Route::get('/about', 'App\Http\Controllers\AwalController@about');
Route::get('/contact', 'App\Http\Controllers\AwalController@contact');

Route::get('/forgot', 'App\Http\Controllers\AwalController@forgot');

Route::get('/checkout', 'App\Http\Controllers\AwalController@checkout');

Route::get('/shopcart', 'App\Http\Controllers\AwalController@shopcart');

//Route::post('/tangkap', 'App\Http\Controllers\AwalController@tangkap');