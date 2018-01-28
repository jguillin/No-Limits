<?php

  session_start();

$_SESSION ['MiSesion']= $_POST ['usuario'];

$usuario = $_POST['Usuario'];

if($_SESSION['MiSesion']=="valor"){
echo "session creada exitosamente";
echo "<a href='manageBD.php'> Administracion</a>";
}else{
echo "error";
session_destroy();
echo "<a href = 'login.html'>Volver</a>";
}


?>
