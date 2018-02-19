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

	$diseaseId = $_POST["diseaseId"];
  	$soId= $_POST["soId"];


	include_once("DiseaseOrgCollector.php");

	$DiseaseOrgCollectorObj = new DiseaseOrgCollector();

if ($DiseaseOrgCollectorObj->updateDiseaseOrg($diseaseId, $soId)){
  echo "<h2>La organización con ID ". $soId ." se ha actualizado correctamente a la enfermedad con ID ". $diseaseId ."</h2></br>";
}else {
  echo "<h2>ERROR al actualizar la enfermedad y su organización de soporte</h2></br>";
}

?>

<div><a  id="cancelButton" class='form-button' href="/admin/diseases-supporting-organizations">Volver</a></div>
</section>
</body>
</html>
