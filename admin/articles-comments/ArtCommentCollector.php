<?php

include_once('ArtComment.php');
include_once(dirname(__DIR__).'/Collector.php');

class ArtCommentCollector extends Collector
{

  function showArtComments() {
    $rows = self::$db->getRows("SELECT * FROM article_comments ORDER BY comment_id");

    $arrayDemo= array();
    foreach ($rows as $c){
      $aux = new ArtComment($c{'comment_id'},$c{'article_id'},$c{'user_id'},$c{'content'},$c{'parentComment_id'},$c{'post_datetime'});
      array_push($arrayDemo, $aux);
    }
    return $arrayDemo;
  }

  //Edita un comentario
  function showArtComment($id){
    $ObjArtComment = (object)[];
    $response = ['found'=>false];
    try {
      $row = self::$db->getRows("SELECT * FROM article_comments where comment_id= ? ", array("{$id}"));
      if (!empty($row)){
        $ObjArtComment = new ArtComment($row[0]{'comment_id'},$row[0]{'article_id'},$row[0]{'user_id'},$row[0]{'content'},$row[0]{'parentComment_id'},$row[0]{'post_datetime'});
        $response['found'] = true;
        $response['comment'] = $ObjArtComment;
      }
      return $response;
    } catch (\Exception $e) {
      echo $e;
    }

}

  //Actualiza un comentario
  function updateArtComment($commentId, $articleId, $userId, $content, $parentCommentId, $postDateTime){
    try {
      $insertrow = self::$db->updateRow("UPDATE article_comments SET article_id=?, user_id=?, content=?, \"parentComment_id\"=?, post_datetime=? WHERE comment_id= ?", array("{$articleId}", "{$userId}", "{$content}", "{$parentCommentId}", "{$postDateTime}", "{$commentId}"));
      return true;
    } catch (\Exception $e) {
      echo $e;
      return false;
    }
  }

  //Elimina un comentario
  function deleteArtComment($id){
    try {
      $deleterow = self::$db->deleteRow("DELETE FROM article_comments WHERE comment_id= ?", array("{$id}"));
      return true;
    } catch (\Exception $e) {
      echo $e;
      return false;
    }

  }

  //Crea un nuevo comentario
  function createArtComment($articleId, $userId, $content, $parentCommentId, $postDateTime){
    try {
      $insertarrow = self::$db->insertRow("INSERT INTO article_comments (article_id, user_id, content, \"parentComment_id\", post_datetime) VALUES (?,?,?,?,?)", array ("{$articleId}", "{$userId}", "{$content}", "{$parentCommentId}", "{$postDateTime}"));
      return true;
    } catch (\Exception $e) {
      echo $e;
      return false;
    }
  }

}

?>
