<?php
    class Conexion{
        public function getConexion(){ 
            $host = "localhost";
            $bdd = "petscare";
            $user = "PetsCare";
            $pass = "fonsProyec22!";
            try{
                $dsn = "mysql:host=$host;dbname=$bdd";
                $dbh = new PDO($dsn,$user,$pass);
                return $dbh;
        }catch(PDOException  $e){
            echo "Fallo de conexión: " . $e->getMessage();
        }
        }
    }
?>