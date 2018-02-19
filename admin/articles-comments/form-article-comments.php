<?php
  include_once('../../pages/adminHead.php');
  date_default_timezone_set('America/Guayaquil');
  include_once("ArtComment.php");
  $ObjArtComment = new ArtComment("","","","","","");
  $title = 'Nuevo Comentario';
  $action = '/admin/articles-comments/create-article-comments.php';
  $showForm = true;

  if (isset($_GET["commentId"]) && is_numeric($_GET["commentId"])){
    //ID seteada
    $id = $_GET["commentId"];
    include_once("ArtCommentCollector.php");
    $ArtCommentCollectorObj = new ArtCommentCollector();
    $response = $ArtCommentCollectorObj->showArtComment($id);
    if ($response['found']){
      //Comentario encontrado
      $ObjArtComment = $response['comment'];
      $title = 'Editar Comentario';
      $action = '/admin/articles-comments/update-article-comments.php';
    }else{
      //Comentario no encontrado
      $showForm = false;
      $title = 'ERROR - Comentario no Encontrado';
    }
  }

  if ($showForm){

  ?>

      <title><?php echo $title; ?></title>
    </head>
  <body>
  <section id="content">
    <div class="form-Container">
      <form class='form' action="<?php echo $action; ?>" method="POST">
          <h1><?php echo $title; ?></h1>
          <?php
            if ($title === 'Editar Comentario'){
              ?>
              <label>Comentario ID</label>
          		<input class='form-TextBox' type="text" name="commentId" readonly value="<?php echo $ObjArtComment->getCommentId(); ?>"/>
              <?php
            }
            ?>
      		<label>Article ID</label>
      		<input class='form-TextBox' type="text" name="articleId" autofocus required value="<?php echo $ObjArtComment->getArticleId(); ?>"/>
      		<label>Usuario ID</label>
      		<input class='form-TextBox' type="text" name="userId" required value="<?php echo $ObjArtComment->getUserId(); ?>"/>
      		<label>Contenido</label>
      		<textarea class='form-TextBox' name="content" required maxlength="200"><?php echo $ObjArtComment->getContent(); ?></textarea>
      		<label>Comentario Superior ID</label>
      		<input class='form-TextBox' type="text" name="parentCommentId" value="<?php echo $ObjArtComment->getParentCommentId(); ?>"/>
          <label>Fecha-Hora del Post</label>
          <?php
            if ($title === 'Editar Comentario'){
              ?>
      		      <input class='form-TextBox' type="datetime" name="postDateTime" value="<?php echo $ObjArtComment->getPostDatetime(); ?>" readonly/>
              <?php
              }else {?>
                <input class='form-TextBox' type="datetime" name="postDateTime" value="<?php echo date('Y-m-d H:i:s'); ?>"readonly/>
              <?php
              }
          ?>

      		</br>
          <button class='form-button' type="submit">Guardar</button>

          <a id="cancelButton" class='form-button' href='/admin/articles-comments'>Cancelar</a>

      </form>
    </div>

  <?php }else{ ?>

        <title><?php echo $title; ?></title>
      </head>
      <body>
        <section id="content">
          <h2><?php echo $title; ?></h2><br>
          <div><a id='cancelButton' class='form-button' href="/admin/articles-comments">Volver</a></div>

    <?php } ?>

        </section>
      <?php include_once('../../pages/adminMenu.php'); ?>
      </body>
    </html>
