<?php

    if($_POST){

        $numero = $_POST['numero'];
        $inicio = 1;
        $fin = 10;

        echo "La tabla del ".$numero." es: <br/>";

        do{

            $multi = $numero * $inicio;
            echo $numero." X ".$inicio." = ".$multi."<br/>";
            $inicio++;

        }while($inicio<=$fin);

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

    <form action="ejercicio16.php" method="post" >

        Ingrese un número:
        <br/>
        <input type="text" name="numero"/>
        <br/>
        <input type="submit" value="Calcular"/>

    </form>
    
</body>
</html>