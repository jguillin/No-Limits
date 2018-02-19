<?php
	include_once('../../pages/adminHead.php');
	$title = "ERROR al Actualizar Organización";

	if (!empty($_POST)){

		$soId = $_POST["soId"];
		$name= $_POST["name"];
		$address= $_POST["address"];
		$phone= $_POST["phone"];
		$website= $_POST["website"];
		$email= $_POST["email"];
		include_once("SorgCollector.php");

		$SorgCollectorObj = new SorgCollector();

		if ($SorgCollectorObj->updateSorg($soId, $name, $address, $phone, $website, $email)){
		  $title = "La organización ". $name ." se ha editado correctamente";
		}
	}
?>

    <title><?php echo $title; ?></title>
  </head>
  <body>
    <section id="content">
      <h2><?php echo $title; ?></h2></br>
      <div><a id='cancelButton' class='form-button' href="/admin/supporting-organizations">Volver</a></div>
    </section>
  <?php include_once('../../pages/adminMenu.php'); ?>
  </body>
</html>