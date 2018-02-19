<?php
	include_once('../../pages/adminHead.php');
	$title = "ERROR al Actualizar Enfermedad-Organización";

	if (!empty($_POST)){

			$diseaseId = $_POST["diseaseId"];
		  	$soId= $_POST["soId"];


			include_once("DiseaseOrgCollector.php");

			$DiseaseOrgCollectorObj = new DiseaseOrgCollector();

		if ($DiseaseOrgCollectorObj->updateDiseaseOrg($diseaseId, $soId)){
		  $title = "La organización con ID ". $soId ." se ha actualizado correctamente a la enfermedad con ID ". $diseaseId;
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