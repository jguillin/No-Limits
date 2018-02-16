<?php

class Disease
{
    private $diseaseId;
    private $name;
    private $synonyms;
    private $description;
    private $symptoms;
    private $causes;
    private $affectedPopulation;
    private $relatedDisorders;
    private $diagnosis;
    private $treatment;
    private $investTerhapies;
    private $subdivisions;

     function __construct($diseaseId, $name, $synonyms, $description, $symptoms, $causes, $affectedPopulation, $relatedDisorders, $diagnosis, $treatment, $investTerhapies, $subdivisions) {
       $this->diseaseId = $diseaseId;
       $this->name = $name;
       $this->synonyms = $synonyms;
       $this->description = $description;
       $this->symptoms = $symptoms;
       $this->causes = $causes;
       $this->affectedPopulation = $affectedPopulation;
       $this->relatedDisorders = $relatedDisorders;
       $this->diagnosis = $diagnosis;
       $this->treatment = $treatment;
       $this->investTerhapies = $investTerhapies;
       $this->subdivisions = $subdivisions;
     }


     function setDiseasesId($diseaseId){
       $this->diseaseId = $diseaseId;
     }
     function getDiseasesId(){
       return $this->diseaseId;
     }


     function setName($name){
       $this->name = $name;
     }
     function getName(){
       return $this->name;
     }


     function setSynonyms($synonyms){
       $this->synonyms = $synonyms;
     }
     function getSynonyms(){
       return $this->synonyms;
     }


     function setDescription($description){
       $this->description = $description;
     }
     function getDescription(){
       return $this->description;
     }


     function setSymptoms($symptoms){
       $this->symptoms = $symptoms;
     }
     function getSymtomps(){
       return $this->symptoms;
     }


     function setCauses($causes){
       $this->causes = $causes;
     }
     function getCauses(){
       return $this->causes;
     }


     function setAffectedPopulation($affectedPopulation){
       $this->affectedPopulation = $affectedPopulation;
     }
     function getAffectedPopulation(){
       return $this->affectedPopulation;
     }


     function setRelatedDisorders($relatedDisorders){
       $this->relatedDisorders = $relatedDisorders;
     }
     function getRelatedDisorders(){
       return $this->relatedDisorders;
     }


     function setDiagnosis($diagnosis){
       $this->diagnosis = $diagnosis;
     }
     function getDiagnosis(){
       return $this->diagnosis;
     }


      function setTreatment($treatment){
       $this->treatment = $treatment;
     }
     function getTreatment(){
       return $this->treatment;
     }


      function setInvestTerhapies($investTerhapies){
       $this->investTerhapies = $investTerhapies;
     }
     function getInvestTerhapies(){
       return $this->investTerhapies;
     }


      function setSubdivisions($subdivisions){
       $this->subdivisions = $subdivisions;
     }
     function getSubdivisions(){
       return $this->subdivisions;
     }

}

?>
