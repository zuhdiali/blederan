<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Informasi extends Model
{
    use HasFactory;

    protected $table = 'informasis';

    protected $fillable = [
        'judul',
        'instansi_terlibat',
        'jumlah',
        'tanggal',
        'kategori',
        'deskripsi',
        'gambar'
    ];
}
