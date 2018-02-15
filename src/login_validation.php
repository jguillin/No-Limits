<?php

  session_start();

  include_once('User/UserCollector.php');
  include_once('User/User.php');


  $user = $_POST['usuario'];
  $password = $_POST['clave'];

    $UserCollectorObj = new UserCollector();
  // $ObjUser = $UserCollectorObj->loginUser($user, $password);
  //
  // print_r($ObjUser);

  //
  //

  // if($_SESSION['MiSesion']=="valor"){
$response = $UserCollectorObj->loginUser($user, $password);

  if (!empty($response)){

      $_SESSION ['user'] = $response[username];
      $_SESSION ['rol'] = $response[role];

      // print_r($_SESSION);
      if ($_SESSION ['rol']=='a'){
        // echo "pials";
        header("Location: /admin");
      }else {
        header("Location: /");
      }
    }else{
      //usuario incorrecto
      echo "error";
      session_destroy();
      echo "<a href = '/login'>Volver</a>";
  }


?>
