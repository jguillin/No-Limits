<?php
include_once('dataBase.php');

// Define configuration

//HEROKU DATABASE
define("DB_HOST", "localhost");
define("DB_USER", "postgres");
define("DB_PASS", "usuario");
define("DB_NAME", "Bdatos");

// define("DB_HOST", "localhost");
// define("DB_USER", "postgres");
// define("DB_PASS", "usuario");
// define("DB_NAME", "BD-No-Limits");


class Collector extends dataBase
{
  public static $db;
  private $host      = DB_HOST;
  private $username  = DB_USER;
  private $password  = DB_PASS;
  private $dbname    = DB_NAME;

  public function __construct()
  {
    self::$db = new dataBase($this->username, $this->password, $this->host, $this->dbname);
  }

}

?>
