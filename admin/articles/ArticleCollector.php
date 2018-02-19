<?php

include_once('Article.php');
include_once(dirname(__DIR__).'/Collector.php');

class ArticleCollector extends Collector
{

  function showArticles() {
    $rows = self::$db->getRows("SELECT * FROM articles ORDER BY article_id");

    $arrayDemo= array();
    foreach ($rows as $c){
      $aux = new Article($c{'article_id'},$c{'author_id'},$c{'post_datetime'},$c{'title'},$c{'imageURL'},$c{'content'},$c{'last_mod_datetime'});
      array_push($arrayDemo, $aux);
    }
    return $arrayDemo;
  }

  //Edita un artículo
  function showArticle($id){
    $ObjArticle = (object)[];
    $response = ['found'=>false];
    try {
      $row = self::$db->getRows("SELECT * FROM articles where article_id= ? ", array("{$id}"));
      if (!empty($row)){
        $ObjArticle = new Article($row[0]{'article_id'},$row[0]{'author_id'},$row[0]{'post_datetime'},$row[0]{'title'},$row[0]{'imageURL'},$row[0]{'content'},$row[0]{'last_mod_datetime'});
        $response['found'] = true;
        $response['article'] = $ObjArticle;
      }
      return $response;
    } catch (\Exception $e) {
      echo $e;
    }
}

  //Actualiza un artículo
  function updateArticle($articleId, $authorId, $postdatetime, $title, $imageurl, $content, $lastmod){
    try {
      $insertrow = self::$db->updateRow("UPDATE articles SET author_id=?,post_datetime=?,title=?,\"imageURL\"=?,content=?,last_mod_datetime=? WHERE article_id= ?", array("{$authorId}","{$postdatetime}","{$title}","{$imageurl}","{$content}","{$lastmod}","{$articleId}"));
      return true;
    } catch (\Exception $e) {
      echo $e;
      return false;
    }

  }

  //Elimina un artículo
  function deleteArticle($articleId){
    try {
      $deleterow = self::$db->deleteRow("DELETE FROM articles WHERE article_id = ?", array("{$articleId}"));
      return true;
    } catch (\Exception $e) {
      echo $e;
      return false;
    }

  }

  //Crea un nuevo artículo
  function createArticle($authorId, $postdatetime, $title, $imageurl, $content, $lastmod){
    try {
      $insertarrow = self::$db->insertRow("INSERT INTO articles (author_id, post_datetime, title, \"imageURL\", \"content\", last_mod_datetime) VALUES (?,?,?,?,?,?)", array ("{$authorId}","{$postdatetime}","{$title}","{$imageurl}","{$content}","{$lastmod}"));
      return true;
    } catch (\Exception $e) {
      echo $e;
      return false;
    }

  }

}

?>
