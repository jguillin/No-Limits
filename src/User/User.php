<?php

class User
{
    private $userId;
    private $username;
    private $password;
    private $name;
    private $lastname;
    private $birthdate;
    private $email;
    private $sex;
    private $role;

     function __construct($userId, $username, $password, $name, $lastname, $birthdate, $email, $sex, $role) {
       $this->userId = $userId;
       $this->username = $username;
       $this->password = $password;
       $this->name = $name;
       $this->lastname = $lastname;
       $this->birthdate = $birthdate;
       $this->email = $email;
       $this->sex = $sex;
       $this->role = $role;
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


     function setRole($role){
       $this->role = $role;
     }
     function getRole(){
       return $this->role;
     }

}

?>
