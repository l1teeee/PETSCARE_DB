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
    <link href="css/index.css" rel="stylesheet" type="text/css">
    <script src="js/scrollreveal.js"></script>
    <link rel="icon" href="../media/logo.png">
    <script src="https://kit.fontawesome.com/28b946baf8.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,400,700&subset=latin-ext" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@800&family=Space+Grotesk:wght@500&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
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
    <div class="prin">
        <div class="comple scroll-banner">
            <h1>La mejor atención para consentir a tú mascota</h1>
            <div class="button scroll-banner">
                <p>Descubre</p>
                <p>Descubrenos</p>
            </div>
        </div>
        <div id="ban">
            <img src="../media/baner.png" class="rounded" alt="...">
        </div>
    </div>
    <div class="caracte" data-aos="fade-down" data-aos-duration="1000">
        <div class="cara">
            <div class="cara1">
                <div id="circu">
                    <i class="fa-solid fa-truck-medical"></i>
                </div>
                <div class="defi">
                    <p>Servicio A Domicilio</p>
                </div>
            </div>
        </div>
        <div class="cara">
            <div class="cara1">
                <div id="circu">
                    <i class="fa-solid fa-clock"></i>
                </div>
                <div class="defi">
                    <p>Servicio 24/7</p>
                </div>
            </div>
        </div>
        <div class="cara">
            <div class="cara1">
                <div id="circu">
                    <i class="fa-solid fa-pills"></i>
                </div>
                <div class="defi">
                    <p>Medicinas de Calidad</p>
                </div>
            </div>
        </div>
        <div class="cara">
            <div class="cara1">
                <div id="circu">
                    <i class="fa-solid fa-user-doctor"></i>
                </div>
                <div class="defi">
                    <p>Veterinarios especialistas</p>
                </div>
            </div>
        </div>
    </div>
    <div id="sep1"></div>
    <div class="titu">
        <div id="titu1">
            <p>Productos</p>
        </div>
        <div id="titu2">
            <a href="producto.html"><p>Mostrar todo</p></a>
        </div>
    </div>
    <div class="productos">
        <script>$(document).ready(function(){

            $('#itemslider').carousel({ interval: 3000 });
            
            $('.carousel-showmanymoveone .item').each(function(){
            var itemToClone = $(this);
            
            for (var i=1;i<6;i++) {
            itemToClone = itemToClone.next();
            
            if (!itemToClone.length) {
            itemToClone = $(this).siblings(':first');
            }
            
            itemToClone.children(':first-child').clone()
            .addClass("cloneditem-"+(i))
            .appendTo($(this));
            }
            });
            });
        </script>
        
        <div class="container-fluid">
          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="carousel carousel-showmanymoveone slide" id="itemslider">
                <div class="carousel-inner">
        
                  <div class="item active">
                    <div class="col-xs-12 col-sm-6 col-md-2">
                      <a href="productos/producto.html"><img src="https://static1.lucasylola.es/9834-thickbox_default/juguete-para-perro-peluche-tigre.jpg" class="img-responsive center-block"></a>
                      <h4 class="text-center">Peluche</h4>
                      <h5 class="text-center">$ 15.00</h5>
                    </div>
                  </div>
        
                  <div class="item">
                    <div class="col-xs-12 col-sm-6 col-md-2">
                      <a href="productos/producto.html"><img src="https://ferreteriavidri.com/images/items/large/142550.jpg" class="img-responsive center-block"></a>
                      <h4 class="text-center">Collar para perro</h4>
                      <h5 class="text-center">$ 8.00</h5>
                    </div>
                  </div>
        
                  <div class="item">
                    <div class="col-xs-12 col-sm-6 col-md-2">
                      <a href="productos/producto.html"><img src="https://ae01.alicdn.com/kf/H82472690c0e345199dea40e8140ab1a7t/Collar-suave-para-perro-correa-para-caminar-arn-s-de-gatos-para-perros-peque-os-medianos.jpg" class="img-responsive center-block"></a>
                      <span class="badge">10%</span>
                      <h4 class="text-center">Kit completo de arnés</h4>
                      <h5 class="text-center">% 22.50</h5>
                      <h6 class="text-center">$ 25.00</h6>
                    </div>
                  </div>
        
                  <div class="item">
                    <div class="col-xs-12 col-sm-6 col-md-2">
                      <a href="productos/producto.html"><img src="https://www.diariodesevilla.es/2021/04/26/sociedad/Arbol-rascador_1568553352_137656221_1200x2290.jpg" class="img-responsive center-block"></a>
                      <h4 class="text-center">Torre de Juegos para gato</h4>
                      <h5 class="text-center">$ 52.99</h5>
                    </div>
                  </div>
        
                  <div class="item">
                    <div class="col-xs-12 col-sm-6 col-md-2">
                      <a href="productos/producto.html"><img src="https://static.miscota.com/media/1/photos/products/131078/rueda-para-hamster-plastico_1_g.jpeg" class="img-responsive center-block"></a>
                      <h4 class="text-center">Rueda de Hamnster</h4>
                      <h5 class="text-center">$ 4.50</h5>
                    </div>
                  </div>
        
                  <div class="item">
                    <div class="col-xs-12 col-sm-6 col-md-2">
                      <a href="productos/producto.html"><img src="https://static.miscota.com/media/1/photos/products/113919/113919-8422250460106_1_g.jpeg" class="img-responsive center-block"></a>
                      <h4 class="text-center">Comida para pajaros</h4>
                      <h5 class="text-center">$ 10.00</h5>
                    </div>
                  </div>
        
                </div>

                <div id="slider-control">
                <a class="left carousel-control" href="#itemslider" data-slide="prev"><img src="https://cdn0.iconfinder.com/data/icons/website-kit-2/512/icon_402-512.png" alt="Left" class="img-responsive"></a>
                <a class="right carousel-control" href="#itemslider" data-slide="next"><img src="http://pixsector.com/cache/81183b13/avcc910c4ee5888b858fe.png" alt="Right" class="img-responsive"></a>
              </div>
              </div>
            </div>
          </div>
        </div>


    </div>
    <div class="bani">
            <div id="bani1">
                <img src="../media/banit.png" data-aos="fade-left" data-aos-duration="2000" alt="...">
            </div>
        <div class="info">
            <div class="bani2" data-aos="fade-down" data-aos-duration="2000">
                <p>Cuidados e higiene</p>
                <h1>El cuido de la higiene de tú perro es muy importante, ya que con esta podemos prevenir muchas enfermedades, pulgas, garrapadas y hongos, siempre debes bañarlo con shampoo especializado para perro y no con shampoo de personas, ya que este le produce daño a su piel.</h1>
            </div>
        </div>
    </div>
    <script src="js/index.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>




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