<?php
    //if else anidado-----------------Ejercicio 11 y 12
    if($_POST){

        $edad = $_POST['edad'];

        if($edad<0){
            echo "Tu edad no es validad, todavía no naces :v";
        }else{
            if($edad>=0 && $edad<4){
                echo "Todavía ni hablas :v";
            }else{
                if($edad>=4 && $edad<12){
                    echo "Tas chiquito todavía, aprende a leer y escribir";
                }else{
                    if($edad>=12 && $edad<18){
                        echo "Disfruta esta etapa :'3";
                    }else{
                        if($edad>=18 && $edad<=22){
                            echo "Ya se puso dura la cosa";
                        }else{
                            echo "Fuera de mi conocimiento, se vienen cosas curiosas, preparate";
                        }
                    }
                }
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

    <form action="ejercicio11.php" method="post" >
        Ingrese su edad: 
        <input type="text" name="edad" id="" />
        <br/>
        <input type="submit" value="Enviar" />

    </form>
    
</body>
</html>