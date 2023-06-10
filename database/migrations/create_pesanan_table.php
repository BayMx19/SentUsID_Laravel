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
            $table->id('id');
            $table->bigInteger('id_user')->comment('{"src":"user.id"}')->nullable();
            $table->bigInteger('id_produk')->comment('{"src":"produk.id"}')->nullable();
            $table->bigInteger('id_cart')->comment('{"src":"cart.id"}')->nullable();
            $table->timestamp('waktu_pesanan')->nullable();
            $table->string('status', 255)->nullable();
            $table->string('total', 255)->nullable();
            $table->string('file', 255)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pesanan');
    }
};
