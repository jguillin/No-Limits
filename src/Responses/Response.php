<?php

class User
{
    private $id;
    private $responsesId;
   
     function __construct($id, $responsesId) {
       $this->id = $id;
       $this->responsesId = $responsesId;
     }


     function setId($id){
       $this->id = $id;
     }
     function getId(){
       return $this->id;
     }


     function setResponsesId($responsesId){
       $this->responsesId = $responsesId;
     }
     function getResponsesId(){
       return $this->responsesId;
     }
    
}

?>