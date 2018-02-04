<?php

class User
{
    private $id;
    private $communitiesId;
   
     function __construct($id, $communitiesId) {
       $this->id = $id;
       $this->communitiesId = $communitiesId;
     }


     function setId($id){
       $this->id = $id;
     }
     function getId(){
       return $this->id;
     }


     function setCommunitiesId($communitiesId){
       $this->communitiesId = $communitiesId;
     }
     function getUsername(){
       return $this->communitiesId;
     }
    
}

?>
