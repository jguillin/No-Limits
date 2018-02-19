<?php
  session_start();

?>
<html>
  <head>
    <link rel="StyleSheet" href="/assets/css/admin.css" type="text/css">
  </head>
  <body>

    <?php include_once('../../pages/adminMenu.php'); ?>

  <section id="content">

<?php

  $diseaseId = $_POST["diseaseId"];
  $soId= $_POST["soId"];
 


include_once("DiseaseOrgCollector.php");

$DiseaseOrgCollectorObj = new DiseaseOrgCollector();

if ($DiseaseOrgCollectorObj->createDiseaseOrg($diseaseId, $soId)){
  echo "<h2>La enfermedad con ID ". $diseaseId ." con su organización de soporte con ID ". $soId ." se ha creado correctamente</h2></br>";
}else {
  echo "<h2>ERROR al crear efermedad y su organización</h2></br>";
}

?>

<div><a  id="cancelButton" class='form-button' href="/admin/diseases-supporting-organizations">Volver</a></div>
</section>
</body>
</html>
