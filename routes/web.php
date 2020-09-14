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

date_default_timezone_set('Asia/Bangkok');
// Route to landing page
Route::get('/', function () {
    return view('welcome');
});
// Route to access to TO (daftar/login) 
Route::get('/daftar', function () {
    return view('/user/daftar');
});
Route::patch('/daftar/output', 'PesertaController@store');
Route::get('/login', function () {
    return view('/user/login');
});
Route::get('/adlog', function () {
    return view('/admin/login');
});
Route::patch('/adlog/login', 'AdminController@login');
Route::patch('/user/login', 'UserController@login');
// Route to admin peserta
Route::get('/admin/peserta', 'PesertaController@index');
Route::get('/admin/peserta/{id}', 'PesertaController@show');
Route::patch('/admin/peserta/update', 'PesertaController@update');
Route::delete('/admin/peserta/delete', 'PesertaController@destroy');
// Route to admin soal
Route::get('/admin/saintek', 'PelajaranController@showSaintek');
Route::get('/admin/soshum', 'PelajaranController@showSoshum');
Route::get('/admin/insertSoal', function () {
    return view('/admin/insertSoal');
});
Route::get('/admin/bio', 'SoalController@showBio');
Route::get('/admin/fis', 'SoalController@showFis');
Route::get('/admin/kim', 'SoalController@showKim');
Route::get('/admin/mat', 'SoalController@showMat');
Route::get('/admin/eko', 'SoalController@showEko');
Route::get('/admin/geo', 'SoalController@showGeo');
Route::get('/admin/sos', 'SoalController@showSos');
Route::get('/admin/sej', 'SoalController@showSej');
Route::patch('/admin/soal/insert', 'SoalController@store');
Route::get('/admin/soal/edit/{id}', 'SoalController@show');
Route::patch('/admin/soal/update', 'SoalController@update');
Route::delete('/admin/soal/delete', 'SoalController@destroy');
// Route to Ujian Try-Out
Route::get('/user/ujian', 'UjianController@index');
