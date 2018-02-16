<?php
  session_start();

  if(isset($_SESSION['username']) && $_SESSION['role']=='a'){
     echo "<p> Hola usuario:(" . $_SESSION['username']. ")[<a href='/src/logout.php'>Salir</a>]";

?>

<html>
  <head>
    <link rel="StyleSheet" href="/assets/css/admin.css" type="text/css">
  </head>

<body>

	<div><a href="/admin">Regresar a admin</a></div>	




<?php
  include_once("DiseasesCollector.php");

  $DiseaseCollectorObj = new DiseaseCollector();

?>
  <br>
  <form action='/admin/diseases/new' method="POST">
    <button class='CRUD-button insert' type='submit'>
      <img src='/assets/img/icons/new_icon.png'>
    </button>
  </form><br><br>

  <table>
      <thead>
        <tr>
          <th>Disease Id</th>
          <th>Name</th>
          <th>Synonyms</th>
          <th>Description</th>
          <th>Symtomps</th>
          <th>Causes</th>
          <th>Affected Populations</th>
          <th>Related Disorder</th>
          <th>Diagnosis</th>
          <th>Treatment</th>
          <th>Invest Terhapies</th>
          <th>Subdivisions</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>

<?php

  foreach ($DiseaseCollectorObj->showDiseases() as $c){
    echo "<tr>";
    echo "<td><b class='table-cell-label'>Disease Id</b><span class='table-cell-content'>". $c->getDiseasesId() ."</span></td>";
    echo "<td><b class='table-cell-label'>Name</b><span class='table-cell-content'>". $c->getName() ."</span></td>";
    echo "<td><b class='table-cell-label'>Synonyms</b><span class='table-cell-content'>". $c->getSynonyms() ."</span></td>";
    echo "<td><b class='table-cell-label'>Description</b><span class='table-cell-content'>". $c->getDescription() ."</span></td>";
    echo "<td><b class='table-cell-label'>Symtomps</b><span class='table-cell-content'>". $c->getSymtomps() ."</span></td>";
    echo "<td><b class='table-cell-label'>Causes</b><span class='table-cell-content'>". $c->getCauses() ."</span></td>";
    echo "<td><b class='table-cell-label'>Affected Populations</b><span class='table-cell-content'>". $c->getAffectedPopulation() ."</span></td>";
    echo "<td><b class='table-cell-label'>Related Disorders</b><span class='table-cell-content'>". $c->getRelatedDisorders() ."</span></td>";
    echo "<td><b class='table-cell-label'>Diagnosis</b><span class='table-cell-content'>". $c->getDiagnosis() ."</span></td>";
    echo "<td><b class='table-cell-label'>Treatment</b><span class='table-cell-content'>". $c->getTreatment() ."</span></td>";
    echo "<td><b class='table-cell-label'>Invest Terhapies</b><span class='table-cell-content'>". $c->getInvestTerhapies() ."</span></td>";
    echo "<td><b class='table-cell-label'>Subdivisions</b><span class='table-cell-content'>". $c->getSubdivisions() ."</span></td>";
    echo "<td>
            <b class='table-cell-label'>Actions</b>
            <span>
              <form class='CRUD-button-container' action='/admin/#". $c->getDiseasesId() ."' method='GET'>
                <button class='CRUD-button edit' type='submit'><img src='/assets/img/icons/edit_icon.png'></button>
              </form>
              <form class='CRUD-button-container' action='/admin/#". $c->getDiseasesId() ."' method='DELETE'>
                <button class='CRUD-button delete' type='submit'><img src='/assets/img/icons/delete_icon.png'></button>
              </form>
          </td>";

    echo "</tr>";
  }

  echo "</tbody></table>";

  } else {
    header("Location: /error");
  } ?>

</body>
</html>
