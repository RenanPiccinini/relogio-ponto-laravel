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
        Schema::create('compras', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 255);
            $table->string('descricao', 255);
            $table->string('preco', 255);
            $table->string('categoria_id', 255)->nullable();
            $table->string('subcategoria_id', 255)->nullable();
            $table->string('marca', 255);
            $table->string('tamanho', 255);
            $table->string('cor', 255);
            $table->text('imagem');
            $table->string('forma_pagamento', 255);
            $table->string('status_pagamento')->default('1');
            $table->string('IdTransaction', 190)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('compras');
    }
};