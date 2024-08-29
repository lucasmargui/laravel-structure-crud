<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materials', function (Blueprint $table) {
            $table->id();  // Adiciona uma coluna 'id' auto-incrementável
            $table->string('name', 100);  // nome
            $table->string('type', 100);  // tipo
            $table->text('description');  // descricao
            $table->decimal('thickness', 5, 2);  // espessura
            $table->decimal('width', 5, 2);  // largura
            $table->decimal('height', 5, 2);  // altura
            $table->string('color', 50);  // cor
            $table->string('manufacturer', 100);  // fabricante
            $table->string('manufacturer_code', 50);  // codigo_fabricante
            $table->decimal('price', 10, 2);  // preco
            $table->timestamps();  // data_cadastro (created_at e updated_at)
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('materials');
    }
};
