<?php

include_once('dataBase.php');

// Define configuration

//HEROKU DATABASE
define("DB_HOST", "ec2-54-221-198-206.compute-1.amazonaws.com");
define("DB_USER", "nlvmxgufjdyvef");
define("DB_PASS", "6d4638c7274c4e92f361b9d7854651256413f88a6a21dcd76781c02fb8809b2d");
define("DB_NAME", "die4odlfjih80");

//LOCAL DATABASE
 // define("DB_HOST", "localhost");
  //define("DB_USER", "postgres");
  //define("DB_PASS", "usuario");
  //define("DB_NAME", "Bdatos");


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
