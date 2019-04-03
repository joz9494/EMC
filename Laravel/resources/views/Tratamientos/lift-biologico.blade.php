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
            font-family: brandon_bold;
            src: url("Laravel/Recursos/BRANDON_BLD.otf");
        }
        @font-face {
            font-family: brandon_light;
            src: url(Laravel/Recursos/BRANDON_LIGHT.otf);
            }

        body{
            background-color: #1197c0;
            overflow-x: hidden;
            font-family: brandon_reg;
        }
    
               
        #contenedormaestro
        { 
            background-color: white;
            width: 100%;
        }
        .conte{
            padding-top: 1%;
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
        h1,h2,p,li
        {
            font-family: brandon_reg;
        }
        #titulo h1,#peptonas h2
        {
            color: #1197C0;
            font-size: 26px;
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
            top: 0;
            padding: 2%;
            color: black;
        }
        .peptonas
        {
            top: 5%;
            width: 100%;
            
        }
        
        .peptonas h2, .peptonas p,#beneficios h2
        {
            color: #0280A7;
        }
        .peptonas h2,#beneficios h2 
        {font-weight: bold;}

        #beneficios
        {
            top: 10% ;
            width: 100%;
            text-align: left;
        }
        #beneficios ul
        {
            text-align: left;
            margin: 2%;
        }
        #beneficios li
        {
            color: #0280A7;
            line-height: 125%;
        }
        #beneficios li::before {content: "•"; color:#0280A7}
        @media  (orientation: portrait) {
            .text-img h2, .imagen_text p
            {
                font-size: 2.5vw;
            }
            .peptonas h2,.peptonas p,#beneficios h2,#beneficios p,#beneficios li
            {
                font-size: 2.5vw;
            }
            #preguntas3 h2,#preguntas3 p
            {
                font-size: 2.8vw;
            }
        }
        #preguntas3{
            margin-top: 5%;
        }
        @media  (orientation: landscape) {
            .text-img h2, .imagen_text p
            {
                font-size: 1.2vw;
            }
            .peptonas h2,.peptonas p,#beneficios h2,#beneficios p,#beneficios li
            {
                font-size: 2vw;
            }
            #beneficios h2
            {
                font-size: 3vw;
            }
            #preguntas3
            {
                font-size: 1.8vw;
            }
        }

        #TxtTitulo{
            font-family: brandon_reg;
            color: #1197c0;
            font-size: 1.37vw;
        }
        #TxtParrafo{
            font-family: brandon_light;
            color: #1197c0;
            font-size: 1.27vw;
        }
        .txtleft{
            text-align: left;
        }
        
    </style>

    <body>
        @extends('Menu/barramenu')

        @section('content')
        
        <div id="contenedormaestro">
            <div id="titulo" class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8 conte">

                    <font style="font-family: brandon_reg"><center><a style="color: #1197c0" href="{{ url('/Tratamientos') }}"><img src="Laravel\Recursos\img\Tratamientos\flecha160x160.png" alt="" style="width:60px;margin-top: -10px"><font style="font-size: 30px;margin-left: 1%;">Lift Biológico</font></a></center></font>

                </div> 
            </div>
            <div style="margin-top: 5px;">
                <div>
                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                <div class="imagen_text">
                                    <img class="d-block w-100" src="Laravel\Recursos\img\LiftBiologico\Mesa de trabajo 4.jpg" alt="First slide">
                                </div>
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="Laravel\Recursos\img\LiftBiologico\Mesa de trabajo 4.jpg" alt="Second slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="Laravel\Recursos\img\LiftBiologico\Mesa de trabajo 3.jpg" alt="Third slide">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6 conte">
                    <div class="imagen_text">
                        <div id="" class="text-img peptonas" style="margin-left: -3%">
                            <font id="TxtTitulo">¿Cómo funciona?</font><br>
                            <font id="TxtParrafo">
                            Es un tratamiento rápido, cómodo y seguro.<br>   
                            La técnica es totalmente individualizada para cada paciente dependiendo de la edad, la fisonomía y el grado de flacidez, pero en una sesión estándar se suelen insertar entre 10 y 20 hilos.<br>
                            Se implantan en la dermis con una aguja guía, activando los fibroblastos, para generar cológeno y elastina, provocando un efecto lifting inmediato y aportando a los pacientes un moldeado natural al rostro y al cuerpo.

                            Su implantación es sencilla y rápida, permitiendo el desarrollo normal de la actividad cotidiana, no produce cortes, marcas ni cicatrices. 
                            </font>
                        </div>
                    </div>
                </div>    
            </div>
            
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6 conte">
                        <div class="imagen_text">
                            <img src="Laravel\Recursos\img\LiftBiologico\Mesa de trabajo 6.jpg" alt="">
                        </div>
                </div>    
            </div>
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6 conte">
                    <div class="imagen_text">
                        <img src="Laravel\Recursos\img\LiftBiologico\Mesa de trabajo 7.jpg" alt="">
                    </div>
                </div>    
            </div>
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6 conte">
                    <div class="imagen_text">
                        <img src="Laravel\Recursos\img\LiftBiologico\Mesa de trabajo 8.jpg" alt="">
                    </div>
                </div>    
            </div>
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6 conte">
                    <div class="imagen_text">
                        <div>
                            <font id="TxtTitulo" style="float: left;">Beneficios</font>
                            <br>
                            <br>
                            <font id="TxtParrafo" class="txtleft">
                                <ul>
                                    <li>Lifting de frente.</li>
                                    <li>Estirar y retira el exceso de piel.</li>
                                    <li>Elevación pómulos</li>
                                    <li>Aspecto más joven y natural</li>
                                    <li>Surcos Nasogenianos o arrugas de amargura</li>
                                    <li>Se denominan "surcos nasogenianos" o "pliegues nasolabiales"
                                        a las arrugas que se producen desde el final de la nariz y que descienden oblicuamente hasta ambos extremos de la boca
                                    </li>
                                </ul>
                            </font>
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