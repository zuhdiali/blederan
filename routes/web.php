<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\AkomodasiController;
use App\Http\Controllers\InformasiController;
use App\Http\Controllers\EnvironmentController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


// ******* Halaman Utama *********
// Route::get('/produk/{id_desa}', [MainController::class, 'produk'])->name('produk');
Route::get('/kabar/{id_desa}', [MainController::class, 'kabar'])->name('kabar');
// Route::get('/data/{id_desa}', [MainController::class, 'data'])->name('data');
Route::get('/data2/{id_desa}', [MainController::class, 'data2'])->name('data2');
Route::get('/sejarah/{id_desa}', [MainController::class, 'sejarah'])->name('sejarah');
Route::get('/peta/{id_desa}', [MainController::class, 'peta'])->name('peta');
Route::get('/publikasi/{id_desa}', [MainController::class, 'publikasi'])->name('publikasi');
Route::get('/download/{id_desa}', [MainController::class, 'downloadPublikasi'])->name('download');
Route::get('/medsos/{id_desa}', [MainController::class, 'medsos'])->name('medsos');
// Route::get('/test/{id_desa}', [MainController::class, 'test'])->name('test');
// Route::get('/test2/{id_desa}', [MainController::class, 'test2'])->name('test2');
// Route::get('/layout-artikel/{id_desa}', [MainController::class, 'layoutArtikel'])->name('layout-artikel');
// ******* Halaman Utama *********

// ******* Artikel Statis *********
Route::get('/desa-cantik/{id_desa}', [MainController::class, 'desaCantik'])->name('desa-cantik');
Route::get('/kampung-sayur/{id_desa}', [MainController::class, 'kampungSayur'])->name('kampung-sayur');
Route::get('/penghargaan/{id_desa}', [MainController::class, 'penghargaan'])->name('penghargaan');
Route::get('/santunan/{id_desa}', [MainController::class, 'santunan'])->name('santunan');
// ******* Artikel Statis *********

// ******* User *********
Route::get('/login', [AdminController::class, 'login'])->name('login');
Route::post('/login', [AdminController::class, 'loginPost'])->name('login.post');
Route::get('/logout', [AdminController::class, 'logout'])->name('logout');
Route::middleware('auth')->group(function () {
    Route::get('/daftar', [AdminController::class, 'daftar'])->name('daftar');
    Route::post('/daftar', [AdminController::class, 'daftarPost'])->name('daftar.post');
    Route::get('/reset-password/{id}', [AdminController::class, 'resetPassword'])->name('reset-password');
    Route::post('/reset-password-post/{id}', [AdminController::class, 'resetPasswordPost'])->name('reset-password.post');
});
// ******* User *********


// ******* Halaman Admin *********
Route::middleware('auth')->group(function () {
    Route::get('/admin-dashboard', [AdminController::class, 'index'])->name('admin-dashboard');
    Route::get('/admin-manajemen-pengguna', [UserController::class, 'index'])->name('admin-manajemen-pengguna');
    Route::get('/admin-update-data', [AdminController::class, 'getDataAPI'])->name('update-data');
    Route::get('/admin-hapus-pengguna/{id}', [UserController::class, 'destroy'])->name('admin-hapus-pengguna');
});
// ******* Halaman Admin *********

// ******* Halaman Config Environment *********
Route::middleware('auth')->group(function () {
    Route::get('/admin-environment', [EnvironmentController::class, 'index'])->name('admin-environment');
    // Route::get('/admin-tambah-environment', [EnvironmentController::class, 'create'])->name('admin-tambah-environment');
    // Route::post('/admin-simpan-environment', [EnvironmentController::class, 'store'])->name('admin-simpan-environment');
    // Route::get('/admin-edit-environment/{id}', [EnvironmentController::class, 'edit'])->name('admin-edit-environment');
    Route::post('/admin-update-environment/{id}', [EnvironmentController::class, 'update'])->name('admin-update-environment');
    Route::get('/admin-hapus-environment/{id}', [EnvironmentController::class, 'destroy'])->name('admin-hapus-environment');
});
// ******* Halaman Config Environment *********


// ******* Halaman Produk *********
Route::middleware('auth')->group(function () {
    Route::get('/admin-produk', [ProdukController::class, 'index'])->name('admin-produk');
    Route::get('/admin-tambah-produk', [ProdukController::class, 'create'])->name('admin-tambah-produk');
    Route::post('/admin-simpan-produk', [ProdukController::class, 'store'])->name('admin-simpan-produk');
    Route::get('/admin-edit-produk/{id}', [ProdukController::class, 'edit'])->name('admin-edit-produk');
    Route::post('/admin-update-produk/{id}', [ProdukController::class, 'update'])->name('admin-update-produk');
    Route::get('/admin-hapus-produk/{id}', [ProdukController::class, 'destroy'])->name('admin-hapus-produk');
});
// ******* Halaman Produk *********

// ******* Halaman Akomodasi *********
Route::middleware('auth')->group(function () {
    Route::get('/admin-akomodasi', [AkomodasiController::class, 'index'])->name('admin-akomodasi');
    Route::get('/admin-tambah-akomodasi', [AkomodasiController::class, 'create'])->name('admin-tambah-akomodasi');
    Route::post('/admin-simpan-akomodasi', [AkomodasiController::class, 'store'])->name('admin-simpan-akomodasi');
    Route::get('/admin-edit-akomodasi/{id}', [AkomodasiController::class, 'edit'])->name('admin-edit-akomodasi');
    Route::post('/admin-update-akomodasi/{id}', [AkomodasiController::class, 'update'])->name('admin-update-akomodasi');
    Route::get('/admin-hapus-akomodasi/{id}', [AkomodasiController::class, 'destroy'])->name('admin-hapus-akomodasi');
});
// ******* Halaman Akomodasi *********

// ******* Halaman Informasi *********
Route::middleware('auth')->group(function () {
    Route::get('/admin-kabar', [InformasiController::class, 'kabar'])->name('admin-kabar');
    Route::get('/admin-eduwisata', [InformasiController::class, 'eduwisata'])->name('admin-eduwisata');
    Route::get('/admin-tambah-informasi', [InformasiController::class, 'create'])->name('admin-tambah-informasi');
    Route::post('/admin-simpan-informasi', [InformasiController::class, 'store'])->name('admin-simpan-informasi');
    Route::get('/admin-edit-informasi/{id}', [InformasiController::class, 'edit'])->name('admin-edit-informasi');
    Route::post('/admin-update-informasi/{id}', [InformasiController::class, 'update'])->name('admin-update-informasi');
    Route::get('/admin-hapus-informasi/{id}', [InformasiController::class, 'destroy'])->name('admin-hapus-informasi');
});
// ******* Halaman Informasi *********

Route::get('/{id_desa}', [MainController::class, 'index'])->name('welcome');