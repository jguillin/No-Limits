<?php
  session_start();
?>

<!doctype html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Administración</title>
</head>

<body>


<?php
	if(isset($_SESSION['user']) && $_SESSION['rol']=='a'){
	echo "<p> Hola usuario:(" . $_SESSION['user']. ")
			[<a style='text-decoration: none' href='/logout'>Salir</a>]";

?>

	</br></br>
	<a style="text-decoration: none" href='/admin/users'>Users</a></br>
	<a style="text-decoration: none" href='/admin/diseases'>Diseases</a></br>
	<a style="text-decoration: none" href='#'>Communities</a></br>
	<a style="text-decoration: none" href='/admin/articles'>Articles</a></br>
	<a style="text-decoration: none" href='#'>Article_comments</a></br>
	<a style="text-decoration: none" href='#'>Diseases_supporting_organizations</a></br>
	<a style="text-decoration: none" href='#'>Diseases_users</a></br>
	<a style="text-decoration: none" href='#'>Responses</a></br>
	<a style="text-decoration: none" href='#'>Supporting_organizations</a>
	<a style="text-decoration: none" href='#'>Threads</a></br>


<?php } else {

        header("Location: /error");
      } ?>

</body>
</html>
