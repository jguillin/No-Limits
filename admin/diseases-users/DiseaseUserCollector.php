<?php

include_once('DiseaseUser.php');
include_once(dirname(__DIR__).'/Collector.php');

class DiseaseUserCollector extends Collector
{

  function showDiseasesUsers($userId) {
    $rows = self::$db->getRows("SELECT * FROM diseases_users WHERE user_uid=?", array("{$userId}"));

    //QUERY
    // select u.user_id, u.username, du.disease_id, d.name from diseases_users AS du INNER JOIN users AS u ON du.user_uid = u.user_id INNER JOIN diseases AS d ON d.disease_id = du.disease_id

    $arrayDU= array();
    foreach ($rows as $c){
      $aux = new DiseaseUser($c{'user_uid'},$c{'disease_id'});
      array_push($arrayDU, $aux);
    }
    return $arrayDU;
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



  //Actualiza un usuario
  function updateDisease($diseaseId,$name,$synonym,$description,$symptom,$causes,$population,$disorder,$diagnosis,$treatment,$terhapy,$subdivision){
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
