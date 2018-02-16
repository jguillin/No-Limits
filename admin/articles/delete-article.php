<?php
	session_start();
?>

<html lang="es">
	<head>
		<meta charset="utf-8">
		<link rel="StyleSheet" href="/assets/css/admin.css" type="text/css">
		<title>Eliminar Artículos</title>
	</head>
	<body>
		<?php include_once('../../pages/adminMenu.php'); ?>
		<section id="content">

		<?php
		$id=$_GET["articleId"];


		include_once("ArticleCollector.php");
		$ArticleCollectorObj = new ArticleCollector();


		if ($ArticleCollectorObj->deleteArticle($id)){
		echo "<h2>Artículo con la ID: ".$id." se borró</h2></br>";
		}else {
		echo "<h2>ERROR AL ELIMINAR EL ARTÍCULO</h2></br>";
		}

		?>

		<div><a id='cancelButton' class='form-button' href="/admin/articles/">Volver a Artículos</a></div>
		</section>

		</body>
		</html>
