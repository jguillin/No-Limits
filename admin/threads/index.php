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
  include_once("SupportingOrgCollector.php");

  $SupportingOrgCollectorObj = new SupportingOrgCollector();

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
          <th>Id</th>
          <th>Communities Id</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>

<?php

  foreach ($SupportingOrgCollectorObj->showSupportingsOrg() as $c){
    echo "<tr>";
    echo "<td><b class='table-cell-label'>Id</b><span class='table-cell-content'>". $c->getId() ."</span></td>";
    echo "<td><b class='table-cell-label'>Communities Id</b><span class='table-cell-content'>". $c->getCommunitiesId() ."</span></td>";
    echo "<td>
            <b class='table-cell-label'>Actions</b>
            <span>
              <form class='CRUD-button-container' action='/admin/diseases/". $c->getId() ."' method='GET'>
                <button class='CRUD-button edit' type='submit'><img src='/img/icons/edit_icon.png'></button>
              </form>
              <form class='CRUD-button-container' action='/admin/diseases/". $c->getId() ."' method='DELETE'>
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