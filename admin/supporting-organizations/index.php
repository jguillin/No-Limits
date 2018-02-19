<?php
  include_once('../../pages/adminHead.php');

  include_once("SorgCollector.php");
  $SorgCollectorObj = new SorgCollector();
?>

    <title>Organizaciones</title>
  </head>
  <body>

    <section id="content">
      <div class="CRUDContainer">
        <h1>Organizaciones</h1>
          <a class='CRUD-button insert' href='/admin/supporting-organizations/form-so.php'>
            <img src='/assets/img/icons/new_icon.png'>
          </a>
        <table>
          <thead>
            <tr>
              <th>SoId</th>
              <th>Name</th>
              <th>Address</th>
              <th>Phone Number</th>
              <th>Website</th>
              <th>Email</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
      <?php

        foreach ($SorgCollectorObj->showSorgs() as $c){
          echo "<tr>";
          echo "<td><b class='table-cell-label'>SoId</b><span class='table-cell-content'>". $c->getSoId() ."</span></td>";
          echo "<td><b class='table-cell-label'>Name</b><span class='table-cell-content'>". $c->getName() ."</span></td>";
          echo "<td><b class='table-cell-label'>Address</b><span class='table-cell-content'>". $c->getAddress() ."</span></td>";
          echo "<td><b class='table-cell-label'>Phone Number</b><span class='table-cell-content'>". $c->getPhone() ."</span></td>";
          echo "<td><b class='table-cell-label'>Website</b><span class='table-cell-content'>". $c->getWebsite() ."</span></td>";
          echo "<td><b class='table-cell-label'>Email</b><span class='table-cell-content'>". $c->getEmail() ."</span></td>";

          echo "<td>
                  <b class='table-cell-label'>Actions</b>
                  <span>
                      <a class='CRUD-button edit' href='/admin/supporting-organizations/form-so.php?soId=". $c->getSoId() ."'>
                        <img src='/assets/img/icons/edit_icon.png'>
                      </a>
                      <a class='CRUD-button delete' href='/admin/supporting-organizations/delete-so.php?soId=". $c->getSoId() ."'>
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
