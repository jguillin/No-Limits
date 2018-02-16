<?php

include_once('Diseases.php');
include_once(dirname(__DIR__).'/Collector.php');

class DiseaseCollector extends Collector
{

  function showDiseases() {
    $rows = self::$db->getRows("SELECT * FROM diseases");

    $arrayDemo= array();
    foreach ($rows as $c){
      $aux = new Disease($c{'disease_id'},$c{'name'},$c{'synonyms'},$c{'description'},$c{'symptoms'},$c{'causes'},$c{'affected_populations'},$c{'related_disorders'},$c{'diagnosis'},$c{'treatment'},$c{'investigational_therapies'},$c{'subdivisions'});
      array_push($arrayDemo, $aux);
    }
    return $arrayDemo;
  }


  //Edita un usuario
 function showDisease($id){
    $ObjDisease = (object)[];
    $response = ['found'=>false];
    try {
      $row = self::$db->getRows("SELECT * FROM diseases where disease_id= ? ", array("{$id}"));
      if (!empty($row)){
        $ObjDisease = new Disease($row[0]{'disease_id'},$row[0]{'name'},$row[0]{'synonyms'},$row[0]{'description'},$row[0]{'symptoms'},$row[0]{'causes'},$row[0]{'affected_populations'},$row[0]{'related_disorders'},$row[0]{'diagnosis'},$row[0]{'treatment'},$row[0]{'investigational_therapies'},$row[0]{'subdivisions'});
        $response['found'] = true;
        $response['user'] = $ObjDisease;
      }
      return $response;
    } catch (\Exception $e) {
      echo $e;
    }

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
  

}

?>
