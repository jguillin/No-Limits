<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<title>No Limits - Registro</title>
    <link rel="stylesheet" type="text/css" href="/assets/css/disenoRegistro.css">
		<?php
      include ('../src/View.php');
			View::render('head');
		?>
	</head>

	<body>

		<?php
			View::render('headerNav');
		?>


		<div class="contenedor col-md-10 col-lg-8 col-xl-6 mt-5 mb-5 pt-4 pb-5">
		<h1 class="titulo-1"> Formulario de registro</h1>
			<form action="/src/create-user.php" method="POST">
				<h1 class="titulo">Crea tu cuenta</h1>

        <div class="form-group">
          <label>Usuario:</label>
          <input type="text" name="username" placeholder="usuario" required style="padding-left: 10px; padding-right: 10px;">
        </div>
        <div class="form-group">
          <label>Contraseña:</label>
          <input type="password" name="password1" placeholder="**********" required style="padding-left: 10px; padding-right: 10px;">
        </div>
        <div class="form-group">
          <label>Confirmar contraseña:</label>
          <input type="password" name="password2" placeholder="**********" required style="padding-left: 10px; padding-right: 10px;">
        </div>

				<div class="form-group">
					<label>Nombre:</label>
					<input type="text" name="name" id="registroUsuario" placeholder="Nombre" style="padding-left: 10px; padding-right: 10px;">
				</div>
				<div class="form-group">
					<label for="registroApellido">Apellido:</label>
					<input type="text" name="lastname" id="registroApellido" placeholder="Apellido" style="padding-left: 10px; padding-right: 10px;">
				</div>
				<div class="form-group">
					<label for="registroNacimiento">Fecha de nacimiento:</label>
					<input type="date" name="birthdate" id="registroNacimiento" placeholder="año-mes-día" style="padding-left: 10px; padding-right: 10px;">
				</div>
        <div class="form-group">
					<label>Correo:</label>
					<input type="email" name="email" placeholder="usuario@ejemplo.com" style="padding-left: 10px; padding-right: 10px;">
				</div>
				<div class="form-group">
					<label for="registroSexo">Sexo:</label>
					<select class="form-control" name="sex" id="registroSexo" style="padding-left: 10px; padding-right: 10px;">
						<option value="m">Masculino</option>
						<option value="f">Femenino</option>
						<option value="o">Otro</option>
					</select>
				</div>

				<input class="registro" type="submit" value="Registrar">
				<small id="emailHelp" class="form-text text-muted">Si ya tienes una cuenta,
					<a href="/pages/login_form.php">Inicia Sesión</a>.</small>

			</form>
		</div>

	</body>
</html>
