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

	<div><a style='text-decoration: none' href="/admin">Regresar a admin</a></div>	




<?php
  include_once("ArticleCollector.php");

  $ArticleCollectorObj = new ArticleCollector();

?>
  <br>
  <form action='/admin/articles/new' method="POST">
    <button class='CRUD-button insert' type='submit'>
      <img src='/assets/img/icons/new_icon.png'>
    </button>
  </form><br><br>

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
              <form class='CRUD-button-container' action='/admin/articles/". $c->getArticleIdh() ."' method='GET'>
                <button class='CRUD-button edit' type='submit'><img src='/assets/img/icons/edit_icon.png'></button>
              </form>
              <form class='CRUD-button-container' action='/admin/articles/". $c->getArticleId() ."' method='DELETE'>
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
