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
$id=$_GET["diseaseId"];


include_once("DiseaseOrgCollector.php");

	$DiseaseOrgCollectorObj = new DiseaseOrgCollector();

if ($DiseaseOrgCollectorObj->deleteDiseaseOrg($id)){
  echo "La Organización ". $id ." se ha borrado correctamente</br>";
}else {
  echo "ERROR al borrado Organización</br>";
}

?>

<div><a  id="cancelButton" class='form-button' href="/admin/diseases-supporting-organizations">Volver</a></div>
</section>
</body>
</html>
