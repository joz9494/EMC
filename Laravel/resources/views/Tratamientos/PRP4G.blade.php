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
        h1,h2
        {
            font-family: brandon_reg !important;
            font-size: 3.5vh !important;
        }
        p,li
        {
            font-family: brandon_light !important;
            font-size: 2.17vh !important;
        }
        #titulo h1,.text-img h2
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
            padding: 5%;
            color: black;
        }
        #prp4g1
        {
            top: 2%;
            width: 70%;
            right: 30%;
        }
        #prp4g3
        {
            
            width: 60%;
            right: 40%;
        }
        #prp4g3 ul
        {
            text-align: left;
            margin: 2%;
        }
        #prp4g3 li
        {
            line-height: 100%;
        }
        #prp4g3 li::before {content: "•"; color:gray;font-size: 2vw; padding-right: 1.5%;}
        .salto_linea
        {
            margin-left: 3.8%;
        }
        #prp4g1 h2,#hormonas3 p,#prp4g3 h2
        {
            color: black;
        }
        #hormonas3 h2
        {
            color: #0280A7;
        }
        #hormonas3
        {
            top: 6% ;
            width: 60%;
            left:  35%;
        }

        #prp4g1 p,#prp4g3 li
        {
            color: gray;
        }
        @media  (orientation: portrait) {
            .text-img h2,#hormonas3 h2{
                font-size: 3.5vh;
                line-height: 125%;
            }
            .imagen_text p,#hormonas3 p
            {
                font-size: 2.17vh;
                line-height: 125%;
            }
            #prp4g1 h2,#prp4g1 p,#prp4g3 h2,#prp4g3 li
            {
                font-size: 1.4vw;
                line-height: 125%;
            }

        }
        @media  (orientation: landscape) {
            .text-img h2{
                font-size: 1.37vw;
                line-height: 125%;
            }
            .imagen_text p
            {
                font-size: 1.27vw;
                line-height: 125%;
            }
            #prp4g1 h2,#prp4g1 p,#prp4g3 h2,#prp4g3 li,#hormonas3 h2,#hormonas3 p
            {
                font-size: 1.4vw;
                line-height: 125%;
            }
            
        }
        
    </style>

    <body>
        @extends('Menu/barramenu')

        @section('content')
        
        <div id="contenedormaestro">
            <div id="titulo" class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8 conte" style="margin-top: -8px;">
                    <font style="font-family: brandon_reg"><center><a style="color: #0280A7" href="{{ url('/Tratamientos') }}"><img src="Laravel\Recursos\img\Tratamientos\flecha160x160.png" alt="" style="width:60px;margin-top: -10px"><font style="font-size: 30px;">  PRP 4G (Plasma Rico en Plaquetas de Cuarta Generación)</font></a></center></font>
                </div>  
            </div>
            <div class=" row">
                <div class="col-md-3"></div>
                <div class="col-md-6 ">
                    <div class="imagen_text">
                        <img src="Laravel\Recursos\img\Tratamientos\PRP\PRP1b.jpg" alt="">
                       
                    </div>
                </div>
            </div>
            <div class=" row">
                <div class="col-md-3"></div>
                <div class="col-md-6 conte">
                    <div class="imagen_text">
                        <img src="Laravel\Recursos\img\Tratamientos\PRP\PRP3b.jpg" alt="">
                       
                    </div>
                </div>
            </div>
            <div class=" row">
                <div class="col-md-3"></div>
                <div class="col-md-6 conte">
                    <div class="imagen_text">
                        <img src="Laravel/Recursos/img/Tratamientos/Hormonas/Esquinas.png" alt="">
                        <div class="text-img " >
                                <h2>¿Cómo se realiza?</h2>
                                <p>
                                    Es un procedimiento en el cual se toma una muestra de sangre y se procesa para
                                    tomar la parte rica en plaquetas y se activa para tener un mejor resultado del plasma.
                                </p>
                                <br>
                                <h2>¿Causa efectos secundarios?</h2> 
                                <p>
                                No posee efectos secundarios. es un procedimiento libre de riesgos y de
                                reacciones de algún tipo ya que es una sustancia que proviene
                                de la sangre del paciente. 
                                <p>
                                <br>
                                <h2>¿Cuánto tiempo dura el procedimiento?</h2>
                                <p>
                                En promedio dura de 6 a 12 meses dependiendo de cada paciente.
                                </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class=" row">
                <div class="col-md-3"></div>
                <div class="col-md-6 conte">
                    <div id="final" class="imagen_text">
                        <img src="Laravel\Recursos\img\Tratamientos\PRP\PRP2.jpg" alt="">
                        
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
        