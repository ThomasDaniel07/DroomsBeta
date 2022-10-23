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
    <link rel="stylesheet" href="../bootstrap/bootstrap.rtl.min.css">
    <script src="https://kit.fontawesome.com/473b31c3bd.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.1.10/vue.min.js"></script>
    <link rel="stylesheet" href="../css/home.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/scannQr.css">
    <link rel="icon" href="../img/Logo2.jpeg">
</head>
<body>
    <?php require 'nav.php' ?>
    <div class="camCont">
        <button class="btn btn-primary" id="btnActiveCamera">Activar Camara</button>
        <video src="" id="video" autoplay="true"></video>
        <button class="btn btn-danger" id="btnCloseCamera">Apagar Camara</button>
    </div>
    <script src="../js/instascan.min.js"></script>
    <script src="../js/scannQr.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/webrtc-adapter/3.3.3/adapter.min.js"></script>
    <script src="../bootstrap/bootstrap.min.js"></script>
</body>
</html>