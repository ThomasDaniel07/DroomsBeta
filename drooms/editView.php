<?php 

session_start();

if (empty($_SESSION['username'])) {
  header("Location: ../index.php");
}

$id = $_GET['id'];

if (isset($id)) {

    include '../php/conection.php';
    
    $conexion = conectoDB();
    
    $sql="SELECT * FROM students WHERE id='$id'";

    $query=mysqli_query($conexion,$sql);
    
    $row=mysqli_fetch_array($query);



}else {
    header('Location: List.php');
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
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/home.css">
    <link rel="stylesheet" href="../css/editView.css">
</head>
<body>

    <form action="../php/edit.php" method="post" class="formEditCont">

        <h1 class="titleEdit">Cambiando la informacion de <?php echo $row['name'] ?></h1>

        <div class="form-floating mb-3">
            <input type="hidden" class="form-control" name="id" id="floatingInput" value="<?php echo $id ?>">
            <label for="floatingInput">ID</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="name" id="floatingInput" value="<?php echo $row['name'] ?>">
            <label for="floatingInput">Nombre</label>
        </div>
        <div class="form-floating mb-3">
            <input type="number" min='5' max='25' name="age" class="form-control" id="floatingInput" value="<?php echo $row['age'] ?>">
            <label for="floatingInput">Edad</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="grade" id="floatingInput" value="<?php echo $row['grade'] ?>">
            <label for="floatingInput">Grado</label>
        </div>

        <label for="floatingInput">Entidad</label>
        <select class="form-select" name="entity" aria-label="Default select example">
            <option value="SanJose">SanJose</option>
            <option value="Insecaldas">Insecaldas</option>
        </select>

        <label for="floatingInput">Estado</label>
        <select class="form-select" name="status" aria-label="Default select example">
            <option value="Sin Almorzar">Sin Almorzar</option>
            <option value="Almorzado">Almorzado</option>
        </select>

        <div class="contBtns">
            <button type="submit" class="btn btn-success">Guardar Cambios</button>
            <a href="List.php" class="btn btn-danger">Cancelar</a>
        </div>
        <?php
            if (isset($_GET['error'])) {
              $error = $_GET['error'];
              echo "<div class='alert alert-danger errorN1' role='alert'>$error</div>";
            }
        ?>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>
