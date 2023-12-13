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
        Schema::create('mutasi_danas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_transaksi')->references('id')->on('transaksis')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('id_pengadaan')->references('id')->on('pengadaan_obats')->onDelete('cascade')->onUpdate('cascade');
            $table->string('detail_mutasi');
            $table->integer('saldo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mutasi__danas');
    }
};
