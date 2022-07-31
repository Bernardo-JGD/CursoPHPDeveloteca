<?php

    if($_POST){
        
        $va = $_POST['valorA'];
        $vb = $_POST['valorB'];

        if( ($va != $vb) && ($va>$vb) ){
            echo $va." es diferente y mayor que ".$vb;
        }else{
            if(($va != $vb) && (($va<$vb))){
                echo $va." es diferente y menor que ".$vb;
            }else{
                echo $va." es igual que ".$vb;
            }
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
    
    <form action="ejercicio10.php" method="post" >
        Numero A: 
        <input type="text" name="valorA" id="" />
        <br/>
        Numero B: 
        <input type="text" name="valorB" id="" />
        <br/>
        <input type="submit" value="Enviar" />
    </form>

</body>
</html>