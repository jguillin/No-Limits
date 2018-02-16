<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <?php
      include ('../src/View.php');
      View::render('head');
    ?>
    <title>No Limits - Enciclopedia</title>

</head>
<body>
      <?php
        View::render('headerNav');
      ?>

        <div class="container mt-5 mb-5 pt-5 pb-5">

          <nav class="">
              <ul class="pagination d-flex flex-wrap flex-column flex-sm-row justify-content-start justify-content-sm-center align-content-center float-right float-sm-none text-center">
                  <!-- <li class="page-item"><a class="page-link" href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span>
        <span class="sr-only">Previous</span></a></li>
                  <li class="page-item"><a class="page-link" href="#">Anterior</a></li> -->
                  <li class="page-item active"><a class="page-link" href="#">A</a></li>
                  <li class="page-item"><a class="page-link" href="#">B</a></li>
                  <li class="page-item"><a class="page-link" href="#">C</a></li>
                  <li class="page-item"><a class="page-link" href="#">D</a></li>
                  <li class="page-item"><a class="page-link" href="#">E</a></li>
                  <li class="page-item"><a class="page-link" href="#">F</a></li>
                  <li class="page-item"><a class="page-link" href="#">G</a></li>
                  <li class="page-item"><a class="page-link" href="#">H</a></li>
                  <li class="page-item"><a class="page-link" href="#">I</a></li>
                  <li class="page-item"><a class="page-link" href="#">J</a></li>
                  <li class="page-item"><a class="page-link" href="#">K</a></li>
                  <li class="page-item"><a class="page-link" href="#">L</a></li>
                  <li class="page-item"><a class="page-link" href="#">M</a></li>
                  <li class="page-item"><a class="page-link" href="#">N</a></li>
                  <li class="page-item"><a class="page-link" href="#">O</a></li>
                  <li class="page-item"><a class="page-link" href="#">P</a></li>
                  <li class="page-item"><a class="page-link" href="#">Q</a></li>
                  <li class="page-item"><a class="page-link" href="#">R</a></li>
                  <li class="page-item"><a class="page-link" href="#">S</a></li>
                  <li class="page-item"><a class="page-link" href="#">T</a></li>
                  <li class="page-item"><a class="page-link" href="#">U</a></li>
                  <li class="page-item"><a class="page-link" href="#">V</a></li>
                  <li class="page-item"><a class="page-link" href="#">W</a></li>
                  <li class="page-item"><a class="page-link" href="#">X</a></li>
                  <li class="page-item"><a class="page-link" href="#">Y</a></li>
                  <li class="page-item"><a class="page-link" href="#">Z</a></li>

                  <!-- <li class="page-item"><a class="page-link" href="#">Siguiente</a></li>
                  <li class="page-item"><a class="page-link" href="#" aria-label="Next"><span aria-hidden="true">&raquo;</span> -->
                  <!-- <span class="sr-only">Next</span></a></li> -->
              </ul>
          </nav>

          <div class="list-group">
            <a class="list-group-item list-group-item-action" href="#">Aarskog Syndrome</a>
            <a class="list-group-item list-group-item-action" href="#">Abetalipoproteinemia</a>
            <a class="list-group-item list-group-item-action" href="#">Ablepharon-Macrostomia Syndrome</a>
            <a class="list-group-item list-group-item-action" href="#">Acanthocheilonemiasis</a>
            <a class="list-group-item list-group-item-action" href="#">Acanthosis Nigricans</a>
            <a class="list-group-item list-group-item-action" href="#">Aceruloplasminemia</a>
            <a class="list-group-item list-group-item-action" href="#">Achalasia</a>
            <a class="list-group-item list-group-item-action" href="#">Achard Thiers Syndrome</a>
            <a class="list-group-item list-group-item-action" href="#">Achondrogenesis</a>
            <a class="list-group-item list-group-item-action" href="#">Achondroplasia</a>
            <a class="list-group-item list-group-item-action" href="#">Acid Sphingomyelinase Deficiency</a>
            <a class="list-group-item list-group-item-action" href="#">Acidemia Isovaleric</a>
            <a class="list-group-item list-group-item-action" href="#">Acidemia, Methylmalonic</a>
            <a class="list-group-item list-group-item-action" href="#">Acoustic Neuroma</a>
            <a class="list-group-item list-group-item-action" href="#">Acquired Aplastic Anemia</a>
            <a class="list-group-item list-group-item-action" href="#">Acquired Hemophilia</a>
            <a class="list-group-item list-group-item-action" href="#">Acquired Lipodystrophy</a>
            <a class="list-group-item list-group-item-action" href="#">Acquired Neuromyotonia</a>
            <a class="list-group-item list-group-item-action" href="#">Acrocallosal Syndrome, Schinzel Type</a>
            <a class="list-group-item list-group-item-action" href="#">Acrodermatitis Enteropathica</a>
            <a class="list-group-item list-group-item-action" href="#">Acrodysostosis</a>
            <a class="list-group-item list-group-item-action" href="#">Acromegaly</a>
            <a class="list-group-item list-group-item-action" href="#">Acromesomelic Dysplasia</a>
            <a class="list-group-item list-group-item-action" href="#">Acromicric Dysplasia</a>
            <a class="list-group-item list-group-item-action" href="#">ACTH Deficiency</a>
            <a class="list-group-item list-group-item-action" href="#">Acute Disseminated Encephalomyelitis</a>
            <a class="list-group-item list-group-item-action" href="#">Acute Eosinophilic Pneumonia</a>
            <a class="list-group-item list-group-item-action" href="#">Acute Intermittent Porphyria</a>
            <a class="list-group-item list-group-item-action" href="#">Acute Myeloid Leukemia</a>
            <a class="list-group-item list-group-item-action" href="#">Acute Respiratory Distress Syndrome</a>
            <a class="list-group-item list-group-item-action" href="#">Adams Oliver Syndrome</a>
            <a class="list-group-item list-group-item-action" href="#">Addison’s Disease</a>
            <a class="list-group-item list-group-item-action" href="#">Adenoid Cystic Carcinoma</a>
            <a class="list-group-item list-group-item-action" href="#">Adenylosuccinate Lyase Deficiency</a>
            <a class="list-group-item list-group-item-action" href="#">Adie Syndrome</a>
            <a class="list-group-item list-group-item-action" href="#">Adrenoleukodystrophy</a>
            <a class="list-group-item list-group-item-action" href="#">Adult Neuronal Ceroid Lipofuscinosis</a>
            <a class="list-group-item list-group-item-action" href="#">Adult Onset Still’s Disease</a>
            <a class="list-group-item list-group-item-action" href="#">Adult Polyglucosan Body Disease</a>
            <a class="list-group-item list-group-item-action" href="#">AEC Syndrome</a>
            <a class="list-group-item list-group-item-action" href="#">Afibrinogenemia, Congenital</a>
            <a class="list-group-item list-group-item-action" href="#">African Iron Overload</a>
            <a class="list-group-item list-group-item-action" href="#">Agammaglobulinemia</a>
            <a class="list-group-item list-group-item-action" href="#">Agenesis of Corpus Callosum</a>
            <a class="list-group-item list-group-item-action" href="#">Agranulocytosis, Acquired</a>
            <a class="list-group-item list-group-item-action" href="#">Ahumada-Del Castillo Syndrome</a>
            <a class="list-group-item list-group-item-action" href="#">Aicardi Syndrome</a>
            <a class="list-group-item list-group-item-action" href="#">AIDS Dysmorphic Syndrome</a>
            <a class="list-group-item list-group-item-action" href="#">ALAD Porphyria</a>
            <a class="list-group-item list-group-item-action" href="#">Alagille Syndrome</a>
            <a class="list-group-item list-group-item-action" href="#">Alexander Disease</a>
            <a class="list-group-item list-group-item-action" href="#">Alkaptonuria</a>
            <a class="list-group-item list-group-item-action" href="#">Alopecia Areata</a>
            <a class="list-group-item list-group-item-action" href="#">Alpers Disease</a>
            <a class="list-group-item list-group-item-action" href="#">Alpha Thalassemia</a>
            <a class="list-group-item list-group-item-action" href="#">Alpha Thalassemia X-linked Intellectual Disability Syndrome</a>
            <a class="list-group-item list-group-item-action" href="#">Alpha-1 Antitrypsin Deficiency</a>
            <a class="list-group-item list-group-item-action" href="#">Alpha-Mannosidosis</a>
            <a class="list-group-item list-group-item-action" href="#">Alport Syndrome</a>
            <a class="list-group-item list-group-item-action" href="#">Alström Syndrome</a>
            <a class="list-group-item list-group-item-action" href="#">Alternating Hemiplegia of Childhood</a>
            <a class="list-group-item list-group-item-action" href="#">Alveolar Capillary Dysplasia with Misalignment of Pulmonary Veins</a>
            <a class="list-group-item list-group-item-action" href="#">Alveolar Soft Part Sarcoma</a>
            <a class="list-group-item list-group-item-action" href="#">Alveolitis, Extrinsic Allergic</a>
            <a class="list-group-item list-group-item-action" href="#">Alzheimer’s Disease</a>
            <a class="list-group-item list-group-item-action" href="#">Ameloblastic Carcinoma</a>
            <a class="list-group-item list-group-item-action" href="#">Ameloblastoma</a>
            <a class="list-group-item list-group-item-action" href="#">Amelogenesis Imperfecta</a>
            <a class="list-group-item list-group-item-action" href="#">Amniotic Band Syndrome</a>
            <a class="list-group-item list-group-item-action" href="#">Amyloidosis</a>
            <a class="list-group-item list-group-item-action" href="#">Amyotrophic Lateral Sclerosis</a>
            <a class="list-group-item list-group-item-action" href="#">Anaplastic Astrocytoma</a>
            <a class="list-group-item list-group-item-action" href="#">Andersen Disease (GSD IV)</a>
            <a class="list-group-item list-group-item-action" href="#">Andersen-Tawil Syndrome</a>
            <a class="list-group-item list-group-item-action" href="#">Androgen Insensitivity Syndrome, Partial</a>
            <a class="list-group-item list-group-item-action" href="#">Anemia of Chronic Disease</a>
            <a class="list-group-item list-group-item-action" href="#">Anemia, Blackfan Diamond</a>
            <a class="list-group-item list-group-item-action" href="#">Anemia, Hemolytic, Acquired Autoimmune</a>
            <a class="list-group-item list-group-item-action" href="#">Anemia, Hemolytic, Cold Antibody</a>
            <a class="list-group-item list-group-item-action" href="#">Anemia, Hereditary Nonspherocytic Hemolytic</a>
            <a class="list-group-item list-group-item-action" href="#">Anemia, Hereditary Spherocytic Hemolytic</a>
            <a class="list-group-item list-group-item-action" href="#">Anemia, Megaloblastic</a>
            <a class="list-group-item list-group-item-action" href="#">Anemia, Pernicious</a>
            <a class="list-group-item list-group-item-action" href="#">Anemias, Sideroblastic</a>
            <a class="list-group-item list-group-item-action" href="#">Anencephaly</a>
            <a class="list-group-item list-group-item-action" href="#">Angelman Syndrome</a>
            <a class="list-group-item list-group-item-action" href="#">Angioimmunoblastic T-Cell Lymphoma</a>
            <a class="list-group-item list-group-item-action" href="#">Aniridia</a>
            <a class="list-group-item list-group-item-action" href="#">Aniridia Cerebellar Ataxia Mental Deficiency</a>
            <a class="list-group-item list-group-item-action" href="#">Anodontia</a>
            <a class="list-group-item list-group-item-action" href="#">Anthrax</a>
            <a class="list-group-item list-group-item-action" href="#">Antiphospholipid Syndrome</a>
            <a class="list-group-item list-group-item-action" href="#">Antithrombin Deficiency</a>
            <a class="list-group-item list-group-item-action" href="#">Antley Bixler Syndrome</a>
            <a class="list-group-item list-group-item-action" href="#">Apert Syndrome</a>
            <a class="list-group-item list-group-item-action" href="#">Aplasia Cutis Congenita</a>
            <a class="list-group-item list-group-item-action" href="#">Apnea, Infantile</a>
            <a class="list-group-item list-group-item-action" href="#">Apraxia</a>
            <a class="list-group-item list-group-item-action" href="#">Arachnoid Cysts</a>
            <a class="list-group-item list-group-item-action" href="#">Arachnoiditis</a>
            <a class="list-group-item list-group-item-action" href="#">Arginase Deficiency</a>
            <a class="list-group-item list-group-item-action" href="#">Argininosuccinic Aciduria</a>
            <a class="list-group-item list-group-item-action" href="#">Arterial Tortuosity Syndrome</a>
            <a class="list-group-item list-group-item-action" href="#">Arteriovenous Malformation</a>
            <a class="list-group-item list-group-item-action" href="#">Arteritis, Takayasu</a>
            <a class="list-group-item list-group-item-action" href="#">Arthritis, Infectious</a>
            <a class="list-group-item list-group-item-action" href="#">Arthritis, Juvenile Rheumatoid</a>
            <a class="list-group-item list-group-item-action" href="#">Arthritis, Psoriatic</a>
            <a class="list-group-item list-group-item-action" href="#">Arthrogryposis Multiplex Congenita</a>
            <a class="list-group-item list-group-item-action" href="#">Asherman’s Syndrome</a>
            <a class="list-group-item list-group-item-action" href="#">Asherson’s Syndrome</a>
            <a class="list-group-item list-group-item-action" href="#">Aspartylglycosaminuria</a>
            <a class="list-group-item list-group-item-action" href="#">Aspergillosis</a>
            <a class="list-group-item list-group-item-action" href="#">Asphyxiating Thoracic Dystrophy</a>
            <a class="list-group-item list-group-item-action" href="#">Astrocytoma</a>
            <a class="list-group-item list-group-item-action" href="#">Ataxia Telangiectasia</a>
            <a class="list-group-item list-group-item-action" href="#">Ataxia with Vitamin E Deficiency</a>
            <a class="list-group-item list-group-item-action" href="#">ATR-16 Syndrome</a>
            <a class="list-group-item list-group-item-action" href="#">Atransferrinemia</a>
            <a class="list-group-item list-group-item-action" href="#">Atrial Septal Defects</a>
            <a class="list-group-item list-group-item-action" href="#">Atrioventricular Septal Defect</a>
            <a class="list-group-item list-group-item-action" href="#">Atypical Hemolytic Uremic Syndrome</a>
            <a class="list-group-item list-group-item-action" href="#">Autoimmune Blistering Diseases</a>
            <a class="list-group-item list-group-item-action" href="#">Autoimmune Hepatitis</a>
            <a class="list-group-item list-group-item-action" href="#">Autoimmune Polyendocrine Syndrome Type II</a>
            <a class="list-group-item list-group-item-action" href="#">Autoimmune Polyglandular Syndrome Type 1</a>
            <a class="list-group-item list-group-item-action" href="#">Autosomal Dominant Hereditary Ataxia</a>
            <a class="list-group-item list-group-item-action" href="#">Autosomal Dominant Hyper IgE Syndrome</a>
            <a class="list-group-item list-group-item-action" href="#">Autosomal Dominant Polycystic Kidney Disease</a>
            <a class="list-group-item list-group-item-action" href="#">Autosomal Dominant Porencephaly Type I</a>
            <a class="list-group-item list-group-item-action" href="#">Autosomal Dominant Tubulo-Interstitial Kidney Disease</a>
            <a class="list-group-item list-group-item-action" href="#">Autosomal Recessive Hyper IgE Syndrome</a>
            <a class="list-group-item list-group-item-action" href="#">Autosomal Recessive Polycystic Kidney Disease</a>

          </div>

        </div>

</body>
</html>
