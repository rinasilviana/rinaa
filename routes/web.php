<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginRegisterController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\PelanggaranController;
use App\Http\Controllers\DetailPelanggaranController;
use App\Http\Controllers\PelanggarController;;


Route::get('/', function () {
    return view('/auth/login');
});

Route::middleware('guest')->group(function () {
   // Route::get('/register', [LoginRegisterController::class, 'register'])->name('register');
   Route::post('/store', [LoginRegisterController::class, 'store'])->name('store');
    Route::get('/login', [LoginRegisterController::class, 'login'])->name('login');
    Route::post('/authencicate', [LoginRegisterController::class, 'authenticate'])->name('authenticate');

});
Route::middleware('auth', 'admin')->group(function() {
    Route::get('admin\dashboard', [AdminController::class, 'index'])->name('admin\dashboard');
    Route::resource('/admin/siswa', SiswaController::class);
    Route::resource('/admin/akun', LoginRegisterController::class);
    Route::put('/updateEmail/{akun}', [LoginRegisterController::class, 'updateEmail'])->name('updateEmail');
    Route::put('/updatePassword/{akun}', [LoginRegisterController::class, 'updatePassword'])->name('updatePassword');
    Route::resource('/admin/pelanggaran', PelanggaranController::class);
    Route::resource('/admin/Pelanggar', PelanggarController::class);
    Route::post('/admin/pelanggar/storePelanggaran', [PelanggarController::class, 'storePelanggaran'])->name('pelanggar.storePelanggaran');
    Route::put('/admin/pelanggar/statusTindak/{akun}', [PelanggarController::class, 'statusTindak'])->name('pelanggar.statusTindak');
    Route::resource('/admin/detailPelanggaran', DetailPelanggaranController::class);
    Route::post('/logout', [LoginRegisterController::class, 'logout'])->name('logout');
});