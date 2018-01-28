<?php

  session_start();

$_SESSION ['MiSesion']= $_POST ['Usuario'];

$usuario = $_POST['Usuario'];

if($_SESSION['MiSesion']=="valor"){
echo "session creada exitosamente";
echo "<a href='admin.php'> Administracion</a>";
}else{
echo "error";
session_destroy();
echo "<a href = 'index.php'>Volver</a>";
}


?>
