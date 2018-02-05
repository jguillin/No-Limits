<html>
<head>
</head>
<body>

<div id="main">

<?php

$user = $_POST["articleId"];
$password= $_POST["userId"];
$name= $_POST["content"];
$lastname= $_POST["parentComment"];
$birthday= $_POST["postdate"];

echo 'Usuario ' .htmlspecialchars($user) . '!';
include_once("ArtCommentCollector.php");

$DemoCollectorObj = new DemoCollector();
$ObjDemo = $DemoCollectorObj->createDemo($articleId, $userId, $content, $parentComment, $postdate);

echo "Los datos se han guardado correctamente</br>";

?>

<div><a href="showDataBD.php">Volver al Inicio</a></div>
</div>
</body>
</html>
