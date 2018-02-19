<?php
  include_once('../../pages/adminHead.php');

  include_once("ArticleCollector.php");
  $ArticleCollectorObj = new ArticleCollector();
?>

      <title>Artículos</title>
    </head>
  <body>

    <section id="content">
      <div class="CRUDContainer">
        <h1>Artículos</h1>
          <a class='CRUD-button insert' href='/admin/articles/form-article.php'>
            <img src='/assets/img/icons/new_icon.png'>
          </a>
        <table>
            <thead>
              <tr>
                <th>Article Id</th>
                <th>Author Id</th>
                <th>Post Datetime</th>
                <th>Title</th>
                <th>Image URL</th>
                <th>Content</th>
                <th>Last Mod Datetime</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>

      <?php

        foreach ($ArticleCollectorObj->showArticles() as $c){
          echo "<tr>";
          echo "<td><b class='table-cell-label'>Article Id</b><span class='table-cell-content'>". $c->getArticleId() ."</span></td>";
          echo "<td><b class='table-cell-label'>Author Id</b><span class='table-cell-content'>". $c->getAuthorId() ."</span></td>";
          echo "<td><b class='table-cell-label'>Post Datetime</b><span class='table-cell-content'>". $c->getPostDatetime() ."</span></td>";
          echo "<td><b class='table-cell-label'>Title</b><span class='table-cell-content'>". $c->getTitle() ."</span></td>";
          echo "<td><b class='table-cell-label'>Image URL</b><span class='table-cell-content'>". $c->getImageUrl() ."</span></td>";
          echo "<td><b class='table-cell-label'>Content</b><span class='table-cell-content'>". $c->getContent() ."</span></td>";
          echo "<td><b class='table-cell-label'>Last Mod Datetime</b><span class='table-cell-content'>". $c->getLastModDatetime() ."</span></td>";
          echo "<td>
                  <b class='table-cell-label'>Actions</b>
                  <span>
                      <a class='CRUD-button edit' href='/admin/articles/form-article.php?articleId=". $c->getArticleId() ."'>
                        <img src='/assets/img/icons/edit_icon.png'>
                      </a>
                      <a class='CRUD-button delete' href='/admin/articles/delete-article.php?articleId=". $c->getArticleId() ."'>
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
