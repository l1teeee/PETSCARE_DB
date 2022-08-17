<?php

include_once 'classConexion.php';

class user{
    private $nombre;
    private $email;
    public $data;


    public function userExists($correo, $pass){
        $db = new Conexion();
        $dbh = $db->getConexion();
        //$hash = password_hash($pass, PASSWORD_DEFAULT, ['cost' => 10]);
        $sql = "SELECT * FROM users WHERE correo = :email AND contra = :pass";
        $stmt = $dbh->prepare($sql);
        $stmt->bindParam(':email',$correo);
        $stmt->bindParam(':pass', $pass);
        $stmt->execute();
        
        if($stmt->rowCount()){
            return true;
        }else{
            return false;
        }   
    }

    public function setEmail($email){
        $db = new Conexion();
        $dbh = $db->getConexion();
        $sql = "SELECT * FROM users WHERE correo = :email";
        $stmt = $dbh->prepare($sql);
        $stmt->bindParam(':correo', $email);
        $stmt->execute();

        foreach($stmt as $usuario){
            $this->nombre = $usuario['nombre'];
            $this->email = $usuario['email'];
        }
    }

    public function getEmail(){
        return $this->email;
    }
}

?>