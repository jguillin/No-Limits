<?php
	include_once('../../pages/adminHead.php');
	$title = "ERROR al Eliminar Artículo";

	if (isset($_GET["articleId"]) && is_numeric($_GET["articleId"])){
		$id=$_GET["articleId"];
		include_once("ArticleCollector.php");
		$ArticleCollectorObj = new ArticleCollector();
		if ($ArticleCollectorObj->deleteArticle($id)){
			$title = "Artículo con la ID: ".$id." se borró correctamente";
		}
	}
?>
		<title><?php echo $title; ?></title>
		</head>
	<body>
		<section id="content">
			<h2><?php echo $title; ?></h2></br>
			<div><a id='cancelButton' class='form-button' href="/admin/articles">Volver</a></div>
		</section>
		<?php include_once('../../pages/adminMenu.php'); ?>
	</body>
</html>
