<?php
  include_once('../../pages/adminHead.php');
  include_once("User.php");
  $ObjUser = new User("","","","","","","","","");
  $title = 'Nuevo Usuario';
  $action = '/admin/users/create-user.php';
  $showForm = true;

  if (isset($_GET["userId"]) && is_numeric($_GET["userId"])){
    //ID seteada
    $id = $_GET["userId"];
    include_once("UserCollector.php");
    $UserCollectorObj = new UserCollector();
    $response = $UserCollectorObj->showUser($id);
    if ($response['found']){
      //Usuario encontrado
      $ObjUser = $response['user'];
      $title = 'Editar Usuario';
      $action = '/admin/users/update-user.php';
    }else {
      //Usuario no encontrado
      $showForm = false;
      $title = 'ERROR - Usuario no Encontrado';
    }
  }

if ($showForm){
?>

    <title><?php echo $title; ?></title>
  </head>
  <body>

    <section id="content">
      <div class="form-Container">
        <form class='form' action="<?php echo $action; ?>" method="POST">
            <h1><?php echo $title; ?></h1>
            <?php
              if ($title === 'Editar Usuario'){
                ?>
                <label>UserId</label>
            		<input class='form-TextBox' type="text" name="userId" readonly value="<?php echo $ObjUser->getUserId(); ?>"/>
                <?php
              }
              ?>
        		<label>Usuario</label>
        		<input class='form-TextBox' type="text" name="username" maxlength="20" autofocus required value="<?php echo $ObjUser->getUsername(); ?>"/>
        		<label>Contraseña</label>
        		<input class='form-TextBox' type="password" name="password" maxlength="32" required value="<?php echo $ObjUser->getPassword(); ?>"/>
        		<label>Nombre</label>
        		<input class='form-TextBox' type="text" name="name" maxlength="25" value="<?php echo $ObjUser->getName(); ?>"/>
        		<label>Apellido</label>
        		<input class='form-TextBox' type="text" name="lastname" maxlength="25" value="<?php echo $ObjUser->getLastname(); ?>"/>
        		<label>Fecha de nacimiento</label>
        		<input class='form-TextBox' type="date" name="birthdate" value="<?php echo $ObjUser->getBirthdate(); ?>"/>
        		<label>Email</label>
        		<input class='form-TextBox' type="email" placeholder="example@aol.com" name="email" maxlength="50" value="<?php echo $ObjUser->getEmail(); ?>"/>
        		<label>Sexo</label>
            <select class='form-TextBox' name="sex" >
              <?php
                $aux = ['m' => 'Masculino','f'=>'Femenino', 'o'=>'Otro'];
                foreach ($aux as $value => $text) {
                  if ($ObjUser->getSex() === $value){
                    echo '<option value="'. $value .'" selected>'. $text .'</option>';
                  }else {
                    echo '<option value="'. $value .'">'. $text .'</option>';
                  }
                }
              ?>
            </select>
        		<label>Rol</label>
            <select class='form-TextBox' name="role" >
              <?php
                $aux = ['a' => 'Administrador','u'=>'Usuario'];
                foreach ($aux as $value => $text) {
                  if ($ObjUser->getRole() === $value){
                    echo '<option value="'. $value .'" selected>'. $text .'</option>';
                  }else {
                    echo '<option value="'. $value .'">'. $text .'</option>';
                  }
                }
              ?>
            </select>
        		</br>
            <button class='form-button' type="submit">Guardar</button>

            <a id="cancelButton" class='form-button' href='/admin/users'>Cancelar</a>

        </form>
      </div>

<?php }else{ ?>
      <title><?php echo $title; ?></title>
    </head>
    <body>
      <section id="content">
        <h2><?php echo $title; ?></h2><br>
        <div><a id='cancelButton' class='form-button' href="/admin/users">Volver</a></div>

<?php } ?>

      </section>
    <?php include_once('../../pages/adminMenu.php'); ?>
  </body>
</html>
