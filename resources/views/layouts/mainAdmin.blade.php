<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>@yield('title')</title>
</head>
<body>

<nav class="navbar navbar-expand-lg bg-dark">
  <div class="container">
    <a class="navbar-brand" href="#">
      <img src="/imagens/logo_menu.png" alt="Bootstrap" width="30" height="24">
    </a>

    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav ml-auto">
        <a class="nav-link text-white" href="/produto">Produtos</a>
        <a class="nav-link text-white" href="/admin">Reservas</a>
        @auth
    <form method="POST" action="/logout">
        @csrf
        <button type="submit" class="nav-link text-white" style="background: none; border: none; cursor: pointer;">Logout</button>
    </form>
    <span class="nav-link text-white">Bem-vindo, {{ Auth::user()->nome }}</span>
@endauth
</nav>

@yield('content')


<style>
    .fixarRodape {
        bottom: 0;
        position: fixed;
        width: 100%;
    }
</style>
<footer>
<footer class="bg-black text-center fixarRodape">
  <div class="container p-4 pb-0">
    <section class="mb-4">
      <a
      data-mdb-ripple-init
        class="btn text-white btn-floating m-1"
        style="background-color: #3b5998;"
        href="#!"
        role="button"
        ><i class="fab fa-facebook-f"></i
      ></a>

      <a
        data-mdb-ripple-init
        class="btn text-white btn-floating m-1"
        style="background-color: #55acee;"
        href="#!"
        role="button"
        ><i class="fab fa-twitter"></i
      ></a>

      <a
        data-mdb-ripple-init
        class="btn text-white btn-floating m-1"
        style="background-color: #ac2bac;"
        href="#!"
        role="button"
        ><i class="fab fa-instagram"></i
      ></a>

    </section>
  </div>
 
  <div class="text-center p-3 text-white" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2023 Copyright:
    <a class="text-white" href="/">Taverna do Bardo</a>
  </div>
</footer>
</body>

<script>  
  function formatar(mascara, documento) {
    let i = documento.value.length;
    let saida = '#';
    let texto = mascara.substring(i);
    while (texto.substring(0, 1) != saida && texto.length ) {
      documento.value += texto.substring(0, 1);
      i++;
      texto = mascara.substring(i);
    }
  }
</script>

</html>