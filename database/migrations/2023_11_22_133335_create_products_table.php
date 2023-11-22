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
            $table->decimal('preco', 10, 2);
            $table->string('imagem');
            $table->unsignedBigInteger('categoria_id');
            $table->timestamps();
        });

        if (Schema::hasTable('categoria_products')) {
            Schema::table('products', function (Blueprint $table) {
                $table->foreign('categoria_id')->references('id_categoria_products')->on('categoria_products');
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropForeign(['categoria_id']);
        });

        Schema::dropIfExists('products');
    }
};
