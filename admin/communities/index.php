<?php
  session_start();

  if(isset($_SESSION['username']) && $_SESSION['role']=='a'){
     echo "<p> Hola usuario:(" . $_SESSION['username']. ")[<a href='/src/logout.php'>Salir</a>]";

?>

<html>
  <head>
    <link rel="StyleSheet" href="/assets/css/admin.css" type="text/css">
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
      <img src='/assets/img/icons/new_icon.png'>
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
                <button class='CRUD-button edit' type='submit'><img src='/assets/img/icons/edit_icon.png'></button>
              </form>
              <form class='CRUD-button-container' action='/admin/diseases/". $c->getCommunityId() ."' method='DELETE'>
                <button class='CRUD-button delete' type='submit'><img src='/assets/img/icons/delete_icon.png'></button>
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
