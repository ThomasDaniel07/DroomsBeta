<?php

if (isset($_GET['id'])) {
    $idOrigin = $_GET['id'];
    require '../php/conection.php';
    $conexion = conectoDB();
    $sql = "SELECT * FROM students WHERE id = $idOrigin";
    $query = mysqli_query($conexion,$sql);
    if ($query) {
        $resultQuery = mysqli_fetch_array($query);
        $id = $resultQuery['id'];
        $name = $resultQuery['name'];
        $age = $resultQuery['age'];
        $grade = $resultQuery['grade'];
        $entity = $resultQuery['entity'];
        $state = $resultQuery['state'];
        echo "
        <form  class='formEditCont2' id='formularioG'>

            <div class='form-floating mb-3'>
                <input type='number' required class='form-control' disabled value='$id' id='id'>
                <label for='floatingInput'>Id*</label>
            </div>

            <div class='form-floating mb-3'>
                <input type='text' required class='form-control' disabled value='$name' id='name'>
                <label for='floatingInput'>Nombre*</label>
            </div>

            <div class='form-floating mb-3'>
                <input type='number' required min='5' max='25' disabled value='$age' class='form-control' id='age'>
                <label for='floatingInput'>Edad*</label>
            </div>

            <div class='form-floating mb-3'>
                <input type='text' required class='form-control' disabled value='$grade' name='grade' id='grade'>
                <label for='floatingInput'>Grado*</label>
            </div>

            <div class='form-floating mb-3'>
                <input type='text' required class='form-control' disabled value='$entity' name='grade' id='entity'>
                <label for='floatingInput'>Entidad*</label>
            </div>   

            <div class='contBtns'>
                <button type='button' class='btn btn-success' id='btnG'>Generar codigo Qr <i class='fa-solid fa-arrow-down animate-bounce' id='arrowDown'></i></button>
            </div>

            <div id='codigoQr'></div>
        </form>

        ";
    }else {
        $name = 'Ops... Ocurrio un error inesperado';
        $age = 'Ops... Ocurrio un error inesperado';
        $grade = 'Ops... Ocurrio un error inesperado';
        $entity = 'Ops... Ocurrio un error inesperado';
        $state = 'Ops... Ocurrio un error inesperado';
        echo "<a href='generatorQr.php'>Volver atras</a>";
    }
}
    
?>

