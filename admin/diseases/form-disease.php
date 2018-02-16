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
  include_once("Diseases.php");
  $id = $_GET["diseaseId"];
  $showForm = true;

  if (empty($id)){
    //ID Vacía
    $ObjDisease = new User("","","","","","","","","");
    $title = 'Nueva Enfermedad';
    $action = '/admin/diseases/create-disease.php';

  }else {

    //ID seteada
    include_once("DiseasesCollector.php");
    $DiseaseCollectorObj = new DiseaseCollector();
    $response = $DiseaseCollectorObj->showDisease($id);

    if (!$response['found']){
      //Usuario no encontrado
      $showForm = false;
      echo "<h2>ENFERMEDAD NO ENCONTRADO</h2><br>";
      echo "<a id='cancelButton' class='form-button' href='/admin/diseases'>Volver</a>";
    }else {
      //Usuario encontrado
      $ObjDisease = $response['user'];
      $title = 'Editar Enfermedad';
      $action = '/admin/diseases/update-disease.php';
    }

  }


if ($showForm){

?>
<section id="content">

  <div class="form-Container">
    <form class='form' action="<?php echo $action; ?>" method="POST">
        <h1><?php echo $title; ?></h1>
        <?php
          if ($title === 'Editar Enfermedad'){
            ?>
            <label>Enfermedad Id</label>
        		<input class='form-TextBox' type="text" name="userId" readonly value="<?php echo $ObjDisease->getDiseasesId(); ?>"/>
            <?php
          }
          ?>
    		<label>Nombre</label>
    		<input class='form-TextBox' type="text" name="name" autofocus required value="<?php echo $ObjDisease->getName(); ?>"/>
    		<label>Sinónimos</label>
    		<input class='form-TextBox' type="text" name="name" value="<?php echo $ObjDisease->getSynonyms(); ?>"/>
    		<label>Descripción</label>
    		<input class='form-TextBox' type="text" name="lastname" value="<?php echo $ObjDisease->getDescription(); ?>"/>
    		<label>Síntomas</label>
    		<input class='form-TextBox' type="text" name="birthdate" value="<?php echo $ObjDisease->getSymtomps(); ?>"/>
    		<label>Causas</label>
    		<input class='form-TextBox' type="text" name="email" value="<?php echo $ObjDisease->getCauses(); ?>"/>
    		<label>Poblaciones Afectadas</label>
        <input class='form-TextBox' type="text" name="email" value="<?php echo $ObjDisease->getAffectedPopulation(); ?>"/>
        <label>Trastornos Relacionados</label>
        <input class='form-TextBox' type="text" name="email" value="<?php echo $ObjDisease->getRelatedDisorders(); ?>"/>
        <label>Diagnóstico</label>
        <input class='form-TextBox' type="text" name="email" value="<?php echo $ObjDisease->getDiagnosis(); ?>"/>
        <label>Tratamiento</label>
        <input class='form-TextBox' type="text" name="email" value="<?php echo $ObjDisease->getTreatment(); ?>"/>
        <label>Terapias en investigación</label>
        <input class='form-TextBox' type="text" name="email" value="<?php echo $ObjDisease->getInvestTerhapies(); ?>"/>
        <label>Subdivisiones</label>
        <input class='form-TextBox' type="text" name="email" value="<?php echo $ObjDisease->getSubdivisions(); ?>"/>
    		</br>
        <button class='form-button' type="text">Guardar</button>

        <a id="cancelButton" class='form-button' href='/admin/diseases'>Cancelar</a>

    </form>
  </div>

</section>
</body>
</html>

<?php } ?>
