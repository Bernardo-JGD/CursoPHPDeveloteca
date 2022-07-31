<?php

    $txtNombre = "";
    $radioLenguaje = "";
    $checkRojo = "";
    $checkAzul = "";
    $checkVerde = "";
    $selectAnimal = "";
    $txtComentario = "";

    if($_POST){
        $txtNombre = (isset($_POST['txtNombre']))?$_POST['txtNombre']:"";
        $radioLenguaje = (isset($_POST['lenguaje']))?$_POST['lenguaje']:"";

        $checkRojo = (isset($_POST['chkRojo'])=="si")?"checked":"";
        $checkAzul = (isset($_POST['chkAzul'])=="si")?"checked":"";
        $checkVerde =(isset($_POST['chkVerde'])=="si")?"checked":"";

        $selectAnimal = ( isset($_POST['animal']) )?$_POST['animal']:"";

        $txtComentario = ( isset($_POST['txtComentario']) )?$_POST['txtComentario']:"";

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inputs</title>
</head>
<body>

    <!--Esto solo se muestra si hay un envio POST-->
    <?php if($_POST){ ?>
        <strong>Hola</strong>: <?php echo $txtNombre; ?>
        <br/><br/>
        <strong>Tu lenguaje es: </strong> <?php echo $radioLenguaje; ?> 
        <br/><br/>
        <strong>Te gusta el color: </strong> 
        <br/>
        -- <?php echo ($checkRojo=="checked")?"Rojo":""; ?> <br/>
        -- <?php echo ($checkAzul=="checked")?"Azul":""; ?> <br/>
        -- <?php echo ($checkVerde=="checked")?"Verde":"" ?> <br/>
        <br/>
        <strong>Tu animal favorito es: </strong><?php echo $selectAnimal; ?>
        <br/><br/>
        <strong>Los cangrejos son inmortales porque:</strong> <?php echo $txtComentario; ?>
        <br/><br/>
        
    <?php } ?>

    <form action="ejercicio31.php" method="post" >
        Nombre: 
        <br/>
        <input value="<?php echo $txtNombre ?>" type="text" name="txtNombre" />
        <br/>
        ¿Qué prefieres?
        <br/>
        <input type="radio" name="lenguaje" value="html" id="" <?php echo ($radioLenguaje=="html")?"checked":"" ?> >HTML<br/>
        <input type="radio" name="lenguaje" value="css" id="" <?php echo ($radioLenguaje=="css")?"checked":"" ?> >CSS<br/>
        <input type="radio" name="lenguaje" value="php" id="" <?php echo ($radioLenguaje=="php"?"checked":"") ?> >PHP<br/>
        
        <br/>

        ¿Qué colores te gustan? <br/>

        <input type="checkbox" name="chkRojo" value="si" id="" <?php echo $checkRojo ; ?> />Rojo <br/>
        <input type="checkbox" name="chkAzul" value="si" id="" <?php echo $checkAzul ; ?> />Azul <br/>
        <input type="checkbox" name="chkVerde" value="si" id="" <?php echo $checkVerde ; ?> /> Verde <br/>
        
        <br/>

        ¿Cuál animal es tu favorito? <br/>
        <select name="animal" id="" >
            <option value="">[Ninguno]</option>
            <option value="Pingüino" <?php echo ($selectAnimal=="Pingüino")?"selected":"" ?> >Pingüino</option>
            <option value="Camello" <?php echo ($selectAnimal=="Camello")?"selected":"" ?> >Camello</option>
            <option value="Panda" <?php echo ($selectAnimal=="Panda")?"selected":"" ?> >Panda</option>
        </select>

        <br/>
        <br/>

        ¿Por qué los cangrejos son inmortales?
        <br/>
        <textarea name="txtComentario" id="" cols="30" rows="5" >
            <?php echo $txtComentario; ?>
        </textarea>
        <br/>

        <input type="submit" value="Enviar información" />

    </form>
    
</body>
</html>