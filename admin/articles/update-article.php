<?php
	include_once('../../pages/adminHead.php');
	$title = "ERROR al Actualizar Artículo";

	if (!empty($_POST)){
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
			$title = "Artículo con la ID: ".$articleId." se actualizó correctamente";
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
