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

<h1>Nuevo Article</h1>


<form action="guardarDemo.php" method="post">
	<fieldset>
		<label>Author</label>
		<input type="text" name="author" required /></br></br>
		<label>Post Datetime/label>
		<input type="text" name="postdatetime" required /></br>
		<label>Title</label>
		<input type="text" name="title" required /></br></br>
		<label>Image Url</label>
		<input type="text" name="imageurl" required /></br>
		<label>Content</label>
		<input type="text" name="content" required /></br></br>
		<label>Last Mod Datetime</label>
		<input type="text" name="lastmod" autofocus required /></br>
		</br></br>
        	<button type="submit">Guardar</button>
        </br></br>
        	<a href='showDataBD.php'>Cancelar</a>

    </fieldset>
</form>

 

</body>
</html>
