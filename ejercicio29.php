<?php

    $servidor = "localhost";
    $usuario = "root";
    $contra = "17@93j3A_1jE";

    try{

        $conexion = new PDO("mysql:host=$servidor;dbname=album", $usuario, $contra);
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "SELECT * FROM `fotos`";
        //cuidado con las comitas volteadas, se ponen con altgr y donde está la llave de cierre ``

        $sentencia = $conexion->prepare($sql);
        $sentencia->execute();

        $resultado = $sentencia->fetchAll();
        //print_r($resultado);

        foreach($resultado as $foto){
            echo $foto['nombre']."<br/>";
        }

        echo "Conexion establecida";
        

    }catch(PDOException $error){
        echo "Conexion erronea".$error;
    }

?>