@extends('layouts/main')

@section('title', 'Taverna do Bardo')

@section('content')

<nav class="navbar navbar-expand-lg bg-dark">
  <div class="container">
    <a class="navbar-brand" href="/">
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

    <form method="POST" class="text-center border border-light p-5" action="../controller/login_handle.php">
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