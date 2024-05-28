<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;
    protected $table = 'tblproduk';
    public $timestamps = false;

    // Menentukan kolom yang bisa diisi secara massal
    protected $fillable = [
        'nama',
        'deskripsi',
        'harga'
    ];

    // Menentukan tipe data kolom yang di-cast
    protected $casts = [
        'harga' => 'decimal:2',
    ];
}
