<?php

    if($_POST){

        print_r($_POST);
        print_r("<br/>");
        print_r($_FILES['archivo']['name']);
        //(archivo=nombreVariable(nameHTML)-tmp_name=nombreOriginalDelArchivo, 
        // ruta.elArchivo-nombreDelArchivo)
        move_uploaded_file($_FILES['archivo']['tmp_name'],"Ejercicio32/".$_FILES['archivo']['name']);

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guardar archivos</title>
</head>
<body>

    <form action="ejercicio32.php" method="post" enctype="multipart/form-data" >

        <input type="file" name="archivo" id=""/>
        <br/>
        <input type="submit" name="enviar" value="Guardar archivo" />

    </form>
    
</body>
</html>