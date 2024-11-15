<?php


use App\Http\Controllers\AuthController;
use App\Http\Controllers\PegawaiController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/registrasi', [AuthController::class, 'tampilRegistrasi'])->name('regristasi.tampil');
Route::post('/registrasi/submit', [AuthController::class, 'submitRegistrasi'])->name('regristasi.submit');

Route::get('/login', [AuthController::class, 'tampilLogin'])->name('login.tampil');
Route::post('/login/submit', [AuthController::class, 'submitLogin'])->name('login.submit');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/pegawai', [PegawaiController::class, 'tampil'])->name('pegawai.tampil');
Route::get('/pegawai/tambah', [PegawaiController::class, 'tambah'])->name('pegawai.tambah');    
Route::post('/pegawai/submit', [PegawaiController::class, 'submit'])->name('pegawai.submit'); 
Route::get('/pegawai/edit/{id}', [PegawaiController::class, 'edit'])->name('pegawai.edit');
Route::post('/pegawai/update/{id}', [PegawaiController::class, 'update'])->name('pegawai.update');
Route::post('/pegawai/delete/{id}', [PegawaiController::class, 'delete'])->name('pegawai.delete');  