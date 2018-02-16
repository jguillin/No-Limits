<?php
  if(isset($_SESSION['username']) && $_SESSION['role']=='a'){
  }else {
          header("Location: /pages/login_form.php");
        }
?>


<div id="menuContainer">
  <nav id="menuAdminCRUD" class="userMenu">
    <ul>
      <li><span><?php echo "USERNAME: " . $_SESSION['username']. " (admin)"; ?></span></li>
      <li><a href='/admin/users'>Users</a></li>
      <li><a href='/admin/articles'>Articles</a></li>
      <li><a href='/admin/articles-comments'>Article_comments</a></li>
      <li><a href='/admin/diseases'>Diseases</a></li>
      <li><a href='/admin/diseases-supporting-organizations'>Diseases Supporting Organizations</a></li>
      <li><a href='/admin/supporting-organizations'>Supporting Organizations</a></li>
      

      <li><a href='/admin'>Volver a ADMIN</a></li>
      <li><a href='/src/logout.php'>Salir</a></li>
    </ul>
  </nav>
</div>
