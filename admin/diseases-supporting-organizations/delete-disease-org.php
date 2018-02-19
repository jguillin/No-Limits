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
  echo "<h2>Enfermedad con la ID: ".$id." y su respectiva organización de soporte se borraron existosamente</h2></br>";
}else {
  echo "<h2>ERROR al elimiar la enfermedad y organización</h2></br>";
}

?>

<div><a  id="cancelButton" class='form-button' href="/admin/diseases-supporting-organizations">Volver</a></div>
</section>
</body>
</html>
