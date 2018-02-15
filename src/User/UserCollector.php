<?php

include_once('User.php');
include_once('../src/Collector.php');

class UserCollector extends Collector
{

  function showUsers() {
    $rows = self::$db->getRows("SELECT * FROM users");

    $arrayDemo= array();
    foreach ($rows as $c){
      $aux = new User($c{'user_id'},$c{'username'},$c{'password'},$c{'name'},$c{'lastname'},$c{'birthdate'},$c{'email'},$c{'sex'},$c{'role'});
      array_push($arrayDemo, $aux);
    }
    return $arrayDemo;
  }

  //Edita un usuario
  function showUser($id){
    $row = self::$db->getRows("SELECT * FROM users where user_id= ? ", array("{$id}"));

    $ObjDemo = new User($row[0]{'user_id'},$row[0]{'username'},$row[0]{'password'},$row[0]{'name'},$row[0]{'lastname'},$row[0]{'birthdate'},$row[0]{'email'},$row[0]{'sex'},$row[0]{'role'});
    return $ObjDemo;

}

  function loginUser($user, $password){
    $response = [];
    try {

      $row = self::$db->getRows("SELECT * FROM users where username=? AND password=MD5(?)", array("{$user}", "{$password}"));
      if (!empty($row)){
        $ObjUser = new User($row[0]{'user_id'},$row[0]{'username'},$row[0]{'password'},$row[0]{'name'},$row[0]{'lastname'},$row[0]{'birthdate'},$row[0]{'email'},$row[0]{'sex'},$row[0]{'role'});
        $response['username'] = $ObjUser->getUsername();
        $response['role'] = $ObjUser->getRole();
        return $response;
      }
    } catch (\Exception $e) {
      return $response;
    }

  }

  //Actualiza un usuario
  function updateUser($id,$nombre){
    $insertrow = self::$db->updateRow("UPDATE users SET nombre= ? WHERE user_id= ?", array("{$nombre}", $id));

  }

  //Elimina un usuario
  function deleteUser($userId){
    $deleterow = self::$db->deleteRow("DELETE FROM users WHERE user_id = ?", array("{$userId}"));

  }

  //Crea un nuevo usuario
  function createUser($username,$password,$name,$lastname,$birthdate,$email,$sex,$role){

    try {
      $insertarrow = self::$db->insertRow("INSERT INTO users (username,\"password\",\"name\",lastname,birthdate,email,sex,role) VALUES (?,md5(?),?,?,?,?,?,?)", array ("{$username}","{$password}","{$name}","{$lastname}","{$birthdate}","{$email}","{$sex}","{$role}"));
      return true;
    } catch (\Exception $e) {
      return false;
    }

  }

}

?>
