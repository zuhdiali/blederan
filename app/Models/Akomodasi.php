<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Akomodasi extends Model
{
    use HasFactory;

    protected $table = 'akomodasis';

    protected $fillable = [
        'nama_akomodasi',
        'harga',
        'stok',
        'gambar_akomodasi',
        'nama_pemilik',
        'kontak_pemilik',
        'deskripsi'
    ];
}
