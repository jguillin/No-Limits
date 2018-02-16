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
  include_once("DiseaseUserCollector.php");

  $DiseaseUserCollectorObj = new DiseaseUserCollector();

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
          <th>Disease Id</th>
          <th>So Id</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>

<?php

  foreach ($DiseaseUserCollectorObj->showDiseasesUser() as $c){
    echo "<tr>";
    echo "<td><b class='table-cell-label'>Disease Id</b><span class='table-cell-content'>". $c->getUserId() ."</span></td>";
    echo "<td><b class='table-cell-label'>So Id</b><span class='table-cell-content'>". $c->getDiseaseId() ."</span></td>";
    echo "<td>
            <b class='table-cell-label'>Actions</b>
            <span>
              <form class='CRUD-button-container' action='/admin/diseases/". $c->getUserId() ."' method='GET'>
                <button class='CRUD-button edit' type='submit'><img src='/assets/img/icons/edit_icon.png'></button>
              </form>
              <form class='CRUD-button-container' action='/admin/diseases/". $c->getUserId() ."' method='DELETE'>
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
