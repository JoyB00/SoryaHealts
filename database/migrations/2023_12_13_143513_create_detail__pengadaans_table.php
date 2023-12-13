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
        Schema::create('detail_pengadaans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_pengadaian')->references('id')->on('pengadaan_obats')->onDelete('cascade');
            $table->foreignId('id_obat')->references('id')->on('obats')->onDelete('cascade');
            $table->integer('jumlah_obat');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail__pengadaans');
    }
};
