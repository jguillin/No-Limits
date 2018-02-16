<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="es">
    <head>
      <?php
        View::render('head');
      ?>
      <title>No Limits - Inicio</title>
    </head>

    <body>

        <?php
          View::render('headerNav');
        ?>

        <!-- Masthead -->
        <header class="masthead text-white text-center mt-5">
          <div class="overlay"></div>
          <div class="container">
            <div class="row">
              <div class="col-xl-6 mx-auto">
                <h1 class="mb-5">¡No estás solo, aquí siempre estamos para apoyarte!</h1>
              </div>
              <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
                <form>
                  <div class="form-row">
                    <!-- <div class="col-12 col-md-9 mb-2 mb-md-0">
                      <input type="email" class="form-control form-control-lg" placeholder="Buscar">
                    </div> -->
                    <div class="col-12 ">
                      <a class="btn btn-lg btn-outline-primary" href="/pages/signup_form.php">¡Regístrate ya!</a>
                      <!-- <button type="submit" class="btn btn-lg btn-success d-inline d-sm-none">XS</button>
                      <button type="submit" class="btn btn-lg btn-success d-none d-sm-inline d-md-none">SM</button>
                      <button type="submit" class="btn btn-lg btn-success d-none d-md-inline d-lg-none">MD</button>
                      <button type="submit" class="btn btn-lg btn-success d-none d-lg-inline d-xl-none">LG</button>
                      <button type="submit" class="btn btn-lg btn-success d-none d-xl-inline">XL</button> -->
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </header>

        <!-- Icons Grid -->
        <section class="features-icons bg-light text-center">
          <div class="container">
            <div class="row">
              <div class="col-lg-4">
                <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                  <div class="features-icons-icon d-flex">
                    <i class="icon-book-open m-auto text-primary"></i>
                  </div>
                  <h3>Enciclopedia</h3>
                  <p class="lead mb-0">Una basta selección de información sobre enfermedades raras a tu disposición.<br><br><a href="#">Ver más...</a></p>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                  <div class="features-icons-icon d-flex">
                    <i class="icon-bubbles m-auto text-primary"></i>
                  </div>
                  <h3>Foro</h3>
                  <p class="lead mb-0">Pregunta y responde sobre todas las dudas que tengas.<br><br><a href="#">Ver más...</a></p>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="features-icons-item mx-auto mb-0 mb-lg-3">
                  <div class="features-icons-icon d-flex">
                    <i class="icon-directions m-auto text-primary"></i>
                  </div>
                  <h3>Recursos</h3>
                  <p class="lead mb-0">Enlaces a centros de ayuda especializada y más información.<br><br><a href="#">Ver más...</a></p>
                </div>
              </div>
            </div>
          </div>
        </section>

        <!-- Image Showcases -->
        <section class="showcase">
          <div class="container-fluid p-0">
            <div class="row no-gutters">

              <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('/assets/img/bg-showcase-1.jpg');"></div>
              <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                <h2>Comunidad de enfermedades #1 en latinoamérica</h2>
                <p class="lead mb-0">Hay aproximadamente 7,000 tipos diferentes de enfermedades y desórdenes raros, y se descubren más cada día</p>
              </div>
            </div>
            <div class="row no-gutters">
              <div class="col-lg-6 text-white showcase-img" style="background-image: url('/assets/img/bg-showcase-2.jpg');"></div>
              <div class="col-lg-6 my-auto showcase-text">
                <!-- <h2>Updated For Bootstrap 4</h2>
                <p class="lead mb-0">Newly improved, and full of great utility classes, Bootstrap 4 is leading the way in mobile responsive web development! All of the themes on Start Bootstrap are now using Bootstrap 4!</p> -->
              </div>
            </div>
            <div class="row no-gutters">
              <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('/assets/img/bg-showcase-3.jpg');"></div>
              <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                <!-- <h2>Easy to Use &amp; Customize</h2>
                <p class="lead mb-0">Landing Page is just HTML and CSS with a splash of SCSS for users who demand some deeper customization options. Out of the box, just add your content and images, and your new landing page will be ready to go!</p> -->
              </div>
            </div>
          </div>
        </section>

        <!-- Información -->
        <section id="about" class="testimonials text-center bg-light">
          <div class="container">
            <h2 class="mb-5">Aquí podrás encontrar...</h2>
            <div class="row">
              <div class="col-lg-4">
                <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                  <img class="img-fluid rounded-circle mb-3" src="/assets/img/medicamentos.jpg" alt="">
                  <h5>Medicamentos</h5>
                  <p class="font-weight-light mb-0">Podrás encontrar los medicamentos que estás buscando.</p>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                  <img class="img-fluid rounded-circle mb-3" src="/assets/img/avances.jpg" alt="">
                  <h5>Avances Medicinales</h5>
                  <p class="font-weight-light mb-0">Últimos avances en medicia para enfermedades no comunes.</p>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                  <img class="img-fluid rounded-circle mb-3" src="/assets/img/investigaciones.jpg" alt="">
                  <h5>Investigaciones</h5>
                  <p class="font-weight-light mb-0">Enfermedades en investigaciones.</p>
                </div>
              </div>
            </div>
          </div>
        </section>

        <!-- Call to Action -->
        <section class="call-to-action text-white text-center">
          <div class="overlay"></div>
          <div class="container">
            <div class="row">
              <div class="col-xl-9 mx-auto">
                <h2 class="mb-4">¿Quieres buscar un medicamento? ¡Regístrate ya!</h2>
              </div>
              <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
                <form>
                  <div class="form-row">
                    <div class="col-12 col-md-9 mb-2 mb-md-0">
                      <input type="email" class="form-control form-control-lg" placeholder="Ingresa tu correo">
                    </div>
                    <div class="col-12 col-md-3">
                      <button type="submit" class="btn btn-lg btn-success">¡Únete a nosotros!</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </section>

        <!-- Footer -->
        <footer class="footer bg-light">
          <div class="container">
            <div class="row">
              <div class="col-lg-6 h-100 text-center text-lg-left my-auto">
                <!-- <ul class="list-inline mb-2">
                  <li class="list-inline-item">
                    <a href="#">Acerca de</a>
                  </li>
                  <li class="list-inline-item">&sdot;</li>
                  <li class="list-inline-item">
                    <a href="#">Contacto</a>
                  </li>
                  <li class="list-inline-item">&sdot;</li>
                  <li class="list-inline-item">
                    <a href="#">Términos de uso</a>
                  </li>
                  <li class="list-inline-item">&sdot;</li>
                  <li class="list-inline-item">
                    <a href="#">Políticas de privacidad</a>
                  </li>
                </ul> -->
                <p class="text-muted small mb-4 mb-lg-0">&copy; No Limits 2017. Todos los derechos reservados.</p>
              </div>
              <div class="col-lg-6 h-100 text-center text-lg-right my-auto">
                <ul class="list-inline mb-0">
                  <li class="list-inline-item mr-3">
                    <a href="#">
                      <i class="fa fa-facebook fa-2x fa-fw"></i>
                    </a>
                  </li>
                  <li class="list-inline-item mr-3">
                    <a href="#">
                      <i class="fa fa-twitter fa-2x fa-fw"></i>
                    </a>
                  </li>
                  <li class="list-inline-item">
                    <a href="#">
                      <i class="fa fa-instagram fa-2x fa-fw"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </footer>

    </body>

</html>
