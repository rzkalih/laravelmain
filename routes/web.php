<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\perpustakaan;
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
Route::get('/', [perpustakaan::class, 'welcome'])->name('get_welcome');

Route::get('/anggota', [perpustakaan::class, 'anggota'])->name('get_anggota');

Route::get('/buku', [perpustakaan::class, 'buku'])->name('get_buku');

Route::get('/petugas', [perpustakaan::class, 'petugas'])->name('get_petugas');

