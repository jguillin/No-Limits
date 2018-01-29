<?php

  // session_start();

  include ('../src/View.php');


  switch ($_SERVER['REQUEST_URI']) {
    case '/':
      View::render("home");
      break;
    case '/noticias':
      View::render("noticias");
      break;
    case '/comunidades':
      View::render("comunidades");
      break;
    case '/enciclopedia':
      View::render("enciclopedia");
      break;
    case '/login':
      View::render("login_form");
      break;
    case '/login_validation':
      require_once('../src/login_validation.php');
      break;
    case '/logout':
      require_once('../src/logout.php');
      break;
    case '/signup':
      View::render("signup_form");
      break;
    case '/admin':
      View::render("adminIndex");
      break;
    default:
      echo "ERROR";
        View::render("error");
      break;
  }
?>
