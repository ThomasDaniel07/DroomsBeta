<?php

$id = $_GET['id'];

include 'conection.php';

$conexion = conectoDB();

$sql = "DELETE FROM `students` WHERE id = $id";

$query = mysqli_query($conexion,$sql);

if ($query) {
    header("Location: ../drooms/List.php");
}else{
    echo "Algo salio mal xd ";
}


?>