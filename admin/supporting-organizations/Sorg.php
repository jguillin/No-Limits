<?php
 
class Sorg
{
    private $soId;
    private $name;
    private $address;
    private $phone;
    private $website;
    private $email;

     function __construct($soId, $name, $address, $phone, $website, $email) {
       $this->soId = $soId;
       $this->name = $name;
       $this->address = $address;
       $this->phone = $phone;
       $this->website = $website;
       $this->email = $email;
     }


     function setSoId($soId){
       $this->soId = $soId;
     }
     function getSoId(){
       return $this->soId;
     }


     function setName($name){
       $this->name = $name;
     }
     function getName(){
       return $this->name;
     }


     function setAddress($address){
       $this->address = $address;
     }
     function getAddress(){
       return $this->address;
     }


     function setPhone($phone){
       $this->phone = $phone;
     }
     function getPhone(){
       return $this->phone;
     }


     function setWebsite($website){
       $this->website = $website;
     }
     function getWebsite(){
       return $this->website;
     }


     function setEmail($email){
       $this->email = $email;
     }
     function getEmail(){
       return $this->email;
     }

}

?>