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
    <link href="css/producto.css" rel="stylesheet" type="text/css">
    <script src="js/scrollreveal.js"></script>
    <link rel="icon" href="../media/logo.png">

    <!-- Iconos -->
    <script src="https://kit.fontawesome.com/28b946baf8.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <!-- Iconos -->

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <!-- Bootstrap -->

    <!-- Barba -->
    <script src="https://unpkg.com/@barba/core"></script>
    <script src="https://cdn.jsdelivr.net/npm/@barba/core"></script>
    <!-- Barba -->

    <!-- Fuentes -->
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,400,700&subset=latin-ext" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@800&family=Space+Grotesk:wght@500&display=swap" rel="stylesheet">
    <!-- Fuentes -->
    
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
<body style="background-color: #FFF2EA">
    <input type="checkbox" name="" id="check">
    <div class="contenedor-carrito">
        <div class="cabeza_carrito">
            
            <span><p class="texto_cerrar">Carrito</p><i class="fa-solid fa-cart-shopping"></i></span><label class="cerrar" for="check"><i class="fa-solid fa-xmark"></i></label>
        </div>
        
        <ol>
            <li>
                <div class="foto_producto">
                    <img src="../media/mascota/WhatsApp Image 2022-05-18 at 10.13.02 PM.jpeg" id="masc" alt="">
                </div>
                <div class="nombre_producto">
                    <h4>Comida Perro</h4>
                </div>
                <div class="precio_producto">
                    <h4>$25</h4>
                </div>
                <div class="cancelar">
                    <a href="#"><i class="fa-solid fa-xmark"></i></a>
                </div>

            </li>
            <li>
                <div class="foto_producto">
                    <img src="../media/mascota/WhatsApp Image 2022-05-18 at 10.13.02 PM.jpeg" id="masc" alt="">
                </div>
                <div class="nombre_producto">
                    <h4>Comida Perro</h4>
                </div>
                <div class="precio_producto">
                    <h4>$25</h4>
                </div>
                <div class="cancelar">
                    <a href="#"><i class="fa-solid fa-xmark"></i></a>
                </div>
            </li>
            <li>
                <div class="foto_producto">
                    <img src="../media/mascota/WhatsApp Image 2022-05-18 at 10.13.02 PM.jpeg" id="masc" alt="">
                </div>
                <div class="nombre_producto">
                    <h4>Comida Perro</h4>
                </div>
                <div class="precio_producto">
                    <h4>$25</h4>
                </div>
                <div class="cancelar">
                    <a href="#"><i class="fa-solid fa-xmark"></i></a>
                </div>
                
            </li>
        </ol>
    </div>

    <div class="todi">
        <div class="tipo">
            <div class="acce">
                <h1 id="enca">Accesorios</h1>
                <div class="titi">
                    <a href="productos/Accesorios.html"><img src="../media/acce.png" class="img-responsive center-block"></a>
                    <a href="productos/Accesorios.html" id="enca1"><i class="fa-solid fa-chevron-right"></i></a>
                </div>

            </div>

            <div class="acce1">
                <h1 id="enca2">Alimentación</h1>
                <div class="titi1">
                    <a href="productos/Alimentos.html"><img src="../media/food.png" class="img-responsive center-block"></a>
                    <a href="productos/Alimentos.html" id="enca3"><i class="fa-solid fa-chevron-right"></i></a>
                
                </div>

            </div>

            <div class="acce8">
                <h1 id="enca9">Medicamentos</h1>
                <div class="titi2">
                    <a href="productos/Medicamentos.html"><img src="../media/med (2).png" class="img-responsive center-block"></a>
                    <a href="productos/Medicamentos.html" id="enca4"><i class="fa-solid fa-chevron-right"></i></a>
                </div>

            </div>

        </div>
        <div class="produc">
            <div id="titular">
                <h1>Nuevos productos</h1>
            </div>
            <div class="fia">
                <div class="conten">
                    <div class="product-card">
                        <div class="product-tumb">
                          <img src="https://d1cft8rz0k7w99.cloudfront.net/n/a/6/1/a/a61a6b62ccf677865ce64e4bd4cf7f39991966e8_PetFurniture_434898_01.JPG" alt="">
                        </div>
                        <div class="product-details">
                          <span class="product-catagory">Catry</span>
                          <h4><a href="">Catry Torre Deluxe para Gatos con Toldo y Camas Afelpadas</a></h4>
                          <p>Tu gato se sentirá cómodo y feliz en esta torre para gatos de cuerda de papel con dos áreas de descanso afelpadas y un gran apartamento. Postes rascadores cubiertos de soga, juguete con cuerda de sisal y otros juguetes para más diversión.</p>
                          <div class="product-bottom-details">
                            <div class="product-price"><small>$175.00</small>$104.99</div>
                            <div class="product-links">
                              <a href=""><i class="fa fa-shopping-cart"></i></a>
                            </div>
                          </div>
                        </div>
                    </div>
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