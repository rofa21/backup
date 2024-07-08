<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;

Route::get('/', function () {
    return view('layouts.master');
});

Route::get('/barang', [BarangController::class, 'index'])->name('barang.index');
Route::get('/barang/{id}', [BarangController::class, 'show'])->name('barang.show');

