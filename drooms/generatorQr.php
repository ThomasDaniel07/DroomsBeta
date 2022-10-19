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
    <?php require 'nav.php' ?>
    <div class="container-fluid search">
        <div class="d-flex" role="search">
            <input class="form-control me-2" id="cajaSearch" type="search" placeholder="Digita una id, Ejem : 1044612757" aria-label="Search">
        </div>
    </div>
    <div class="col-md-8 contTable">
    </div>
    <?php require_once './generatorQrF.php'?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js" integrity="sha512-CNgIRecGo7nphbeZ04Sc13ka07paqdeTu0WR1IM4kNcpmBAUSHSQX0FslNhTDadL4O5SAGapGt4FodqL8My0mA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="../js/generatorQr.js"></script>
</body>