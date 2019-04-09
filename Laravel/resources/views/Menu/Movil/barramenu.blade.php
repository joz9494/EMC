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
                src: url("Laravel/Recursos/BRANDON_REG.otf");
            }
            @font-face {
            font-family: brandon_light;
            src: url(Laravel/Recursos/BRANDON_LIGHT.otf);
<<<<<<< HEAD
            }
             body{
                
                overflow-x: hidden !important;

            }
=======
            }.
>>>>>>> 30a1463733afc59b21b574178e6299dafa0821e3

            h4,menu>a{
                font-family: brandon_reg !important;
            }
            p,#opciones_menu>li
            {
                font-family: brandon_light !important;
            }
            #menu
            {
                background-color: white !important;
                border-bottom:4px solid #1197c0;
                text-align: center;
                
            }
            #menu a,#info_horario span{
                color:#1197c0; 
            }
            #menu h1
            {
                font-size: 2vh;
                display:block;
            }
            footer
            {
                background-color: white;
                
                width: 100%;
            }
            .nav-item
            {
                text-align: center;
            }
            .conte{
                    width: 100%;
                text-align: center;
            }
   

#tabs{
    color: black;
}
#tabs h6.section-title{
    color: #1197c0;
}

#tabs .nav-tabs .nav-item.show .nav-link, .nav-tabs .nav-link.active {
    color: white !important;
    background-color: #0280A7 !important;
    font-size: 20px;
    
}

#tabs .nav-tabs .nav-link {
    border-color:#0280A7;
    border-top-left-radius: 0;
    border-top-right-radius: 0;
    color: #1197c0;
    font-size: 20px;
}
#btn-menu
{
    width: 100%; 
    border:none ;
}

.fa.fa-navicon {
  color:#1197c0;
  font-weight: 100;
}
#opciones_menu li
{
    margin: auto;
    border-bottom: 1px solid #0280A7;
}
.tab-content
{
    padding: 0% !important;
}
.tab-pane
{
    margin-top: 2%;
    margin-bottom: 2%;
}
#frente_menu
{
    margin: auto auto;
    width: 100%;
}
@media (orientation:portrait)
{
    
    #menu a
    {
        font-size: 22px;
    }
    #frente_menu #img_logo{
        width: 100%;
    }
    #frente_menu #img_btn_menu{
        width: 100%;
    }
    #nav-home img
    {
        width:45%;
    }
    .navbar-brand
    {
        margin-top: 4%;
    }
}
@media (orientation:landscape)
{
    #menu a
    {
        font-size: 22px;
    }
    #frente_menu #img_logo{
        width: 100%;
    }
    #frente_menu #img_btn_menu{
        width: 100%;
    }
    #nav-home img
    {
        width:25%;
    }
    .navbar-brand
    {
        margin-top: 4%;
    }
}

</style>




    </head>
    <body>
        <header class="">
                <nav id="menu" class="navbar navbar-light bg-light">
                    <div id="frente_menu" class="row">
                        <div class="col-2">
                            <img id="img_logo" src="Laravel\Recursos\img\Tratamientos\Eterna.png"  class="d-inline-block align-top" alt="">
                        </div>
                        <div class="col-8">
                            <a class="navbar-brand" href="#">
                                Eterna Medical Center
                            </a>
                        </div>
                        <div class="col-2">
                            <button id="btn-menu" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                <img id="img_btn_menu" src="Laravel\Recursos\img\Inicio\Menu.png"  alt="">
                            </button>
                        </div>  
                    </div>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul id="opciones_menu" class="navbar-nav">
                            <li class="nav-item col-10">
                                <a class="nav-link" href="{{ url('/') }}" >
                                    Inicio
                                    <img src="Laravel\Recursos\img\Menu\hogar-de-web.png"  class="d-inline-block align-top" width="30px" alt="">
                                </a>
                            </li>
                            <li class="nav-item col-10">
                                <a class="nav-link" href="{{ url('/Servicios') }}" id="letrasmenu">    
                                    Servicios
                                    <img src="Laravel\Recursos\img\Menu\lista.png"  class="d-inline-block align-top" width="30px" alt="">
                                </a>
                            </li>
                            <li class="nav-item col-10">
                                <a class="nav-link" href="{{ url('/Acerca_de_EMC') }}" id="letrasmenuEMCV">
                                    Acerca de E.M.C
                                    <img src="Laravel\Recursos\img\Menu\info_(2).png"  class="d-inline-block align-top" width="30px" alt="">
                                </a>
                            </li>
                            <li class="nav-item col-10">
                                <a class="nav-link" href="{{ url('/Tratamientos') }}" id="letrasmenu">
                                    Tratamientos
                                    <img src="Laravel\Recursos\img\Menu\limpiar.png"  class="d-inline-block align-top" width="30px" alt="">
                                </a>
                            </li>
                            <li class="nav-item col-10">
                                <a class="nav-link" href="{{ url('/Contacto') }}" id="letrasmenu">
                                    Contacto
                                    <img src="Laravel\Recursos\img\Menu\contacto.png"  class="d-inline-block align-top" width="30px" alt="">
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
        </header>
                @yield('content')
        <footer class="">
            <section id="tabs">
                <div class="">
                    <div class="row content-center">
                        <div class="col-12 conte">
                            <nav>
                                <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                                    <a class="nav-item nav-link" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="false">Citas</a>
                                    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false" style="margin-left: 0.5%;margin-right: 0.5%;">Direccion</a>
                                    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Horario</a>
                                </div>
                            </nav>
                            <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                                <div class="tab-pane fade" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                    <div class="row">
                                        <div class="col-sm-5 col-4" style="text-align:right;">
                                            <img src="Laravel\Recursos\img\Menu\whatsapp.png">
                                        </div>
                                        <div class="col-sm-7 col-8" style="text-align:left; margin-top:auto;margin-bottom:auto;">
                                            <h4>+52 (461) 132 48 51 <br>+52 (461) 138 69 05 </h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                    <h4>
                                    Álvaro Obregòn #312 Int.36B.
                                    </h4>
                                    <h4>
                                     Celaya, Guanajuato, Mexico
                                    </h4>
                                </div>
                                <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                                    <h4>Lunes a viernes</h4>
                                    <h4>9 a.m. a 2 p.m. <span style="color:#0280A7; font-size:32px">·</span> 4 p.m a 7p.m.</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>    
        </footer>
    </body>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</html>