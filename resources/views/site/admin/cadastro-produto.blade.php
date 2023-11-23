@extends('layouts/mainAdmin')

@section('title', 'Taverna do Bardo')

@section('content')

<div class="container">
        <h2>Cadastrar Produto</h2>

        <form method="POST" action="{{ route('products.store') }}" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="nome">Nome do Produto</label>
                <input type="text" name="nome" id="nome" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="descricao">Descrição</label>
                <textarea name="descricao" id="descricao" class="form-control" required></textarea>
            </div>

            <div class="form-group">
                <label for="preco">Preço</label>
                <input type="text" name="preco" id="preco" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="imagem">Imagem</label>
                <input type="file" name="imagem" id="imagem" class="form-control-file" required>
            </div>

<div class="form-group">
    <label for="categoria_id">Categoria</label>
    <select name="categoria_id" id="categoria_id" class="form-control" required>
        <option value="1">Entrada</option>
        <option value="2">Hamburguer</option>
        <option value="3">Bebida</option>
        <option value="4">Milkshake</option>
        <option value="5">Sobremesa</option>
    </select>
</div>

@endsection