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
        Schema::create('daftar_pakets', function (Blueprint $table) {
            $table->id();
            $table->string('nama_paket');
            $table->string('id_paket_wisata');
            $table->integer('jumlah_peserta');
            $table->string('harga_paket');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('daftar_pakets');
    }
};
