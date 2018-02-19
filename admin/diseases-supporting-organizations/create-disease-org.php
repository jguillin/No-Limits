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
  echo "La Organización ". $soId ." se ha creado correctamente</br>";
}else {
  echo "ERROR al crear Organización</br>";
}

?>

<div><a  id="cancelButton" class='form-button' href="/admin/diseases-supporting-organizations">Volver</a></div>
</section>
</body>
</html>
