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
        Schema::create('tabulasis', function (Blueprint $table) {
            $table->id();
            $table->string('judul_tabel');
            $table->text('data');
            $table->timestamp('tanggal')->nullable();
            $table->tinyInteger('kategori')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produks');
    }
};