<?php

    $servidor = "localhost";//puede ir la ip
    $usuario = "root";
    $contra = "17@93j3A_1jE";

    try{

        $conexion = new PDO("mysql:host=$servidor;dbname=album", $usuario, $contra);
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "INSERT INTO `fotos` (`id`, `nombre`, `ruta`) VALUES (NULL, 'Jugando con la programación', 'foto.jpg');";
        $conexion->exec($sql);

        echo "Conexion establecida";

    }catch(PDOException $error){
        echo "Conexion erronea";
    }

?>