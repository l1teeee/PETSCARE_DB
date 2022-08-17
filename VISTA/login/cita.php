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
    <link href="css/cita.css" rel="stylesheet" type="text/css">
    <script src="js/scrollreveal.js"></script>
    <link rel="icon" href="../media/logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

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
<body style="background-color: #FFF2EA">
    <div class="comple" >
        <div class="dias">
            <div class="tarjeta">
                <div id="current_date"></p>
                    <script>
                    date = new Date();
                    day = date.getDate();
                    document.getElementById("current_date").innerHTML =  day ;
                    </script>
                </div>
                <div id="current_day">
                    <script>
                        var diasSemana = new Array("Domingo","Lunes","Martes","Miércoles","Jueves","Viernes","Sábado");
                        var f=new Date();
                        document.write(diasSemana[f.getDay()] );
                    </script>
                </div>
                <h1 id="cit">. .</h1>
            </div>

            <div class="tarjeta">
                <div id="current_date1"></p>
                    <script>
                    date = new Date();
                    day = date.getDate();
                    document.getElementById("current_date1").innerHTML =  day +1;
                    </script>
                </div>
                <div id="current_day">
                    <script>
                        var diasSemana = new Array("Domingo","Lunes","Martes","Miércoles","Jueves","Viernes","Sábado");
                        var f = new Date();
                        document.write(diasSemana[f.getDay()] );
                    </script>
                </div>
                <h1 id="cit">.</h1>
            </div>



            <div class="tarjeta">
                <div id="current_date2"></p>
                    <script>
                    date = new Date();
                    day = date.getDate();
                    document.getElementById("current_date2").innerHTML =  day +2;
                    </script>
                </div>
                <div id="current_day">
                    <script>
                        var diasSemana = new Array("Domingo","Lunes","Martes","Miércoles","Jueves","Viernes","Sábado");
                        var f = new Date();
                        document.write(diasSemana[f.getDay()] );
                    </script>
                </div>
                <h1 id="cit">.</h1>
            </div>
            
            
            <div class="tarjeta">
                <div id="current_date3"></p>
                    <script>
                    date = new Date();
                    day = date.getDate();
                    document.getElementById("current_date3").innerHTML =  day +3;
                    </script>
                </div>
                <div id="current_day">
                    <script>
                        var diasSemana = new Array("Domingo","Lunes","Martes","Miércoles","Jueves","Viernes","Sábado");
                        var f = new Date();
                        document.write(diasSemana[f.getDay()] );
                    </script>
                </div>
                <h1 id="cit">.</h1>
            </div>
            
            
            <div class="tarjeta">
                <div id="current_date4"></p>
                    <script>
                    date = new Date();
                    day = date.getDate();
                    document.getElementById("current_date4").innerHTML =  day +4;
                    </script>
                </div>
                <div id="current_day">
                    <script>
                        var diasSemana = new Array("Domingo","Lunes","Martes","Miércoles","Jueves","Viernes","Sábado");
                        var f = new Date();
                        document.write(diasSemana[f.getDay()] );
                    </script>
                </div>
                <h1 id="cit">.</h1>
            </div> 



            <div class="tarjeta">
                <div id="current_date5"></p>
                    <script>
                    date = new Date();
                    day = date.getDate();
                    document.getElementById("current_date5").innerHTML =  day +5;
                    </script>
                </div>
                <div id="current_day">
                    <script>
                        var diasSemana = new Array("Domingo","Lunes","Martes","Miércoles","Jueves","Viernes","Sábado");
                        var f = new Date();
                        document.write(diasSemana[f.getDay()] );
                    </script>
                </div>
                <h1 id="cit">.</h1>
            </div> 


            <div class="tarjeta">
                <div id="current_date6"></p>
                    <script>
                    date = new Date();
                    day = date.getDate();
                    document.getElementById("current_date6").innerHTML =  day +6;
                    </script>
                </div>
                <div id="current_day">
                    <script>
                        var diasSemana = new Array("Domingo","Lunes","Martes","Miércoles","Jueves","Viernes","Sábado");
                        var f = new Date();
                        document.write(diasSemana[f.getDay()] );
                    </script>
                </div>
                <h1 id="cit">.</h1>
            </div> 
        </div>
        <div class="comp">
            <div class="disponi">
                <div class="doc">
                    <h2 id="titulito">Disponibilidad</h2>
                    <div class="doctores">
                        <h1>Dr. Pablo Escobar</h1>
                        <i class="fa-solid fa-circle-check"></i>
                    </div>
                    <div class="doctores">
                        <h1>Dr. Valeria Montana</h1>
                        <i class="fa-solid fa-circle-check"></i>
                    </div>
                    <div class="doctores"  style="margin-bottom: 15px;">
                        <h1>Dr. Oscar Méndez</h1>
                        <i class="fa-solid fa-circle-check"></i>
                    </div>
                </div>
                <div class="vete">
                    <div id="elevet">
                        <h1 id="nara">Elegir</h1>
                        <h1 id="ja">Veterinario</h1>
                    </div>
                    <script>$('select').each(function(){
                        var $this = $(this), numberOfOptions = $(this).children('option').length;
                      
                        $this.addClass('select-hidden'); 
                        $this.wrap('<div class="select"></div>');
                        $this.after('<div class="select-styled"></div>');
                    
                        var $styledSelect = $this.next('div.select-styled');
                        $styledSelect.text($this.children('option').eq(0).text());
                      
                        var $list = $('<ul />', {
                            'class': 'select-options'
                        }).insertAfter($styledSelect);
                      
                        for (var i = 0; i < numberOfOptions; i++) {
                            $('<li />', {
                                text: $this.children('option').eq(i).text(),
                                rel: $this.children('option').eq(i).val()
                            }).appendTo($list);
                            
                        }
                      
                        var $listItems = $list.children('li');
                      
                        $styledSelect.click(function(e) {
                            e.stopPropagation();
                            $('div.select-styled.active').not(this).each(function(){
                                $(this).removeClass('active').next('ul.select-options').hide();
                            });
                            $(this).toggleClass('active').next('ul.select-options').toggle();
                        });
                      
                        $listItems.click(function(e) {
                            e.stopPropagation();
                            $styledSelect.text($(this).text()).removeClass('active');
                            $this.val($(this).attr('rel'));
                            $list.hide();
                           
                        });
                      
                        $(document).click(function() {
                            $styledSelect.removeClass('active');
                            $list.hide();
                        });
                    
                    });</script>
                    <select id="mounth">
                        <option value="hide">Veterinario</option>
                        <option value="pabloescobar">Dr. Pablo Escobar</option>
                        <option value="valeriamontana">Dr. Valeria Montana</option>
                        <option value="oscarmendez">Dr. Oscar Méndez</option>
                    </select> 
                    <div id="elevet">
                        <h1 id="nara">Elegir</h1>
                        <h1 id="ja">Mascota</h1>
                    </div>
                    <select id="mounth">
                        <option value="hide">Mascota</option>
                        <option value="kiki">Kiki</option>
                        <option value="jadeh">Jadeh</option>
                        <option value="venus">Venus</option>
                    </select>

                    <div id="elevet">
                        <h1 id="nara">Elegir</h1>
                        <h1 id="ja">Horario</h1>
                    </div>
                    <select id="mounth" style="margin-bottom: 22px;">
                        <option value="hide">Horarios</option>
                        <option value="kiki">7:30 A.M - 8:30 A.M</option>
                        <option value="jadeh">10:30 A.M - 11:30 A.M</option>
                        <option value="venus">2:45 P.M - 4:00 P.M</option>
                    </select >

                   
                </div>

            </div>


            <div class="hor">
                <div class="tur" style="margin-bottom: 22px;">
                    <div class="efo">
                        <img src="../media/mascota/WhatsApp Image 2022-05-18 at 10.17.06 PM.jpeg" id="masc" alt="">
                        <img src="../media/dueños/pau.jpg" id="prof" alt="">
                    </div>
                    <div class="ifo">
                        <div class="min">
                            <div id="extr">
                                <h1>Dr. Pablo Chavez</h1>
                            </div>
                            <div id="extr1">
                                <i class="fa-solid fa-dog"></i>
                                <h1>Jadeh</h1>
                            </div>
                            <div id="extr1">
                                <i class="fa-solid fa-clock"></i>
                                <h1>10:30 A.M - 11:30 A.M</h1>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tur" style="margin-bottom: 22px;">
                    <div class="efo">
                        <img src="../media/mascota/WhatsApp Image 2022-05-18 at 10.17.05 PM.jpeg" id="masc" alt="">
                        <img src="../media/dueños/pau.jpg" id="prof" alt="">
                    </div>
                    <div class="ifo">
                        <div class="min">
                            <div id="extr">
                                <h1>Dr. Pablo Chavez</h1>
                            </div>
                            <div id="extr1">
                                <i class="fa-solid fa-dog"></i>
                                <h1>Venus</h1>
                            </div>
                            <div id="extr1">
                                <i class="fa-solid fa-clock"></i>
                                <h1>10:30 A.M - 11:30 A.M</h1>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tur" style="margin-bottom: 22px;">
                    <div class="efo">
                        <img src="../media/mascota/WhatsApp Image 2022-05-18 at 10.13.02 PM.jpeg" id="masc" alt="">
                        <img src="../media/dueños/pau.jpg" id="prof" alt="">
                    </div>
                    <div class="ifo">
                        <div class="min">
                            <div id="extr">
                                <h1>Dr. Pablo Chavez</h1>
                            </div>
                            <div id="extr1">
                                <i class="fa-solid fa-dog"></i>
                                <h1>Kiki</h1>
                            </div>
                            <div id="extr1">
                                <i class="fa-solid fa-clock"></i>
                                <h1>10:30 A.M - 11:30 A.M</h1>
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