<?php

class DiseaseUser
{
    private $userId;
    private $diseaseId;
   
     function __construct($userId, $diseaseId) {
       $this->userId = $userId;
       $this->diseaseId = $diseaseId;
     }


     function setUserId($userId){
       $this->userId = $userId;
     }
     function getUserId(){
       return $this->userId;
     }


     function setDiseaseId($diseaseId){
       $this->diseaseId = $diseaseId;
     }
     function getDiseaseId(){
       return $this->diseaseId;
     }
 
}

?>
