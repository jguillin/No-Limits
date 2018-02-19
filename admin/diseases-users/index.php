<?php
  include_once('../../pages/adminHead.php');

  include_once("DiseaseUserCollector.php");
  $DiseaseUserCollectorObj = new DiseaseUserCollector();
?>
    <title>Enfermedades - Usuarios</title>
  </head>
  <body>
    <section id="content">
      <div class="CRUDContainer">
        <h1>Enfermedades - Usuarios</h1>
          <a class='CRUD-button insert' href='/admin/diseases-users/form-disease-user.php'>
            <img src='/assets/img/icons/new_icon.png'>
          </a>
        <table>
          <thead>
            <tr>
              <th>User Id</th>
              <th>Disease Id</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>

    <?php

      foreach ($DiseaseUserCollectorObj->showDiseasesUser() as $c){
        echo "<tr>";
        echo "<td><b class='table-cell-label'>User Id</b><span class='table-cell-content'>". $c->getUserId() ."</span></td>";
        echo "<td><b class='table-cell-label'>Disease Id</b><span class='table-cell-content'>". $c->getDiseaseId() ."</span></td>";
        echo "<td>
                  <b class='table-cell-label'>Actions</b>
                  <span>
                      <a class='CRUD-button edit' href='/admin/diseases-users/form-disease-user.php?diseaseId=". $c->getDiseasesId() ."'>
                        <img src='/assets/img/icons/edit_icon.png'>
                      </a>
                      <a class='CRUD-button delete' href='/admin/diseases-users/delete-disease.php?diseaseId=". $c->getDiseasesId() ."'>
                        <img src='/assets/img/icons/delete_icon.png'>
                      </a>
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
