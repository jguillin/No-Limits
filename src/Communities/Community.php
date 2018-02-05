<?php

class User
{
    private $communityId;
    private $name;
   
     function __construct($communityId, $name) {
       $this->communityId = $communityId;
       $this->name = $name;
     }


     function setCommunityId($communityId){
       $this->communityId = $communityId;
     }
     function getCommunityId(){
       return $this->communityId;
     }


     function setName($name){
       $this->name = $name;
     }
     function getResponsesId(){
       return $this->name;
     }
    
}

?>