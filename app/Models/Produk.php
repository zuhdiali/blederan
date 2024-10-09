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
        'harga',
        'satuan',
        'stok',
        'url_gambar',
        'nama_penjual',
        'kontak_penjual',
        'deskripsi'
    ];
}
