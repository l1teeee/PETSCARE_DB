<?php
$accion = isset($_REQUEST['accion'])?$_REQUEST['accion']:"";
session_start();
include_once "../MODELO/classUser.php";
require_once "../MODELO/classConexion.php";
require_once "../MODELO/classSession.php";

$sesion = new userSesion();
$usuario = new user();


if(isset($_SESSION['user'])){
    $usuario->setEmail($sesion->getEmail);
    $con = true;
    include_once "../VISTA/index.php";

}elseif(isset($_POST['email']) && isset($_POST['pass'])){

    $emailForm = $_POST['email'];
    $passForm = $_POST['pass'];


    if($usuario->userExists($emailForm, $passForm)){
        session_start();
        $_SESSION['email']=$emailForm;
        header('location:../VISTA/login/index.php');
    }
}

?>