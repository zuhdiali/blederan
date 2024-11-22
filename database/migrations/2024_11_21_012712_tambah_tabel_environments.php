<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('environments', function (Blueprint $table) {
            $table->id();
            $table->string('nama_desa', 50);
            $table->string('id_desa', 6)->unique();
            $table->string('tagline', 100)->nullable();
            $table->string('gambar_logo');
            $table->string('warna_font_logo', 7)->default('#FFFFFF');
            $table->boolean('ada_sejarah')->default(0);
            $table->text('sejarah')->nullable();
            $table->boolean('ada_peta')->default(0);
            $table->text('peta')->nullable();
            $table->boolean('ada_publikasi')->default(0);
            $table->boolean('ada_akomodasi')->default(0);
            $table->boolean('ada_produk')->default(0);
            $table->boolean('ada_eduwisata')->default(0);
            $table->boolean('ada_jadwal')->default(0);
            $table->string('bg_utama')->default('bg_utama.jpg');
            $table->string('bg_kabar_1')->default('banner-01.jpg');
            $table->string('bg_kabar_2')->default('banner-02.jpg');
            $table->string('bg_kabar_3')->default('banner-03.jpg');
            $table->string('bg_kabar_4')->default('banner-04.jpg');
            $table->string('bg_data_kependudukan')->default('banner-01.jpg');
            $table->string('bg_data_perumahan')->default('banner-02.jpg');
            $table->string('bg_data_kesehatan')->default('banner-03.jpg');
            $table->string('bg_data_pendidikan')->default('banner-04.jpg');
            $table->string('facebook_username')->nullable();
            $table->string('instagram_username')->nullable();
            $table->string('twitter_username')->nullable();
            $table->string('youtube_username')->nullable();
            $table->string('facebook_url')->nullable();
            $table->string('instagram_url')->nullable();
            $table->string('twitter_url')->nullable();
            $table->string('youtube_url')->nullable();
            $table->string('maps_desa',600)->nullable();
            $table->string('maps_kantor_desa',600)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('environments');
    }
};
