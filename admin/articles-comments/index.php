<?php
  include_once('../../pages/adminHead.php');

  include_once("ArtCommentCollector.php");
  $ArtCommentCollectorObj = new ArtCommentCollector();
?>

    <title>Comentarios</title>
  </head>
  <body>
    <section id="content">
      <div class="CRUDContainer">
        <h1>Comentarios</h1>
          <a class='CRUD-button insert' href='/admin/articles-comments/form-article-comments.php'>
            <img src='/assets/img/icons/new_icon.png'>
          </a>
        <table>
          <thead>
            <tr>
              <th>Comment Id</th>
              <th>Article Id</th>
              <th>User Id</th>
              <th>Content</th>
              <th>Parent Comment Id</th>
              <th>Post DateTime</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>

      <?php

        foreach ($ArtCommentCollectorObj->showArtComments() as $c){
          echo "<tr>";
          echo "<td><b class='table-cell-label'>Comment Id</b><span class='table-cell-content'>". $c->getCommentId() ."</span></td>";
          echo "<td><b class='table-cell-label'>Article Id</b><span class='table-cell-content'>". $c->getArticleId() ."</span></td>";
          echo "<td><b class='table-cell-label'>User Id</b><span class='table-cell-content'>". $c->getUserId() ."</span></td>";
          echo "<td><b class='table-cell-label'>Content</b><span class='table-cell-content'>". $c->getContent() ."</span></td>";
          echo "<td><b class='table-cell-label'>Parent Comment Id</b><span class='table-cell-content'>". $c->getParentCommentId() ."</span></td>";
          echo "<td><b class='table-cell-label'>Post DateTime</b><span class='table-cell-content'>". $c->getPostDatetime() ."</span></td>";
          echo "<td>
                  <b class='table-cell-label'>Actions</b>
                  <span>
                      <a class='CRUD-button edit' href='/admin/articles-comments/form-article-comments.php?commentId=". $c->getCommentId() ."'>
                        <img src='/assets/img/icons/edit_icon.png'>
                      </a>
                      <a class='CRUD-button delete' href='/admin/articles-comments/delete-article-comments.php?commentId=". $c->getCommentId() ."'>
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
