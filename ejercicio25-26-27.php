<?php

    class Unidad{

        private $vida;
        private $stimpack;

        public static function separarUnidades(){
            echo "<br/>";
        }   

    }

    class Marine extends Unidad{

        private $escudo;
        
        function __construct($vida, $stimpack, $escudo){
            $this->vida = $vida;
            $this->stimpack = $stimpack;
            $this->escudo = $escudo;
        }

        public function mostrarInfo(){
            echo "Vida: ".$this->vida."<br/>";
            echo "Escudo: + ".$this->escudo." de vida <br/>";
            echo "Menos ".$this->stimpack." de vida por stimpack <br/>";
        }

        public static function mostrarUnidad(){
            echo "Unidad: Marine <br/>";
        }

    }

    class Merodeador extends Unidad{

        private $cartuchos;
        
        function __construct($vida, $stimpack, $cartuchos){
            $this->vida = $vida;
            $this->stimpack = $stimpack;
            $this->cartuchos = $cartuchos;
        }

        public function mostrarInfo(){
            echo "Vida: ".$this->vida."<br/>";
            echo "Cartuchos: +".$this->cartuchos." de daño <br/>";
            echo "Menos ".$this->stimpack." de vida por stimpack <br/>";
        }

        public static function mostrarUnidad(){
            echo "Unidad: Merodeador <br/>";
        }

    }

    if($_POST){

        $marine = new Marine($_POST['vida1'], $_POST['stimpack1'], $_POST['escudo']);
        $merodeador = new Merodeador($_POST['vida2'], $_POST['stimpack2'], $_POST['cartuchos']);

        //Al parecer para que los métodos los pueda usar el objeto, tienen que ser public y no private
        //Actualización de lo anterior: los objetos pueden utilizar directamente métodos public y static
        $marine->mostrarUnidad();
        $marine->mostrarInfo();
        Unidad::separarUnidades();//PUedo usar métodos estaticos sin necesidad de declarar objetos
        $merodeador->mostrarUnidad();
        $merodeador->mostrarInfo();

    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Constructores y Herencia</title>
</head>
<body>
    <h1>Barraca</h1>
    <form action="ejercicio25-26-27.php" method="post" >

        <h3>Marine</h3>
        Ingrese cantidad de vida: 
        <input type="text" name="vida1" />
        <br/>
        Ingrese cantidad de stimpack: 
        <input type="text" name="stimpack1" />
        <br/>
        Ingrese cantidad de escudo:
        <input type="text" name="escudo" />
        <br/>

        <h3>Merodeador</h3>
        Ingrese cantidad de vida: 
        <input type="text" name="vida2" />
        <br/>
        Ingrese cantdiad de stimpack:
        <input type="text" name="stimpack2" />
        <br/>
        Ingrese cantidad de daño con cartuchos: 
        <input type="text" name="cartuchos" />
        <br/>

        <input type="submit" value="Cargar Datos" />


    </form>
</body>
</html>