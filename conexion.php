<?php
    //Datos de conexion
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'ibcnews';

    //Conexion
    $conexion = new mysqli($servername, $username, $password, $database);

    //Chequear conexion
    if($conexion->connect_error){
        die("Conexion fallida " . $conexion->connect_error);
    }
    elseif($conexion){
        echo "Conexion exitosa";
    }
    

?>