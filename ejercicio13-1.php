<?php

    if($_POST){

        $mes = $_POST['btnValor'];
        $dia = $_POST['dia'];

        switch($mes){

            case "Enero": 

                echo "Estamos en Invierno, no importa el día";

                break;

            case "Febrero": 

                echo "Estamos en Invierno, no importa el día";
                
                break;

            case "Marzo":
                
                if($dia != null && $dia>0 && $dia<31){
                    if($dia<21){
                        echo"Todavía estamos en Invierno";
                    }else{
                        echo"Ya estamos en Primavera";
                    }
                }else{
                    echo"Ese día no se vale, ingrésalo bien >:'3";
                }

                break;

            case "Abril":
                
                echo "Estamos en Primavera, no importa el día";

                break;

            case "Mayo": 

                echo "Estamos en Primavera, no importa el día";

                break;

            case "Junio":

                if($dia != null && $dia>0 && $dia<31){
                    if($dia<22){
                        echo"Todavía estamos en Primavera";
                    }else{
                        echo"Ya estamos en Verano";
                    }
                }else{
                    echo"Ese día no se vale, ingrésalo bien >:'3";
                }

                break;

            case "Julio":


                echo "Estamos en Verano, no importa el día";

                break;

            case "Agosto":

                echo "Estamos en Verano, no importa el día";

                break;

            case "Septiembre":

                if($dia != null && $dia>0 && $dia<31){
                    if($dia<22){
                        echo"Todavía estamos en Verano";
                    }else{
                        echo"Ya estamos en Otoño";
                    }
                }else{
                    echo"Ese día no se vale, ingrésalo bien >:'3";
                }

                break;

            case "Octubre":

                echo "Estamos en Otoño, no importa el día";

                break;

            case "Noviembre":

                echo "Estamos en Otoño, no importa el día";

                break;

            case "Diciembre":

                if($dia != null && $dia>0 && $dia<31){
                    if($dia<21){
                        echo"Todavía estamos en Otoño";
                    }else{
                        echo"Ya estamos en Invierno";
                    }
                }else{
                    echo"Ese día no se vale, ingrésalo bien >:'3";
                }

                break;

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

    <form action="ejercicio13-1.php" method="post">

        <input type="submit" name="btnValor" value="Enero"/>
        <input type="submit" name="btnValor" value="Febrero"/>
        <input type="submit" name="btnValor" value="Marzo"/>
        <input type="submit" name="btnValor" value="Abril"/>
        <input type="submit" name="btnValor" value="Mayo"/>
        <input type="submit" name="btnValor" value="Junio"/>
        <input type="submit" name="btnValor" value="Julio"/>
        <input type="submit" name="btnValor" value="Agosto"/>
        <input type="submit" name="btnValor" value="Septiembre"/>
        <input type="submit" name="btnValor" value="Octubre"/>
        <input type="submit" name="btnValor" value="Noviembre"/>
        <input type="submit" name="btnValor" value="Diciembre"/>
        <br/>
        Ingrese el día
        <input type="text" name="dia"  />

    </form>
    
</body>
</html>