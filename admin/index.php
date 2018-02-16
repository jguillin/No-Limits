<?php
  session_start();
?>

<!doctype html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Administración</title>
  <link rel="StyleSheet" href="/assets/css/admin.css" type="text/css">
</head>

<body>


<?php
	if(isset($_SESSION['username']) && $_SESSION['role']=='a'){

    include_once('../pages/adminMenu.php');
?>



  <section id="content">
  </section>

<?php } else {

        header("Location: /pages/error.php");
      } ?>

</body>
</html>
