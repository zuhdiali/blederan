<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    use HasFactory;

    protected $table = 'artikels';

    protected $fillable = [
        'judul',
        'penulis',
        'tanggal',
        'text1',
        'gambar1',
        'text2',
        'gambar2',
        'text3',
        'gambar3'
    ];
}
