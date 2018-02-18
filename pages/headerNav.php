<header class="container-fluid" id="encabezado">

    <!-- ENCABEZADO -->
    <nav class="navbar navbar-expand-md navbar-light bg-light fixed-top justify-content-between">

        <a href="/"><img src="/assets/img/icons/logo1.png" alt="No Limits" class="logo" ></a>

        <!-- MENU PRINCIPAL -->

        <div class="navbar navbar-expand-sm p-0" id="navbarNav" role="navigation">

            <ul class="navbar-nav d-none d-sm-flex">
                <li class="nav-item">
                    <a class="nav-link" href="/pages/noticias.php">Noticias</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/pages/comunidades.php">Comunidades</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/pages/enciclopedia.php">Enciclopedia</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/pages/login_form.php">Ingresar</a>
                </li>
            </ul>
        </div>

        <!-- BARRA DE BÚSQUEDA -->

        <button class="navbar-toggler navbar-toggler-right d-flex d-md-none" type="button" data-toggle="collapse" data-target="#navbarSearch" aria-controls="navbarSearch" aria-expanded="false" aria-label="Toggle search">
          <i class="fa fa-search" aria-hidden="true"></i>
        </button>

        <div class="collapse navbar-collapse col-12 col-md-4 col-xl-5" id="navbarSearch">
          <form class="form-inline my-0 w-100 justify-content-center justify-content-md-end" role="search">
            <input class="form-control border-top-0 border-left-0 border-right-0 col-9" type="search" placeholder="Buscar enfermedad">
            <button class="btn btn-outline-success my-2 my-sm-0 ml-2 col-2 col-sm-1 col-md-2 col-xl-1" type="submit">
              <i class="fa fa-search" aria-hidden="true"></i>
            </button>
          </form>
        </div>

    </nav>
</header>

<!-- MENÚ MÓVIL -->

<nav class="navbar-light bg-light fixed-bottom d-block d-sm-none" id="mobileMenu">
  <ul class="navbar-nav d-flex flex-row text-center">
    <li class="col nav-item">
      <a class="nav-link" href="/">
        <i class="fa fa-home fa-2x m-auto text-primary" aria-hidden="true"></i>
      </a>
    </li>
    <li class="col nav-item">
    <a class="nav-link" href="/pages/noticias.php">
      <i class="fa fa-newspaper-o fa-2x m-auto" aria-hidden="true"></i>
    </a>
  </li>
  <li class="col nav-item">
    <a class="nav-link" href="/pages/comunidades.php">
      <i class="fa fa-comments-o fa-2x m-auto" aria-hidden="true"></i>
    </a>
  </li>
  <li class="col nav-item">
    <a class="nav-link" href="/pages/enciclopedia.php">
      <i class="fa fa-book fa-2x m-auto" aria-hidden="true"></i>
    </a>
  </li>
  <li class="col nav-item">
    <a class="nav-link" href="/pages/login_form.php">
      <i class="fa fa-user-circle-o fa-2x m-auto" aria-hidden="true"></i>
    </a>
  </li>
</ul>
</nav>
