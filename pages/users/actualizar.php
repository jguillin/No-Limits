<?php
session_start();
?>

<html lang="en-US">
<head>
	<meta charset="utf-8">
	<title>Actualizar</title>
</head>
<body>

<div id="main">

<?php
$nombre = $_POST["nombre"];
$id_demo= $_POST["id_demo"];

echo "Edicion en proceso..... </br>";

include_once("DemoCollector.php");
$DemoCollectorObj = new DemoCollector();
$DemoCollectorObj->updateDemo($id_demo, $nombre);

echo "id:".$id_demo." actualizando a:".$nombre." </br>";

?>

<div><a href="index_demo.php">Volver al Inicio</a></div>
</div>

</body>
</html>
