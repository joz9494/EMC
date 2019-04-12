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
        #contenedormaestro
        { 
            background-color: white;
            width: 100%;
        }

    </style>

    <body>
        @extends('Menu/barramenu')

        @section('content')
        
        <div id="contenedormaestro">
            <br>
            <div id="titulo" class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8 conte" style="margin-top: -8px;">
                    <font style="font-family: brandon_reg"><center><a style="color: #0280A7" href="{{ url('/Tratamientos') }}"><img src="Laravel\Recursos\img\Tratamientos\flecha160x160.png" alt="" style="width:60px;margin-top: -10px"><font style="font-size: 30px;">  Silicio Plus DMAE</font></a></center></font>
                </div>  
            </div>


            <div class=" row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <img src="Laravel/Recursos/img/Tratamientos/Silicio plus + DMAE/Mesa de trabajo 1.png">
                </div>
            </div>



            <div class=" row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <img src="Laravel/Recursos/img/Tratamientos/Silicio plus + DMAE/Mesa de trabajo 1 copia.png">
                </div>
            </div>


            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-3" style="margin-top: 32px;">
                 <p class="txtparrafo2">Las <font style="font-family: brandon_reg">terapias LED y Galvánica</font> se pueden administrar juntas (secuencialmente) o como tratamientos completamente separados; dándole aún más margen para más variedad de tratamientos y un mayor retorno de la inversión.</p> 
                </div>

                <div class="col-md-3">
                    <img src="Laravel/Recursos/img/Tratamientos/Opera/masks.jpg" width="90%">
                </div>
            </div>

        </div>

        @stop
    </body>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</html>
        