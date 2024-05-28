<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class ListProdukController extends Controller
{
    public function show()
    {
        $data = Produk::get();
        $nama = [];
        $desc = [];
        $harga = [];
        $id = [];

        foreach ($data as $produk) {
            $nama[] = $produk->nama;
            $desc[] = $produk->deskripsi;
            $harga[] = $produk->harga;
            $id[] = $produk->id;
        }
        return view('list_produk', compact('nama', 'desc', 'harga', 'id'));
    }

    public function simpan(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'harga' => 'required|numeric',
        ]);

        $produk = new Produk;
        $produk->nama = $request->input('nama');
        $produk->deskripsi = $request->input('deskripsi');
        $produk->harga = $request->input('harga');
        $produk->save();

        return redirect()->back()->with('success', 'Data berhasil disimpan !');
    }

    public function delete($id)
    {
        \Log::info("Deleting product with ID: " . $id);

        $produk = Produk::find($id);
        if ($produk) {
            $produk->delete();
            return redirect()->back()->with('success', 'Produk Berhasil Dihapus.');
        } else {
            return redirect()->back()->with('error', 'Produk Tidak ditemukan.');
        }
    }
}
