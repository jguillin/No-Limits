<?php
  include_once('../../pages/adminHead.php');
  $title = "ERROR al Crear Enfermedad";

  if (!empty($_POST)){
    $name = $_POST["name"];
    $synonym= $_POST["synonym"];
    $description= $_POST["description"];
    $symtomp= $_POST["symtomp"];
    $causes= $_POST["causes"];
    $population= $_POST["population"];
    $disorder= $_POST["disorder"];
    $diagnosis= $_POST["diagnosis"];
    $treatment= $_POST["treatment"];
    $terhapy= $_POST["terhapy"];
    $subdivision= $_POST["subdivision"];
    include_once("DiseasesCollector.php");
    $DiseaseCollectorObj = new DiseaseCollector();

    if ($DiseaseCollectorObj->createDisease($name, $synonym, $description, $symtomp, $causes, $population, $disorder, $diagnosis, $treatment, $terhapy, $subdivision)){
      $title= "La enfermedad ". $name ." se ha creado correctamente";
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
