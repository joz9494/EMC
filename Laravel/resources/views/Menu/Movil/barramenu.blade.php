<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

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
        <link rel="stylesheet" type="text/css" href="Laravel/Recursos/BRANDON_REG.otf">
        <link rel="stylesheet" type="text/css" href="Laravel/Recursos/BRANDON_BLD.otf">
        <style>
            @font-face {
            font-family: brandon_reg;
                src: url(-"Laravel/Recursos/BRANDON_REG.otf");
            }
            @font-face {
                font-family: brandon_bold;
                src: url("Laravel/Recursos/BRANDON_BLD.otf");
            }
             body{
                background-color: #0280A7;
                overflow-x: hidden;
                
            }
            p, h2, h1,h6,h3,a
            {
                font-family: brandon_reg;
            }
            #menu a,.opciones,#info_horario span{
                color:#0280A7; 
            }
            #menu
            {
                background-color: white;
            }
            #menu h1
            {
                padding: 5%;
                font-size: 2vh;
                display:block;

            }
            footer
            {
                background-color: white;
                padding-bottom: 5%;
                
            }
            .opciones{
                color: #0280A7;
                border-width: 1px;
                text-align: center;
                border-style: solid;
                border-color: #0280A7;
            }
            .opciones:hover
            {
                background-color: #0280A7;
                color: white;
            }
            #info_citas,#info_horario,#info_direccion
            {
                display: none;
                color: gray;
            }
            #informacion
            {
                text-align: center;
                padding-top: 5%;
                padding-bottom: 5%;
                display: none;
            }
            .opciones:hover ~ #informacion
            {
                display: block
            }
            #citas:hover ~ #informacion> #info_citas
            {
                display: block;
                visibility: visible;
            }
            #horario:hover ~ #informacion> #info_horario
            {
                display: block;
                visibility: visible;
            }
            #direccion:hover ~ #informacion> #info_direccion
            {
                display: block;
                visibility: visible;
            }
            .info 
            {
                width: 100%;
                padding: 5%;
                text-align: center;
            }
            .nav-item
            {
                text-align: center;
            }
        </style>
    </head>
    <body>
        <header>
                <nav id="menu" class="navbar navbar-expand-lg navbar-light bg-light">
                        
                    <a class="navbar-brand" href="#">
                            <img src="Laravel\Recursos\img\Tratamientos\Eterna.png"  class="d-inline-block align-top" width="30px" alt="">
                        Eterna Medical Center
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/') }}" >Inicio</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/Servicios') }}" id="letrasmenu">Servicios</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/Acerca_de_EMC') }}" id="letrasmenuEMCV">Acerca de E.M.C</a>
                            </li>
                            <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/Tratamientos') }}" id="letrasmenu">Tratamientos</a>
                            </li>
                            <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/Contacto') }}" id="letrasmenu">Contacto</a>
                            </li>
                        </ul>
                    </div>
                </nav>
        </header>
                @yield('content')
        <footer class="container">
            
            <div id="menu_footer" class="row">
                <div id="citas" class="col-4 opciones">Citas</div>
                <div id="direccion" class="col-4 opciones">Direccion</div>
                <div id="horario" class="col-4 opciones">Horario</div>
                <div id="informacion" class="">
                    <div id="info_citas" class="info">
                        <div class="row  justify-content-center">    
                            <div class="col-3">
                                <img src="Laravel\Recursos\img\Tratamientos\5.png" alt="" style="width:100%;">
                            </div>
                            <div class="col-9">
                                <h4>+52 (461) 132 48 51</h4>
                                <h4>+52 (461) 138 69 05</h4>
                            </div>
                        </div>
                    </div>
                    <div id="info_direccion" class="info">
                        <h4>Álvaro Obregòn #312 Int.36B.</h4>
                        <h4>Celaya, Guanajuato, Mexico</h4>
                    </div>
                    <div id="info_horario" class="info">
                        <h4>Lunes a viernes</h4>
                        <h4>9 a.m. a 2 p.m. <span style="color:#0280A7; font-size:32px">·</span> 4 p.m a 7p.m.</h4>
                        
                    </div>
                </div>
            </div>
            
            
        </footer>
    </body>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</html>