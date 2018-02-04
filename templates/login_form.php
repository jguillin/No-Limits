<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="es">
	<head>

		<title>No Limits - Iniciar sesión</title>
		<link rel="stylesheet" type="text/css" href="/css/disenoInicioSesion.css">
    <?php
      View::render('head');
    ?>
	</head>
	<body>

    <?php
      View::render('headerNav');
    ?>

		<section class="text-center mt-5 mb-5 pt-4 pb-5">
			<div class="overlay"></div>
			<div class="container">
				<div class="row ">
					<form class="formulario col-10 col-md-6 mx-auto" action="/login_validation" method="POST">
						<h1 class="titulo">Inicio de sesión</h1>
						<input type="text" name="usuario" placeholder=" &#128100; Usuario" required autofocus >
						<br/>
						<input type="password" name="clave" placeholder=" &#128273; Contraseña" required>
						<br/><br/>
						<input class="acceder" type="submit" value="Iniciar sesión">
						<small id="emailHelp" class="form-text text-muted">¿No tienes cuenta?,
							<a href="/signup">Regístrate</a>.</small>
					</form>
				</div>
			</div>
		</section>


			<!-- Bootstrap core JavaScript -->
			<script src="/lib/jquery/jquery.min.js"></script>
			<script src="/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
	</body>
</html>
