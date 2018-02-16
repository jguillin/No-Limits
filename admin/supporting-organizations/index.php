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
          <th>So Id</th>
          <th>Name</th>
          <th>Address</th>
          <th>Phone</th>
          <th>Website</th>
          <th>Email</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>

<?php

  foreach ($SupportingOrgCollectorObj->showSupportingsOrg() as $c){
    echo "<tr>";
    echo "<td><b class='table-cell-label'>So Id</b><span class='table-cell-content'>". $c->getSoId() ."</span></td>";
    echo "<td><b class='table-cell-label'>Name</b><span class='table-cell-content'>". $c->getName() ."</span></td>";
    echo "<td><b class='table-cell-label'>Address</b><span class='table-cell-content'>". $c->getAddress() ."</span></td>";
    echo "<td><b class='table-cell-label'>Phone</b><span class='table-cell-content'>". $c->getPhone() ."</span></td>";
    echo "<td><b class='table-cell-label'>Website</b><span class='table-cell-content'>". $c->getWebsite() ."</span></td>";
    echo "<td><b class='table-cell-label'>Email</b><span class='table-cell-content'>". $c->getEmail() ."</span></td>";
    echo "<td>
            <b class='table-cell-label'>Actions</b>
            <span>
              <form class='CRUD-button-container' action='/admin/diseases/". $c->getSoId() ."' method='GET'>
                <button class='CRUD-button edit' type='submit'><img src='/img/icons/edit_icon.png'></button>
              </form>
              <form class='CRUD-button-container' action='/admin/diseases/". $c->getSoId() ."' method='DELETE'>
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
