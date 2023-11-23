@extends('layouts/main')

@section('title', 'Taverna do Bardo')

@section('content')

<form method="POST" class="text-center border border-light p-5" action="/cadastrar-usuario">
@csrf
<div class="mb-2">
    <label for="nome" class="form-label">Nome</label>
    <input type="text" class="form-control" id="nome" name="nome">
  </div>
  <div class="mb-2">
    <label for="cpf" class="form-label">CPF</label>
    <input type="text" class="form-control" id="cpf" name="cpf" maxlength="14" OnKeyPress="formatar('###.###.###-##',this)">
  </div>
  <div class="mb-2">
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control" id="email" name="email">
  </div>
  <div class="mb-2">
    <label for="senha" class="form-label">Senha</label>
    <input type="password" class="form-control" id="senha" name="senha">
  </div>
  <div class="mb-2">
    <label for="senha" class="form-label">Confirmar Senha</label>
    <input type="password" class="form-control" id="confirmasenha" name="senha_confirmation">
  </div>
  <button type="submit" class="btn btn-primary">Enviar</button>
</form>


@endsection