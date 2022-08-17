<?php
    require_once "../MODELO/classConexion.php";
    require_once "../MODELO/daoRegistro.php";

    $nombre = isset($_POST['nom'])?$_POST['nom']:"";
    $apellido = isset($_POST['ape'])?$_POST['ape']:"";
    $correo = isset($_POST['ema'])?$_POST['ema']:"";
    $contra = isset($_POST['password'])?$_POST['password']:"";
 //REGITRAR USUARIO
    $dao = new Registro();
    $dao->Insertar($nombre, $apellido, $correo, $contra);
?>
    <script>
        window.location='../VISTA/login/index.php';
    </script>

<?php
?>