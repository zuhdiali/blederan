<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    protected $table = 'produks';

    protected $fillable = [
        'nama_produk',
        'id_desa',
        'harga',
        'satuan',
        'stok',
        'gambar_produk',
        'nama_penjual',
        'kontak_penjual',
        'deskripsi'
    ];
}
