<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        \App\Models\Environment::create([
            'nama_desa' => 'Blederan',
            'kode_desa' => '110014',
            'tagline' => 'Kampung Sayur Organik',
            'gambar_logo' => 'logo_blederan.svg',
            'gambar_logo_dan_nama' => 'logo_blederan_dan_nama.png',
            'ada_profil' => 1,
            'ada_sejarah' => 1,
            'ada_peta' => 1,
            'ada_publikasi' => 1,
            'ada_akomodasi' => 0,
            'ada_produk' => 1,
            'ada_eduwisata' => 1,
            'ada_jadwal' => 1,
            'bg_utama' => 'bg-blederan-1.jpg',
            'bg_kabar_1' => 'bg-blderan-2.jpg',
            'bg_kabar_2' => 'bg-blderan-1.jpg',
            'bg_kabar_3' => 'bg-blderan-2.jpg',
            'bg_kabar_4' => 'bg-blderan-1.jpg',
            'bg_data_kependudukan' => 'bg-blderan-2.jpg',
            'bg_data_perumahan' => 'bg-blderan-1.jpg',
            'bg_data_kesehatan' => 'bg-blderan-2.jpg',
            'bg_data_pendidikan' => 'bg-blderan-1.jpg',
            'facebook_username' => 'Pesona Blederan',
            'instagram_username' => 'desa_blederan',
            'twitter_username' => 'Desa Blederan',
            'youtube_username' => '',
            'facebook_url' => 'https://www.facebook.com/pesona.blederan',
            'instagram_url' => 'https://www.instagram.com/desa_blederan?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==',
            'twitter_url' => 'https://x.com/DBlederan',
            'youtube_url' => '',
            'maps_desa' => "<iframe src='https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7914.758709209982!2d109.90955559484267!3d-7.3112100207867865!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e700a91c52ab135%3A0x2507636147492a01!2sBlederan%2C%20Kec.%20Mojotengah%2C%20Kabupaten%20Wonosobo%2C%20Jawa%20Tengah!5e0!3m2!1sid!2sid!4v1728960130020!5m2!1sid!2sid' width='100%' height='550px' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>",
            'maps_kantor_desa' => "<iframe src='https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5596.571297101213!2d109.91171212253252!3d-7.311868896386512!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e700a8e33f22365%3A0xd8a8af392da67ea3!2sBalai%20Desa%20%2F%20Kantor%20Kepala%20Desa%20Blederan!5e0!3m2!1sen!2sid!4v1727836245361!5m2!1sen!2sid' width='100%' height='550px' style='border:0; border-radius: 23px; ' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>",
        ]);

    \App\Models\Environment::create([
        'nama_desa' => 'Dummy',
        'kode_desa' => 'dummy',
        'tagline' => 'Tagline Dummy',
        'gambar_logo' => 'dummy.jpg',
        'gambar_logo_dan_nama' => 'dummy.jpg',
        'ada_profil' => 1,
        'profil' => 'Profil Dummy',
        'ada_sejarah' => 1,
        'sejarah' => 'Sejarah Dummy',
        'ada_peta' => 1,
        'peta' => 'Peta Dummy',
        'ada_publikasi' => 1,
        'ada_akomodasi' => 1,
        'ada_produk' => 1,
        'ada_eduwisata' => 1,
        'ada_jadwal' => 1,
        'bg_utama' => 'dummy.jpg',
        'bg_kabar_1' => 'dummy.jpg',
        'bg_kabar_2' => 'dummy.jpg',
        'bg_kabar_3' => 'dummy.jpg',
        'bg_kabar_4' => 'dummy.jpg',
        'bg_data_kependudukan' => 'dummy.jpg',
        'bg_data_perumahan' => 'dummy.jpg',
        'bg_data_kesehatan' => 'dummy.jpg',
        'bg_data_pendidikan' => 'dummy.jpg',
        'facebook_username' => 'dummy',
        'instagram_username' => 'dummy',
        'twitter_username' => 'dummy',
        'youtube_username' => 'dummy',
        'facebook_url' => 'https://facebook.com/dummy',
        'instagram_url' => 'https://instagram.com/dummy',
        'twitter_url' => 'https://twitter.com/dummy',
        'youtube_url' => 'https://youtube.com/dummy',
        'maps_desa' => 'https://maps.google.com/maps?q=-7.2769,112.7916',
        'maps_kantor_desa' => 'https://maps.google.com/maps?q=-7.2769,112.7916',
    ]);
    }
}
