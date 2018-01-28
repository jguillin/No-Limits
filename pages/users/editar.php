<?php
  session_start();

?>
<!doctype html>
<html lang="en-US">
<head>
	<meta charset="utf-8">
	<title>Editar</title>
</head>
<body>

<h1>Editar Demo</h1>

<?php
$id = $_GET["id"];
echo "valor de id es ". $id;
include_once("DemoCollector.php");
include_once("Demo.php");
$DemoCollectorObj = new DemoCollector();
$ObjDemo = $DemoCollectorObj->showDemo($id);
print_r($ObjDemo);

?>

<form action="actualizar.php" method="post">
            <fieldset>
		<label>Identificacion</label>
		<input type="text" name="id_demo" value="<?php echo $ObjDemo->getIdDemo(); ?>" readonly /></br></br>
		<label>Usuario</label>
		<input type="text" name="nombre" value="<?php echo $ObjDemo->getNombre(); ?>" autofocus required /></br>
		</br>
                <button type="submit">Actualizar</button>
		</br></br>
                <a href='index_demo.php'>Cancelar</a>
        </fieldset>
	</form>

 

</body>
</html>




