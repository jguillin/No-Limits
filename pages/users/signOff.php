<?php
session_start();

if(isset($_SESSION['MiSesion'])){
	session_destroy();
	echo "se ha cerrado sesion exitosamente <br/>";
	echo "<a href='login.html'>Salir</a>";
}else{
	echo "ERROR.... <br/>";
	echo "<a href='login.html'>Salir</a>";
}

?>
