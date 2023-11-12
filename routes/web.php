<?php

use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\BukuContoller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RakController;
use App\Http\Controllers\PeminjamanController;
use App\Models\Anggota;
use App\Models\Peminjaman;

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

Route::controller(AuthController::class)->group(function () {
    Route::get('/log', 'log')->name('auth.log');
    Route::post('/store', 'store')->name('auth.store');
    Route::post('/authentication', 'authentication')->name('auth.authentication');
    Route::post('/logout', 'logout')->name('auth.logout');
    Route::get('/welcome', 'welcome')->name('welcome');
});



Route::get('/', function () {
    return view('auth.log');
});


Route::resource('/rak', RakController::class);

Route::resource('/peminjaman', PeminjamanController::class);

Route::resource('/anggota', AnggotaController::class);

Route::resource('/buku', BukuContoller::class);

Route::resource('/petugas', PetugasController::class);
