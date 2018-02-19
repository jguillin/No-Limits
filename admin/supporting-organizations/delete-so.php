<?php
	include_once('../../pages/adminHead.php');
	$title = "ERROR al Eliminar organización";

	if (isset($_GET["soId"]) && is_numeric($_GET["soId"])){
		$soId = $_GET["soId"];
		  

		include_once("SorgCollector.php");

		$SorgCollectorObj = new SorgCollector();

		if ($SorgCollectorObj->deleteSorg($soId)){
		  $title =  "La organización se ha eliminado correctamente";
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
