<?php
  include_once('../../pages/adminHead.php');
  include_once("DiseaseOrg.php");
  $ObjDiseaseOrg = new DiseaseOrg("","");
  $title = 'Nueva organización que apoya la enfermedad';
  $action = '/admin/diseases-supporting-organizations/create-disease-org.php';
  $showForm = true;

  if (isset($_GET["diseaseId"]) && is_numeric($_GET["diseaseId"])){
    //ID seteada
    $id = $_GET["diseaseId"];
    include_once("DiseaseOrgCollector.php");
    $DiseaseOrgCollectorObj = new DiseaseOrgCollector();
    $response = $DiseaseOrgCollectorObj->showDiseaseOrg($id);
    if ($response['found']){
      //Usuario encontrado
      $ObjDiseaseOrg = $response['user'];
      $title = 'Editar Organización';
      $action = '/admin/diseases-supporting-organizations/update-disease-org.php';
    }else{
      //Usuario no encontrado
      $showForm = false;
      $title = 'ERROR - enfermedad-organización no Encontrada';
    }
  }

  
if ($showForm){

?>
<section id="content">

  <div class="form-Container">
    <form class='form' action="<?php echo $action; ?>" method="POST">
        <h1><?php echo $title; ?></h1>
        <?php
          if ($title === 'Editar Organización' || $title === 'Nueva organización que apoya la enfermedad'){
            ?>
            <label>Disease Id</label>
        		<input class='form-TextBox' type="text" name="diseaseId" value="<?php echo $ObjDiseaseOrg->getDiseaseId(); ?>"/>
            <?php
          }
          ?>
    		<label>So Id</label>
    		<input class='form-TextBox' type="text" name="soId" autofocus required value="<?php echo $ObjDiseaseOrg->getSoId(); ?>"/>
    		
    		</br>
        <button class='form-button' type="submit">Guardar</button>

        <a id="cancelButton" class='form-button' href='/admin/diseases-supporting-organizations'>Cancelar</a>

    </form>
  </div>
<?php }else{ ?>

        <title><?php echo $title; ?></title>
      </head>
      <body>
        <section id="content">
          <h2><?php echo $title; ?></h2><br>
          <div><a id='cancelButton' class='form-button' href="/admin/diseases-supporting-organizations">Volver</a></div>

    <?php } ?>

        </section>
      <?php include_once('../../pages/adminMenu.php'); ?>
      </body>
    </html>
