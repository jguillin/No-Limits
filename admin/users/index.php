<?php
  include_once('../../pages/adminHead.php');

  include_once("UserCollector.php");
  $UserCollectorObj = new UserCollector();
?>

      <title>Usuarios</title>
    </head>
  <body>

    <section id="content">
      <div class="CRUDContainer">
        <h1>Usuarios</h1>
          <a class='CRUD-button insert' href='/admin/users/form-user.php'>
            <img src='/assets/img/icons/new_icon.png'>
          </a>
        <table>
            <thead>
              <tr>
                <th>userId</th>
                <th>username</th>
                <th>password</th>
                <th>name</th>
                <th>lastname</th>
                <th>birthdate</th>
                <th>email</th>
                <th>sex</th>
                <th>role</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
      <?php

        foreach ($UserCollectorObj->showUsers() as $c){
          echo "<tr>";
          echo "<td><b class='table-cell-label'>userId</b><span class='table-cell-content'>". $c->getUserId() ."</span></td>";
          echo "<td><b class='table-cell-label'>username</b><span class='table-cell-content'>". $c->getUsername() ."</span></td>";
          echo "<td><b class='table-cell-label'>password</b><span class='table-cell-content'>". $c->getPassword() ."</span></td>";
          echo "<td><b class='table-cell-label'>name</b><span class='table-cell-content'>". $c->getName() ."</span></td>";
          echo "<td><b class='table-cell-label'>lastname</b><span class='table-cell-content'>". $c->getLastname() ."</span></td>";
          echo "<td><b class='table-cell-label'>birthdate</b><span class='table-cell-content'>". $c->getBirthdate() ."</span></td>";
          echo "<td><b class='table-cell-label'>email</b><span class='table-cell-content'>". $c->getEmail() ."</span></td>";
          echo "<td><b class='table-cell-label'>sex</b><span class='table-cell-content'>". $c->getSex() ."</span></td>";
          echo "<td><b class='table-cell-label'>role</b><span class='table-cell-content'>". $c->getRole() ."</span></td>";
          echo "<td>
                  <b class='table-cell-label'>Actions</b>
                  <span>
                      <a class='CRUD-button edit' href='/admin/users/form-user.php?userId=". $c->getUserId() ."'>
                        <img src='/assets/img/icons/edit_icon.png'>
                      </a>
                      <a class='CRUD-button delete' href='/admin/users/delete-user.php?userId=". $c->getUserId() ."'>
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
