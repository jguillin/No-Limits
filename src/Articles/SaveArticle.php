<html>
<head>
</head>
<body>

<div id="main">

<?php

$author = $_POST["author"];
$postdatetime= $_POST["postdatetime"];
$title= $_POST["title"];
$imageurl= $_POST["imageurl"];
$content= $_POST["content"];
$lastmod= $_POST["lastmod"];

echo 'Article ' .htmlspecialchars($user) . '!';
include_once("ArticleCollector.php");

$DemoCollectorObj = new DemoCollector();
$ObjDemo = $DemoCollectorObj->createDemo($author, $postdatetime, $title, $imageurl, $content, $lastmod);

echo "Los datos se han guardado correctamente</br>";

?>

<div><a href="showDataBD.php">Volver al Inicio</a></div>
</div>
</body>
</html>
