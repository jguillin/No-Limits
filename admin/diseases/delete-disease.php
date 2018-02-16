<?php
session_start();
?>

<html>
<head>
	<meta charset="utf-8">
	<link rel="StyleSheet" href="/assets/css/admin.css" type="text/css">
	<title>Eliminar Usuario</title>
</head>
<body>

	<?php include_once('../../pages/adminMenu.php'); ?>

	<section id="content">
	
<?php
$id=$_GET["userId"];


include_once("UserCollector.php");
$UserCollectorObj = new UserCollector();


if ($UserCollectorObj->deleteUser($id)){
	echo "<h2>Usuario con la ID: ".$id." se borró</h2></br>";
}else {
	echo "<h2>ERROR AL ELIMINAR EL USUARIO</h2></br>";
}

?>

<div><a id='cancelButton' class='form-button' href="/admin/users/">Volver a Usuarios</a></div>
</section>

</body>
</html>
