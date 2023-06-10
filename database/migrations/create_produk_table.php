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
        Schema::create('produk', function (Blueprint $table) {
            $table->id('id');
            $table->string('nama', 100)->nullable();
            $table->string('harga', 100)->nullable();
            $table->string('gambar', 500)->nullable();
            $table->string('deskripsi', 500)->nullable();
            $table->string('jenis', 100)->nullable();
            $table->bigInteger('id_mitra')->comment('{"src":"mitra.id"}')->nullable();
            $table->timestamps();
        });
    }
    
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produk');
    }
};
