<?php

    class conexion{

        private $servidor="localhost";
        private $usuario="root";
        private $contra="17@93j3A_1jE";
        private $conexion;

        public function __construct(){

            try{

                $this->conexion = new PDO("mysql:host=$this->servidor;dbname=album", $this->usuario, $this->contra);
                $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            }catch(PDOException $e){
                return "Falla de conexion".$e;
            }

        }

        public function ejecutar($sql){
            $this->conexion->exec($sql);
            return $this->conexion->lastInsertId();//retorna el id insertado
        }

        public function consultar($sql){
            $sentencia = $this->conexion->prepare($sql);
            $sentencia->execute();
            return $sentencia->fetchAll();
        }

    }

?>