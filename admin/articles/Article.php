<?php

class Article
{
    private $articleId;
    private $authorId;
    private $postDatetime;
    private $title;
    private $imageUrl;
    private $content;
    private $lastModDatetime;

     function __construct($articleId, $authorId, $postDatetime, $title, $imageUrl, $content, $lastModDatetime) {
       $this->articleId = $articleId;
       $this->authorId = $authorId;
       $this->postDatetime = $postDatetime;
       $this->title = $title;
       $this->imageUrl = $imageUrl;
       $this->content = $content;
       $this->lastModDatetime = $lastModDatetime;
     }


     function setArticleId($articleId){
       $this->articleId = $articleId;
     }
     function getArticleId(){
       return $this->articleId;
     }


     function setAuthorId($authorId){
       $this->authorId = $authorId;
     }
     function getAuthorId(){
       return $this->authorId;
     }


     function setPostDatetime($postDatetime){
       $this->postDatetime = $postDatetime;
     }
     function getPostDatetime(){
       return $this->postDatetime;
     }


     function setTitle($title){
       $this->title = $title;
     }
     function getTitle(){
       return $this->title;
     }


     function setImageUrl($imageUrl){
       $this->imageUrl = $imageUrl;
     }
     function getImageUrl(){
       return $this->imageUrl;
     }


     function setContent($content){
       $this->content = $content;
     }
     function getContent(){
       return $this->content;
     }


     function setLastModDatetime($lastModDatetime){
       $this->lastModDatetime = $lastModDatetime;
     }
     function getLastModDatetime(){
       return $this->lastModDatetime;
     }

}

?>
