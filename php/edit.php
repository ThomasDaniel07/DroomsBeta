<?php

$id = $_POST['id'];
$name = $_POST['name'];
$age = $_POST['age'];
$grade = $_POST['grade'];
$entity = $_POST['entity'];
$status = $_POST['status'];

require "conection.php";

$conexion = conectoDB();

$sql="UPDATE students SET name ='$name',age='$age',grade='$grade',entity='$entity',state='$status' WHERE id='$id'";

$query = mysqli_query($conexion,$sql);

if ($query == true) {
    header("Location: ../drooms/List.php");
}else {
    header("Location: ../drooms/editView.php?error='Ops!.. Hubo un error, porfavor intente de nuevo'");
}

?>