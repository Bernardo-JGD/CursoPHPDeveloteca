<?php 
    session_start();
    if($_POST){

        if($_POST['usuario']=="Panda" && $_POST['contra'] == "pachoncito" ){
            $_SESSION['usuario'] = "Panda";//variable de usuario para mantener la sesión
            header("location:index.php");//me redirecciona al archivo o ruta que le indique
        }else{
            //Código javascript
            echo "<script> alert('Usuario o contraseña incorrecta'); </script>";
        }

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>

    <div class="container" >

        <div class="row" >

            <div class="col-md-4" ></div>
                
            <div class="col-md-4" >
            <br/>
                <div class="card" >

                    <div class="card-header" >Iniciar sesión</div>
                    <div class="card-body" >
                        <form action="login.php" method="post" >
                            
                            Usuario: <input class="form-control" type="text" name="usuario"  />
                            <br/>
                            Contraseña: <input class="form-control" type="password" name="contra" />
                            <br/>
                            <button class="btn btn-success" type="submit">Entrar al portafolio</button>
        
                        </form>
                    </div>
                    <div class="card-footer text-muted" ></div>

                </div>
                
                

            </div>

            <div class="col-md-4" ></div>

        </div>

    </div>

    
    
</body>
</html>