<?php
  session_start();

?>
<html>
  <head>
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
    echo "El usuario ". $username ." se ha creado correctamente</br>";
  }else {
    echo "ERROR al crear usuario</br>";
  }
}else {
  echo "<h2>Las contraseñas no coinciden</h2><br>";
}

?>

<div><a href="/pages/signup_form.php">Volver a Registro</a></div>
</div>
</body>
</html>
