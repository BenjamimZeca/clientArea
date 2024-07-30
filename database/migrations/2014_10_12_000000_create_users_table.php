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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('apelido');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('telefone');
            $table->string('endereco');
            $table->string('pais');
            $table->string('cidade');
            $table->string('codigo_postal')->nullable();
            $table->string('empresa')->nullable();
            $table->string('nuit')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();
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
