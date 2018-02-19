<?php
  session_start();
?>

<html>
  <head>
    <link rel="StyleSheet" href="/assets/css/admin.css" type="text/css">
  </head>
<body>

<?php

  include_once('../../pages/adminMenu.php');

  include_once("DiseaseOrgCollector.php");

  $DiseaseOrgCollectorObj = new DiseaseOrgCollector();

?>
  <section id="content">
    <h1>Organizaciones que apoyan la enfermedad</h1>
    <br>
      <a class='CRUD-button insert' href='/admin/diseases-supporting-organizations/form-disease-org.php?diseaseId='>
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

  foreach ($DiseaseOrgCollectorObj->showDiseasesOrg() as $c){

    echo "<tr>";
    echo "<td><b class='table-cell-label'>Disease Id</b><span class='table-cell-content'>". $c->getDiseaseId() ."</span></td>";
    echo "<td><b class='table-cell-label'>Org ID</b><span class='table-cell-content'>". $c->getSoId() ."</span></td>";
    echo "<td>
              <b class='table-cell-label'>Actions</b>
              <span>
                  <a class='CRUD-button edit' href='/admin/diseases-supporting-organizations/form-disease-org.php?diseaseId=". $c->getDiseaseId() ."'>
                    <img src='/assets/img/icons/edit_icon.png'>
                  </a>
                  <a class='CRUD-button delete' href='/admin/diseases-supporting-organizations/delete-disease-org.php?diseaseId=". $c->getDiseaseId() ."'>
                    <img src='/assets/img/icons/delete_icon.png'>
                  </a>
              </span>
            </td>";

    echo "</tr>";

  }

  echo "</tbody></table>";

  ?>

</body>
</html>
