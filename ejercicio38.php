<?php 

    //Pongo la ruta
    $archivo = "contenido.txt";
    
    //abro el archivo
    $archivoAbierto = fopen($archivo, "r");

    //leo el archivo 
    $contenido = fread($archivoAbierto, filesize($archivo));

    echo $contenido;

?>