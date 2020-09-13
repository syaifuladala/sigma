<?php

use App\Http\Controllers\PelajaranController;
use App\Pelajaran;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/daftar', 'PesertaController@daftar');

Route::patch('/daftar/output', 'PesertaController@store');

Route::get('/admin/', function () {
    return view('/admin/index');
});
// Route to admin peserta
Route::get('/admin/peserta', 'PesertaController@index');
Route::get('/admin/peserta/{id}', 'PesertaController@show');
Route::patch('/admin/peserta/update', 'PesertaController@update');
Route::delete('/admin/peserta/delete', 'PesertaController@destroy');
// Route to admin soal
Route::get('/admin/saintek', 'PelajaranController@showSaintek');
Route::get('/admin/insertSoal', function () {
    return view('/admin/insertSoal');
});
Route::get('/admin/bio', 'SoalController@showBio');
Route::get('/admin/mat', 'SoalController@showMat');
Route::patch('/admin/soal/insert', 'SoalController@store');
Route::get('/admin/bio/{id}', 'SoalController@show');