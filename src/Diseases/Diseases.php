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


     function setUserId($userId){
       $this->userId = $userId;
     }
     function getUserId(){
       return $this->userId;
     }


     function setUsername($username){
       $this->username = $username;
     }
     function getUsername(){
       return $this->username;
     }


     function setPassword($password){
       $this->password = $password;
     }
     function getPassword(){
       return $this->password;
     }


     function setName($name){
       $this->name = $name;
     }
     function getName(){
       return $this->name;
     }


     function setLastname($lastname){
       $this->lastname = $lastname;
     }
     function getLastname(){
       return $this->lastname;
     }


     function setBirthdate($birthdate){
       $this->birthdate = $birthdate;
     }
     function getBirthdate(){
       return $this->birthdate;
     }


     function setEmail($email){
       $this->email = $email;
     }
     function getEmail(){
       return $this->email;
     }


     function setSex($sex){
       $this->sex = $sex;
     }
     function getSex(){
       return $this->sex;
     }


     function setRol($rol){
       $this->rol = $rol;
     }
     function getRol(){
       return $this->rol;
     }

}

?>
