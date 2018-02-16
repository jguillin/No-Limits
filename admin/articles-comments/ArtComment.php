<?php

class ArtComment
{
    private $commentId;
    private $articleId;
    private $userId;
    private $content;
    private $parentCommentId;
    private $postDatetime;

     function __construct($commentId, $articleId, $userId, $content, $parentCommentId, $postDatetime) {
       $this->commentId = $commentId;
       $this->articleId = $articleId;
       $this->userId = $userId;
       $this->content = $content;
       $this->parentCommentId = $parentCommentId;
       $this->postDatetime = $postDatetime;
    }


     function setCommentId($commentId){
       $this->commentId = $commentId;
     }
     function getCommentId(){
       return $this->commentId;
     }


     function setArticleId($articleId){
       $this->articleId = $articleId;
     }
     function getArticleId(){
       return $this->articleId;
     }


     function setUserId($userId){
       $this->userId = $userId;
     }
     function getUserId(){
       return $this->userId;
     }


     function setContent($content){
       $this->content = $content;
     }
     function getContent(){
       return $this->content;
     }


     function setParentCommentId($parentCommentId){
       $this->parentCommentId = $parentCommentId;
     }
     function getParentCommentId(){
       return $this->parentCommentId;
     }


     function setPostDatetime($postDatetime){
       $this->postDatetime = $postDatetime;
     }
     function getPostDatetime(){
       return $this->postDatetime;
     }

}

?>
