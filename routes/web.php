<?php

use App\Http\Controllers\ProfileController; //login breeze
use Illuminate\Support\Facades\Route; //login breeze
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\Jatah_cutiController;
use App\Http\Controllers\DivisiController;
use App\Http\Controllers\Pengajuan_cutiController;

// awal script login breeze
Route::get('/', function () {
    // return view('welcome');
    return view('frontend'); //frontend.blade.php
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

//routing dengan memanfaatkan controller - cara 3
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

//routing pegawai
Route::get('/pegawai/show', [PegawaiController::class, 'show'])->name('pegawai.show'); //tampilkan
Route::get('/pegawai/create', [PegawaiController::class, 'create'])->name('pegawai.create'); //add
Route::post('/pegawai/store', [PegawaiController::class, 'store'])->name('pegawai.store');
Route::get('/pegawai/{id}/edit', [PegawaiController::class, 'edit'])->name('pegawai.edit'); //edit
Route::delete('/pegawai/{id}', [PegawaiController::class, 'destroy'])->name('pegawai.destroy'); //delete
Route::get('/pegawai/{id}', [PegawaiController::class, 'view'])->name
('pegawai.view'); //view

//routing jatah cuti
Route::get('/jatah_cuti/show', [Jatah_cutiController::class, 'show'])->name('jatah_cuti.show'); //tampilkan
Route::get('/jatah_cuti/create', [Jatah_cutiController::class, 'create'])->name('jatah_cuti.create'); //add
Route::post('/jatah_cuti/store', [Jatah_cutiController::class, 'store'])->name('jatah_cuti.store');
Route::get('/jatah_cuti/{id}/edit', [Jatah_cutiController::class, 'edit'])->name('jatah_cuti.edit'); //edit
Route::delete('/jatah_cuti/{id}', [Jatah_cutiController::class, 'destroy'])->name('jatah_cuti.destroy'); //delete
Route::get('/jatah_cuti/{id}', [Jatah_cutiController::class, 'view'])->name('jatah_cuti.view'); //view

//routing divisi
Route::get('/divisi/show', [DivisiController::class, 'show'])->name('divisi.show');;
Route::get('/divisi/create', [divisiController::class, 'create'])->name('divisi.create'); //add
Route::post('/divisi/store', [divisiController::class, 'store'])->name('divisi.store');
Route::get('/divisi/{id}/edit', [divisiController::class, 'edit'])->name('divisi.edit'); //edit
Route::delete('/divisi/{id}', [divisiController::class, 'destroy'])->name('divisi.destroy'); //delete
Route::get('/divisi/{id}', [divisiController::class, 'view'])->name('divisi.view'); //view

//routing pengajuan_cuti
Route::get('/pengajuan_cuti/show', [Pengajuan_cutiController::class, 'show'])->name('pengajuan_cuti.show');
Route::get('/pengajuan_cuti/create', [Pengajuan_cutiController::class, 'create'])->name('pengajuan_cuti.create');
Route::post('/pengajuan_cuti/store', [Pengajuan_cutiController::class, 'store'])->name('pengajuan_cuti.store');
Route::get('/pengajuan_cuti/{id}/edit', [Pengajuan_cutiController::class, 'edit'])->name('pengajuan_cuti.edit');
Route::get('/pengajuan_cuti/{id}', [Pengajuan_cutiController::class, 'view'])->name('pengajuan_cuti.view');
Route::delete('/pengajuan_cuti/{id}', [Pengajuan_cutiController::class, 'destroy'])->name('pengajuan_cuti.destroy');

});



require __DIR__.'/auth.php';
// akhir script login breeze



//ini isi script puskesmas
//menampilkan web melalui file di lokasi lain - cara 2
Route::get('/profil', function () {
    return view('profil'); //ke file profil.blade.php
});

Route::get('/pegawai', function () {
    return view('pegawai'); //ke file pegawai.blade.php
});



Route::get('/admin', [AdminController::class, 'index']);


