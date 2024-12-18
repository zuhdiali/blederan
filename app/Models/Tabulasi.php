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
        'id_desa',
        'judul_tabel',
        'data',
        'id_table',
        'tanggal',
        'kategori',
        'highlight',
        'metadata'
    ];
}
