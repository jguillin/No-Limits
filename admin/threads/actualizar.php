<?php
session_start();
?>

<html lang="en-US">
<head>
	<meta charset="utf-8">
	<title>Actualizar datos</title>
</head>
<body>

<div id="main">

<?php

//Almacenando los datos de editar.php en variables

$userId= $_POST["userId"];
$user = $_POST["user"];
$password= $_POST["password"];
$name= $_POST["name"];
$lastname= $_POST["lastname"];
$birthday= $_POST["birthday"];
$email= $_POST["email"];
$sex= $_POST["sex"];
$rol= $_POST["rol"];

echo "Actualizando... </br>";

include_once("ThreadCollector.php");
$DemoCollectorObj = new DemoCollector();
$DemoCollectorObj->updateDemo($userId, $user, $password, $name, $lastname, $birthday, $email, $sex, $rol);

echo "id:".$id_demo." actualizando a:".$nombre." </br>";

?>

<div><a href="showDataBD.php">Volver al Inicio</a></div>
</div>

</body>
</html>
