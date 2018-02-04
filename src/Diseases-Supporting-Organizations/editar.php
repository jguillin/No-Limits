<?php
  session_start();

?>
<!doctype html>
<html lang="en-US">
<head>
	<meta charset="utf-8">
	<title>Editar</title>
</head>
<body>

<h1>Editar datos de usuario</h1>

<?php
$id = $_GET["id"];
echo "valor de id es ". $id;
include_once("usersCollector.php");
include_once("users.php");
$DemoCollectorObj = new DemoCollector();
$ObjDemo = $DemoCollectorObj->showDemo($id);
print_r($ObjDemo);

?>

<form action="actualizar.php" method="post">
	<fieldset>
		<label>Identificacion</label>
		<input type="text" name="userId" value="<?php echo $ObjDemo->getUserId(); ?>" readonly /></br></br>
		<label>Usuario</label>
		<input type="text" name="user" value="<?php echo $ObjDemo->getUser(); ?>" autofocus required /></br>
		<label>Contraseña</label>
		<input type="text" name="password" value="<?php echo $ObjDemo->getPassword(); ?>" required /></br></br>
		<label>Nombre</label>
		<input type="text" name="name" value="<?php echo $ObjDemo->getName(); ?>" required /></br>
		<label>Apellido</label>
		<input type="text" name="lastname" value="<?php echo $ObjDemo->getLastname(); ?>" required /></br></br>
		<label>Fecha de nacimiento</label>
		<input type="text" name="birthdate" value="<?php echo $ObjDemo->getBirthdate(); ?>" required /></br>
		<label>Email</label>
		<input type="text" name="email" value="<?php echo $ObjDemo->getEmail(); ?>" required /></br></br>
		<label>Sex</label>
		<input type="text" name="sex" value="<?php echo $ObjDemo->getSex(); ?>" required /></br>
		<label>Rol</label>
		<input type="text" name="rol" value="<?php echo $ObjDemo->getRol(); ?>" required /></br></br>
		</br>
                <button type="submit">Actualizar</button>
		</br></br>
                <a href='showDataBD.php'>Cancelar</a>
	</fieldset>
</form>

 

</body>
</html>




