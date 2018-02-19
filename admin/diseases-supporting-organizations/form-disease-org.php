<?php
  session_start();
?>

<!doctype html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title><?php echo $title; ?></title>
  <link rel="StyleSheet" href="/assets/css/admin.css" type="text/css">
</head>
<body>

<?php
  include_once('../../pages/adminMenu.php');
  include_once("DiseaseOrg.php");
  $id = $_GET["diseaseId"];
  $showForm = true;

  if (empty($id)){
    //ID Vacía
    $ObjDiseaseOrg = new DiseaseOrg("","");
    $title = 'Nueva organización que apoya la enfermedad';
    $action = '/admin/diseases-supporting-organizations/create-disease-org.php';

  }else {

    //ID seteada
    include_once("DiseaseOrgCollector.php");
    $DiseaseOrgCollectorObj = new DiseaseOrgCollector();
    $response = $DiseaseOrgCollectorObj->showDiseaseOrg($id);

    if (!$response['found']){
      //Usuario no encontrado
      $showForm = false;
      echo "<h2>Organización No Encontrada</h2><br>";
      echo "<a id='cancelButton' class='form-button' href='/admin/diseases-supporting-organizations'>Volver</a>";
    }else {
      //Usuario encontrado
      $ObjDiseaseOrg = $response['user'];
      $title = 'Editar Organización';
      $action = '/admin/diseases-supporting-organizations/update-disease-org.php';
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

</section>
</body>
</html>

<?php } ?>
