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


      /*+++++++++++++++++USERS+++++++++++++++++++*/

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
      // case preg_match('~/admin/users/.*~', $name) ? true : false:
      //   echo $name;
        // require_once('../src/User/userFormNew.php');
        // break;


      /*++++++++++++++DISEASES+++++++++++++++++++++*/

      case '/admin/diseases': case '/admin/diseases/':
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
          require_once('../src/Diseases/ShowDiseases.php');
        }elseif ($_SERVER['REQUEST_METHOD'] == 'POST') {
          require_once('../src/Diseases/SaveDiseases.php');
        }
        break;
      case '/admin/diseases/new': case '/admin/diseases/new/':
        require_once('../src/Diseases/#');
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
