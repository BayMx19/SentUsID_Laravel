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
        Schema::create('pesanan', function (Blueprint $table) {
            $table->id('id_pesanan');

            $table->bigInteger('id_user')->unsigned();
            // $table->foreign('id_user')->references('id')->on('users');

            $table->bigInteger('id_produk')->unsigned();
            // $table->foreign('id_produk')->references('id')->on('produk');

            $table->bigInteger('id_mitra')->unsigned();
            // $table->foreign('id_mitra')->references('id')->on('mitra');

            $table->timestamp('waktu_pesanan')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->string('status', 255);
            $table->decimal('harga_total', $precision = 8, $scale = 2);
            $table->string('file', 255);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personal_access_tokens');
    }
};
