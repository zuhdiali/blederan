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
           Schema::create('akomodasis', function (Blueprint $table) {
               $table->id();
               $table->string('nama_akomodasi');
               $table->bigInteger('harga');
               $table->integer('stok');
               $table->string('gambar_produk')->nullable();
               $table->string('nama_pemilik', 50)->nullable();
               $table->string('kontak_pemilik', 50)->nullable();
               $table->text('deskripsi')->nullable();
               $table->timestamps();
           });
       }
   
       /**
        * Reverse the migrations.
        */
       public function down(): void
       {
           Schema::dropIfExists('akomodasis');
       }
   };