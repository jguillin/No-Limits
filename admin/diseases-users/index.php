<?php
  session_start();

  if(isset($_SESSION['username']) && $_SESSION['role']=='a'){


?>

<html>
  <head>
    <link rel="StyleSheet" href="/assets/css/admin.css" type="text/css">
  </head>
<body>

<?php

  include_once('../../pages/adminMenu.php');

  include_once("DiseasesCollector.php");

  $DiseaseCollectorObj = new DiseaseCollector();

?>
  <section id="content">
    <h1>Enfermedades</h1>
    <br>
      <a class='CRUD-button insert' href='/admin/diseases/form-disease.php?diseaseId='>
        <img src='/assets/img/icons/new_icon.png'>
      </a>
    <br><br>

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
                  <a class='CRUD-button edit' href='/admin/diseases/form-disease.php?diseaseId=". $c->getDiseasesId() ."'>
                    <img src='/assets/img/icons/edit_icon.png'>
                  </a>
                  <a class='CRUD-button delete' href='/admin/diseases/delete-disease.php?diseaseId=". $c->getDiseasesId() ."'>
                    <img src='/assets/img/icons/delete_icon.png'>
                  </a>
            </td>";

    echo "</tr>";
  }

  echo "</tbody></table>";

  } else {
    header("Location: /error");
  } ?>

</body>
</html>
