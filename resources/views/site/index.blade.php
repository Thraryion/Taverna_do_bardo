@extends('layouts/main')

@section('title', 'Taverna do Bardo')

@section('content')

<div id="carouselExampleIndicators" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://www.tavernamedieval.com.br/imagens/Pocoes_sem_alco.jpg" class=".img-fluid" alt="Poções">
    </div>
    <div class="carousel-item">
      <img src="https://www.tavernamedieval.com.br/imagens/RAGNAROK.jpg" class=".img-fluid" alt="masmorra">
    </div>
    <div class="carousel-item">
      <img src="https://www.tavernamedieval.com.br/imagens/Ogro_Paisagem.jpg" class=".img-fluid" alt="hamburquer">
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