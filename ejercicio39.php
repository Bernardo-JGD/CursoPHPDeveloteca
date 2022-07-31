<?php 

    $nombreArchivo = "archivo.txt";
    $contenidoArchivo = "Buu!!!, me acabo de crear :D";

    //aquí creamos el archivo y lo ponemos en modo escritura
    $archivoACrear = fopen($nombreArchivo, "w");

    //(el archivo en el que queremos escribir, lo que queremos escribir);
    fwrite($archivoACrear, $contenidoArchivo);

    //cerramos el archivo
    fclose($archivoACrear);

    echo "Según ya se creó el txt :v";

    

?>