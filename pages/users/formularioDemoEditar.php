/*Este es un archivo de prueba*/

<?php
$id=$_GET["id"];

include_once("DemoCollector.php");
include_once("Demo.php");
$DemoCollectorObj = new DemoCollector();
$ObjDemo = $DemoCollectorObj ->showDemo($id);

print_r($ObjDemo);

?>