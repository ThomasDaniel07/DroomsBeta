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
    <script src = "https://ajax.aspnetCDN.com/ajax/jQuery/jQuery-3.3.1.min.js"></script>
    <script src="https://kit.fontawesome.com/473b31c3bd.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/home.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/generatorQr.css">
    <link rel="stylesheet" href="../css/editView.css">
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
    <form  class="formEditCont2" id="formularioG">
        <div class="form-floating mb-3">
            <input type="number" required class="form-control" name="id" id="id">
            <label for="floatingInput">Id*</label>
        </div>

        <div class="form-floating mb-3">
            <input type="text" required class="form-control" name="name" id="name">
            <label for="floatingInput">Nombre*</label>
        </div>

        <div class="form-floating mb-3">
            <input type="number" required min='5' max='25' name="age" class="form-control" id="age">
            <label for="floatingInput">Edad*</label>
        </div>

        <div class="form-floating mb-3">
            <input type="text" required class="form-control" name="grade" id="grade">
            <label for="floatingInput">Grado*</label>
        </div>

        <select class="form-select form-select-lg" required name="entity" id="entity" aria-label="Default select example">
            <option selected disabled>Elige la entidad</option>
            <option value="SanJose">SanJose</option>
            <option value="Insecaldas">Insecaldas</option>
        </select>

        <div class="contBtns">
            <button type="submit" class="btn btn-success" id="btnG">Generar codigo Qr <i class="fa-solid fa-arrow-down animate-bounce" id="arrowDown"></i></button>
        </div>

        <div id="codigoQr"></div>

    </form>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js" integrity="sha512-CNgIRecGo7nphbeZ04Sc13ka07paqdeTu0WR1IM4kNcpmBAUSHSQX0FslNhTDadL4O5SAGapGt4FodqL8My0mA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="../js/generatorQr.js"></script>
</body>