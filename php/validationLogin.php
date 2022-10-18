<?php 

require_once('./conection.php');

    
    $conexion = conectoDB();
    
    $user = $_POST['user'];
    
    $password = $_POST['password'];

    if (!empty($user) and !empty($password)) {
        $sql = "SELECT * FROM users WHERE user = '$user' AND password = '$password'";
        
        $resultQuery = mysqli_fetch_array(mysqli_query($conexion,$sql));
        
        if (isset($resultQuery)) {
            
            session_start();

            $_SESSION['username'] = $user;

            header("Location: ../drooms/home.php");

        }else {
            header("location: ../index.php?error=Usuario/Contraseña incorrecta, porfavor intente de nuevo");
        }
    }else{
        header("location: ../index.php?error=Campos Vacios, porfavor ingrese los datos requeridos");
    }
    

?>
