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
    <link rel="icon" href="../img/Logo2.jpeg">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/473b31c3bd.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/home.css">
    <link rel="stylesheet" href="../css/list.css">
    <link rel="stylesheet" href="../css/style.css">
    <script src = "https://ajax.aspnetCDN.com/ajax/jQuery/jQuery-3.3.1.min.js"></script>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="../js/search.js"></script>
</body>
</html>