<?php

    $frutas = array("Fresa", "Sandia", "Durazno");
    for($indice = 0; $indice<3; $indice++){
        echo $frutas[$indice]."<br/>";
    }

    echo "<br/>";

    if($_POST){
        $frutaN = $_POST['frutaNueva'];
        array_push($frutas, $frutaN);

        foreach($frutas as $indice => &$valor){
            echo $frutas[$indice]."<br/>";
        }

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Push</title>
</head>
<body>
    
    <form action="ejercicio23.php" method="post" >

        Ingrese una nueva fruta:
        <input type="text" name="frutaNueva" />
        <br/>
        <input type="submit" value="Agregar" />
    </form>

</body>
</html>