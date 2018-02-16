<?php

  class View
  {
    public static function render($view, $args = [])
      {
          extract($args, EXTR_SKIP);
          $file = dirname(__DIR__) . "/pages/$view.php";  // relative to Core directory
          if (is_readable($file)) {
              require_once($file);
          } else {
              throw new \Exception("$file not found");
          }
      }
  }

?>
