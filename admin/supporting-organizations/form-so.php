<?php
  include_once('../../pages/adminHead.php');
  include_once("Sorg.php");
  $ObjSorg = new Sorg("","","","","","");
  $title = 'Crear Nueva Organización';
  $action = '/admin/supporting-organizations/create-so.php';
  $showForm = true;

  if (isset($_GET["soId"]) && is_numeric($_GET["soId"])){ 
    //ID seteada
    $id = $_GET["soId"];
    include_once("SorgCollector.php");
    $SorgCollectorObj = new SorgCollector();
    $response = $SorgCollectorObj->showSorg($id);
    if ($response['found']){
      //Usuario encontrado
      $ObjSorg = $response['sorg'];
      $title = 'Editar Organización';
      $action = '/admin/supporting-organizations/update-so.php';
    }else {
      //Usuario no encontrado
      $showForm = false;
      $title = 'ERROR - Organización no Encontrada';
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
          if ($title === 'Editar Organización'){
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

        <title><?php echo $title; ?></title>
      </head>
      <body>
        <section id="content">
          <h2><?php echo $title; ?></h2><br>
          <div><a id='cancelButton' class='form-button' href="/admin/supporting-organizations">Volver</a></div>

    <?php } ?>

        </section>
      <?php include_once('../../pages/adminMenu.php'); ?>
      </body>
    </html>
