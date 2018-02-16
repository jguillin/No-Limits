<?php

class DiseaseOrg
{
    private $diseaseId;
    private $soId;

     function __construct($diseaseId, $soId) {
       $this->diseaseId = $diseaseId;
       $this->soId = $soId;
     }


     function setDiseaseId($diseaseId){
       $this->diseaseId = $diseaseId;
     }
     function getDiseaseId(){
       return $this->diseaseId;
     }


     function setSoId($soId){
       $this->soId = $soId;
     }
     function getSoId(){
       return $this->soId;
     }

}

?>
