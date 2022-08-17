<?php
    include_once '../MODELO/classSession.php';

    $sesion = new userSesion();
    $sesion->cerrarSesion();

    header('location:../index.html');
?>