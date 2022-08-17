<?php
    require_once "classConexion.php";

    class Registro{

        public function Insertar($nombre, $apellido, $correo, $contra){
            $cn = new Conexion();
            $dbh = $cn->getConexion();
            $sql = "INSERT INTO users(Nombre, Apellido, Correo, Contra) VALUES (:nombre, :apellido, :correo, :contra)";
    
            $stmt = $dbh->prepare($sql);
    
            $stmt->bindParam(':nombre', $nombre);
            $stmt->bindParam(':apellido', $apellido);
            $stmt->bindParam(':correo', $correo);
            $stmt->bindParam(':contra', $contra);
            $stmt->execute();
        }

        

    }

?>