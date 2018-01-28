<?php
  include ('../src/View.php');


  switch ($_SERVER['REQUEST_URI']) {
    case '/':
      View::render("home");
      break;
    case '/noticias':
      View::render("noticias");
    case '/comunidades':
      View::render("comunidades");
    case '/enciclopedia':
      View::render("enciclopedia");
      break;
    case '/login':
        View::render("login_form");
    case '/signup':
        View::render("signup_form");
    default:
      echo "ERROR 404";
      break;
  }
?>
