<?php
  include_once('../../pages/adminHead.php');

  include_once("DiseasesCollector.php");
  $DiseaseCollectorObj = new DiseaseCollector();
?>

    <title>Enfermedades</title>
  </head>
  <body>

    <section id="content">
      <div class="CRUDContainer">
        <h1>Enfermedades</h1>
          <a class='CRUD-button insert' href='/admin/diseases/form-disease.php'>
            <img src='/assets/img/icons/new_icon.png'>
          </a>
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
              <th>Related Disorders</th>
              <th>Diagnosis</th>
              <th>Treatment</th>
              <th>Inv. Terhapies</th>
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
        echo "<td><b class='table-cell-label'>Inv. Terhapies</b><span class='table-cell-content'>". $c->getInvestTerhapies() ."</span></td>";
        echo "<td><b class='table-cell-label'>Subdivisions</b><span class='table-cell-content'>". $c->getSubdivisions() ."</span></td>";
        echo "<td>
                  <b class='table-cell-label'>Actions</b>
                  <span>
                      <a class='CRUD-button edit' href='/admin/diseases/form-disease.php?diseaseId=". $c->getDiseasesId() ."'>
                        <img src='/assets/img/icons/edit_icon.png'>
                      </a>
                      <a class='CRUD-button delete' href='/admin/diseases/delete-disease.php?diseaseId=". $c->getDiseasesId() ."'>
                        <img src='/assets/img/icons/delete_icon.png'>
                      </a>
                </td>";

        echo "</tr>";
      }
      ?>

          </tbody>
        </table>
      </div>
    </section>
  <?php include_once('../../pages/adminMenu.php'); ?>
  </body>
</html>
