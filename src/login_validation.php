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


  if($UserCollectorObj->loginUser($user, $password)){
      $_SESSION ['user'] = $user;
      // $_SESSION ['password'] = $password;
      $_SESSION ['rol'] = 'a';
      print_r($_SESSION);
      if ($_SESSION ['rol']=='a'){
        header("Location: /admin");
      }else {
        //usuario normal regresa al home?
      };
    }else{
      //usuario incorrecto
      echo "error";
      session_destroy();
      echo "<a href = '/login'>Volver</a>";
  }


?>
