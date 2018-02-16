<?php
session_start();
?>

<html lang="es">
<head>
	<meta charset="utf-8">
	<link rel="StyleSheet" href="/assets/css/admin.css" type="text/css">
	<title>Actualizar datos</title>
</head>
<body>

<div id="main">

<?php

	//Almacenando los datos de editar.php en variables
	print_r($_POST);

	$userId= $_POST["userId"];
	$username = $_POST["username"];
	$password= $_POST["password"];
	$name= $_POST["name"];
	$lastname= $_POST["lastname"];
	$birthdate= $_POST["birthdate"];
	$email= $_POST["email"];
	$sex= $_POST["sex"];
	$role= $_POST["role"];

	echo "Actualizando... </br>";

	include_once("UserCollector.php");
	$UserCollectorObj = new UserCollector();
	if ($UserCollectorObj->updateUser($userId, $username, $password, $name, $lastname, $birthdate, $email, $sex, $role)){
		echo "<h2>Usuario con la ID: ".$userId." se actualizó</h2></br>";
	}else {
		echo "<h2>ERROR AL ACTUALIZAR EL USUARIO</h2></br>";
	}

?>

<div><a id='cancelButton' class='form-button' href='/admin/users'>Volver</a></div>
</div>

</body>
</html>
