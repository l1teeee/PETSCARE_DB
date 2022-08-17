<?php
session_start();
$varsesion = $_SESSION['email'];
if($varsesion == null || $varsesion = ''){
    echo  "No tiene acceso";
    die();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="css/adopcion.css" rel="stylesheet" type="text/css">
    <script src="js/scrollreveal.js"></script>
    <link rel="icon" href="../media/logo.png">
    <script src="https://kit.fontawesome.com/28b946baf8.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,400,700&subset=latin-ext" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@800&family=Space+Grotesk:wght@500&display=swap" rel="stylesheet">
    <title>Pets Care</title>
</head>
<header>
    <div class="sup">
        <div id="logo">
            <a href="index.html"><img src="../media/logo.png" src="index.html"></a>
        </div>
        <div class="men">
                <main class="cat">
                    <div>
                        <a href="adopcion.php"><span tooltip="Adopción" flow="down"><i class="fa-solid fa-dog"></i></span></a>
                    </div>
                    <div>
                        <a href="cita.php"><span tooltip="Cita" flow="down"><i class="fa-solid fa-stethoscope"></i></span></a>
                    </div>
                    <div>
                        <a href="chat.php"><span tooltip="Chat" flow="down"><i class="fa-solid fa-comments"></i></span></a>
                    </div>
                    <div>
                        <a href="producto.php"><span tooltip="Productos" flow="down"><i class="fa-solid fa-cookie"></i></span></a>
                    </div>
                    
                </main>
            <div class="cat">
            </div>
            <div class="pro">
                <a href="perfil.php"><span tooltip="Perfil" flow="down"><i class="fa-solid fa-user"></i></span></a>
            </div>
            <div class="pro">
            <a href="../../CONTROLADOR/CtrlCerrar.php"><span tooltip="cerrarSesion" flow="down"><i class="fa-solid fa-right-from-bracket"></i></i></span></a>
            </div>
        </div>
    </div>
    <div id="sep1"></div>
</header>
<body data-barba="wrapper">

    <div class="titulo" data-barba="container" data-barba-namespace="home">
        <h1>
            Adopcion
        </h1>
    </div>
    <div class="contenedor_adopcion">
        <div class="adopcion">
            <div class=" perfil_adopcion">
                <div class="foto_perfil">
                    <img src="../media/mascota/WhatsApp Image 2022-05-18 at 10.13.02 PM.jpeg" id="masc" alt="">
                </div>
                <div class="nombre_perfil">
                    <h3>Manolo Lemina</h3>
                </div>
            </div>
            <div class="foto_adopcion">
                <img src="../media/mascota/WhatsApp Image 2022-05-18 at 10.13.02 PM.jpeg" alt="">
            </div>
            <div class="like_adopcion">
                <button class="adoptar"><i class="fa-solid fa-paw"></i></button>
            </div>
        </div>

        <div class="adopcion">
            <div class=" perfil_adopcion">
                <div class="foto_perfil">
                    <img src="../media/dueños/pau.jpg" id="masc" alt="">
                </div>
                <div class="nombre_perfil">
                    <h3>Manolo Lemina</h3>
                </div>
            </div>
            <div class="foto_adopcion">
                <img src="../media/dueños/pau.jpg" alt="">
            </div>
            <div class="like_adopcion">
                <button class="adoptar"><i class="fa-solid fa-paw"></i></button>
            </div>
        </div>
        
    </div>












    <!--No tocar-->
    
    <script src="js/index.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

    <!--No tocar-->



</body>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://unpkg.com/@barba/core"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.2.4/gsap.min.js"></script>
<script src="main.js"></script>
<footer>
    <div class="fin">
        <div class="iconos">
            <a href=""><i class="fa-brands fa-facebook-f"></i></a>

            <a href=""><i class="fa-brands fa-twitter"></i></a>
            <a href=""><i class="fa-brands fa-instagram"></i></a>
        </div>
        <div id="name">
            <p>Pets Care</p>
        </div>
    </div>
</footer>
</html>