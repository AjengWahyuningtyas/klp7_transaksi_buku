<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PegawaiController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\PeminjamController;
use App\Http\Controllers\PinjamanController;
use App\Http\Controllers\PinjamanDetailController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\PengembalianController;
use Illuminate\Support\Facades\Redirect;

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


Route::group(['middleware'=>'auth'],function(){
    Route::resource('/pegawai', PegawaiController::class);
    Route::resource('/buku', BukuController::class);
    Route::resource('/peminjam',PeminjamController::class);
    Route::resource('/pinjaman',PinjamanController::class);
    Route::resource('/pinjaman_detail',PinjamanDetailController::class);
    Route::resource('/pengembalian',PengembalianController::class);
    Auth::routes();
});

Route::get('/home',function(){
    return redirect('beranda');
});

Route::get('/', function () {
    return Redirect('login');
});

Route::get('/register', function() {
    return Redirect('register');
});

Auth::routes();

Route::resource('/beranda',BerandaController::class);
