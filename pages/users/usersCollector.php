<?php

include_once('users.php');
include_once('collector.php');

class DemoCollector extends Collector
{
  
  function showDemos() {
    $rows = self::$db->getRows("SELECT * FROM users");        
    
    $arrayDemo= array();        
    foreach ($rows as $c){
      $aux = new Demo($c{'user_id'},$c{'user'},$c{'password'},$c{'name'},$c{'lastname'},$c{'birthdate'},$c{'email'},$c{'sex'},$c{'rol'});
      array_push($arrayDemo, $aux);
    }
    return $arrayDemo;        
  }

  //Edita un usuario
  function showDemo($id){
    $row = self::$db->getRows("SELECT * FROM users where user_id= ? ", array("{$id}"));

    $ObjDemo = new Demo($row[0]{'user_id'},$row[0]{'user'},$row[0]{'password'},$row[0]{'name'},$row[0]{'lastname'},$row[0]{'birthdate'},$row[0]{'email'},$row[0]{'sex'},$row[0]{'rol'});
    return $ObjDemo;

}

//Actualiza un usuario
function updateDemo($id,$nombre){
  $insertrow = self::$db->updateRow("UPDATE public.users SET nombre= ? WHERE user_id= ?", array("{$nombre}", $id));

}

//Elimina un usuario
function deleteDemo($id){
  $deleterow = self::$db->deleteRow("DELETE FROM public.users WHERE user_id= ?", array("{$id}"));

}

//Crea un nuevo usuario
function createDemo($nombre){
  $insertarrow = self::$db->insertRow("INSERT INTO public.users (nombre) VALUES (?)", array ("{$nombre}"));

}

}

?>