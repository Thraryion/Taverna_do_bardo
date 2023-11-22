@extends('layouts/main')

@section('title', 'Taverna do Bardo')

@section('content')

<nav class="navbar bg-body-tertiary">
  <div class="container">
    <a class="navbar-brand" href="#">
      <img src="/imagens/logo_menu.png" alt="Bootstrap" width="30" height="24">
    </a>
  </div>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link" href="/cardapio">Cardapio</a>
        <a class="nav-link" href="/login">Login</a>
        <a class="nav-link" href="/registro">registro</a>
      </div>
    </div>
</nav>


@endsection