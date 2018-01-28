<?php
  session_start();
?>

<!doctype html>
<html lang="en-US">
<head>
	<meta charset="utf-8">
	<title>Administrador</title>
</head>

<body>
	

<?php
	if(isset($_SESSION['MiSesion'])){
	echo "<p> Hola usuario:(" . $_SESSION['MiSesion']. ")
			[<a href='signOff.php'>Salir</a>]";
	
?>

	</br></br>
	<a href='showDataBD.php'>Users</a></br>
	<a href='#'>Diseases</a></br>
	<a href='#'>Communities</a></br>
	<a href='#'>Articles</a></br>
	<a href='#'>Article_comments</a></br>
	<a href='#'>Diseases_supporting_organizations</a></br>
	<a href='#'>Diseases_users</a></br>
	<a href='#'>Responses</a></br>
	<a href='#'>Supporting_organizations</a>
	<a href='#'>Threads</a></br>
	 

<?php } else { ?>

<br/>
error con la sesion
<?php } ?>

</body>
</html>
