<div id="menuContainer">
  <nav id="menuAdminCRUD" class="userMenu">
    <ul>
      <li><a href="/"><img class="menuLogo" src="/assets/img/icons/logo1.png"/><img class="menuIcon" src="/assets/img/icons/favicon-32x32.png"/></a></li>
      <li><a href="#"><span class="menuTableName"><?php echo "User: " . $_SESSION['username']. " (admin)"; ?></span></a></li>
      <li><a href='/admin/users'><i class="fa fa-users fa-2x"></i><span class="menuTableName">Usuarios</span></a></li>
      <li><a href='/admin/articles'><i class="fa fa-newspaper-o fa-2x"></i></i><span class="menuTableName">Artículos</span></a></li>
      <li><a href='/admin/articles-comments'><i class="fa fa-comments fa-2x"></i><span class="menuTableName">Comentarios</span></a></li>
      <!-- <li><a href='/admin/diseases-users'><i class="fa fa-wheelchair fa-2x"></i><span class="menuTableName">Enfermedades-Usuarios</span></a></li> -->
      <li><a href='/admin/diseases'><i class="fa fa-heartbeat fa-2x"></i><span class="menuTableName">Enfermedades</span></a></li>
      <li><a href='/admin/diseases-supporting-organizations'><i class="fa fa-ambulance fa-2x"></i><span class="menuTableName">Enfermedades-Organizaciones</span></a></li>
      <li><a href='/admin/supporting-organizations'><i class="fa fa-hospital-o fa-2x"></i><span class="menuTableName">Organizaciones</span></a></li>


      <li><a href='/admin'><i class="fa fa-home fa-2x"></i><span class="menuTableName">Volver a ADMIN</span></a></li>
      <li><a href='/src/logout.php'><i class="fa fa-sign-out fa-2x"></i><span class="menuTableName">Salir</span></a></li>
    </ul>
  </nav>
</div>
