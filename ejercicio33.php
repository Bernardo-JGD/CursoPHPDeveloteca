<?php
    //interpretamos una estructura json y la decodificamos para poderla interpretar copn PHP
    
    $jsonContenido = '[
        {"nombre":"José", "apellido":"Guzmán"},
        {"nombre":"Bernardo", "apellido":"Díaz"}
    ]';

    $resultado = json_decode($jsonContenido);
    print_r($resultado);
    print_r("<br/>");
    foreach($resultado as $persona){
        print_r($persona->nombre);
        print_r(" ");
        print_r($persona->apellido);
        print_r("<br/>");
    }

?>