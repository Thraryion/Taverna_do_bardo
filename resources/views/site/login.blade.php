@extends('layouts/main')

@section('title', 'Taverna do Bardo')

@section('content')

    <form method="POST" class="text-center border border-light p-5" action="{{ url('/login') }}">
    @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Senha</label>
            <input type="password" class="form-control" id="senha" name="senha" required>
        </div>
        <button type="submit" class="btn btn-primary">Entrar</button>
    </form>


@endsection