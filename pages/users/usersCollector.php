<?php

include_once('Demo.php');
include_once('Collector.php');

class DemoCollector extends Collector
{
  
  function showDemos() {
    $rows = self::$db->getRows("SELECT * FROM demo ");        
    
    $arrayDemo= array();        
    foreach ($rows as $c){
      $aux = new Demo($c{'id_demo'},$c{'nombre'});
      array_push($arrayDemo, $aux);
    }
    return $arrayDemo;        
  }

  function showDemos() {
    $rows = self::$db->getRows("SELECT * FROM users");        
    
    $arrayDemo= array();        
    foreach ($rows as $c){
      $aux = new Demo($c{'user_id'},$c{'user'},$c{'password'},$c{'name'},$c{'lastname'},$c{'birthdate'},$c{'email'},$c{'sex'},$c{'rol'});
      array_push($arrayDemo, $aux);
    }
    return $arrayDemo;        
  }
/*
  function showDemo($id){
    $row = self::$db->getRows("SELECT * FROM demo where id_demo= ? ", array("{$id}"));

    $ObjDemo = new Demo($row[0]{'id_demo'},$row[0]{'nombre'});
    return $ObjDemo;

}*/

/*
function updateDemo($id,$nombre){
  $insertrow = self::$db->updateRow("UPDATE public.demo SET nombre= ? WHERE id_demo= ?", array("{$nombre}", $id));

}

function deleteDemo($id){
  $deleterow = self::$db->deleteRow("DELETE FROM public.demo WHERE id_demo= ?", array("{$id}"));

}

function createDemo($nombre){
  $insertarrow = self::$db->insertRow("INSERT INTO public.demo (nombre) VALUES (?)", array ("{$nombre}"));

}
*/
}

?>