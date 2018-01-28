<?php
  session_start();
?>

<!doctype html>
<html lang="en-US">
<head>
	<meta charset="utf-8">
	<title>Formulario</title>
</head>

<body>
	

<?php
	if(isset($_SESSION['MiSesion'])){
	echo "<p> Hola usuario:(" . $_SESSION['MiSesion']. ")
			[<a href='manageBD.php'>Atras</a>]";
	echo "(" . $_SESSION['MiSesion']. ")<br/><h2>
			<a href='insertar.php'>Nuevo Usuario</a></h2>";
	
	include_once("usersCollector.php");

$id =1;

$DemoCollectorObj = new DemoCollector();

foreach ($DemoCollectorObj->showDemos() as $c){
  echo "<div>";
  echo $c->getUserId() . "  && " .$c->getUser(). "  && " .$c->getPassword(). "  && " .$c->getName(). "  && " .$c->getLastname(). "  && " .$c->getBirthdate(). "  && " .$c->getEmail(). "  && " .$c->getSex(). "  && " .$c->getRol();
  echo "<a href='editar.php?id=".$c->getUserId()."'> Editar </a>";
  echo "<a href='eliminar.php?id=".$c->getUserId()."'>Eliminar</a>";                                     
  echo "</div>"; 
}


	}else{
?>

	<form action="login.php" method="post">
            <fieldset>
		<label>Usuario</label>
		<input type="text" name = "Usuario"/></br></br>
                <label>Clave</label>
		<input type="text" name = "Clave"/></br>
		</br>
                <button type="submit">Ingresar</button>
        </fieldset>
	</form> 

<?php } ?>  

</body>
</html>
