<html>
<head>
</head>
<body>

<div id="main">

<?php

$community = $_POST["community"];


echo 'Community ' .htmlspecialchars($user) . '!';
include_once("usersCollector.php");

$DemoCollectorObj = new DemoCollector();
$ObjDemo = $DemoCollectorObj->createDemo($community);

echo "Los datos se han guardado correctamente</br>";

?>

<div><a href="showDataBD.php">Volver al Inicio</a></div>
</div>
</body>
</html>
