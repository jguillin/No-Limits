<?php
  session_start();
?>

<html lang="es">
  <head>
    <meta charset="utf-8">
  	<link rel="StyleSheet" href="/assets/css/admin.css" type="text/css">
  	<title>Crear Artículo</title>
  </head>
  <body>
    <?php include_once('../../pages/adminMenu.php'); ?>
    <section id="content">

<?php

  $authorId = $_POST["authorId"];
  $postdatetime= $_POST["postDateTime"];
  $title= $_POST["title"];
  $imageurl= $_POST["imageURL"];
  $content= $_POST["content"];
  $lastmod= $_POST["lastModDateTime"];


include_once("ArticleCollector.php");

$ArticleCollectorObj = new ArticleCollector();

if ($ArticleCollectorObj->createArticle($authorId, $postdatetime, $title, $imageurl, $content, $lastmod)){
  echo "<h2>El Artículo ". $title ." se ha creado correctamente</h2></br>";
  }else {
  echo "<h2>ERROR al crear artículo</h2></br>";
  }


?>

<div><a id='cancelButton' class='form-button' href="/admin/articles">Volver a Artículos</a></div>
</section>
</body>
</html>
