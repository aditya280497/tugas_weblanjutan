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

Route::get('/mhs','mahasiswacontroller@index')->name('mhs.index');
Route::get('/mhs_daftar','mahasiswacontroller@mhs_daftar')->name('mhs.daftar');
Route::get('/mhs/create','mahasiswacontroller@create');
Route::get('/mhs/store','mahasiswacontroller@store');
Route::get('/mhs/edit{nim}','mahasiswacontroller@edit');
Route::get('/mhs/update/{mahasiwa:nim}','mahasiswacontroller@update')->name('mhs.update');
Route::get('/mhs/delete/{mahasiwa:nim}','mahasiswacontroller@destroy')->name('mhs.delete');

Route::Resource('/prodi', 'ProdiController');