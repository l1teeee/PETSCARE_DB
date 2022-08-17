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
    <link href="css/perfil.css" rel="stylesheet" type="text/css">
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
            <a href="index.php"><img src="../media/logo.png" src="index.php"></a>
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
                <!--<div id="sep"></div>
                <a href="post.html"><i class="fa-solid fa-paw"></i></a>
                <div id="sep"></div>
                <a href="cita.html"><i class="fa-solid fa-stethoscope"></i></a>
                <div id="sep"></div>
                <a href="chat.html"><i class="fa-solid fa-comments"></i></a>
                <div id="sep"></div>
                <a href="producto.html"><i class="fa-solid fa-cookie"></i></a>
                <div id="sep"></div>-->
            <div class="cat">
            </div>
            <div class="pro">
                <a href="perfil.php"><span tooltip="Perfil" flow="down"><i class="fa-solid fa-user"></i></span></a>
            </div>
            <div class="pro">
            <a href="../../CONTROLADOR/CtrlCerrar.php"><span tooltip="Perfil" flow="down"><i class="fa-solid fa-right-from-bracket"></i></i></span></a>
            </div>
        </div>
    </div>
    <div id="sep1"></div>
</header>
<body id="cuer">

    <div class="formu" >
        <div class="enca">
            <img src="../media/dueños/pau.jpg" alt="">
            <div class="name">
                <h8>Paula Calderón</h8>
                <a href="editar.php"><span tooltip="Editar perfil" flow="down"><i class="fa-solid fa-pen-to-square"></i></span></a>
            </div>
            <div class="per">
                <div class="caracte" data-aos="fade-down" data-aos-duration="1000">
                    <div class="cara">
                        <div class="cara1">
                            <div id="circu">
                                <i class="fa-solid fa-paw"></i>
                            </div>
                            <div class="defi">
                                <p>Mascotas " "</p>
                            </div>
                        </div>
                    </div>
                    <div class="cara">
                        <div class="cara1">
                            <div id="circu">
                                <i class="fa-solid fa-calendar-minus"></i>
                            </div>
                            <div class="defi">
                                <p>Citas " "</p>
                            </div>
                        </div>
                    </div>
                    <div class="cara">
                        <div class="cara1">
                            <div id="circu">
                                <i class="fa-solid fa-house"></i>
                            </div>
                            <div class="defi">
                                <p>Adopción " "</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="Ubi">
                <div class="home">
                    <i class="fa-solid fa-at"></i>
                </div>
                <div class="pin">
                    <h8>Correo del Usuario: paucalde@gmail.com </h8>
                </div>
            </div>
            <div class="Ubi">
                <div class="home">
                    <i class="fa-solid fa-location-dot"></i>
                </div>
                <div class="pin">
                    <h8>Residencial Los Girasoles 2, Casa #23, Poligono 5, Santa Tecla </h8>
                </div>
            </div>
            <div class="Ubi">
                <div class="home">
                    <i class="fa-solid fa-credit-card"></i>
                </div>
                <div class="pin">
                    <h8>Modo de Paga: Efectivo</h8>
                </div>
            </div>
            <div class="Ubi">
                <div class="home">
                    <i class="fa-solid fa-calendar-day"></i>
                </div>
                <div class="pin">
                    <h8>Fecha de Nacimiento: 14/05/2003</h8>
                </div>
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