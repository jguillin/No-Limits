<?php
  include_once('../../pages/adminHead.php');
  $title = "ERROR al Crear Usuario";

  if (!empty($_POST)){
    $username = $_POST["username"];
    $password= $_POST["password"];
    $name= $_POST["name"];
    $lastname= $_POST["lastname"];
    $birthdate= $_POST["birthdate"];
    $email= $_POST["email"];
    $sex= $_POST["sex"];
    $role= $_POST["role"];

    include_once("UserCollector.php");
    $UserCollectorObj = new UserCollector();
    if ($UserCollectorObj->createUser($username, $password, $name, $lastname, $birthdate, $email, $sex, $role)){
      $title = "Usuario ". $username ." creado correctamente";
    }
  }
?>

    <title><?php echo $title; ?></title>
  </head>
  <body>
    <section id="content">
      <h2><?php echo $title; ?></h2></br>
      <div><a id='cancelButton' class='form-button' href="/admin/users">Volver</a></div>
    </section>
  <?php include_once('../../pages/adminMenu.php'); ?>
  </body>
</html>
