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

<h1>Nuevo usuario</h1>


<form action="guardarDemo.php" method="post">
	<fieldset>
		<label>Article Id</label>
		<input type="text" name="articleId" autofocus required /></br>
		<label>User Id</label>
		<input type="text" name="userId" required /></br></br>
		<label>Content</label>
		<input type="text" name="content" required /></br>
		<label>Parent Comment Id</label>
		<input type="text" name="parentComment" required /></br></br>
		<label>Post Datetime</label>
		<input type="text" name="postdate" required /></br>
		</br></br>
        	<button type="submit">Guardar</button>
        </br></br>
        	 <a href='showDataBD.php'>Cancelar</a>

    </fieldset>
</form>

 

</body>
</html>
