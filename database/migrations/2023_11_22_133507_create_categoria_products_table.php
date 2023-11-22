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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('descricao');
            $table->decimal('preco', 10, 2); // Ajuste a precisão e a escala conforme necessário
            $table->string('imagem');
            $table->unsignedBigInteger('categoria_id');
            $table->timestamps();

            // Adicione a restrição de chave estrangeira após a criação da tabela
        });

        // Adicione a restrição de chave estrangeira aqui para evitar o erro
        Schema::table('products', function (Blueprint $table) {
            $table->foreign('categoria_id')->references('id')->on('categoria_products');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Remova a restrição de chave estrangeira antes de excluir a tabela
        Schema::table('products', function (Blueprint $table) {
            $table->dropForeign(['categoria_id']);
        });

        Schema::dropIfExists('products');
    }
};

