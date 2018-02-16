<?php
session_start();
?>

<html lang="es">
	<head>
		<meta charset="utf-8">
		<link rel="StyleSheet" href="/assets/css/admin.css" type="text/css">
		<title>Actualizar Comentarios</title>
	</head>
	<body>
		<?php include_once('../../pages/adminMenu.php'); ?>
		<section id="content">

		<?php

	$commentId = $_POST["commentId"];
	$articleId = $_POST["articleId"];
	$userId= $_POST["userId"];
	$content= $_POST["content"];
	$parentCommentId= $_POST["parentCommentId"];
	$postDateTime= $_POST["postDateTime"];


	include_once("ArtCommentCollector.php");
	$ArtCommentCollectorObj = new ArtCommentCollector();
	if($ArtCommentCollectorObj->updateArtComment($commentId,$articleId, $userId, $content, $parentCommentId, $postDateTime)){
		echo "<h2>El comentario con la ID: ".$commentId." se actualizó</h2></br>";
	}else {
		echo "<h2>ERROR AL ACTUALIZAR EL COMENTARIO</h2></br>";
	}

	?>

	<div><a id='cancelButton' class='form-button' href='/admin/articles-comments'>Volver</a></div>
	</section>

	</body>
	</html>
