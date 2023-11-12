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
        Schema::create('peminjaman', function (Blueprint $table) {
            $table->id();
            $table->string('tanggal_pinjam');
            $table->string('tanggal_kembali');
            $table->unsignedBigInteger('buku_id');
            $table->foreign('buku_id')->references('id')->on('buku');
            $table->unsignedBigInteger('anggota_id');
            $table->foreign('anggota_id')->references('id')->on('anggota');
            $table->unsignedBigInteger('petugas_id');
            $table->foreign('petugas_id')->references('id')->on('petugas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peminjaman');
    }
};
