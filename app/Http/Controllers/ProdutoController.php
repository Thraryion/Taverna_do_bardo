<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Categoria; 

class ProductController extends Controller
{

    private $id;
    private $nome;
    private $descricao;
    private $preco;
    private $categoria_products_id;

    public function show($id){
        $this->id = new id;
        $this->nome = new nome;
        $this->descricao = new descricao;
        $this->preco = new preco;
        $this->categoria_products_id = new categoria_products_id;
    }
}
