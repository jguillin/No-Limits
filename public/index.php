<?php
  // error_reporting(0);
  session_start();

  include ('../src/View.php');

  if (strpos($_SERVER['REQUEST_URI'], '/admin') === 0) {
    require_once('admin.php');
  }else{
    switch ($_SERVER['REQUEST_URI']) {
      case '/': case '/index.php': case '/index.html':
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
      case '/login': case '/login/':
        View::render("login_form");
        break;
      case '/login_validation': case '/login_validation/':
        require_once('../src/login_validation.php');
        break;
      case '/logout': case '/logout/':
        require_once('../src/logout.php');
        break;
      case '/signup': case '/signup/':
        View::render("signup_form");
        break;
      // case '/admin': case '/admin/':
      // // echo "admin";
      //   require_once('admin.php');
      //   // View::render("adminIndex");
      //   break;
      // case '/admin/users':
      //   require_once('../src/User/showUsers.php');
      //   break;
      default:
          // echo "error";
          View::render("error");
        break;
    }
  }

?>
