<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('mitra', function (Blueprint $table) {
            $table->id('id_mitra');
            $table->string('nama_mitra')->nullable();
            $table->string('email')->unique()->nullable();
            $table->string('alamat_mitra')->nullable();
            $table->string('no_telp_mitra')->nullable();
            
            $table->timestamp('tanggal_daftar')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('tanggal_selesai')->nullable();
            $table->string('status_mitra', 255);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('password_resets');
    }
};
