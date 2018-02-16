<?php

include_once('ArtComment.php');
include_once(dirname(__DIR__).'/Collector.php');

class CommentCollector extends Collector
{

  function showComments() {
    $rows = self::$db->getRows("SELECT * FROM article_comments ORDER BY comment_id");

    $arrayDemo= array();
    foreach ($rows as $c){
      $aux = new Comment($c{'comment_id'},$c{'article_id'},$c{'user_id'},$c{'content'},$c{'parentComment_id'},$c{'post_datetime'});
      array_push($arrayDemo, $aux);
    }
    return $arrayDemo;
  }

  //Edita un usuario
  function showUser($id){
    $row = self::$db->getRows("SELECT * FROM article_comments where comment_id= ? ", array("{$id}"));

    $ObjDemo = new User($row[0]{'comment_id'},$row[0]{'article_id'},$row[0]{'user_id'},$row[0]{'content'},$row[0]{'parentComment_id'},$row[0]{'post_datetime'});
    return $ObjDemo;

}

  function loginUser($user, $password){
    try {
      $row = self::$db->getRows("SELECT * FROM article_comments where username=? AND password=MD5(?)", array("{$user}", "{$password}"));
      if (!empty($row)){
        return true;
      }
      // $ObjDemo = new User($row[0]{'user_id'},$row[0]{'username'},$row[0]{'password'},$row[0]{'name'},$row[0]{'lastname'},$row[0]{'birthdate'},$row[0]{'email'},$row[0]{'sex'},$row[0]{'rol'});
    } catch (\Exception $e) {
      return false;
    }

  }

  //Actualiza un usuario
  function updateUser($id,$nombre){
    $insertrow = self::$db->updateRow("UPDATE public.users SET nombre= ? WHERE comment_id= ?", array("{$nombre}", $id));

  }

  //Elimina un usuario
  function deleteUser($id){
    $deleterow = self::$db->deleteRow("DELETE FROM public.users WHERE comment_id= ?", array("{$id}"));

  }

  //Crea un nuevo usuario
  function createUser($nombre){
    $insertarrow = self::$db->insertRow("INSERT INTO public.users (nombre) VALUES (?)", array ("{$nombre}"));

  }

}

?>
