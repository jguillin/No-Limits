<?php
  session_start();

?>
<!doctype html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Insertar</title>
</head>
<body>

<h1>Nuevo Response</h1>


<form action="guardarDemo.php" method="post">
	<fieldset>
		<label>Thread</label>
		<input type="text" name="response" autofocus required /></br>
        	<button type="submit">Guardar</button>
        </br></br>
        	 <a href='showDataBD.php'>Cancelar</a>

    </fieldset>
</form>

 

</body>
</html>
