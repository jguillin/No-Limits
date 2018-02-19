<?php
  include_once('../../pages/adminHead.php');
  date_default_timezone_set('America/Guayaquil');
  include_once("Article.php");
  $ObjArticle = new Article("","","","","","","");
  $title = 'Nuevo Artículo';
  $action = '/admin/articles/create-article.php';
  $showForm = true;

  if (isset($_GET["articleId"]) && is_numeric($_GET["articleId"])){
    //ID seteada
    $id = $_GET["articleId"];
    include_once("ArticleCollector.php");
    $ArticleCollectorObj = new ArticleCollector();
    $response = $ArticleCollectorObj->showArticle($id);
    if ($response['found']){
      //Artículo encontrado
      $ObjArticle = $response['article'];
      $title = 'Editar Artículo';
      $action = '/admin/articles/update-article.php';
    }else{
      //Artículo no encontrado
      $showForm = false;
      $title = 'ERROR - Artículo no Encontrado';
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
              if ($title === 'Editar Artículo'){
                ?>
                <label>Article ID</label>
            		<input class='form-TextBox' type="text" name="articleId" readonly value="<?php echo $ObjArticle->getArticleId(); ?>"/>
                <?php
              }
              ?>
        		<label>Author ID</label>
        		<input class='form-TextBox' type="text" name="authorId" autofocus required value="<?php echo $ObjArticle->getAuthorId(); ?>"/>
        		<label>Fecha del Post</label>
            <?php
              if ($title === 'Editar Artículo'){
                ?>
        		      <input class='form-TextBox' type="datetime" name="postDateTime" value="<?php echo $ObjArticle->getPostDatetime(); ?>" readonly/>
                <?php
                }else {?>
                  <input class='form-TextBox' type="datetime" name="postDateTime" value="<?php echo date('Y-m-d H:i:s'); ?>"readonly/>
                <?php
                }
            ?>
        		<label>Título</label>
        		<input class='form-TextBox' type="text" name="title" maxlength="60" required value="<?php echo $ObjArticle->getTitle(); ?>"/>
        		<label>URL de la imagen</label>
        		<input class='form-TextBox' type="text" name="imageURL" maxlength="255" value="<?php echo $ObjArticle->getImageUrl(); ?>"/>
        		<label>Contenido</label>
        		<textarea class='form-TextBox' name="content" rows="6" required/><?php echo $ObjArticle->getContent(); ?></textarea>
        		<label>Fecha de última modificación</label>
            <input class='form-TextBox' type="datetime" name="lastModDateTime" value="<?php echo date('Y-m-d H:i:s'); ?>"readonly/>

        		</br>
            <button class='form-button' type="submit">Guardar</button>

            <a id="cancelButton" class='form-button' href='/admin/articles'>Cancelar</a>

        </form>
      </div>

<?php }else{ ?>

    <title><?php echo $title; ?></title>
  </head>
  <body>
    <section id="content">
      <h2><?php echo $title; ?></h2><br>
      <div><a id='cancelButton' class='form-button' href="/admin/articles">Volver</a></div>

<?php } ?>

    </section>
  <?php include_once('../../pages/adminMenu.php'); ?>
  </body>
</html>
