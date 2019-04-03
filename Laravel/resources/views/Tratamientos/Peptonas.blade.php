<!DOCTYPE html>
<html>
    <head>
        <title>EMC</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

            <!-- Styles -->
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">  
            <link rel="icon" type="image/png" href="Laravel/Recursos/images/icons/favicon.png"/>
            <link rel="stylesheet" type="text/css" href="Laravel/Recursos/vendor/bootstrap/css/bootstrap.min.css">
            <link rel="stylesheet" type="text/css" href="Laravel/Recursos/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
            <link rel="stylesheet" type="text/css" href="Laravel/Recursos/fonts/iconic/css/material-design-iconic-font.min.css">
            <link rel="stylesheet" type="text/css" href="Laravel/Recursos/fonts/linearicons-v1.0.0/icon-font.min.css">
            <link rel="stylesheet" type="text/css" href="Laravel/Recursos/vendor/animate/animate.css">  
            <link rel="stylesheet" type="text/css" href="Laravel/Recursos/vendor/css-hamburgers/hamburgers.min.css">
            <link rel="stylesheet" type="text/css" href="Laravel/Recursos/vendor/animsition/css/animsition.min.css">
            <link rel="stylesheet" type="text/css" href="Laravel/Recursos/vendor/select2/select2.min.css">  
            <link rel="stylesheet" type="text/css" href="Laravel/Recursos/vendor/daterangepicker/daterangepicker.css">
            <link rel="stylesheet" type="text/css" href="Laravel/Recursos/vendor/slick/slick.css">
            <link rel="stylesheet" type="text/css" href="Laravel/Recursos/vendor/MagnificPopup/magnific-popup.css">
            <link rel="stylesheet" type="text/css" href="Laravel/Recursos/vendor/perfect-scrollbar/perfect-scrollbar.css">
            <link rel="stylesheet" type="text/css" href="Laravel/Recursos/css/util.css">
            <link rel="stylesheet" type="text/css" href="Laravel/Recursos/css/main.css">
    </head>
    <style type="text/css">
        @font-face {
            font-family: brandon_reg;
            src: url(-"Laravel/Recursos/BRANDON_REG.otf");
        }
        @font-face {
            font-family: brandon_light;
            src: url(Laravel/Recursos/BRANDON_LIGHT.otf);
        }
        body{
            background-color: #0280A7;
            overflow-x: hidden;
        }
        p,li{
            font-family: brandon_light !important;
        }
        h2{
            font-family: brandon_reg !important;
            font-weight: normal !important;
        }       
        #contenedormaestro
        { 
            background-color: white;
            width: 100%;
        }
        .conte{
            padding-top: 2%;
            text-align: center;
        }
        #final
        {
            padding-bottom: 2%;
        }
        .conte img
        {
            width: 100%;
        }
        #titulo h1,#peptonas h2
        {
            color: #1197C0;
            font-size: 32px;
            font-weight: normal;
        }
        #txt_hormonas1
        {
            width: 100%;
            background-color:rgb(236,236,236);
            padding: 2%;
        }
        #txt_hormonas1 p
        {
            font-size: 3vh;
            color: black;
        }
        .imagen_text{
            position: relative;
            text-align: center;
        }
        .imagen_text img
        {
            width: 100%;
        }
 
        .text-img{
            position: absolute;
            top: 0;
            padding: 2%;
            color: black;
        }
        .peptonas
        {
            top: 5%;
            width: 60%;
            left: 40%;
        }
        .peptonas h2, .peptonas p,#hormonas3 h2
        {
            color: #0280A7;
        }
        .peptonas h2,#hormonas3 h2 
        {font-weight: bold;}

        #hormonas3
        {
            top: 5% ;
            width: 75%;
            right:  25%;
        }
        #hormonas3 ul
        {
            text-align: left;
            margin: 2%;
        }
        #hormonas3 li
        {
            line-height: 125%;
        }
        #hormonas3 li::before {content: "•"; color:#0280A7;font-size: 2vw; padding-right: 1.5%;}
        @media  (orientation: portrait){
            .text-img h2, .imagen_text p
            {
                font-size: 2.5vw;
            }
            .peptonas h2,.peptonas p,#hormonas3 h2,#hormonas3 p,#hormonas3 li
            {
                font-size: 2.6vw;
            }
            #preguntas3 h2,#preguntas3 p
            {
                font-size: 2.8vw;
            }
            
        }
        #preguntas3{
            
            top: 4.5%;
            width: 70%;
            left: 30%;
        }
        #preguntas1
        {
            top: 8.5%;
        }
        @media  (orientation: landscape) {
            .text-img h2, .imagen_text p
            {
                font-size: 1.4vw;
                line-height: 125%;
            }
            .peptonas h2,.peptonas p #hormonas3 h2,#hormonas3 p,#hormonas3 li,#preguntas3,#preguntas3 h2
            {
                font-size: 1.4vw;
                line-height: 125%;
            }
            
        }
        .sombra
        {
            box-shadow: -17px 13px 11px -2px rgba(216,216,216,1);
        }
        #titulo
        {
            margin-left: 1%;
        }
        .salto_linea
        {
            margin-left: 3.8%;
        }
    </style>

    <body>
        @extends('Menu/barramenu')

        @section('content')
        
        <div id="contenedormaestro">
            <div id="titulo" class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8 conte" style="margin-top: -8px;">
                    <font style="font-family: brandon_reg"><center><a style="color: #0280A7" href="{{ url('/Tratamientos') }}"><img src="Laravel\Recursos\img\Tratamientos\flecha160x160.png" alt="" style="width:60px;margin-top: -10px"><font style="font-size: 30px;">Peptonas</font></a></center></font>
                </div> 
            </div>
            <div class=" row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="imagen_text">
                        <img src="Laravel/Recursos/img/Tratamientos/Peptonas/Peptonas1.jpg" alt="">
                        <div id="preguntas1" class="text-img peptonas">
                            <h2>¿Qué es?</h2>
                            <p>Las peptonas son sustancias de la proteína
                                especificas a cada tejido, se aplican en puntos específicos  según cada paciente,
                                logrando una piel más tuergente y firme. 
                            </p>
                            <br>
                            <h2>¿Cómo funciona?</h2>
                            <p>Estimulan la producción de nuevos sustratos en la piel
                                como colágeno y elastina, haciendo piel de apariencia mas joven.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class=" row">
                <div class="col-md-3"></div>
                <div class="col-md-6 conte">
                    <div class="imagen_text sombra">
                        <img src="Laravel/Recursos/img/Tratamientos/Peptonas/Peptonas2c.png" alt="">
                        <div id="hormonas3" class="text-img">
                            <h2>¿Qué beneficios obtienes?</h2>
                            <p>
                                <ul>
                                    <li>Restaurar la vitalidad cutánea.</li>
                                    <li>Aumenta su grosor.</li>
                                    <li>Recupera la consistencia elástica.</li>
                                    <li>Mejora la afluencia vascular.</li>
                                    <li>Estimulando las secreciones e incrementando <br>
                                        <div class="salto_linea">la textura y apariencia de la piel.</div></li>
                                </ul> 
                            </p>
                            <h2>¿Cuantas secciones necesito?</h2>
                            <p>Generalmente, son 2-3 sesiones cada 8 días. Luego, se realiza
                                un mantenimiento de 1-2 sesión cada 6 meses obteniendo así resultados visibles y duraderos
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class=" row">
                <div class="col-md-3"></div>
                <div id="final" class="col-md-6 conte">
                    <div class="imagen_text">
                        <img src="Laravel/Recursos/img/Tratamientos/Peptonas/Peptonas3.jpg" alt="">
                        <div id="preguntas3" class="text-img peptonas">
                            <h2>¿Cuánto duran los efectos?</h2>
                            <p>Duran de 8 meses a 1 año.</p>
                            <br>
                            <h2>¿En cuánto tiempo veo los resultados?</h2>
                            <p>Los resultados puedes verlos desde el primer instante.</p>
                            <br>
                            <h2>¿Requiere anestesia?</h2>
                            <p>Si.</p>
                            <br>
                            <h2>¿Cuánto tiempo dura el proceso?</h2>
                            <p>1 hora máximo.</p>

                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        @stop
    </body>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</html>
        