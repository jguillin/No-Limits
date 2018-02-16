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


include_once("DiseasesCollector.php");
$DiseaseCollectorObj = new DiseaseCollector();


if ($DiseaseCollectorObj->deleteUser($id)){
	echo "<h2>Enfermedad con la ID: ".$id." se borró existosamente</h2></br>";
}else {
	echo "<h2>ERROR AL ELIMINAR LA ENFERMEDAD</h2></br>";
}

?>

<div><a id='cancelButton' class='form-button' href="/admin/diseases/">Volver a Usuarios</a></div>
</section>

</body>
</html>
