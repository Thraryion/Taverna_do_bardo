@extends('layouts/mainAdmin')

@section('title', 'Taverna do Bardo')

@section('content')

<div class="container">
        <h2>Editar Produto</h2>

        <form method="POST" action="{{ route('products.update', $product->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="nome">Nome do Produto</label>
                <input type="text" name="nome" id="nome" class="form-control" value="{{ old('nome', $product->nome) }}" required>
            </div>

            <div class="form-group">
                <label for="descricao">Descrição</label>
                <textarea name="descricao" id="descricao" class="form-control" required>{{ old('descricao', $product->descricao) }}</textarea>
            </div>

            <div class="form-group">
                <label for="preco">Preço</label>
                <input type="text" name="preco" id="preco" class="form-control" value="{{ old('preco', $product->preco) }}" required>
            </div>

            <div class="form-group">
                <label for="imagem">Imagem</label>
                <input type="file" name="imagem" id="imagem" class="form-control-file">
            </div>

            <div class="form-group">
                <label for="categoria_id">Categoria</label>
                <select name="categoria_id" id="categoria_id" class="form-control" required>
                    <option value="1" {{ old('categoria_id', $product->categoria_id) == 1 ? 'selected' : '' }}>Entrada</option>
                    <option value="2" {{ old('categoria_id', $product->categoria_id) == 2 ? 'selected' : '' }}>Hamburguer</option>
                    <option value="3" {{ old('categoria_id', $product->categoria_id) == 3 ? 'selected' : '' }}>Bebidas</option>
                    <option value="4" {{ old('categoria_id', $product->categoria_id) == 4 ? 'selected' : '' }}>MilkShakes</option>
                    <option value="5" {{ old('categoria_id', $product->categoria_id) == 5 ? 'selected' : '' }}>Sobremesas</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Atualizar Produto</button>
        </form>
    </div>

@endsection