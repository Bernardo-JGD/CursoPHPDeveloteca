<?php 
    //De esta manera, si alguien quiere consumir la información que 
    //tengo en mi página, al usar la url les arroja la información en
    //formato json
    $personas = array("Oscar"=>40, "José"=>20, "Marisa"=>38);

    echo json_encode($personas);

?>