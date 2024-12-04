<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class Environment extends Model
{
    use HasFactory;

    protected $table = 'environments';

    protected $fillable = [
        'nama_desa',
        'nama_kecamatan',
        'id_desa',
        'tagline',
        'gambar_logo',
        'warna_font_logo',
        'ada_sejarah',
        'sejarah',
        'gambar_sejarah',
        'ada_peta',
        'peta',
        'gambar_peta',
        'ada_publikasi',
        'ada_akomodasi',
        'ada_produk',
        'ada_eduwisata',
        'ada_jadwal',
        'bg_utama',
        'bg_kabar_1',
        'bg_kabar_2',
        'bg_kabar_3',
        'bg_kabar_4',
        'bg_data_kependudukan',
        'bg_data_perumahan',
        'bg_data_kesehatan',
        'bg_data_pendidikan',
        'facebook_username',
        'instagram_username',
        'twitter_username',
        'youtube_username',
        'facebook_url',
        'instagram_url',
        'twitter_url',
        'youtube_url',
        'maps_desa',
        'maps_kantor_desa'
    ];
    
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'id_desa', 'id_desa');
    }
}
