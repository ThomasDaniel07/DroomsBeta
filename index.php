<?php 
  session_start();
  if (isset($_SESSION['username'])) {
    header("Location: ./drooms/home.php");
  }
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Drooms</title>
    <link rel="icon" href="./img/Logo2.jpeg">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap/bootstrap.rtl.min.css">
    <script src="https://kit.fontawesome.com/473b31c3bd.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <div class="contAll">
      <img src="./img/Logo2.jpeg" alt="logo de Drooms" class="logo">
      <form class="formLogin" action="./php/validationLogin.php" method="post">
        <div class="mb-3">
          <label  class="form-label" for="userInput">Usuario</label>
          <input type="text" id="userInput" class="form-control" name="user" aria-describedby="usuarioInfo">
        </div>
        <div class="mb-3">
          <label class="form-label" for="passwordInput">Contraseña</label>
          <input type="password" id="passwordInput" name="password" class="form-control">
          <div class="form-text">
            Nunca compartiremos sus datos con nadie más.
          </div>
        </div>
        <button type="submit" class="btn btn-primary">Iniciar Sesion</button>
          <?php
            if (isset($_GET['error'])) {
              $error = $_GET['error'];
              echo "<div class='alert alert-danger errorN1' role='alert'>$error</div>";
            }
          ?>
      </form>
    </div>
    <script src="bootstrap/bootstrap.min.js"></script>
  </body>
</html>