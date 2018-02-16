<?php
  session_start();

?>
<html>
  <head>
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
  echo "El usuario ". $username ." se ha creado correctamente</br>";
}else {
  echo "ERROR al crear usuario</br>";
}

?>

<div><a href="/admin/users">Volver a Usuarios</a></div>
</section>
</body>
</html>
