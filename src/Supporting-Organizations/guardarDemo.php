<html>
<head>
</head>
<body>

<div id="main">

<?php

$user = $_POST["user"];
$password= $_POST["password"];
$name= $_POST["name"];
$lastname= $_POST["lastname"];
$birthday= $_POST["birthday"];
$email= $_POST["email"];
$sex= $_POST["sex"];
$rol= $_POST["rol"];

echo 'Usuario ' .htmlspecialchars($user) . '!';
include_once("usersCollector.php");

$DemoCollectorObj = new DemoCollector();
$ObjDemo = $DemoCollectorObj->createDemo($user, $password, $name, $lastname, $birthday, $email, $sex, $rol);

echo "Los datos se han guardado correctamente</br>";

?>

<div><a href="showDataBD.php">Volver al Inicio</a></div>
</div>
</body>
</html>
