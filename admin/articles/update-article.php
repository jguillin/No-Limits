<?php
session_start();
?>

<html lang="en">
	<head>
		<meta charset="utf-8">
		<link rel="StyleSheet" href="/assets/css/admin.css" type="text/css">
		<title>Actualizar datos</title>
	</head>
	<body>
		<?php include_once('../../pages/adminMenu.php'); ?>
		<section id="content">

		<?php

	$articleId = $_POST["articleId"];
	$authorId = $_POST["authorId"];
	$postdatetime= $_POST["postDateTime"];
	$title= $_POST["title"];
	$imageurl= $_POST["imageURL"];
	$content= $_POST["content"];
	$lastmod= $_POST["lastModDateTime"];


	include_once("ArticleCollector.php");
	$ArticleCollectorObj = new ArticleCollector();
	if($ArticleCollectorObj->updateArticle($articleId, $authorId, $postdatetime, $title, $imageurl, $content, $lastmod)){
		echo "<h2>Artículo con la ID: ".$articleId." se actualizó</h2></br>";
	}else {
		echo "<h2>ERROR AL ACTUALIZAR EL Artículo</h2></br>";
	}

	?>

	<div><a id='cancelButton' class='form-button' href='/admin/articles'>Volver</a></div>
	</section>

	</body>
	</html>
