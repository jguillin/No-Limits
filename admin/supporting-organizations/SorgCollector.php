<?php

include_once('Sorg.php');
include_once(dirname(__DIR__).'/Collector.php');

error_reporting(E_ALL);

class SorgCollector extends Collector
{

  function showSorgs() {
    $rows = self::$db->getRows("SELECT * FROM supporting_organizations");

    $arrayDemo= array();
    foreach ($rows as $c){
      $aux = new Sorg($c{'so_id'},$c{'name'},$c{'address'},$c{'phoneNumber'},$c{'website'},$c{'email'});
      array_push($arrayDemo, $aux);
    }
    return $arrayDemo;
  }

  //Edita un usuario
  function showSorg($id){
    $ObjSorg = (object)[];
    $response = ['found'=>false];
    try {
      $row = self::$db->getRows("SELECT * FROM supporting_organizations where so_id= ? ", array("{$id}"));
      if (!empty($row)){
        $ObjSorg = new Sorg($row[0]{'so_id'},$row[0]{'name'},$row[0]{'address'},$row[0]{'phoneNumber'},$row[0]{'website'},$row[0]{'email'});
        $response['found'] = true;
        $response['sorg'] = $ObjSorg;
      }
      return $response;
    } catch (\Exception $e) {
      echo $e;
    }

}

  //Actualiza un usuario
  function updateSorg($soId, $name, $address, $phone, $website, $email){
    try {
      $insertrow = self::$db->updateRow("UPDATE supporting_organizations SET \"name\"=?, address=?, \"phoneNumber\"=?, website=?, email=? WHERE so_id= ?", array("{$name}","{$address}","{$phone}","{$website}","{$email}","{$soId}"));
      return true;
    } catch (\Exception $e) {
      echo $e;
      return false;
    }

  }

  //Elimina un usuario
  function deleteSorg($Id){
    try {
      $deleterow = self::$db->deleteRow("DELETE FROM supporting_organizations WHERE so_id = ?", array("{$Id}"));
      return true;
    } catch (\Exception $e) {
      echo $e;
      return false;
    }


  }

  //Crea un nuevo usuario
  function createSorg($name, $address, $phone, $website, $email){
    try {
      $insertarrow = self::$db->insertRow("INSERT INTO supporting_organizations (\"name\", address, \"phoneNumber\", website, email) VALUES (?,?,?,?,?)", array ("{$name}","{$address}","{$phone}","{$website}","{$email}"));
      return true;
    } catch (\Exception $e) {
      echo $e;
      return false;
    }

  }

}

?>
