<?php

    if($_POST){

        $valorA = $_POST['valorA'];
        $valorB = $_POST['valorB'];

        echo "Valor A: ".$valorA."<br/>";
        echo "Valor B: ".$valorB."<br/>";

        $suma = $valorA + $valorB;
        $resta = $valorA - $valorB;
        $multiplicacion = $valorA * $valorB;
        $division = $valorA / $valorB;

        echo "Suma: ".$suma."<br/>";
        echo "Resta: ".$resta."<br/>";
        echo "Multiplicación: ".$multiplicacion."<br/>";
        echo "División: ".$division."<br/>";

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
    
    <form action="ejercicio8.php" method="post" >

    Valor A: 
    <input type="text" name="valorA" id="" />
    <br/>
    Valor B: 
    <input type="text" name="valorB" id="" />
    <br/>
    <input type="submit" value="Enviar"/>


    </form>

</body>
</html>