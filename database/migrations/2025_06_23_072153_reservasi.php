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
            $table->string('name');
            $table->string('nim');
            $table->string('email');
            $table->string('no');
            $table->string('ruang');
            $table->date('tgl');
            $table->time('waktu_mulai');
            $table->time('waktu_selesai');
            $table->text('deskripsi');
            $table->boolean('status')->nullable();
            $table->timestamps(); // ini akan buat created_at dan updated_at

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
