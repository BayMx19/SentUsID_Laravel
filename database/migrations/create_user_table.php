<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id('id');
            $table->string('email')->unique();
            $table->string('username');
            $table->string('password');
            $table->string('user_role');
            $table->string('alamat')->nullable();
            $table->string('notelp')->nullable();
            $table->string('deskripsi', 255)->nullable();
            $table->string('foto', 255)->nullable();
            $table->rememberToken('token')->nullable();
            $table->timestamp('created_at');
            $table->timestamp('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
