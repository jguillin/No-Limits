<?php
  session_start();

  include_once('../admin/users/UserCollector.php');
  include_once('../admin/users/User.php');

  $user = $_POST['username'];
  $password = $_POST['password'];

  $UserCollectorObj = new UserCollector();

  $response = $UserCollectorObj->loginUser($user, $password);

  if (!empty($response)){

      $_SESSION ['username'] = $response[username];
      $_SESSION ['role'] = $response[role];

      // print_r($_SESSION);
      if ($_SESSION ['role']=='a'){
        // echo "pials";
        header("Location: /admin");
      }else {
        header("Location: /");
      }
    }else{
      //usuario incorrecto
      echo "<h2>USUARIO INCORRECTO</h2><br>";
      session_destroy();
      //echo "<div><a id='cancelButton' class='form-button' href='/pages/login_form.php'>Volver a Formulario</a></div>";
      echo "<a href = '/pages/login_form.php'>Volver</a>";
  }


?>
