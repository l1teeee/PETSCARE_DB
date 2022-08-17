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
    <link href="css/chat.css" rel="stylesheet" type="text/css">
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
<body>


    <!--No tocar-->
    
    <script src="js/index.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

    <!--No tocar-->
    <div class="chat_Completo">
        <div class="Consultas">
            <div class="Abiertas">
                <div class="titulo">
                    <div id="consulta_Abierta">
                        <h2><span>Consultas</span> abiertas</h2>
                    </div>
                    <div id="consulta_Mas">
                        <button class="boton"><i class="fa-solid fa-comment"></i></button>
                    </div>
                </div>
                <div class="chatDoctor">
                     
                    <div class="efo">
                        <img src="../media/mascota/WhatsApp Image 2022-05-18 at 10.13.02 PM.jpeg" id="masc" alt="">
                        <img src="../media/dueños/pau.jpg" id="prof" alt="">
                    </div>
                    
                    <div class="info_Mensaje">
                        <h2>Dr. Pablo Chavez</h2>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magni magnam corrupti dolorem quisquam dicta vero culpa illo sunt reiciendis facere corporis eum dolor ut, aspernatur repellat minima consequatur nulla incidunt.</p>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magni magnam corrupti dolorem quisquam dicta vero culpa illo sunt reiciendis facere corporis eum dolor ut, aspernatur repellat minima consequatur nulla incidunt.</p>
                    </div>
                    
                </div>
                
            </div>
    
            <div class="Cerradas">
                <div class="titulo">
                    <div id="consulta_Cerradas">
                        <h2>Consultas Cerradas</h2>
                    </div>
                </div>
            </div>
    
            <div class="chatDoctor_cerrado">
                <div class="efo">
                    <img src="../media/mascota/WhatsApp Image 2022-05-18 at 10.13.02 PM.jpeg" id="masc" alt="">
                    <img src="../media/dueños/pau.jpg" id="prof" alt="">
                </div>
                <div class="info_Mensaje">
                    <h2>Dr. Pablo Chavez</h2>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magni magnam corrupti dolorem quisquam dicta vero culpa illo sunt reiciendis facere corporis eum dolor ut, aspernatur repellat minima consequatur nulla incidunt.</p>
                </div>
                
            </div>
        </div>
    
        <div class="chat">
            <div class="info_chat">
                <div class="nombre_perfil">
                    <h3><b>Dr. Pablo Chavez</b></h3>
                </div>
                <div class="foto_perfil">
                    <img src="../media/mascota/WhatsApp Image 2022-05-18 at 10.13.02 PM.jpeg" id="masc" alt="">
                </div>
                <div class="iconos_chat_info">
                    <div class="iconos_info">
                        <button class="boton_chat"><i class="fa-solid fa-pen"></i></button>
                    </div>
                    <div class="iconos_info">
                        <button class="boton_chat"><i class="fa-solid fa-clock"></i> </button>
                    </div>
                    <div class="iconos_info">
                        <button class="boton_chat"><i class="fa-solid fa-circle-check"></i></button>
                    </div>
                </div>
            </div>
            <div class="mensajes">
                <div class="mensaje-1">
                    <b><p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corrupti nemo quia commodi fugit repellendus voluptatem exercitationem, architecto quidem quisquam, sint quo qui at reiciendis, dicta voluptates sed cupiditate eum recusandae.</p></b>
                </div>
                <div class="mensaje-1">
                    <b><p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corrupti nemo quia commodi fugit repellendus voluptatem exercitationem, architecto quidem quisquam, sint quo qui at reiciendis, dicta voluptates sed cupiditate eum recusandae.</p></b>
                </div>
                <div class="mensaje-2">
                    <b><p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corrupti nemo quia commodi fugit repellendus voluptatem exercitationem, architecto quidem quisquam, sint quo qui at reiciendis, dicta voluptates sed cupiditate eum recusandae.</p></b>
                </div>
                <div class="mensaje-1">
                    <b><p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corrupti nemo quia commodi fugit repellendus voluptatem exercitationem, architecto quidem quisquam, sint quo qui at reiciendis, dicta voluptates sed cupiditate eum recusandae.</p></b>
                </div>
            </div>
            <div class="enviar_mensajes">
                <div class="icono_camara">
                    <button class="boton_camara"><i class="fa-solid fa-camera"></i></button>
                </div>
                <div class="escribir">
                    <input></input>
                </div>
                <div class="icono_enviar">
                    <button class="boton_enviar"><i class="fa-solid fa-paper-plane"></i> </button>
                    
                </div>
            </div>
    
        </div>

    </div>



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