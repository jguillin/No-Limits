<?php
  session_start();

  if(isset($_SESSION['user']) && $_SESSION['rol']=='a'){
	   echo "<p> Hola usuario:(" . $_SESSION['user']. ")[<a href='/logout'>Salir</a>]";

?>

<html>
  <head>
    <link rel="StyleSheet" href="/css/admin.css" type="text/css">
  </head>
<body>

<div><a href="/admin">Regresar a admin</a></div>

<?php
  include_once("UserCollector.php");

  $UserCollectorObj = new UserCollector();

  echo "<br><a href='form_new_user.php'>Crear nuevo Usuario</a><br><br>";

  echo "<table>
      <thead>
        <tr>
          <th>userId</th>
          <th>username</th>
          <th>password</th>
          <th>name</th>
          <th>lastname</th>
          <th>birthdate</th>
          <th>email</th>
          <th>sex</th>
          <th>rol</th>
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody>";

  foreach ($UserCollectorObj->showUsers() as $c){
    echo "<tr>";
    echo "<td>". $c->getUserId() ."</td>";
    echo "<td>". $c->getUsername() ."</td>";
    echo "<td>". $c->getPassword() ."</td>";
    echo "<td>". $c->getName() ."</td>";
    echo "<td>". $c->getLastname() ."</td>";
    echo "<td>". $c->getBirthdate() ."</td>";
    echo "<td>". $c->getEmail() ."</td>";
    echo "<td>". $c->getSex() ."</td>";
    echo "<td>". $c->getRol() ."</td>";
    echo "<td>
    <a href='../Temperaturas/show_temperaturas.php?ciudadID=". $c->getUserId() ."'>Ver Climas</a></td>";

    echo "</tr>";
  }

  echo "</tbody></table>";

  } else {
    header("Location: /error");
  } ?>

</body>
</html>
