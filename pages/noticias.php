<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <?php
      include ('../src/View.php');
      View::render('head');
    ?>
    <link href="/assets/css/blog-post.css" rel="stylesheet">
    <title>No Limits - Noticias</title>
  </head>

  <body>

    <?php
      View::render('headerNav');
    ?>

    <!-- Page Content -->
    <div class="container mt-3 mb-5">

      <div class="row">

        <!-- Post Content Column -->
        <div class="col-lg-8">

          <!-- Title -->
          <h1 class="mt-4">Enfermedades raras, de alta incidencia en Chiapas</h1>

          <!-- Author -->
          <p class="lead">
            por
            <a href="#">William Chacón</a>
          </p>

          <hr>

          <!-- Date/Time -->
          <p>1 de Enero, 2017 a las 12:00 PM</p>

          <hr>

          <!-- Preview Image -->
          <img class="img-fluid rounded" src="/assets/img/new_44586.jpg" alt="">

          <hr>

          <!-- Post Content -->
          <p class="lead">Alexis González Hernández, de tan solo 4 años de edad fue diagnosticado con mucopolisacaridosis tipo 1 a los 12 meses de nacer, un padecimiento considerado en el grupo de enfermedades raras.</p>

          <p>Él y sus papás son originarios de la comunidad San Felipe, San Cristóbal de las Casas, donde según su abuelita, es el primer niño con este padecimiento.</p>
          <p>La madre del pequeño Alexis es Yesenia Aracely Hernández Pérez de 22 años de edad, quien con cierta melancolía platica que los doctores dicen que el padecimiento que le diagnosticaron es el más grave en su tipo, porque las otras se pueden controlar un poco más.</p>
          <blockquote class="blockquote">
            <p class="mb-0">“Al nacer le detectaron hernias, sus corneas eran opacas, su columna es bífida, su crecimiento es atípico… hasta ahora han controlado su enfermedad con los medicamentos que le administran aquí en el hospital pediátrico cada 15 días”.</p>
            <footer class="blockquote-footer">Alguien Famoso en
              <cite title="Source Title">Algún Lado</cite>
            </footer>
          </blockquote>
          <p>Aracely, dice que su hijo tiene otra hernia, pero no le han dicho si lo van a operar otra vez o que procederá, eso sí, asegura que los doctores y las enfermeras los tratan de maravilla, conviven con todos los pacientes y les explican cada detalle del padecimiento de su hijo y los posibles riesgos.</p>

        <hr>

          <!-- Comments Form -->
          <div class="card my-4">
            <h5 class="card-header">Deja un Comentario:</h5>
            <div class="card-body">
              <form>
                <div class="form-group">
                  <textarea class="form-control" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Enviar</button>
              </form>
            </div>
          </div>

          <!-- Single Comment -->
          <div class="media mb-4">
            <img class="d-flex mr-3 rounded-circle" src="/assets/img/u_1188512dd.png" alt="" style="width: 50px">
            <div class="media-body">
              <h5 class="mt-0">Braulio Mendoza</h5>
              Buen artículo.
            </div>
          </div>

          <!-- Comment with nested comments -->
          <div class="media mb-4">
            <img class="d-flex mr-3 rounded-circle" src="/assets/img/u_283988327.jpg" alt="" style="width: 50px">
            <div class="media-body">
              <h5 class="mt-0">Lorena Cruz</h5>
              Gracias a ustedes me entero de las últimas noticias.

              <div class="media mt-4">
                <img class="d-flex mr-3 rounded-circle" src="/assets/img/u_12168484d.jpg" alt="" style="width: 50px">
                <div class="media-body">
                  <h5 class="mt-0">María Caiche</h5>
                  Es cierto, es información super útil.
                </div>
              </div>

            </div>
          </div>

        </div>

        <!-- Sidebar Widgets Column -->
        <div class="col-md-4">

          <!-- Search Widget -->
          <div class="card my-4">
            <h5 class="card-header">Buscar</h5>
            <div class="card-body">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Buscar por...">
                <span class="input-group-btn">
                  <button class="btn btn-secondary" type="button">¡Ir!</button>
                </span>
              </div>
            </div>
          </div>

          <!-- Categories Widget -->
          <!-- <div class="card my-4">
            <h5 class="card-header">Categorías</h5>
            <div class="card-body">
              <div class="row">
                <div class="col-lg-6">
                  <ul class="list-unstyled mb-0">
                    <li>
                      <a href="#">Categoría 1</a>
                    </li>
                    <li>
                      <a href="#">Categoría 2</a>
                    </li>
                    <li>
                      <a href="#">Categoría 3</a>
                    </li>
                  </ul>
                </div>
                <div class="col-lg-6">
                  <ul class="list-unstyled mb-0">
                    <li>
                      <a href="#">Categoría 4</a>
                    </li>
                    <li>
                      <a href="#">Categoría 5</a>
                    </li>
                    <li>
                      <a href="#">Categoría 6</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div> -->

          <!-- Side Widget -->
          <!-- <div class="card my-4">
            <h5 class="card-header">Side Widget</h5>
            <div class="card-body">
              You can put anything you want inside of these side widgets. They are easy to use, and feature the new Bootstrap 4 card containers!
            </div>
          </div> -->

        </div>

      </div>
      <!-- /.row -->

    </div>


  </body>

</html>
