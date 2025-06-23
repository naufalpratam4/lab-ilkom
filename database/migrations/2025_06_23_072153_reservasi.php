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
        Schema::create('reservasi', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->bigInteger('NIM/NIP');
            $table->string('email');
            $table->bigInteger('no');
            $table->string('Ruang');
            $table->date('tgl');
            $table->time('waktu_mulai');
            $table->time('waktu_selesai');
            $table->text('deskripsi');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservasi');
    }
};
