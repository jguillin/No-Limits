<?php
  include_once('../../pages/adminHead.php');
  include_once("Diseases.php");
  $ObjDisease = new Disease("","","","","","","","","","","","");
  $title = 'Nueva Enfermedad';
  $action = '/admin/diseases/create-disease.php';
  $showForm = true;

  if (isset($_GET["diseaseId"]) && is_numeric($_GET["diseaseId"])){
    //ID seteada
    $id = $_GET["diseaseId"];
    include_once("DiseasesCollector.php");
    $DiseaseCollectorObj = new DiseaseCollector();
    $response = $DiseaseCollectorObj->showDisease($id);
    if ($response['found']){
      //Enfermedad encontrada
      $ObjDisease = $response['disease'];
      $title = 'Editar Enfermedad';
      $action = '/admin/diseases/update-disease.php';
    }else {
      //Enfermedad no encontrada
      $showForm = false;
      $title = 'ERROR - Enfermedad no Encontrada';
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
            if ($title === 'Editar Enfermedad'){
              ?>
              <label>Enfermedad Id</label>
          		<input class='form-TextBox' type="text" name="diseaseId" readonly value="<?php echo $ObjDisease->getDiseasesId(); ?>"/>
              <?php
            }
            ?>
      		<label>Nombre</label>
      		<input class='form-TextBox' type="text" name="name" autofocus required maxlength="60" value="<?php echo $ObjDisease->getName(); ?>"/>
      		<label>Sinónimos</label>
      		<input class='form-TextBox' type="text" name="synonym" value="<?php echo $ObjDisease->getSynonyms(); ?>"/>
      		<label>Descripción</label>
      		<textarea class='form-TextBox' type="text" name="description" rows="5"><?php echo $ObjDisease->getDescription(); ?></textarea>
      		<label>Síntomas</label>
      		<textarea class='form-TextBox' type="text" name="symtomp" rows="5"><?php echo $ObjDisease->getSymtomps(); ?></textarea>
      		<label>Causas</label>
      		<textarea class='form-TextBox' type="text" name="causes" rows="5"><?php echo $ObjDisease->getCauses(); ?></textarea>
      		<label>Poblaciones Afectadas</label>
          <textarea class='form-TextBox' type="text" name="population" rows="5"><?php echo $ObjDisease->getAffectedPopulation(); ?></textarea>
          <label>Trastornos Relacionados</label>
          <textarea class='form-TextBox' type="text" name="disorder" rows="5"><?php echo $ObjDisease->getRelatedDisorders(); ?></textarea>
          <label>Diagnóstico</label>
          <textarea class='form-TextBox' type="text" name="diagnosis" rows="5"><?php echo $ObjDisease->getDiagnosis(); ?></textarea>
          <label>Tratamiento</label>
          <textarea class='form-TextBox' type="text" name="treatment" rows="5"><?php echo $ObjDisease->getTreatment(); ?></textarea>
          <label>Terapias en investigación</label>
          <textarea class='form-TextBox' type="text" name="terhapy" rows="5"><?php echo $ObjDisease->getInvestTerhapies(); ?></textarea>
          <label>Subdivisiones</label>
          <input class='form-TextBox' type="text" name="subdivision" value="<?php echo $ObjDisease->getSubdivisions(); ?>"/>
      		</br>
          <button class='form-button' type="text">Guardar</button>

          <a id="cancelButton" class='form-button' href='/admin/diseases'>Cancelar</a>

      </form>
    </div>
  <?php }else{ ?>

        <title><?php echo $title; ?></title>
      </head>
      <body>
        <section id="content">
          <h2><?php echo $title; ?></h2><br>
          <div><a id='cancelButton' class='form-button' href="/admin/diseases">Volver</a></div>

    <?php } ?>

        </section>
      <?php include_once('../../pages/adminMenu.php'); ?>
      </body>
    </html>
