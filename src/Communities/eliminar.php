<?php
session_start();
?>

<html lang="en-US">
<head>
	<meta charset="utf-8">
	<title>Eliminar</title>
</head>
<body>

<div id="main">

<?php
$id=$_GET["id"];
$community=$_GET["community"];

echo "Edicion en proceso..... </br>";

include_once("CommunityCollector.php");
$DemoCollectorObj = new DemoCollector();
$DemoCollectorObj->deleteDemo($id);

echo "valor id:".$id." se borro " .$nombre." </br>";

?>

<div><a href="showDataBD.php">Volver al Inicio</a></div>
</div>

</body>
</html>
