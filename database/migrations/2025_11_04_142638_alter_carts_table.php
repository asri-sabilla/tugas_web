<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('carts', function (Blueprint $table) {
            // rename kolom nama
            $table->renameColumn('nama', 'nama_lengkap');

            // tambah kolom kategori_baru (contoh)
            $table->text('kategori_baru')->after('nama_lengkap');

            // hapus tanggal_sampai
            $table->dropColumn('tanggal_sampai');
        });
    }

    public function down(): void
    {
        Schema::table('carts', function (Blueprint $table) {
            // balikin nama_lengkap -> nama
            $table->renameColumn('nama_lengkap', 'nama');

            // hapus kategori_baru
            $table->dropColumn('kategori_baru');

            // kembalikan tanggal_sampai
            $table->date('tanggal_sampai');
        });
    }
};
