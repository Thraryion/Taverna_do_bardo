<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Categoria; 

class ProductController extends Controller
{

    public function store(Request $request){
        $products = new Product;
        $products->nome = $request->nome;
        $products->descricao = $request->descricao;
        $products->preco = $request->preco;
        $products->categoria_id = $request->categoria_id;
   
        if($request->hasFile('imagem') && $request->file('imagem')->isValid()){

            $requestImage = $request->imagem;
            $extension = $requestImage->extension();
            $imageName = md5($requestImage->getClientOriginalName().strtotime('now)')).
                ".".$extension;

            $requestImage->move(public_path('imagens/produtos'),$imageName);
            $products->imagem = $imageName;
        }
        $products->save();
        return redirect('/produtos')->with('msg', 'Produto Cadastrado com sucesso');
    }

    public function show(){
        $products = Product::all();
        return view('/site/admin/produtos',compact('products'));
    }

    public function edit($id)
{
    $product = Product::find($id);
    return view('/site/admin/editar-produtos', compact('product'));
}

public function update(Request $request, $id)
{
    $product = Product::find($id);
    $product->update($request->all());
    return redirect('/produtos')->with('success', 'Produto atualizado com sucesso!');
}

public function index()
    {
        $products = Product::all();
        return view('/site/admin/produtos', compact('products'));
    }

public function destroy($id)
    {
        $product = Product::find($id);

        if ($product) {
            $product->delete();
            return redirect('/produtos')->with('success', 'Produto excluído com sucesso!');
        }

        return redirect('/produtos')->with('error', 'Produto não encontrado.');
    }
}
