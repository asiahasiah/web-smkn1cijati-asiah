<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Jalankan migration.
     */
    public function up(): void
    {
        Schema::create('ekstrakurikuler', function (Blueprint $table) {
            $table->id();

            // Nama ekstrakurikuler
            $table->string('nama');

            // Deskripsi ekstrakurikuler
            $table->text('deskripsi');

            // Foto ekstrakurikuler
            $table->string('foto')->nullable();

            // Jadwal kegiatan
            $table->string('jadwal')->nullable();

            // Pembina ekstrakurikuler
            $table->string('pembina')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Membatalkan migration.
     */
    public function down(): void
    {
        Schema::dropIfExists('ekstrakurikuler');
    }
};