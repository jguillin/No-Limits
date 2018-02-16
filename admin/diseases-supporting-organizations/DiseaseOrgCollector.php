<?php

include_once('DiseasesOrg.php');
include_once(dirname(__DIR__).'/Collector.php');

class DiseaseOrgCollector extends Collector
{

  function showDiseasesOrg() {
    $rows = self::$db->getRows("SELECT * FROM diseases_supporting_organizations");

    $arrayDemo= array();
    foreach ($rows as $c){
      $aux = new DiseaseOrg($c{'disease_id'},$c{'so_Id'});
      array_push($arrayDemo, $aux);
    }
    return $arrayDemo;
  }


  //Edita un usuario
 function showDiseaseOrg($id){
    $ObjDiseaseOrg = (object)[];
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



  //Actualiza un usuario
  function updateDisease($diseaseId,$soId){
    try {
      $insertrow = self::$db->updateRow("UPDATE diseases SET name=?,\"synonyms\"=?,\"description\"=?,symptoms=?,causes=?,affected_populations=?,related_disorders=?,diagnosis=?,treatment=?,investigational_therapies=?,subdivisions=? WHERE disease_id= ?", array("{$name}","{$synonym}","{$description}","{$symptom}","{$causes}","{$population}","{$disorder}","{$diagnosis}","{$treatment}","{$terhapy}","{$subdivision}"));
      return true;
    } catch (\Exception $e) {
      echo $e;
      return false;
    }

  }


    //Elimina un usuario
  function deleteDisease($diseaseId){
    try {
      $deleterow = self::$db->deleteRow("DELETE FROM diseases WHERE disease_id = ?", array("{$diseaseId}"));
      return true;
    } catch (\Exception $e) {
      echo $e;
      return false;
    }


  }

  //Crea un nuevo usuario
  function createDisease($diseaseId,$name,$synonym,$description,$symptom,$causes,$population,$disorder,$diagnosis,$treatment,$terhapy,$subdivision){
    try {
      $insertarrow = self::$db->insertRow("INSERT INTO diseases (name,\"synonyms\",\"description\",symptoms,causes,affected_populations,related_disorders,diagnosis,treatment,investigational_therapies,subdivisions) VALUES (?,?,?,?,?,?,?,?,?,?,?)", array ("{$name}","{$synonym}","{$description}","{$symptom}","{$causes}","{$population}","{$disorder}","{$diagnosis}","{$treatment}","{$terhapy}","{$subdivision}"));
      return true;
    } catch (\Exception $e) {
      echo $e;
      return false;
    }

  }
  

}

?>