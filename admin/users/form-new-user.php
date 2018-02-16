<?php
  session_start();

?>
<!doctype html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Insertar Usuario</title>
  <link rel="StyleSheet" href="/assets/css/admin.css" type="text/css">
</head>
<body>

<h1>Nuevo usuario</h1>


<form class='form-Container' action="/admin/users/create-user.php" method="POST">
	<fieldset>
		<label class="form-label">Usuario</label>
		<input class='form-TextBox' type="text" name="username" autofocus required /></br>
		<label class="form-label">Contraseña</label>
		<input class='form-TextBox' type="password" name="password" required /></br></br>
		<label class="form-label">Nombre</label>
		<input class='form-TextBox' type="text" name="name" required /></br>
		<label class="form-label">Apellido</label>
		<input class='form-TextBox' type="text" name="lastname" required /></br></br>
		<label class="form-label">Fecha de nacimiento</label>
		<input class='form-TextBox' type="text" name="birthdate" required /></br>
		<label class="form-label">Email</label>
		<input class='form-TextBox' type="text" name="email" required /></br></br>
		<label class="form-label">Sexo</label>
    <select name="sex">
      <option value="m">Masculino</option>
      <option value="f">Femenino</option>
      <option value="o">Otro</option>
    </select>
		<!-- <input class='form-TextBox' type="text" name="sex" required /></br> -->
		<label class="form-label">Rol</label>
    <select name="role">
      <option value="a">Administrador</option>
      <option value="u">Usuario</option>
    </select>
		<!-- <input class='form-TextBox' type="text" name="rol" required /></br></br> -->
		</br></br>
        	<button class='form-button' type="submit">Guardar</button>
        </br></br>
        	 <a href='/admin/users'>Cancelar</a>

    </fieldset>
</form>



</body>
</html>
