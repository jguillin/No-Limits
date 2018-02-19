<?php

include_once('DiseaseOrg.php');
include_once(dirname(__DIR__).'/Collector.php');

class DiseaseOrgCollector extends Collector
{

  function showDiseasesOrg() {
    $rows = self::$db->getRows("SELECT * FROM diseases_supporting_organizations");
    $arrayDemo= array();
    foreach ($rows as $c){
      $aux = new DiseaseOrg($c{'disease_id'},$c{'so_id'});
      array_push($arrayDemo, $aux);
    }
    return $arrayDemo;
  }


  //Edita un usuario
 function showDiseaseOrg($id){
    $ObjDiseaseOrg = (object)[];
    $response = ['found'=>false];
    try {
      $row = self::$db->getRows("SELECT * FROM diseases_supporting_organizations where disease_id= ?", array("{$id}"));
      if (!empty($row)){
        $ObjDiseaseOrg = new DiseaseOrg($row[0]{'disease_id'},$row[0]{'so_id'});
        $response['found'] = true;
        $response['user'] = $ObjDiseaseOrg;
      }
      return $response;
    } catch (\Exception $e) {
      echo $e;
    }

}



  //Actualiza un usuario
  function updateDiseaseOrg($diseaseId,$soId){
    try {
      $insertrow = self::$db->updateRow("UPDATE diseases_supporting_organizations SET so_id=? WHERE disease_id= ?", array("{$soId}","{$diseaseId}"));
      return true;
    } catch (\Exception $e) {
      echo $e;
      return false;
    }

  }


    //Elimina un usuario
  function deleteDiseaseOrg($diseaseId){
    try {
      $deleterow = self::$db->deleteRow("DELETE FROM diseases_supporting_organizations WHERE disease_id = ?", array("{$diseaseId}"));
      return true;
    } catch (\Exception $e) {
      echo $e;
      return false;
    }


  }

  //Crea un nuevo usuario
  function createDiseaseOrg($diseaseId,$soId){
    try {
      $insertarrow = self::$db->insertRow("INSERT INTO diseases_supporting_organizations (disease_id, so_id) VALUES (?,?)", array ("{$diseaseId}", "{$soId}"));
      return true;
    } catch (\Exception $e) {
      echo $e;
      return false;
    }

  }
  

}

?>