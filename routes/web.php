<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\SuratMasukController;
use App\Http\Controllers\SuratKeluarController;

Route::middleware('guest')->group(function () {
    Route::get('/login', [LoginController::class, 'showLoginForm'])
        ->name('login');
    Route::post('/login', [LoginController::class, 'login'])
        ->name('login.submit');
});

Route::middleware('auth')->group(function () {
    Route::get('/', fn () => view('dashboard'))->name('dashboard');
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

    // 1. SURAT MASUK: Letakkan except(['index', 'show']) DI ATAS only(['index', 'show'])
    Route::resource('surat-masuk', SuratMasukController::class)
        ->except(['index', 'show'])
        ->parameters(['surat-masuk' => 'id'])
        ->middleware('can:manage-letters');

    Route::resource('surat-masuk', SuratMasukController::class)
        ->only(['index', 'show'])
        ->parameters(['surat-masuk' => 'id']);

    // 2. SURAT KELUAR: Terapkan urutan yang sama sesuai Latihan Mandiri P5
    Route::resource('surat-keluar', SuratKeluarController::class)
        ->except(['index', 'show'])
        ->parameters(['surat-keluar' => 'id'])
        ->middleware('can:manage-letters');

    Route::resource('surat-keluar', SuratKeluarController::class)
        ->only(['index', 'show'])
        ->parameters(['surat-keluar' => 'id']);
});
