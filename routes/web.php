<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListProdukController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ListBarangController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/list_barang', [ListBarangController::class, 'show']);
Route::get('/produk', [ListProdukController::class, 'show']);
Route::get('/list_produk', [ListProdukController::class, 'simpan'])->name('produk.simpan');
Route::post('/list_produk', [ListProdukController::class, 'simpan'])->name('produk.simpan');
Route::delete('/list_produk/{id}', [ListProdukController::class, 'delete'])->name('produk.delete');