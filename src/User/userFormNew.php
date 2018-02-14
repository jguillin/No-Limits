<?php
  session_start();

?>
<!doctype html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Insertar Usuario</title>
  <link rel="StyleSheet" href="/css/admin.css" type="text/css">
</head>
<body>

<h1>Nuevo usuario</h1>


<form class='form-Container' action="saveUser.php" method="POST">
	<fieldset>
		<label class="form-label">Usuario</label>
		<input class='form-TextBox' type="text" name="user" autofocus required /></br>
		<label class="form-label">Contraseña</label>
		<input class='form-TextBox' type="text" name="password" required /></br></br>
		<label class="form-label">Nombre</label>
		<input class='form-TextBox' type="text" name="name" required /></br>
		<label class="form-label">Apellido</label>
		<input class='form-TextBox' type="text" name="lastname" required /></br></br>
		<label class="form-label">Fecha de nacimiento</label>
		<input class='form-TextBox' type="text" name="birthdate" required /></br>
		<label class="form-label">Email</label>
		<input class='form-TextBox' type="text" name="email" required /></br></br>
		<label class="form-label">Sex</label>
		<input class='form-TextBox' type="text" name="sex" required /></br>
		<label class="form-label">Rol</label>
		<input class='form-TextBox' type="text" name="rol" required /></br></br>
		</br></br>
        	<button class='form-button' type="submit">Guardar</button>
        </br></br>
        	 <a href='/admin/users/'>Cancelar</a>

    </fieldset>
</form>



</body>
</html>
