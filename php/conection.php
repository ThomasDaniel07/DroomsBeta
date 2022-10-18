<?php

require ('configDB.php');

function conectoDB()
{
    $conection = mysqli_connect(HOSTNAME,USERNAME,PASSWORD,DB);

    if ($conection) {
        return $conection;
    }else {
        echo "OCURRIO ALGUN ERROR";
    }
}

?>