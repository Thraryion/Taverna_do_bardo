@extends('layouts/main')

@section('title', 'Taverna do Bardo')

@section('content')

<nav class="navbar navbar-expand-lg bg-dark">
  <div class="container">
    <a class="navbar-brand" href="/index">
      <img src="/imagens/logo_menu.png" alt="Bootstrap" width="30" height="24">
    </a>
  </div>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link text-white" href="/cardapio">Cardapio</a>
        <a class="nav-link text-white" href="/login">Login</a>
        <a class="nav-link text-white" href="/registro">registro</a>
      </div>
    </div>
</nav>

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