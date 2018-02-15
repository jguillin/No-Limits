<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="es">
	<head>

		<title>No Limits - Registro</title>
    <link rel="stylesheet" type="text/css" href="/css/disenoRegistro.css">
		<?php
			View::render('head');
		?>
	</head>

	<body>

		<?php
			View::render('headerNav');
		?>


		<div class="contenedor col-md-10 col-lg-8 col-xl-6 mt-5 mb-5 pt-4 pb-5">
		<h1 class="titulo-1"> Formulario de registro</h1>
			<form>
				<h1 class="titulo">Crea tu cuenta</h1>

				<div class="form-group">
					<label>Nombres:</label>
					<input type="text" name="nombresUsuario" id="registroUsuario" placeholder="Nombre" required style="padding-left: 10px; padding-right: 10px;">
				</div>
				<div class="form-group">
					<label for="registroApellido">Apellido:</label>
					<input type="text" name="apellidosUsuario" id="registroApellido" placeholder="Apellido" required style="padding-left: 10px; padding-right: 10px;">
				</div>
				<div class="form-group">
					<label for="registroNacimiento">Fecha de nacimiento:</label>
					<input name="diaNacimiento" id="registroNacimiento" placeholder="año-mes-día" required style="padding-left: 10px; padding-right: 10px;">
				</div>
				<div class="form-group">
					<label for="registroSexo">Sexo:</label>
					<select class="form-control" name="genero" id="registroSexo" required style="padding-left: 10px; padding-right: 10px;">
						<option value="">-</option>
						<option value="male">Hombre</option>
						<option value="female">Mujer</option>
					</select>
				</div>
				<div class="form-group">
					<label>Correo:</label>
					<input type="email" name="email" placeholder="usuario@ejemplo.com" required style="padding-left: 10px; padding-right: 10px;">
				</div>
				<div class="form-group">
					<label>Usuario:</label>
					<input type="text" name="usuario" placeholder="usuario" required style="padding-left: 10px; padding-right: 10px;">
				</div>
				<div class="form-group">
					<label>Contraseña:</label>
					<input type="password" name="clave" placeholder="**********" required style="padding-left: 10px; padding-right: 10px;">
				</div>
				<div class="form-group">
					<label>Confirmar contraseña:</label>
					<input type="password" name="confirmarclave" placeholder="**********" required style="padding-left: 10px; padding-right: 10px;">
				</div>

				<input class="registro" type="submit" value="Registrar">
				<small id="emailHelp" class="form-text text-muted">Si ya tienes una cuenta,
					<a href="/login">Inicia Sesión</a>.</small>

			</form>
		</div>



		<!-- Bootstrap core JavaScript -->
		<script src="../lib/jquery/jquery.min.js"></script>
		<script src="../lib/bootstrap/js/bootstrap.bundle.min.js"></script>
	</body>
</html>
