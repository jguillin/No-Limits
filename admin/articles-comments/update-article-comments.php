<?php
	include_once('../../pages/adminHead.php');
	$title = "ERROR al Actualizar Comentario";

	if (!empty($_POST)){
		$commentId = $_POST["commentId"];
		$articleId = $_POST["articleId"];
		$userId= $_POST["userId"];
		$content= $_POST["content"];
		$parentCommentId= $_POST["parentCommentId"];
		$postDateTime= $_POST["postDateTime"];
		
		include_once("ArtCommentCollector.php");
		$ArtCommentCollectorObj = new ArtCommentCollector();
		if($ArtCommentCollectorObj->updateArtComment($commentId,$articleId, $userId, $content, $parentCommentId, $postDateTime)){
			$title = "Comentario con la ID: ".$commentId." se actualizó correctamente";
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
