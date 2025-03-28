@extends('layouts/mainAdmin')

@section('title', 'Taverna do Bardo')

@section('content')

<div class="container">
        <h2>Lista de Produtos</h2>

        <a href="/registro-produtos" class="btn btn-success mb-3">Registrar Produto</a>

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Descrição</th>
                    <th>Preço</th>
                    <th>Categoria</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($products as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->nome }}</td>
                        <td>{{ $product->descricao }}</td>
                        <td>{{ $product->preco }}</td>
                        <td>{{ $product->categoria_id }}</td>
                        <td>
                            <a href="{{ route('edit', $product->id) }}" class="btn btn-warning">Editar</a>
                            
                            <form method="POST" action="{{ route('produtos.destroy', $product->id) }}" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Tem certeza que deseja excluir este produto?')">Deletar</button>
                            </form>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection