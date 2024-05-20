<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListBarangController extends Controller
{
    function show($id, $produk)
    {
        return view('list_barang', ['id' => $id, 'produk' => $produk]);
    }
}
