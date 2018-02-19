<?php
	session_start();
?>

<html lang="es">
	<head>
		<meta charset="utf-8">
		<link rel="StyleSheet" href="/assets/css/admin.css" type="text/css">
		<title>Eliminar Usuario</title>
	</head>
	<body>
		<?php include_once('../../pages/adminMenu.php'); ?>
		<section id="content">

<?php


$soId = $_GET["soId"];
  

include_once("SorgCollector.php");

$SorgCollectorObj = new SorgCollector();

if ($SorgCollectorObj->deleteSorg($soId)){
  echo "<h2>La organización ". $name ." se ha eliminado correctamente</h2></br>";
}else {
  echo "<h2>ERROR al eliminar supporting-organizations</h2></br>";
  echo "<h2>ERROR al eliminar la organización ". $name."</h2></br>";
}

?>

<div><a id='cancelButton' class='form-button' href="/admin/supporting-organizations">Volver</a></div>
</section>
</body>
</html>
