<?php

    if($_POST){
        $numero = $_POST['numero'];
        $inicio = 1;
        $fin = 10;

        while($inicio <= $fin){
            $multi = $numero * $inicio;
            echo $numero." X ".$inicio." = ".$multi."<br/>";
            $inicio++;
        }
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="ejercicio15.php" method="post">
        Ingrese el número de la tabla que desea calcular
        <br/>
        <input type="text" name="numero" id=""/>
        <br/>
        <input type="submit" value="Calcular"/>
    </form>
    
</body>
</html>