<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Categoria; 
class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    public function create()
    {
        $categorias = Categoria::all(); 
        return view('products.create', compact('categorias'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string',
            'descricao' => 'required|string',
            'preco' => 'required|numeric',
            'imagem' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'categoria_id' => 'required|exists:categorias,id',
        ]);

        $product = new Product();
        $product->fill($request->all());

        $imagem = $request->file('imagem');
        $nomeImagem = time() . '.' . $imagem->extension();
        $imagem->move(public_path('images'), $nomeImagem);
        $product->imagem = $nomeImagem;

        $product->save();

        return redirect()->route('products.index')->with('success', 'Produto criado com sucesso!');
    }

    public function edit(Product $product)
    {
        $categorias = Categoria::all();
        return view('products.edit', compact('product', 'categorias'));
    }

    public function update(Request $request, Product $product)
    {
        $request->validate([
            'nome' => 'required|string',
            'descricao' => 'required|string',
            'preco' => 'required|numeric',
            'categoria_id' => 'required|exists:categorias,id',
        ]);

        $product->update($request->all());

        return redirect()->route('products.index')->with('success', 'Produto atualizado com sucesso!');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index')->with('success', 'Produto deletado com sucesso!');
    }
}
