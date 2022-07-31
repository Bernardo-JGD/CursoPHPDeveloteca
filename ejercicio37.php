<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Require</title>
</head>
<body>
    <!--Con esto llamamos el contenido de otro archivo dentro del actual-->
    <!--Si no existe o hay un error en el archivo, NO mostrará el resto del 
        contenido-->
    <!--<?php require "ejercicio37_1.php"; ?>-->
    
    <!--require_once se encarga de solo cargar una vez el archivo
        si es que se llama varias veces-->
    <?php require_once "ejercicio37_1.php"; ?>
    <?php require_once "ejercicio37_1.php"; ?>
    
</body>
</html>