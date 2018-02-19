<?php
	include_once('../../pages/adminHead.php');
	$title = "ERROR al Eliminar Comentario";

	if (isset($_GET["commentId"]) && is_numeric($_GET["commentId"])){
		$id=$_GET["commentId"];
		include_once("ArtCommentCollector.php");
		$ArtCommentCollectorObj = new ArtCommentCollector();
		if ($ArtCommentCollectorObj->deleteArtComment($id)){
			$title = "Comentario con la ID: ".$id." se borró correctamente";
		}
	}
?>
		<title><?php echo $title; ?></title>
		</head>
	<body>
		<section id="content">
			<h2><?php echo $title; ?></h2></br>
			<div><a id='cancelButton' class='form-button' href="/admin/articles-comments">Volver</a></div>
		</section>
		<?php include_once('../../pages/adminMenu.php'); ?>
	</body>
</html>
