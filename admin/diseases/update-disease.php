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

	$diseaseId= $_POST["diseaseId"];
	$name = $_POST["name"];
	$synonym= $_POST["synonym"];
	$description= $_POST["description"];
	$symtomp= $_POST["symtomp"];
	$causes= $_POST["causes"];
	$population= $_POST["population"];
	$disorder= $_POST["disorder"];
	$diagnosis= $_POST["diagnosis"];
	$treatment= $_POST["treatment"];
	$terhapy= $_POST["terhapy"];
	$subdivision= $_POST["subdivision"];


	include_once("DiseasesCollector.php");
	$DiseaseCollectorObj = new DiseaseCollector();
	if ($DiseaseCollectorObj->updateDisease($diseaseId, $name, $synonym, $description, $symtomp, $causes, $population, $disorder, $diagnosis, $treatment, $terhapy, $subdivision)){
		echo "<h2>Enfermedad con la ID: ".$diseaseId." se actualizó</h2></br>";
	}else {
		echo "<h2>ERROR AL ACTUALIZAR EL USUARIO</h2></br>";
	}

?>

<div><a id='cancelButton' class='form-button' href='/admin/users'>Volver</a></div>
</section>

</body>
</html>
