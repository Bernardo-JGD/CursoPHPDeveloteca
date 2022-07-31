<?php

    $frutas = array("Mango", "Pera", "Uva");
    print_r($frutas);
    echo "<br/>";
    echo $frutas[0]."<br/>";
    echo $frutas[1]."<br/>";
    echo $frutas[2]."<br/>";
    echo "Imprimiendo valores con for <br/>";

    for($indice = 0; $indice<3; $indice++){
        echo $frutas[$indice]."<br/>";
    }

    

?>