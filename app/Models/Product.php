<?php

namespace App\Models;

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['nome', 'descricao', 'preco', 'imagem', 'categoria_products_id'];

    public function categoria_products()
    {
        return $this->belongsTo(Categoria_product::class, 'categoria_products_id');
    }
}

