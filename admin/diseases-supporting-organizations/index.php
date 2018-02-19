<?php
  include_once('../../pages/adminHead.php');

  include_once("DiseaseOrgCollector.php");
  $DiseaseOrgCollectorObj = new DiseaseOrgCollector();
?>

    <title>Enfermedades-Organizaciones</title>
  </head>
  <body>
    <section id="content">
      <div class="CRUDContainer">
        <h1>Enfermedades-Organizaciones</h1>
          <a class='CRUD-button insert' href='/admin/diseases-supporting-organizations/form-disease-org.php'>
            <img src='/assets/img/icons/new_icon.png'>
          </a>
        <table>
          <thead>
            <tr>
              <th>Disease Id</th>
              <th>Organization Id</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>

    <?php

      foreach ($DiseaseOrgCollectorObj->showDiseasesOrg() as $c){
        echo "<tr>";
        echo "<td><b class='table-cell-label'>Disease Id</b><span class='table-cell-content'>". $c->getDiseaseId() ."</span></td>";
        echo "<td><b class='table-cell-label'>Organization ID</b><span class='table-cell-content'>". $c->getSoId() ."</span></td>";
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
      ?>

          </tbody>
        </table>
      </div>
    </section>
  <?php include_once('../../pages/adminMenu.php'); ?>
  </body>
</html>
