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
        Schema::create('transaksis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_user')->constrained('users_transaksi')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('id_staf')->constrained('stafs_transaksi')->references('id')->on('stafs')->onDelete('cascade')->onUpdate('cascade');
            $table->date('tanggal_transaksi');
            $table->string('status');
            $table->string('metode_pembayaran');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksis');
    }
};
