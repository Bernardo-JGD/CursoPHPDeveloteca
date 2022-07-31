<?php

    if($_POST){
        $inferior = $_POST['in'];
        $superior = $_POST['su'];
        echo rand($inferior, $superior);
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Números Random</title>
</head>
<body>

    <form action="ejercicio18.php" method="post" >

        Ingrese el límite inferior: 
        <input type="text" name="in" />
        <br/>
        Ingrese el límite superior:
        <input type="text" name="su" />
        <br/>
        <input type="submit" value="Generar" />

    </form>
    
</body>
</html>