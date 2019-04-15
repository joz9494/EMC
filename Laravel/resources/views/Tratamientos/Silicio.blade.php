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
<body>

<style>
    body{
    background-color: #0280A7;
    overflow-x: hidden;
    }
    @font-face {
        font-family: brandon_reg;
        src: url(Laravel/Recursos/BRANDON_REG.otf);
    }
    @font-face {
        font-family: brandon_bold;
        src: url(Laravel/Recursos/BRANDON_BLD.otf);
    }
    @font-face {
            font-family: brandon_light;
            src: url(Laravel/Recursos/BRANDON_LIGHT.otf);
            }
    p{
    font-family: brandon_light;
    color: black;
    font-size: 2.17vh;
    text-align: center;
    color: #0280A7 !important;
  }
  h1{
    font-size: 3.5vh !important;
    font-family: brandon_reg !important;
    color: #0280A7 !important;
    text-align: center;
  }
    }
    #imgback{
        width: 100%;
        height: 80%;
        background-image: url('Laravel/Recursos/img/Acerca.jpg');
        background-size: 100%;
        background-position: center;
    }
    #imgback2{
        width: 100%;
        height: 62%;
        background-color: white;
        margin-top: 0%;
    }
    #cont1{
        width: 25%;
        height: 90%;
        background-color: white;
        float: right;
        margin-right: 20%;
        margin-top: 3%;
    }
    #cont2{
        width: 100%;
        height: 50%;
        background-color: white;
    }
    #cont3btn2{
        display: none;
    }
    #cont3btn:hover div{
        display: block;
    }

    #cont3btn:hover a{
        display: none;
    }
    #cabeceratxt{
        margin-left: 37%;
        margin-top: -4.5%;
    }
    #contentimg{
        width: 100%;
    }
    #contenedor{
        margin-top: 30px;
    }


</style>


@extends('Menu/barramenu')

@section('content')

    <div id="contenedormaster" style="background-color: white;margin-bottom: 0%;width: 100%; text-align: center;">
        <div class="row">
            <div class="col-md-3"></div>
            <div id="contetxt" class="col-md-6" style="margin-top: 10px;">
                <div id="titulo" class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8 conte">

                    <font style="color: #1197c0; font-family: brandon_reg;"><center><a style="color: #0280A7" href="{{ url('/Tratamientos') }}"><img src="Laravel\Recursos\img\Tratamientos\flecha160x160.png" alt="" style="width:60px;margin-top: -10px"><font style="font-size: 30px;margin-left: 1%;margin-top: -100px !important">Silicio Plus DMAE</font></center></font>

                </div> 
            </div>
            </div>
        </div>  


        <!-- imagen 1 -->
        <div class="row" id="contenedor" style="margin-top: 20px;">
            <div class="col-md-3"></div>
                <div class="col-md-6 conte">
                    <img id="contentimg" src="Laravel/Recursos/img/Tratamientos/Silicio plus + DMAE/Mesa de trabajo 1.png">
                </div>
        </div>
        <br>



        <!-- imagen 2 -->
        <div class="row" id="contenedor" style="margin-top: 20px;">
            <div class="col-md-3"></div>
                <div class="col-md-6 conte">
                    <h1>¿Qué es el Silicio?</h1>
                    <p>Los átomos de silicio son necesarios para mantener unidas las moléculas que forman el ácido hialurónico y el colágeno, componentes fundamentales de la piel, lo que le hace indispensable para mantener su estructura, y para que pueda recuperar su grosor, elasticidad y tersura.</p>
                    <br>
                    <h1>¿Qué es el DMAE?</h1>
                    <p>El DMAE (Dimetilaminoetanol) provoca la contracción de las fibras musculares que se unen a la piel.
                    El DMAE produce un efecto reafirmante, mejorando la contractibilidad de los músculos que se insertan en la piel y dándole, por tanto, mayor firmeza a las áreas tratadas, y reduciendo la flacidez.</p>
                </div>
        </div>
        <br>



        <!-- imagen 3 -->
        <div class="row" id="contenedor" style="margin-top: 30px;">
            <div class="col-md-3"></div>
                <div class="col-md-6 conte">
                    <img id="contentimg" src="Laravel/Recursos/img/Tratamientos/Silicio plus + DMAE/Mesa de trabajo 1 copia.png">
                </div>
        </div>
        <br>




        <div class="row" style="margin-top: 50px;">
            <div class="col-md-3"></div>
            <div class="col-md-3">
                <img id="contentimg" src="Laravel/Recursos/img/Tratamientos/Silicio plus + DMAE/Mesa de trabajo 1 copia 2.png"> 
            </div>

            <div class="col-md-3">
                <img id="contentimg" src="Laravel/Recursos/img/Tratamientos/Silicio plus + DMAE/Mesa de trabajo 1 copia 3.png">
            </div>
        </div>
        <br>
        <br>



    </div>
    

@stop




<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>