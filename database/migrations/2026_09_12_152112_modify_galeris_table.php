<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('galeris', function (Blueprint $table) {
            if (Schema::hasColumn('galeris', 'foto')) {
                $table->dropColumn('foto');
            }
        });

        if (!Schema::hasColumn('galeris', 'tanggal')) {
            Schema::table('galeris', function (Blueprint $table) {
                $table->date('tanggal')->nullable()->after('deskripsi');
            });
        }
    }

    public function down(): void
    {
        Schema::table('galeris', function (Blueprint $table) {
            if (Schema::hasColumn('galeris', 'tanggal')) {
                $table->dropColumn('tanggal');
            }

            if (!Schema::hasColumn('galeris', 'foto')) {
                $table->string('foto')->nullable()->after('id');
            }
        });
    }
};