<?php

    if($_POST){

        $numero = $_POST['numero'];
        for($i = 1; $i <= 10; $i++){
            $multi = $numero * $i;
            echo $numero." X ".$i." = ".$multi."<br/>";
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
    
    <form action="ejercicio14.php" method="post" >

        Ingrese el número de la tabla que desea calcular: 
        <br />
        <input type="text" name="numero" id=""/>
        <br/>
        <input type="submit" value="Calcular" />

    </form>

</body>
</html>