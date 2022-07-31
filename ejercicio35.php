<?php 

    $url = "https://api.dailymotion.com/videos?channel=sport&limit=10";

    //Con las 2 variables siguientes desactivamos el "https" para poder ver el contenido
    $opciones = array("ssl"=>array("verify_peer"=>false, "verify_peer_name"=>false));
    
    $respuesta = file_get_contents($url, false, stream_context_create($opciones));

    //los datos están en $respuesta en modo json, y los vamos a decodificar

    $objRespuesta = json_decode($respuesta);

    //vemos los datos almacenados como objeto 
    //print_r($objRespuesta);

    //accedemos a list porque es quien nos da el arreglo de objetos
    //entonces asignandolo a $video podemos acceder a los atributos de cada objeto de la lista
    foreach($objRespuesta->list as $video){
        //print_r($video->title." ");
        //print_r($video->channel."<br/>");
    }

?>

<ul>
    <?php foreach($objRespuesta->list as $video){ ?>
        <li> <?php echo "Título: ".$video->title." --- "."Canal: ".$video->channel ?> </li>
    <?php } ?>
</ul>