@extends('layouts/mainAdmin')

@section('title', 'Taverna do Bardo')

@section('content')

<div class="container">
    <h5 class="text-center border border-light">Cadastrar Produto</h5>

    <form method="POST" class="text-center border border-light p-3" action="{{ route('store') }}" enctype="multipart/form-data">
        @csrf

        <div class="mb-2">
            <label for="nome" class="form-label">Nome do Produto</label>
            <input type="text" name="nome" id="nome" class="form-control" required>
        </div>

        <div class="mb-2">
            <label for="descricao" class="form-label">Descrição</label>
            <textarea name="descricao" id="descricao" class="form-control" required></textarea>
        </div>

        <div class="mb-2">
            <label for="preco" class="form-label">Preço</label>
            <input type="text" name="preco" id="preco" class="form-control" required>
        </div>

        <div class="mb-2">
            <label for="imagem" class="form-label"">Imagem</label>
            <input type="file" name="imagem" id="imagem" class="form-control-file" required>
        </div>

        <div class="mb-2">
            <label for="categoria" class="form-label"">Categoria</label>
            <select name="categoria_id" id="categoria_id" class="form-control" required>
                <option value="1">Entrada</option>
                <option value="2">Hamburguer</option>
                <option value="3">Bebida</option>
                <option value="4">Milkshake</option>
                <option value="5">Sobremesa</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>

@endsection