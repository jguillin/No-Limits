<?php

include_once('Diseases.php');
include_once('../src/Collector.php');

class DiseaseCollector extends Collector
{

  function showDiseases() {
    $rows = self::$db->getRows("SELECT * FROM diseases");

    $arrayDemo= array();
    foreach ($rows as $c){
      $aux = new Disease($c{'disease_id'},$c{'name'},$c{'synonyms'},$c{'description'},$c{'symptoms'},$c{'causes'},$c{'affected_populations'},$c{'related_disordes'},$c{'diagnosis'},$c{'treatment'},$c{'investigational_therapies'},$c{'subdivisions'});
      array_push($arrayDemo, $aux);
    }
    return $arrayDemo;
  }

/*
  //Edita un usuario
  function showUser($id){
    $row = self::$db->getRows("SELECT * FROM users where user_id= ? ", array("{$id}"));

    $ObjDemo = new User($row[0]{'user_id'},$row[0]{'username'},$row[0]{'password'},$row[0]{'name'},$row[0]{'lastname'},$row[0]{'birthdate'},$row[0]{'email'},$row[0]{'sex'},$row[0]{'rol'});
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
    $insertrow = self::$db->updateRow("UPDATE public.users SET nombre= ? WHERE user_id= ?", array("{$nombre}", $id));

  }

  //Elimina un usuario
  function deleteUser($id){
    $deleterow = self::$db->deleteRow("DELETE FROM public.users WHERE user_id= ?", array("{$id}"));

  }

  //Crea un nuevo usuario
  function createUser($nombre){
    $insertarrow = self::$db->insertRow("INSERT INTO public.users (nombre) VALUES (?)", array ("{$nombre}"));

  }
  */

}

?>
