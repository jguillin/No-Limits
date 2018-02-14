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

?>
  <br>
  <form action='/admin/users/new' method="POST">
    <button class='CRUD-button insert' type='submit'>
      <img src='/img/icons/new_icon.png'>
    </button>
  </form><br><br>

  <table>
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
          <th>role</th>
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody>

<?php

  foreach ($UserCollectorObj->showUsers() as $c){
    echo "<tr>";
    echo "<td><b class='table-cell-label'>userId</b><span class='table-cell-content'>". $c->getUserId() ."</span></td>";
    echo "<td><b class='table-cell-label'>username</b><span class='table-cell-content'>". $c->getUsername() ."</span></td>";
    echo "<td><b class='table-cell-label'>password</b><span class='table-cell-content'>". $c->getPassword() ."</span></td>";
    echo "<td><b class='table-cell-label'>name</b><span class='table-cell-content'>". $c->getName() ."</span></td>";
    echo "<td><b class='table-cell-label'>lastname</b><span class='table-cell-content'>". $c->getLastname() ."</span></td>";
    echo "<td><b class='table-cell-label'>birthdate</b><span class='table-cell-content'>". $c->getBirthdate() ."</span></td>";
    echo "<td><b class='table-cell-label'>email</b><span class='table-cell-content'>". $c->getEmail() ."</span></td>";
    echo "<td><b class='table-cell-label'>sex</b><span class='table-cell-content'>". $c->getSex() ."</span></td>";
    echo "<td><b class='table-cell-label'>role</b><span class='table-cell-content'>". $c->getRol() ."</span></td>";
    echo "<td>
            <b class='table-cell-label'>Acciones</b>
            <span>
              <form class='CRUD-button-container' action='/admin/users/". $c->getUserId() ."' method='GET'>
                <button class='CRUD-button edit' type='submit'><img src='/img/icons/edit_icon.png'></button>
              </form>
              <form class='CRUD-button-container' action='/admin/users/". $c->getUserId() ."' method='DELETE'>
                <button class='CRUD-button delete' type='submit'><img src='/img/icons/delete_icon.png'></button>
              </form>
          </td>";

    echo "</tr>";
  }

  echo "</tbody></table>";

  } else {
    header("Location: /error");
  } ?>
<!-- <a class='CRUD-button edit' href='/admin/user/". $c->getUserId() ."'><img src='/img/icons/edit_icon.png'></a> -->
</body>
</html>
