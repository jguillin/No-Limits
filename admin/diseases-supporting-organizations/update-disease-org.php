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
  echo "La Organización ". $soId ." se ha actualizado correctamente</br>";
}else {
  echo "ERROR al actualizar Organización</br>";
}

?>

<div><a  id="cancelButton" class='form-button' href="/admin/diseases-supporting-organizations">Volver</a></div>
</section>
</body>
</html>
