<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('profil', function (Blueprint $table) {
            $table->id();

            $table->string('nama_sekolah');
            $table->text('sejarah')->nullable();
            $table->string('npsn')->nullable();
            $table->text('alamat')->nullable();
            $table->string('akreditasi')->nullable();
            $table->string('kabupaten')->nullable();

            $table->text('tentang')->nullable();
            $table->text('visi')->nullable();
            $table->text('misi')->nullable();
            $table->text('tujuan')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('profil');
    }
};