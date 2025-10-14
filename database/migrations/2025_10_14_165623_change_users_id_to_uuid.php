<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            // Hapus kolom id lama
            $table->dropColumn('id');
        });

        Schema::table('users', function (Blueprint $table) {
            // Tambahkan kolom id baru bertipe UUID
            $table->uuid('id')->primary()->first();
        });
    }

    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('id');
            $table->bigIncrements('id')->first();
        });
    }
};
