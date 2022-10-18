<?php


header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
header("Content-Type: text/html; charset=utf-8");

require_once('conection.php');



$conexion = conectoDB();

$json = file_get_contents('php://input');

$object = json_decode($json,true);

$id = $object['id'];

$name = $object['name'];

$age = $object['age'];

$grade = $object['grade'];

$entity = $object['entity'];

$state = $object['state'];

$sql = "SELECT * FROM students WHERE id = '$id' ";

$query = mysqli_query($conexion,$sql);

$dataQuery = mysqli_fetch_array($query);

if ($dataQuery['state'] !== $state) {
    $sql2 = "UPDATE students SET state = '$state' WHERE id = '$id'";
    $query2 = mysqli_query($conexion,$sql2);
    if ($query2) {
        $message = "El estudiante : $name fue marcado como almorzado ";
        echo json_encode(array('STATUS'=>true,'MESSAGE'=>$message));
    }else {
        $message = "algo salio mal con $name";
        echo json_encode(array('STATUS'=>false,'MESSAGE'=>$message));

    }
}else {
    $message = 'Este estudiante ya almorzo, RECOMENDACION : ir a la pestaña de reportar y realizar el proceso';
    echo json_encode(array('STATUS'=>false,'MESSAGE'=>$message));
}


mysqli_close($conexion);



?>