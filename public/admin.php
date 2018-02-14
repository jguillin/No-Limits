<?php

  // session_start();

  if(isset($_SESSION['user']) && $_SESSION['rol']=='a'){
     // echo "<p> Hola usuario:(" . $_SESSION['user']. ")[<a href='/logout'>Salir</a>]";

    // include ('../src/View.php');
    // View::render("adminIndex");

    switch ($_SERVER['REQUEST_URI']) {
      case '/admin':
      case '/admin/':
        View::render("adminIndex");
        break;
      case '/admin/users':
        require_once('../src/User/showUsers.php');
        break;
      default:
        // echo "ERROR";
          View::render("error");
        break;
    }
  }else {
    header("Location: /login");
  }
?>
