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
            <div id="contetxt" class="col-md-6" style="margin-top: 10px;margin-left: -70px;">
                <div id="titulo" class="row">
                <div class="col-md-2"></div>
                <div class="col-md-9 conte">

                    <font style="color: #1197c0; font-family: brandon_reg;"><center><a style="color: #0280A7" href="{{ url('/Tratamientos') }}"><img src="Laravel\Recursos\img\Tratamientos\flecha160x160.png" alt="" style="width:60px;margin-top: -10px"><font style="font-family: brandon_reg;font-size: 3.5vh;margin-left: 10px;">PRP Ocular</font>
                        <font style="font-size: 3.5vh;margin-left: 1%;margin-top: -100px !important">¡Tratamiento Progresivo de Ojos!</font></center></font>

                </div> 
            </div>
            </div>
        </div>  



        <div id="contenedorcarrousel" style="width: 46%;margin-left: 25%;margin-top: 20px;">
          <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="Laravel/Recursos/img/Tratamientos/Tratamiento progresivo de ojos/Slide1.png" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="Laravel/Recursos/img/Tratamientos/Tratamiento progresivo de ojos/Slide2.png" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="Laravel/Recursos/img/Tratamientos/Tratamiento progresivo de ojos/Slide3.png" alt="Third slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="Laravel/Recursos/img/Tratamientos/Tratamiento progresivo de ojos/Slide4.png" alt="Third slide">
                </div>
            </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Anterior</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Siguiente</span>
                </a>
            </div>
            </div>



            <div class="row" style="margin-top: 50px;">
                <div class="col-md-3"></div>
                    <div class="col-md-3">
                        <img src="Laravel/Recursos/img/Tratamientos/Tratamiento progresivo de ojos/LadoI.png" width="90%">
                        <h1 style="margin-top: 30px;">¿De qué manera funciona?</h1><br>
                        <p style="text-align: center;">Es un preparado de plasma rico en plaquetas es uno de los últimos tratamientos de belleza y rejuvenecimiento que han surgido, a partir de tu sangre, así que es muy seguro y eficaz.<br>
                        Gracias a la técnica desarrollada por el Dr. Martinez ahora es posible obtener los beneficios del PRP en el controrno de tus ojos.</p>
                    </div>

                <div class="col-md-3" style="margin-left: -2.5%;">
                        <img src="Laravel/Recursos/img/Tratamientos/Tratamiento progresivo de ojos/LadoD.png" width="90%">
                        <h1 style="margin-top: 30px;">¿Qué centajas obtiene al utilizar este tratamiento?</h1>
                        <p style="text-align: center;">La ventaja del uso del PRP como medicina "antiage" o antienvejecimiento es la de utilizar una sustancia biológica fabricada por el propio organismo, libre de químicos y exenta de riesgos.</p>
                </div>
            </div>
            <br>


    </div>
    

@stop




<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>