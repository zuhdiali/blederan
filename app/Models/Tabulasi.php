<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tabulasi extends Model
{
    use HasFactory;

    protected $table = 'tabulasis';

    protected $fillable = [
        'id',
        'judul_tabel',
        'data',
        'tanggal',
        'kategori',
        'metadata'
    ];
}
