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
      <li><a href='/admin/users'><i class="fa fa-users"></i>Usuarios</a></li>
      <li><a href='/admin/articles'><i class="fa fa-newspaper"></i>Artículos</a></li>
      <li><a href='/admin/articles-comments'><i class="fa fa-comments"></i>Comentarios</a></li>
      <li><a href='/admin/diseases'>Enfermedades</a></li>
      <li><a href='/admin/diseases-supporting-organizations'>Organizaciones que apoyan la enfermedad</a></li>
      <li><a href='/admin/supporting-organizations'><i class="fa fa-medkit"></i>Organizaciones</a></li>


      <li><a href='/admin'><i class="fa fa-home"></i>Volver a ADMIN</a></li>
      <li><a href='/src/logout.php'><i class="fa fa-sign-out-alt"></i>Salir</a></li>
    </ul>
  </nav>
</div>
