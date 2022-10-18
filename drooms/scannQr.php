<?php
    session_start();

    if (empty($_SESSION['username'])) {
    header("Location: ../index.php");
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Drooms</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/473b31c3bd.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.1.10/vue.min.js"></script>
    <link rel="stylesheet" href="../css/home.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/scannQr.css">
    <link rel="icon" href="../img/Logo2.jpeg">
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
                            <a class="nav-link active" aria-current="page" href="home.php">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="generatorQr.php">Generar Qr</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="scannQr.php">Escanear Qr</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="List.php">Ver Listado</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="#">Enviar Reporte</a>
                            </li>
                        </ul>
                        <a type="button" href="../php/closeSession.php" class="btn btn-dark closeS">Cerrar Sesion <i class="fa-solid fa-right-from-bracket"></i></a>
                    </div>
            </div>
    </nav>
    <div class="camCont">
        <button class="btn btn-primary" id="btnActiveCamera">Activar Camara</button>
        <video src="" id="video" autoplay="true"></video>
        <button class="btn btn-danger" id="btnCloseCamera">Apagar Camara</button>
    </div>
    <script src="../js/instascan.min.js"></script>
    <script src="../js/scannQr.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/webrtc-adapter/3.3.3/adapter.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>