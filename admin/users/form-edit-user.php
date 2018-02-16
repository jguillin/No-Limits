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
include_once("UserCollector.php");
include_once("User.php");
$UserCollectorObj = new UserCollector();
$ObjUser = $UserCollectorObj->showUser($id);
print_r($ObjUser);

?>

<form action="update-user.php" method="post">
	<fieldset>
		<label>Identificacion</label>
		<input type="text" name="userId" value="<?php echo $ObjUser->getUserId(); ?>" readonly /></br></br>
		<label>Usuario</label>
		<input type="text" name="user" value="<?php echo $ObjUser->getUserName(); ?>" autofocus required /></br>
		<label>Contraseña</label>
		<input type="text" name="password" value="<?php echo $ObjUser->getPassword(); ?>" required /></br></br>
		<label>Nombre</label>
		<input type="text" name="name" value="<?php echo $ObjUser->getName(); ?>" required /></br>
		<label>Apellido</label>
		<input type="text" name="lastname" value="<?php echo $ObjUser->getLastname(); ?>" required /></br></br>
		<label>Fecha de nacimiento</label>
		<input type="text" name="birthdate" value="<?php echo $ObjUser->getBirthdate(); ?>" required /></br>
		<label>Email</label>
		<input type="text" name="email" value="<?php echo $ObjUser->getEmail(); ?>" required /></br></br>
		<label>Sex</label>
		<input type="text" name="sex" value="<?php echo $ObjUser->getSex(); ?>" required /></br>
		<label>Rol</label>
		<input type="text" name="rol" value="<?php echo $ObjUser->getRole(); ?>" required /></br></br>
		</br>






                <button type="submit">Actualizar</button>
		</br></br>
                <a href='index.php'>Cancelar</a>
	</fieldset>
</form>

 

</body>
</html>




