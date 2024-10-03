<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
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

Route::get('/produk', [MainController::class, 'produk'])->name('produk');
Route::get('/artikel', [MainController::class, 'artikel'])->name('artikel');
Route::get('/data', [MainController::class, 'data'])->name('data');
Route::get('/layout-artikel', [MainController::class, 'layoutArtikel'])->name('layout-artikel');

// ******* Artikel Statis *********
Route::get('/desa-cantik', [MainController::class, 'desaCantik'])->name('desa-cantik');
Route::get('/kampung-sayur', [MainController::class, 'kampungSayur'])->name('kampung-sayur');
Route::get('/penghargaan', [MainController::class, 'penghargaan'])->name('penghargaan');
Route::get('/santunan', [MainController::class, 'santunan'])->name('santunan');
// ******* Artikel Statis *********
