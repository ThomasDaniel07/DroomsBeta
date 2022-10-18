<?php 

header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
header("Content-Type: text/html; charset=utf-8");

require "conection.php";

$conexion = conectoDB();

$json = file_get_contents('php://input');

$object = json_decode($json,true);

$id = $object['id'];

$name = $object['name'];

$age = $object['age'];

$grade = $object['grade'];

$entity = $object['entity'];

$state = $object['state'];

$sql = "INSERT INTO students (`id`, `name`, `age`, `grade`, `entity`, `state`) VALUES (`$id`,`$name`,`$age`,`$grade`,`$entity`,`$state`)";

$verification = mysqli_fetch_array(mysqli_query($conexion,$sql));

if (isset($verification)) {
    $successLoginMsg = 'Data matched';

    $successLoginJson = json_encode(array('STATUS'=>true,'INFO'=>$successLoginMsg, 'ENTITYS'=>$verification['entitys']));

    echo $successLoginJson;
}
?>