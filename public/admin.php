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
      case '/admin/users': case '/admin/users/':
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
          require_once('../src/User/showUsers.php');
        }elseif ($_SERVER['REQUEST_METHOD'] == 'POST') {
          require_once('../src/User/saveUser.php');
        }
        break;
      case '/admin/users/new': case '/admin/users/new/':
        require_once('../src/User/userFormNew.php');
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
