<?php
  session_start();
?>

<html lang="es">
  <head>
    <meta charset="utf-8">
  	<link rel="StyleSheet" href="/assets/css/admin.css" type="text/css">
  	<title>Crear Usuario</title>
  </head>
  <body>
    <?php include_once('../../pages/adminMenu.php'); ?>
    <section id="content">

<?php

  $username = $_POST["username"];
  $password= $_POST["password"];
  $name= $_POST["name"];
  $lastname= $_POST["lastname"];
  $birthdate= $_POST["birthdate"];
  $email= $_POST["email"];
  $sex= $_POST["sex"];
  $role= $_POST["role"];


include_once("UserCollector.php");

$UserCollectorObj = new UserCollector();

if ($UserCollectorObj->createUser($username, $password, $name, $lastname, $birthdate, $email, $sex, $role)){
  echo "<h2>El usuario ". $username ." se ha creado correctamente</h2></br>";
}else {
  echo "<h2>ERROR al crear usuario</h2></br>";
}

?>

<div><a id='cancelButton' class='form-button' href="/admin/users">Volver a Usuarios</a></div>
</section>
</body>
</html>
