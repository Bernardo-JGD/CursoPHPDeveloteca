<?php

    if($_POST){
        
        $nombre = $_POST['nombre'];
        $opcion = $_POST['op'];

        if($opcion == "mi"){
            echo strtolower($nombre);
        }else{
            if($opcion == "ma"){
                echo strtoupper($nombre);
            }
        }

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mayúsculas o Minúsculas</title>
</head>
<body>

    <form action="ejercicio19.php" method="post" >
        Ingrese su nombre completo: 
        <input type="text" name="nombre" >
        <br/>
        Convertir a 
        <select name="op" >
            <option value="ma">Mayúsculas</option>
            <option value="mi">Minúsculas</option>
        </select>
        <br/>
        <input type="submit" value="Convertir" >
    </form>
    
</body>
</html>