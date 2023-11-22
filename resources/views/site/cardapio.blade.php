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



@endsection