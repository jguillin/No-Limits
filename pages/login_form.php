<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<title>No Limits - Iniciar sesión</title>
		<link rel="stylesheet" type="text/css" href="/assets/css/disenoInicioSesion.css">
    <?php
      include ('../src/View.php');
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
					<form class="formulario col-10 col-md-6 mx-auto" action="/src/login_validation.php" method="POST">
						<h1 class="titulo">Inicio de sesión</h1>
						<input type="text" name="username" placeholder=" &#128100; Usuario" required autofocus style="padding-left: 10px; padding-right: 10px;">
						<br/>
						<input type="password" name="password" placeholder=" &#128273; Contraseña" required style="padding-left: 10px; padding-right: 10px;">
						<br/><br/>
						<input class="acceder" type="submit" value="Iniciar sesión">
						<small id="emailHelp" class="form-text text-muted">¿No tienes cuenta?,
							<a href="/pages/signup_form.php">Regístrate</a>.</small>
					</form>
				</div>
			</div>
		</section>

	</body>
</html>
