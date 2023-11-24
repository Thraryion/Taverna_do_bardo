<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Categoria; 

class ProdutoController extends Controller
{

    public function store(Request $request){
        $products = new Produto;
        $products->nome = $request->nome;
        $products->descricao = $request->descricao;
        $products->preco = $request->preco;
        $products->categoria_id = $request->categoria_products_id;
   
        if($request->hasFile('imagem') && $request->file('imagem')->isValid()){

            $requestImage = $request->image;
            $extension = $requestImage->extension();
            $imageName = md5($requestImage->getClientOriginalName().strtotime('now)')).
                ".".$extension;

            $requestImage->move(public_path('imagens/produtos'),$imageName);
            $products->imagem = $imageName;
        }
        $event->save();
        return redirect('/produtos')->with('msg', 'Produto Cadastrado com sucesso');
    }

    public function show(){
        $products = product::all();
        return view('show',compact('products'));
    }
}
