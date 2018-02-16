<?php
session_start();
?>

<html>
<head>
	<meta charset="utf-8">
	<title>Eliminar Usuario</title>
</head>
<body>

<div id="main">

<?php
$id=$_GET["userId"];


include_once("UserCollector.php");
$UserCollectorObj = new UserCollector();


if ($UserCollectorObj->deleteUser($id)){
	echo "Usuario con la ID: ".$id." se borró</br>";
}else {
	echo "ERROR AL ELIMINAR EL USUARIO</br>";
}

?>

<div><a href="/admin/users/">Volver a Usuarios</a></div>
</div>

</body>
</html>
