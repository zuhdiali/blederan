<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\AkomodasiController;
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

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// ******* Halaman Utama *********
Route::get('/produk', [MainController::class, 'produk'])->name('produk');
Route::get('/artikel', [MainController::class, 'artikel'])->name('artikel');
// Route::get('/data', [MainController::class, 'data'])->name('data');
Route::get('/data2', [MainController::class, 'data2'])->name('data2');
Route::get('/test', [MainController::class, 'test'])->name('test');
Route::get('/test2', [MainController::class, 'test2'])->name('test2');
Route::get('/layout-artikel', [MainController::class, 'layoutArtikel'])->name('layout-artikel');
// ******* Halaman Utama *********

// ******* Artikel Statis *********
Route::get('/desa-cantik', [MainController::class, 'desaCantik'])->name('desa-cantik');
Route::get('/kampung-sayur', [MainController::class, 'kampungSayur'])->name('kampung-sayur');
Route::get('/penghargaan', [MainController::class, 'penghargaan'])->name('penghargaan');
Route::get('/santunan', [MainController::class, 'santunan'])->name('santunan');
// ******* Artikel Statis *********

// ******* User *********
Route::get('/login', [AdminController::class, 'login'])->name('login');
Route::post('/login', [AdminController::class, 'loginPost'])->name('login.post');
Route::get('/daftar', [AdminController::class, 'daftar'])->name('daftar')->middleware('auth');
Route::post('/daftar', [AdminController::class, 'daftarPost'])->name('daftar.post');
Route::get('/logout', [AdminController::class, 'logout'])->name('logout');
// ******* User *********

// ******* Halaman Admin *********
Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');
Route::get('/manajemen-pengguna', [UserController::class, 'index'])->name('manajemen-pengguna');
Route::get('/produk', [ProdukController::class, 'index'])->name('produk');
Route::get('/akomodasi', [AkomodasiController::class, 'index'])->name('akomodasi');
// ******* Halaman Admin *********