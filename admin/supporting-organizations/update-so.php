<?php
	session_start();
?>

<html lang="es">
	<head>
		<meta charset="utf-8">
		<link rel="StyleSheet" href="/assets/css/admin.css" type="text/css">
		<title>Actualizar datos</title>
	</head>
	<body>
		<?php include_once('../../pages/adminMenu.php'); ?>
		<section id="content">

<?php

	$soId = $_POST["soId"];
  $name= $_POST["name"];
  $address= $_POST["address"];
  $phone= $_POST["phone"];
  $website= $_POST["website"];
  $email= $_POST["email"];
  

include_once("SorgCollector.php");

$SorgCollectorObj = new SorgCollector();

if ($SorgCollectorObj->updateSorg($soId, $name, $address, $phone, $website, $email)){
  echo "<h2>El supporting-organizations se ha editado correctamente</h2></br>";
}else {
  echo "<h2>ERROR al editar supporting-organizations</h2></br>";
}

?>

<div><a id='cancelButton' class='form-button' href="/admin/supporting-organizations">Volver</a></div>
</section>
</body>
</html>
