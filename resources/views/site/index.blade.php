@extends('layouts/main')

@section('title', 'Taverna do Bardo')

@section('content')

<nav class="navbar navbar-expand-lg bg-dark">
  <div class="container">
    <a class="navbar-brand" href="#">
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

<div id="carouselExampleIndicators" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://www.tavernamedieval.com.br/imagens/Pocoes_sem_alco.jpg" class="d-block w-100" alt="Poções">
    </div>
    <div class="carousel-item">
      <img src="https://www.tavernamedieval.com.br/imagens/RAGNAROK.jpg" class="d-block w-100" alt="masmorra">
    </div>
    <div class="carousel-item">
      <img src="https://www.tavernamedieval.com.br/imagens/Ogro_Paisagem.jpg" class="d-block w-100" alt="hamburquer">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>


@endsection