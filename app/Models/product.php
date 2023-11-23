<?php

namespace App\Models;

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['nome', 'descricao', 'preco', 'imagem', 'categoria_id'];

    public function categoria()
    {
        return $this->belongsTo(Categoria_product::class, 'categoria_id');
    }
}

