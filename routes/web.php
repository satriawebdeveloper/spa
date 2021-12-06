<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});



Route::middleware(['auth'])->group(function () {
    Route::get('/beranda', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/data-obat', function () {
        return view('data_obat');
    })->name('data-obat');

    Route::get('/data-obat-masuk', function () {
        return view('data_obat_masuk');
    })->name('data-obat-masuk');

    Route::get('/input-obat', function () {
        return view('input_obat');
    })->name('input-obat');

    Route::get('/manajemen-user', function () {
        return view('manajemen_user');
    })->name('manajemen_user');

    Route::get('/laporan', function () {
        return view('laporan');
    })->name('laporan');

    Route::get('/input-user', function () {
        return view('input_user');
    })->name('input-user');

    Route::get('/profil-user', function () {
        return view('profile_user');
    })->name('profil-user');
});
require __DIR__.'/auth.php';
