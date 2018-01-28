<?php
  session_start();

?>
<!doctype html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Insertar</title>
</head>
<body>

<h1>Nuevo usuario</h1>


<form action="guardarDemo.php" method="post">
	<fieldset>
		<label>Usuario</label>
		<input type="text" name="user" autofocus required /></br>
		<label>Contraseña</label>
		<input type="text" name="password" required /></br></br>
		<label>Nombre</label>
		<input type="text" name="name" required /></br>
		<label>Apellido</label>
		<input type="text" name="lastname" required /></br></br>
		<label>Fecha de nacimiento</label>
		<input type="text" name="birthdate" required /></br>
		<label>Email</label>
		<input type="text" name="email" required /></br></br>
		<label>Sex</label>
		<input type="text" name="sex" required /></br>
		<label>Rol</label>
		<input type="text" name="rol" required /></br></br>
		</br></br>
        	<button type="submit">Guardar</button>
        </br></br>
        	 <a href='showDataBD.php'>Cancelar</a>

    </fieldset>
</form>

 

</body>
</html>
