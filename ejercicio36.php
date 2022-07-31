<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Include</title>
</head>
<body>
    <!--Con esto llamamos el contenido de otro archivo dentro del actual-->
    <!--Si no existe o hay un error en el archivo, va a seguir mostrando el resto del 
        contenido-->
    <!-- <?php include "ejercicio36_1.php"; ?> esto si está comentado XD -->

    <!--include_once se encarga de solo cargar una vez el archivo
        si es que se llama varias veces-->
    <?php include_once "ejercicio36_1.php"; ?>
    <?php include_once "ejercicio36_1.php"; ?>
    

</body>
</html>