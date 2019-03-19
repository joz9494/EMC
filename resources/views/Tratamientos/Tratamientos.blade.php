<!DOCTYPE html>
<html>
    <head>
        <title>EMC</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

            <!-- Styles -->
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">  
            <link rel="icon" type="image/png" href="../Recursos/images/icons/favicon.png"/>
            <link rel="stylesheet" type="text/css" href="../Recursos/vendor/bootstrap/css/bootstrap.min.css">
            <link rel="stylesheet" type="text/css" href="../Recursos/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
            <link rel="stylesheet" type="text/css" href="../Recursos/fonts/iconic/css/material-design-iconic-font.min.css">
            <link rel="stylesheet" type="text/css" href="../Recursos/fonts/linearicons-v1.0.0/icon-font.min.css">
            <link rel="stylesheet" type="text/css" href="../Recursos/vendor/animate/animate.css">  
            <link rel="stylesheet" type="text/css" href="../Recursos/vendor/css-hamburgers/hamburgers.min.css">
            <link rel="stylesheet" type="text/css" href="../Recursos/vendor/animsition/css/animsition.min.css">
            <link rel="stylesheet" type="text/css" href="../Recursos/vendor/select2/select2.min.css">  
            <link rel="stylesheet" type="text/css" href="../Recursos/vendor/daterangepicker/daterangepicker.css">
            <link rel="stylesheet" type="text/css" href="../Recursos/vendor/slick/slick.css">
            <link rel="stylesheet" type="text/css" href="../Recursos/vendor/MagnificPopup/magnific-popup.css">
            <link rel="stylesheet" type="text/css" href="../Recursos/vendor/perfect-scrollbar/perfect-scrollbar.css">
            <link rel="stylesheet" type="text/css" href="../Recursos/css/util.css">
            <link rel="stylesheet" type="text/css" href="../Recursos/css/main.css">
    </head>
    <style type="text/css">
         @font-face {
            font-family: brandon_reg;
            src: url(-"../Recursos/BRANDON_REG.otf");
        }
        @font-face {
            font-family: brandon_bold;
            src: url("../Recursos/BRANDON_BLD.otf");
        }
        body{
            background-color: #0280A7;
            overflow-x: hidden;
            font-family: brandon_reg;
        }
        h1,h2
        {
            font-family: brandon_reg;
        }
               
        #contenedormaestro
        { 
            background-color: white;
            width: 100%;
        }
        .conte{
            margin-top: 2%;
            text-align: center;
        }
        #titulo h1,.text-img h2
        {
            color: #0280A7;
            font-size: 21px;
            font-weight: bold;
        }
        #banner img
        {
            width: 100%;
        }
        .tratamiento
        {
            padding-top: 2%;
        }
        .tratamiento-cuerpo
        {
            color: #0280A7;
            width: 100%;
            margin-left: auto;
            margin-right: auto;
        }
        .tratamiento-cuerpo img
        {
            width: 40%;   
        }
        .tratamiento-cuerpo .nombre
        {
            font-size: 2.5vh;
            width: 100%;
            margin-top: 10%; 
            margin-left: auto;
            margin-right: auto;
            
        }
        .tratamiento-cuerpo .nombre>p{
            font-size: 2vh;
            margin-bottom: 12%;
        }
        .tratamiento-cuerpo .descripcion
        {
            font-size: 2vh;
            margin-top: 10%; 
        }
        .tratamiento > a
        {
            
            margin-left:-5%;
            margin-right:-5%;
            width: 110%;
            bottom: -5%;
            font-size: 2.5vh; 
            
        }
        .contraste
        {
            background-color: #E9F8FF;
        }

    </style>
    <body>
            @extends('Menu/barramenu')

            @section('content')
                <div id="contenedormaestro" class="container-fluid">
                    <div id="titulo" class="row conte">
                        <div class="col-md-2"></div>
                        <div class="col-md-8 conte">
                            <h1>Tratamientos</h1>    
                        </div>
                    </div>
                    <div id="banner" class="row conte">
                        <div class="col-md-12">
                            <img src="../Recursos/img/Tratamientos/bio.png"  alt="">
                        </div>
                    </div> 
                    <div id="tratamientos" class="conte">
                        
                        <div class="row justify-content-center">
                            <div class="col-md-2 col-sm-5 tratamiento">
                                <div class="tratamiento-cuerpo">
                                    <img src="../Recursos/img/Tratamientos/1.png" alt="">
                                    <div class="nombre">Hormonas<br>Bio-Indénticas</div>
                                    <p class="descripcion">Balancea los niveles hormonales, sin efectos secundarios <br><br></p>     
                                </div>
                                <a href="http://" class="btn btn-primary">leer mas</a>
                            </div>
                            <div class="col-md-2 col-sm-5 tratamiento contraste">
                                <div class="tratamiento-cuerpo">
                                    <img src="../Recursos/img/Tratamientos/2.png" alt="">
                                    <div class="nombre">Lift Biológicobr <br><br></div>
                                    <p class="descripcion">Desacelera notablemente el envejecimiento <br><br></p> 
                                </div>
                                <a href="http://" class="btn btn-primary">leer mas</a>
                            </div>
                            <div class="col-md-2 col-sm-5 tratamiento">
                                <div class="tratamiento-cuerpo">
                                    <img src="../Recursos/img/Tratamientos/3.png" alt="">
                                    <div class="nombre">Opera tratamiento<br>Antiaging</div>
                                    <p class="descripcion">¡Estimula la vitalidad celular y luce radiante como<br>#thalia!</p> 
                                </div>
                                <a href="http://" class="btn btn-primary">leer mas</a>
                            </div>
                            <div class="col-md-2 col-sm-5 tratamiento contraste">
                                <div class="tratamiento-cuerpo">
                                    <img src="../Recursos/img/Tratamientos/4.png" alt="">
                                    <div class="nombre">Peptonas <br><br></div>
                                    <p class="descripcion">Estimula la produccion colageno y elastina del rostro <br><br></p> 
                                </div>    
                                <a href="http://" class="btn btn-primary">leer mas</a>
                            </div>
                            <div class="col-md-2 col-sm-5 tratamiento">
                                <div class="tratamiento-cuerpo">
                                    <img src="../Recursos/img/Tratamientos/5.png" alt="">
                                    <div class="nombre">PRP4G<br><p>(Plasma Rico en Plaquetas)</p></div>
                                    <p class="descripcion">Ten una piel mas fuerte yy joven <br><br><br></p> 
                                </div>
                                <a href="http://" class="btn btn-primary">leer mas</a>
                            </div>
                        </div> 
                    </div>
                    <div id="tratamientos justify-content-md-center" class="conte">
                        <div class="row">
                            <div class="col-md-2"></div>
                            <div class="col-md-2"></div>
                            <div class="col-md-2"></div>
                            <div class="col-md-2"></div>
                            <div class="col-md-2"></div>
                        </div> 
                    </div>
                </div>
            @stop 
    </body>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</html>