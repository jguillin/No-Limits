<?php
  session_start();

?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="Fernando Balladares & Jimmy Guillin">

    <link rel="styleSheet" href="/assets/css/admin.css" type="text/css">
  </head>
  <body>

  <div id="main">

<?php

$username = $_POST["username"];
$password1= $_POST["password1"];
$password2= $_POST["password2"];
$name= $_POST["name"];
$lastname= $_POST["lastname"];
$birthdate= $_POST["birthdate"];
$email= $_POST["email"];
$sex= $_POST["sex"];
$role= 'u';

// print_r($_POST);

// echo 'Usuario ' .htmlspecialchars($username) . '!';
include_once("../admin/users/UserCollector.php");

$UserCollectorObj = new UserCollector();

if ($password1 === $password2){
  if ($UserCollectorObj->createUser($username, $password1, $name, $lastname, $birthdate, $email, $sex, $role)){
    echo "<h2>El usuario ". $username ." se ha creado correctamente</h2></br>";
  }else {
    echo "<h2>ERROR al crear usuario</h2></br>";
  }
}else {
  echo "<h2>Las contraseñas no coinciden</h2><br>";
}

?>

<div><a id='cancelButton' class='form-button' href="/admin/users">Volver</a></div>
</div>
</body>
</html>
