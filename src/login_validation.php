<?php
  session_start();

  include_once('../admin/users/UserCollector.php');
  include_once('../admin/users/User.php');

  $user = $_POST['username'];
  $password = $_POST['password'];

    $UserCollectorObj = new UserCollector();
  // $ObjUser = $UserCollectorObj->loginUser($user, $password);
  //
  // print_r($ObjUser);

  //
  //

  // if($_SESSION['MiSesion']=="valor"){
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
      echo "USUARIO INCORRECTO";
      session_destroy();
      echo "<a href = '/pages/login_form.php'>Volver</a>";
  }


?>
