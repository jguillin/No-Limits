<html>
<head>
</head>
<body>

<div id="main">

<?php

$response = $_POST["response"];

echo 'Response ' .htmlspecialchars($thread) . '!';
include_once("ResponseCollector.php");

$DemoCollectorObj = new DemoCollector();
$ObjDemo = $DemoCollectorObj->createDemo($response);

echo "Los datos se han guardado correctamente</br>";

?>

<div><a href="showDataBD.php">Volver al Inicio</a></div>
</div>
</body>
</html>
