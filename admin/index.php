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
	if(isset($_SESSION['username']) && $_SESSION['role']=='a'){
	echo "<p> Hola usuario:(" . $_SESSION['username']. ")
			[<a style='text-decoration: none' href='/src/logout.php'>Salir</a>]";

?>

	</br></br>
	<a style="text-decoration: none" href='/admin/users'>Users</a></br>
	<a style="text-decoration: none" href='/admin/diseases'>Diseases</a></br>
	<a style="text-decoration: none" href='/admin/communities'>Communities</a></br>
	<a style="text-decoration: none" href='/admin/articles'>Articles</a></br>
	<a style="text-decoration: none" href='/admin/articles-comments'>Article_comments</a></br>
	<a style="text-decoration: none" href='/admin/diseases-supporting-organizations'>Diseases_supporting_organizations</a></br>
	<a style="text-decoration: none" href='/admin/diseases-users'>Diseases_users</a></br>
	<a style="text-decoration: none" href='/admin/responses'>Responses</a></br>
	<a style="text-decoration: none" href='/admin/supporting-organizations'>Supporting_organizations</a></br>
	<a style="text-decoration: none" href='/admin/threads'>Threads</a></br>


<?php } else {

        header("Location: /pages/error.php");
      } ?>

</body>
</html>
