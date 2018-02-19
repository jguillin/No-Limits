<?php
	include_once('../../pages/adminHead.php');
	$title = "ERROR al Eliminar Usuario";

	if (isset($_GET["userId"]) && is_numeric($_GET["userId"])){
		$id=$_GET["userId"];
		include_once("UserCollector.php");
		$UserCollectorObj = new UserCollector();
		if ($UserCollectorObj->deleteUser($id)){
			$title = "Usuario con la ID: ".$id." se borró correctamente";
		}
	}

?>

		<title><?php echo $title; ?></title>
		</head>
	<body>
		<section id="content">
			<h2><?php echo $title; ?></h2></br>
			<div><a id='cancelButton' class='form-button' href="/admin/users">Volver</a></div>
		</section>
		<?php include_once('../../pages/adminMenu.php'); ?>
	</body>
</html>
