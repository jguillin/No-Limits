<html>
<head>
</head>
<body>

<div id="main">

<?php

$thread = $_POST["thread"];

echo 'Thread ' .htmlspecialchars($thread) . '!';
include_once("ThreadCollector.php");

$DemoCollectorObj = new DemoCollector();
$ObjDemo = $DemoCollectorObj->createDemo($thread);

echo "Los datos se han guardado correctamente</br>";

?>

<div><a href="showDataBD.php">Volver al Inicio</a></div>
</div>
</body>
</html>
