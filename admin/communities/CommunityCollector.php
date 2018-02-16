<?php

include_once('Community.php');
include_once(dirname(__DIR__).'/Collector.php');

class CommunityCollector extends Collector
{

  function showCommunities() {
    $rows = self::$db->getRows("SELECT * FROM communities");

    $arrayDemo= array();
    foreach ($rows as $c){
      $aux = new Community($c{'community_id'},$c{'name'});
      array_push($arrayDemo, $aux);
    }
    return $arrayDemo;
  }

  //Edita un usuario
  function showUser($id){
    $row = self::$db->getRows("SELECT * FROM communities where community_id= ? ", array("{$id}"));

    $ObjDemo = new User($row[0]{'community_id'},$row[0]{'name'});
    return $ObjDemo;

}

  function loginUser($user, $password){
    try {
      $row = self::$db->getRows("SELECT * FROM users where username=? AND password=MD5(?)", array("{$user}", "{$password}"));
      if (!empty($row)){
        return true;
      }
      // $ObjDemo = new User($row[0]{'user_id'},$row[0]{'username'},$row[0]{'password'},$row[0]{'name'},$row[0]{'lastname'},$row[0]{'birthdate'},$row[0]{'email'},$row[0]{'sex'},$row[0]{'rol'});
    } catch (\Exception $e) {
      return false;
    }

  }

  //Actualiza un usuario
  function updateUser($id,$nombre){
    $insertrow = self::$db->updateRow("UPDATE public.users SET nombre= ? WHERE community_id= ?", array("{$nombre}", $id));

  }

  //Elimina un usuario
  function deleteUser($id){
    $deleterow = self::$db->deleteRow("DELETE FROM public.users WHERE community_id= ?", array("{$id}"));

  }

  //Crea un nuevo usuario
  function createUser($nombre){
    $insertarrow = self::$db->insertRow("INSERT INTO public.users (nombre) VALUES (?)", array ("{$nombre}"));

  }

}

?>
