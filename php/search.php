<?php


require ("../php/conection.php");

    $conexion = conectoDB();

    session_start();

    $entity = $_SESSION['username'];

    $out = "";

    $sql = "SELECT * FROM `students` WHERE entity = '$entity' ";

    if (isset($_POST['consulta'])) {
        $q = $_POST['consulta'];
        $sql = "SELECT * FROM `students` WHERE entity = '$entity' AND id LIKE '%".$q."%' OR name LIKE '%".$q."%'";
    }

    $result = mysqli_query($conexion,$sql);

    if ($result->num_rows > 0) {
        $out.= "<table class='table table-light' >
                    <thead class='table-dark table-striped' >
                        <tr>
                            <th>Id</th>
                            <th>Nombre</th>
                            <th>Edad</th>
                            <th>Grado</th>
                            <th>Entidad</th>
                            <th>Estatus</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>";
        while ($row = $result->fetch_assoc()){
            $id = $row['id'];
            $out.="     <tr>
                            <th>".$row['id']."</th>
                            <th>".$row['name']."</th>
                            <th>".$row['age']."</th>
                            <th>".$row['grade']."</th>    
                            <th>".$row['entity']."</th>    
                            <th>".$row['state']."</th>    
                            <th><a class='btn btn-primary'href='editView.php?id=$id'>Editar</a></th>
                            <th><a class='btn btn-danger' href='../php/delete.php?id=$id'>Eliminar</a></th>
                        </tr>";
        }
        $out.="</tbody></table>";
    }else {
        echo "
        <div class='alert alert-primary' role='alert'>
            No se encontro ninguna coincidencia
        </div>
      
        ";
    }

    echo $out;

    mysqli_close($conexion);
?>