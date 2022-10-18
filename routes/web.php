<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\JenisController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\DetailtrxController;
use App\Http\Controllers\UsernameController;
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
    return view('layouts.master');
});

Route::get('/table', function () {
    return view('dashboard.table');
});

//barang
Route::get('/barang',[BarangController::class,'index']);
Route::get('/barang/create',[BarangController::class,'create']);
Route::post('/barang/store',[BarangController::class,'store'])->name('tambah-data');
Route::get('/barang/{id}/edit',[BarangController::class,'edit']);
Route::put('/barang/{id}',[BarangController::class,'update']);
Route::delete('/barang/{id}',[BarangController::class,'destroy']);

//jenis
Route::get('/jenis',[JenisController::class,'index']);
Route::get('/jenis/create',[JenisController::class,'create'])->name('tambah');
Route::post('/jenis/store',[JenisController::class,'store'])->name('tambah');
Route::get('/jenis/{id}/edit',[JenisController::class,'edit']);
Route::put('/jenis/{id}',[JenisController::class,'update']);
Route::delete('/jenis/{id}',[JenisController::class,'destroy']);

//transaksi
Route::get('/transaksi',[TransaksiController::class,'index']);
Route::get('/transaksi/create',[TransaksiController::class,'create'])->name('create');
Route::post('/transaksi/store',[TransaksiController::class,'store'])->name('create');
Route::get('/transaksi/{id}/edit',[TransaksiController::class,'edit']);
Route::put('/transaksi/{id}',[TransaksiController::class,'update']);
Route::delete('/transaksi/{id}',[TransaksiController::class,'destroy'])->name('delete');

//detailtrx
Route::get('/detailtrx',[DetailtrxController::class,'index']);
Route::get('/detailtrx/create',[DetailtrxController::class,'create'])->name('new');
Route::post('/detailtrx/store',[DetailtrxController::class,'store'])->name('new');
Route::get('/detailtrx/{id}/edit',[DetailtrxController::class,'edit']);
Route::put('/detailtrx/{id}',[DetailtrxController::class,'update']);
Route::get('/detailtrx/{id}/destroy',[DetailtrxController::class,'destroy'])->name('del');

//username
Route::get('/login', [UsernameController::class, 'login'])->name('login');
Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');

Route::get('/logout', [PortofolioController::class,'index'])->name('home')->middleware('auth');
Route::get('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');

