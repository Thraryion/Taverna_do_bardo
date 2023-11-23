<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $fillable = ['nome'];

    public function products()
    {
        return $this->hasMany(Product::class, 'categoria_id');
    }
}

