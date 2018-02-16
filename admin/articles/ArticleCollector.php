<?php

include_once('Article.php');
include_once(dirname(__DIR__).'/Collector.php');

class ArticleCollector extends Collector
{

  function showArticles() {
    $rows = self::$db->getRows("SELECT * FROM articles");

    $arrayDemo= array();
    foreach ($rows as $c){
      $aux = new Article($c{'article_id'},$c{'author_id'},$c{'post_datetime'},$c{'title'},$c{'imageURL'},$c{'content'},$c{'last_mod_datetime'});
      array_push($arrayDemo, $aux);
    }
    return $arrayDemo;
  }

  /*

  //Edita un usuario
  function showUser($id){
    $row = self::$db->getRows("SELECT * FROM articles where article_id= ? ", array("{$id}"));

    $ObjDemo = new User($row[0]{'article_id'},$row[0]{'author_id'},$row[0]{'post_datetime'},$row[0]{'title'},$row[0]{'imageUrl'},$row[0]{'content'},$row[0]{'last_mod_datetime'});
    return $ObjDemo;

}

  function loginUser($user, $password){
    try {
      $row = self::$db->getRows("SELECT * FROM articles where username=? AND password=MD5(?)", array("{$user}", "{$password}"));
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
    $insertrow = self::$db->updateRow("UPDATE public.articles SET nombre= ? WHERE user_id= ?", array("{$nombre}", $id));

  }

  //Elimina un usuario
  function deleteUser($id){
    $deleterow = self::$db->deleteRow("DELETE FROM public.articles WHERE user_id= ?", array("{$id}"));

  }

  //Crea un nuevo usuario
  function createUser($nombre){
    $insertarrow = self::$db->insertRow("INSERT INTO public.articles (nombre) VALUES (?)", array ("{$nombre}"));

  }
*/

}

?>
