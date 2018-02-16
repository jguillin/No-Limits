<?php
  session_start();
?>

<!doctype html>
<html lang="es">
<head>
	<meta charset="utf-8">
  <link rel="StyleSheet" href="/assets/css/admin.css" type="text/css">

<?php
  include_once('../../pages/adminMenu.php');
  include_once("Sorg.php");
  $id = $_GET["soId"];
  $showForm = true;

  if (empty($id)){
    //ID Vacía
    $ObjSorg = new Sorg("","","","","","");
    $title = 'Nuevo supporting-organizations';
    $action = '/admin/supporting-organizations/create-so.php';

  }else {

    //ID seteada
    include_once("SorgCollector.php");
    $SorgCollectorObj = new SorgCollector();
    $response = $SorgCollectorObj->showSorg($id);

    if (!$response['found']){
      //Usuario no encontrado
      $showForm = false;

    }else {
      //Usuario encontrado
      $ObjSorg = $response['sorg'];
      $title = 'Editar supporting-organizations';
      $action = '/admin/supporting-organizations/update-so.php';
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
          if ($title === 'Editar supporting-organizations'){
            ?>
            <label>SoId</label>
        		<input class='form-TextBox' type="text" name="soId" readonly value="<?php echo $ObjSorg->getSoId(); ?>"/>
            <?php
          }
          ?>
    		<label>Name</label>
    		<input class='form-TextBox' type="text" name="name" autofocus required value="<?php echo $ObjSorg->getName(); ?>"/>
    		<label>Address</label>
    		<input class='form-TextBox' type="text" name="address" required value="<?php echo $ObjSorg->getAddress(); ?>"/>
    		<label>Phone</label>
    		<input class='form-TextBox' type="text" name="phone" value="<?php echo $ObjSorg->getPhone(); ?>"/>
    		<label>Website</label>
    		<input class='form-TextBox' type="text" name="website" value="<?php echo $ObjSorg->getWebsite(); ?>"/>
    		<label>Email</label>
    		<input class='form-TextBox' type="email" name="email" value="<?php echo $ObjSorg->getEmail(); ?>"/>
    		
    		</br>
        <button class='form-button' type="submit">Guardar</button>

        <a id="cancelButton" class='form-button' href='/admin/supporting-organizations'>Cancelar</a>

    </form>
  </div>

<?php }else{ ?>
          <title>supporting-organizations NO ENCONTRADO</title>

          </head>
          <body>
            <section id="content">
              <h2>supporting-organizations NO ENCONTRADO</h2><br>
              <a id='cancelButton' class='form-button' href='/admin/supporting-organizations'>Volver</a>
        <?php
        }
      ?>

    </section>
    </body>
    </html>
