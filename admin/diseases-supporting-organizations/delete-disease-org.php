<?php
 include_once('../../pages/adminHead.php');
 $title = "ERROR al Eliminar Enfermedad-Organización";

	if (isset($_GET["diseaseId"]) && is_numeric($_GET["diseaseId"])){
		$id=$_GET["diseaseId"];

		include_once("DiseaseOrgCollector.php");

			$DiseaseOrgCollectorObj = new DiseaseOrgCollector();

		if ($DiseaseOrgCollectorObj->deleteDiseaseOrg($id)){
		  $title = "Enfermedad con la ID: ".$id." y su respectiva organización de soporte se borraron existosamente";
		}
	}

?>

		<title><?php echo $title; ?></title>
		</head>
	<body>
		<section id="content">
			<h2><?php echo $title; ?></h2></br>
			<div><a id='cancelButton' class='form-button' href="/admin/diseases-supporting-organizations">Volver</a></div>
		</section>
		<?php include_once('../../pages/adminMenu.php'); ?>
	</body>
</html>