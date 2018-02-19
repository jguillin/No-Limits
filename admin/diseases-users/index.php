<?php
  include_once('../../pages/adminHead.php');

  include_once("DiseaseUserCollector.php");
  $DiseaseUserCollectorObj = new DiseaseUserCollector();

  $userId = $_GET['userId'];
?>
    <title>Enfermedades - Usuarios</title>
  </head>
  <body>
    <section id="content">
      <div class="CRUDContainer">
        <h1>Sustentación: Enfermedades - Usuario ID: <?php echo $userId; ?></h1>
          <!-- <a class='CRUD-button insert' href='/admin/diseases-users/form-disease-user.php'>
            <img src='/assets/img/icons/new_icon.png'>
          </a> -->
        <table>
          <thead>
            <tr>
              <th>User Id</th>
              <th>Disease Id</th>

            </tr>
          </thead>
          <tbody>

    <?php

      foreach ($DiseaseUserCollectorObj->showDiseasesUsers($userId) as $c){
        echo "<tr>";
        echo "<td><b class='table-cell-label'>User Id</b><span class='table-cell-content'>". $c->getUserId() ."</span></td>";
        echo "<td><b class='table-cell-label'>Disease Id</b><span class='table-cell-content'>". $c->getDiseaseId() ."</span></td>";

        echo "</tr>";
      }
      ?>

        </tbody>
      </table>
    </div>
    <div><a id='cancelButton' class='form-button' href="/admin/users">Volver</a></div>
  </section>
<?php include_once('../../pages/adminMenu.php'); ?>
</body>
</html>
