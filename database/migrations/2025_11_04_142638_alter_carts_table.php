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
        Schema::table('carts', function (Blueprint $table) {
            $table->renameColumn('nama','nama_lengkap');
            $table->text('kategori')->after('cluster');
            $table->dropColumn('tanggal_sampai');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('carts', function (Blueprint $table) {
            $table->renameColumn('nama_lengkap','nama');
            $table->text('kategori');
        });
    }
};
