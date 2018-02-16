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

		<label>Usuario</label>
		<input class='form-TextBox' type="text" name="username" autofocus required />
		<label>Contraseña</label>
		<input class='form-TextBox' type="password" name="password" required />
		<label>Nombre</label>
		<input class='form-TextBox' type="text" name="name" />
		<label>Apellido</label>
		<input class='form-TextBox' type="text" name="lastname" />
		<label>Fecha de nacimiento</label>
		<input class='form-TextBox' type="date" name="birthdate" />
		<label>Email</label>
		<input class='form-TextBox' type="email" placeholder="example@aol.com" name="email" />
		<label>Sexo</label>
    <select name="sex">
      <option value="m">Masculino</option>
      <option value="f">Femenino</option>
      <option value="o">Otro</option>
    </select>
		<label>Rol</label>
    <select name="role">
      <option value="a">Administrador</option>
      <option value="u">Usuario</option>
    </select>
		</br>
    <button class='form-button' type="submit">Guardar</button>

    <a href='/admin/users'>Cancelar</a>

</form>



</body>
</html>
