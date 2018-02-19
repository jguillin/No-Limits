<?php
	include_once('../../pages/adminHead.php');
	$title = "ERROR al Eliminar Enfermedad";

	if (isset($_GET["diseaseId"]) && is_numeric($_GET["diseaseId"])){
		$id=$_GET["diseaseId"];
		include_once("DiseasesCollector.php");
		$DiseaseCollectorObj = new DiseaseCollector();
		if ($DiseaseCollectorObj->deleteDisease($id)){
			$title =  "Enfermedad con la ID: ".$id." se borró existosamente";
		}
	}

?>
		<title><?php echo $title; ?></title>
		</head>
	<body>
		<section id="content">
			<h2><?php echo $title; ?></h2></br>
			<div><a id='cancelButton' class='form-button' href="/admin/diseases">Volver</a></div>
		</section>
		<?php include_once('../../pages/adminMenu.php'); ?>
	</body>
</html>
