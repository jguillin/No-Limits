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
    <title>No Limits - Comunidades</title>
  </head>

  <body>

      <?php
        View::render('headerNav');
      ?>

    <!-- Page Content -->

    <div class="container mt-5 mb-5 pt-5 pb-5">
      <div id="content-forum">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item" aria-current="page">Índice</li>
            <li class="breadcrumb-item" aria-current="page">Enfermedades</li>
            <li class="breadcrumb-item active" aria-current="page">Malaria</li>
          </ol>
        </nav>

        <div class="card mb-4">
          <div class="card-header">
            Todas las comunidades
          </div>
          <div class="card-body">
            <table class="table table-striped table-hover">
              <thead>
                <tr>
                  <th>Título</th>
                  <th>Estadísticas</th>
                  <th>Última respuesta</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">Discusión General</th>
                  <td>
                    <span>
                      33 Temas<br>
                      109 Respuestas
                    </span>
                  </td>
                  <td>
                    <span class="last-wrapper text-overflow">
                      <a href="#">Re: Respuesta del foro - …</a><br>
                      por&nbsp;<a href="#">Jollyllb</a>
				              <a href="#"><i class="mobile-post fa fa-sign-out"></i></a><br>
                      <span>Ayer, 13:55</span>
                    </span>
                  </td>
                </tr>
                <tr>
                  <th scope="row">Enfermedades sin diagnóstico</th>
                  <td>
                    <span>
                      33 Temas<br>
                      109 Respuestas
                    </span>
                  </td>
                  <td>
                    <span class="last-wrapper text-overflow">
                      <a href="#">Re: Respuesta de foro - …</a><br>
                      por&nbsp;<a href="#">Jollyllb</a>
				              <a href="#"><i class="mobile-post fa fa-sign-out"></i></a><br>
                      <span>Ayer, 13:55</span>
                    </span>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>

        <div class="card mb-4">
          <div class="card-header">
            Comunidades por enfermedad
          </div>
          <div class="card-body">
            <table class="table table-striped table-hover">
              <thead>
                <tr>
                  <th>Título</th>
                  <th>Estadísticas</th>
                  <th>Última respuesta</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">Acalasia</th>
                  <td>
                    <span>
                      33 Temas<br>
                      109 Respuestas
                    </span>
                  </td>
                  <td>
                    <span class="last-wrapper text-overflow">
                      <a href="#">Re: Respuesta del foro - …</a><br>
                      por&nbsp;<a href="#">Jollyllb</a>
                      <a href="#"><i class="mobile-post fa fa-sign-out"></i></a><br>
                      <span>Ayer, 13:55</span>
                    </span>
                  </td>
                </tr>
                <tr>
                  <th scope="row">Malaria</th>
                  <td>
                    <span>
                      33 Temas<br>
                      109 Respuestas
                    </span>
                  </td>
                  <td>
                    <span class="last-wrapper text-overflow">
                      <a href="#">Re: Respuesta de foro - …</a><br>
                      por&nbsp;<a href="#">Jollyllb</a>
                      <a href="#"><i class="mobile-post fa fa-sign-out"></i></a><br>
                      <span>Ayer, 13:55</span>
                    </span>
                  </td>
                </tr>
                <tr>
                  <th scope="row">Neurinoma del acústico</th>
                  <td>
                    <span>
                      33 Temas<br>
                      109 Respuestas
                    </span>
                  </td>
                  <td>
                    <span class="last-wrapper text-overflow">
                      <a href="#">Re: Respuesta de foro - …</a><br>
                      por&nbsp;<a href="#">Jollyllb</a>
                      <a href="#"><i class="mobile-post fa fa-sign-out"></i></a><br>
                      <span>Ayer, 13:55</span>
                    </span>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        </div>
        </div>


  </body>

</html>
