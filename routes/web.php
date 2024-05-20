<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListProdukController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ListBarangController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/list_produk', [ListProdukController::class, 'show']);
Route::get('/home', [ListProdukController::class, 'show']);
Route::get('/list_barang', [ListBarangController::class, 'show']);