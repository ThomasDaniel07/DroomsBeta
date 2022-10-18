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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/473b31c3bd.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/home.css">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid container">
            <a class="navbar-brand" href="home.php">
                <img src="../img/Logo2.jpeg" alt="Logo" width="80" class="d-inline-block align-text-top">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                    <a class="btn btn-dark closeS" aria-current="page" href="home.php">Inicio</a>
                    </li>
                    <li class="nav-item">
                    <a class="btn btn-dark closeS" href="generatorQr.php">Generar Qr</a>
                    </li>
                    <li class="nav-item">
                    <a class="btn btn-dark closeS" href="scannQr.php">Escanear Qr</a>
                    </li>
                    <li class="nav-item">
                    <a class="btn btn-dark closeS" href="List.php">Ver Listado</a>
                    </li>
                    <li class="nav-item">
                    <a class="btn btn-dark closeS" href="#">Enviar Reporte</a>
                    </li>
                </ul>
                <a type="button" href="../php/closeSession.php" class="btn btn-dark closeS">Cerrar Sesion <i class="fa-solid fa-right-from-bracket"></i></a>
            </div>
        </div>
    </nav>
    <div class="card welcomeD">
      <div class="card-body">
        Hola <b> <?php echo $_SESSION['username'] ?> </b>, Somos un aplicativo web que facilita el uso y el control de los restaurantes de comida saludable,y contribuimos a una mejor toma de decisiones de las mismas. Diseñado con herramientas de software libre para tener control y administrar los procedimientos.
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>
