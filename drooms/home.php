<?php

session_start();

if (empty($_SESSION['username'])) {
  header("Location: ../index.php");
}

?>
<!doctype html>
<html lang="en">
  <head>
    <title>Drooms</title>
    <link rel="icon" href="../img/Logo2.jpeg">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../bootstrap/bootstrap.rtl.min.css">
    <script src="https://kit.fontawesome.com/473b31c3bd.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/home.css">
  </head>
  <body>
    <?php require 'nav.php' ?>
    <div class="card welcomeD">
      <div class="card-body">
        Hola <b> <?php echo $_SESSION['username'] ?> </b>, Somos un aplicativo web que facilita el uso y el control de los restaurantes de comida saludable,y contribuimos a una mejor toma de decisiones de las mismas. Diseñado con herramientas de software libre para tener control y administrar los procedimientos.
      </div>
    </div>
    <script src="../bootstrap/bootstrap.min.js"></script>
</body>
</html>
