<?php
  session_start();

  if(isset($_SESSION['user']) && $_SESSION['rol']=='a'){
	   echo "<p> Hola usuario:(" . $_SESSION['user']. ")[<a href='/logout'>Salir</a>]";

?>

<!doctype html>
<html lang="en-US">
<head>
	<meta charset="utf-8">
	<title>Articles-Comments</title>
	<link rel="StyleSheet" href="/css/admin.css" type="text/css">
</head>

<body>

	<div><a href="/admin">Regresar a admin</a></div>	




<?php
  include_once("CommunityCollector.php");

  $CommunityCollectorObj = new Communityollector();

?>
  <br>
  <form action='/admin/diseases/new' method="POST">
    <button class='CRUD-button insert' type='submit'>
      <img src='/img/icons/new_icon.png'>
    </button>
  </form><br><br>

  <table>
      <thead>
        <tr>
          <th>Community Id</th>
          <th>Name</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>

<?php

  foreach ($CommunityCollectorObj->showCommunities() as $c){
    echo "<tr>";
    echo "<td><b class='table-cell-label'>Disease Id</b><span class='table-cell-content'>". $c->getCommunityId() ."</span></td>";
    echo "<td><b class='table-cell-label'>Name</b><span class='table-cell-content'>". $c->getName() ."</span></td>";
    echo "<td>
            <b class='table-cell-label'>Actions</b>
            <span>
              <form class='CRUD-button-container' action='/admin/diseases/". $c->getCommunityId() ."' method='GET'>
                <button class='CRUD-button edit' type='submit'><img src='/img/icons/edit_icon.png'></button>
              </form>
              <form class='CRUD-button-container' action='/admin/diseases/". $c->getCommunityId() ."' method='DELETE'>
                <button class='CRUD-button delete' type='submit'><img src='/img/icons/delete_icon.png'></button>
              </form>
          </td>";

    echo "</tr>";
  }

  echo "</tbody></table>";

  } else {
    header("Location: /error");
  } ?>

</body>
</html>
