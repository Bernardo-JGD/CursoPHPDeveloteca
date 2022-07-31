<?php

    if($_POST){

        $operador = $_POST['op'];
        $n1 = $_POST['n1'];
        $n2 = $_POST['n2'];

        realizarOperacion($operador, $n1, $n2);

    }

    function realizarOperacion($operador, $n1, $n2){

        switch($operador){
            case "+":
                suma($n1, $n2);
                break;

            case "-":
                resta($n1, $n2);
                break;

            case "*":
                multiplicacion($n1, $n2);
                break;

            case "/":
                division($n1, $n2);
                break;
        }

    }

    function suma($n1, $n2){
        $suma = $n1 + $n2;
        echo $n1." + ".$n2." = ".$suma;
    }

    function resta($n1, $n2){
        $resta = $n1 - $n2;
        echo $n1." - ".$n2." = ".$resta;
    }

    function multiplicacion($n1, $n2){
        $multi = $n1 * $n2;
        echo $n1." * ".$n2." = ".$multi;
    }

    function division($n1, $n2){
        $divi = $n1 / $n2;
        echo $n1." / ".$n2." = ".$divi;
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operaciones con funciones</title>
</head>
<body>

    <form action="ejercicio17.php" method="post" >

        Ingrese operando 1:
        <input type="text" name="n1" />
        <br/>
        Ingrese operando 2: 
        <input type="text" name="n2" />
        <br/>
        Ingrese operador: 
        <select name="op">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <input type="submit" value="Calcular" />

    </form>
    
</body>
</html>