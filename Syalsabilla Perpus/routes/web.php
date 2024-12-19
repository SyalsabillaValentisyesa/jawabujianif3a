<?php

use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\BukuController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PinjamController;


//route mengelola data
Route::get('/insertsql', [AnggotaController::class, 'insertsql']);
Route::get('/tampil', [AnggotaController::class, 'tampilan']);
Route::get('/delete', [AnggotaController::class, 'hapus']);
Route::get('/inserttimestamp', [AnggotaController::class, 'insertTimestamp']);
Route::get('/', [AnggotaController::class, 'index']);
Route::get('/prosesinput', [AnggotaController::class, 'prosesInput']);

//ROUTE ANGGOTA/MAHASISWA
Route::prefix('anggota')->group(function () {
  Route::get('/tambah', [AnggotaController::class, 'formTambah']);
  Route::get('/tampil', [AnggotaController::class, 'tampilkanAnggota']);
  Route::get('/hapus/{id}', [AnggotaController::class, 'hapus']);
});

//ROUTE BUKU
Route::prefix('buku')->group(function () {
  Route::get('/tampil', [BukuController::class, 'index']);
  Route::get('/tambah', [BukuController::class, 'formTambah']);
  Route::post('/prosestambah', [BukuController::class, 'prosesTambah']);
  Route::get('/hapus/{id}', [BukuController::class, 'hapus']);
});

//ROUTE PINJAM
Route::get('/detailpinjam', [PinjamController::class, 'index']);
Route::post('/detailpinjam', [PinjamController::class, 'store']);
Route::put('/detailpinjam/{id}', [PinjamController::class, 'update']);
Route::delete('/detailpinjam/{id}', [PinjamController::class, 'destroy']);

Route::resource('/detailpinjam', PinjamController::class);