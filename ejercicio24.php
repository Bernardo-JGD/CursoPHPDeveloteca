<?php

    class Persona{

        public $nombre;
        public $apellido;
        private $ocupacion;

        public function recibirDatos($nombre, $apellido, $ocupacion){
            $this->nombre = $nombre;
            $this->apellido = $apellido;
            $this->ocupacion = $ocupacion;
        }

        public function mostrarDatos(){
            echo "Hola, mi nombre es ".$this->nombre." ".$this->apellido." y soy ".$this->retornarOcupacion()."<br/>";
        }

        public function retornarOcupacion(){
            return $this->ocupacion;
        }
        
    }

    if($_POST){

        $persona1 = new Persona();
        $persona1->recibirDatos($_POST['nombre1'], $_POST['apellido1'], $_POST['ocupacion1']);

        $persona2 = new Persona();
        $persona2->recibirDatos($_POST['nombre2'], $_POST['apellido2'], $_POST['ocupacion2']);

        echo "<h4>Datos Persona 1</h4>";
        $persona1->mostrarDatos();
        echo "<h4>Datos Persona 2</h4>";
        $persona2->mostrarDatos();

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clases en PHP</title>
</head>
<body>

    <form action="ejercicio24.php" method="post" >
        <h4>Datos Persona 1</h4>
        Nombre: 
        <input type="text" name="nombre1" />
        <br/>
        Apellido:
        <input type="text" name="apellido1" />
        <br/>
        <select name="ocupacion1">
            <option value="Estudiante" >Estudiante</option>
            <option value="Maestro">Maestro</option>
        </select>   

        <h4>Datos Persona 2</h4>
        Nombre: 
        <input type="text" name="nombre2" />
        <br/>
        Apellido:
        <input type="text" name="apellido2"/>
        <br/>
        Ocupacion:
        <select name="ocupacion2">
            <option value="Estudiante" >Estudiante</option>
            <option value="Maestro">Maestro</option>
        </select>
        <br/>
        <br/>
        <input type="submit" value="Cargar datos"/>
        

    </form>
    
</body>
</html>