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
        Schema::create('obats', function (Blueprint $table) {
            $table->id();
            $table->string('nama_obat');
            $table->string('deskripsi');
            $table->string('jenis_obat');
            $table->double('harga_obat');
            $table->integer('stok_obat');
            $table->string('kategori_obat');
            $table->string('dosis');
            $table->string('golongan_obat');
            $table->longText('gambar_obat');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('obats');
    }
};
