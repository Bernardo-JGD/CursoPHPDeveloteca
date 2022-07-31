<?php
    //Se pueden asignar indices de letras en vez de posiciones numéricas
    $frutas = array( "m" => "Mango", "u" => "Uva", "p" => "Piña");
    print_r($frutas);
    echo "<br/>";
    echo $frutas["m"]."<br/>";
    echo $frutas["u"]."<br/>";
    echo $frutas["p"]."<br/>";

    echo "Imprimiendo valores con foreach <br/>";

    foreach($frutas as $indice => &$valor){
        echo "Indice ".$indice."<br/>";
        echo "Valor ".$valor."<br/>";
        echo "Arreglo con indice ".$frutas[$indice]."<br/>";
        echo "<br/>";
    }

?>