<?php
  // error_reporting(0);
  session_start();

  include ('src/View.php');

    View::render('home');

?>
