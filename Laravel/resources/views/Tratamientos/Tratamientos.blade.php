<!DOCTYPE html>
<html>
    <head>
        <title>EMC</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

            <!-- Styles -->
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">  
            <link rel="icon" type="image/png" href="Laravel/Recursos/images/icons/favicon.png"/>
            <!--
            <link rel="stylesheet" type="text/css" href="Laravel/Recursos/vendor/bootstrap/css/bootstrap.min.css">
            !-->
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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
            position: relative;
           margin-top: 2%;
           margin-bottom: 2%
           
        }
        .tratamiento-cuerpo
        {
            color: #0280A7;
            width: 100%;
            padding-top: 20%;
            padding-bottom: 15%;
            margin-left: auto;
            margin-right: auto;
        }
        .tratamiento-cuerpo img
        {
            width: 40%;   
        }
        .tratamiento-cuerpo .nombre
        {
            width: 100%;
            margin-top: 10%; 
            margin-left: auto;
            margin-right: auto;
            
        }
        .tratamiento-cuerpo .nombre>p{
            margin-bottom: 12%;
        }
        .tratamiento-cuerpo .descripcion
        {
            margin-top: 10%; 
        }
        .tratamiento > a
        { 
            position: absolute;
            width: 100%;
            left: 0;
            bottom: 0;
            visibility: hidden;
            
        }
        .tratamiento:hover  
        {
            margin-top: 0;
             
        }

        .tratamiento:hover >a
        {
            visibility:visible;
        }
        .contraste
        {
            background-color: #E9F8FF;
        }
        @media (orientation:landscape)
        {
            .tratamiento-cuerpo .nombre
            {font-size: 2.5vh;}
            .tratamiento-cuerpo .nombre>p{
                font-size: 2vh;
            }
            .tratamiento-cuerpo .descripcion
            {
                font-size: 2vh; 
            }
            .tratamiento > a
            { 
                {font-size: 2.5vh;}  
            }
        }
        @media (orientation:portrait)
        {
            .tratamiento-cuerpo .nombre
            {font-size: 2vh;}
            .tratamiento-cuerpo .nombre>p{
                font-size: 1vh;
            }
            .tratamiento-cuerpo .descripcion
            {
                font-size: 1vh; 
            }
            .tratamiento > a
            { 
                {font-size: 1.5vh;}  
            }
        }
        
    </style>
    <body>
            @extends('Menu/barramenu')

            @section('content')
                <div id="contenedormaestro" class="container-fluid">
                    <div id="titulo" class="row conte">
                        <div class="col-md-2 col-sm-5"></div>
                        <div class="col-md-8 conte">
                            <h1>Tratamientos</h1>    
                        </div>
                    </div>
                    <div id="banner" class="row conte">
                        <div class="col-md-12">
                            <img src="Laravel/Recursos/img/Tratamientos/bio.png"  alt="">
                        </div>
                    </div> 
                    <div id="tratamientos" class="conte">
                         
                        <div class="row justify-content-center">
                            <div class="col-md-2 col-sm-5 tratamiento">
                                <div class="tratamiento-cuerpo">
                                    <img src="Laravel/Recursos/img/Tratamientos/1.png" alt="">
                                    <div class="nombre">Hormonas<br>Bio-Indénticas</div>
                                    <p class="descripcion">Balancea los niveles hormonales, sin efectos secundarios <br><br><br><br></p>     
                                </div>
                                <a href="{{url('/Hormonas')}}" class="btn btn-primary">leer mas</a>
                            </div>
                            <div class="col-md-2 col-sm-5 tratamiento contraste">
                                <div class="tratamiento-cuerpo">
                                    <img src="Laravel/Recursos/img/Tratamientos/2.png" alt="">
                                    <div class="nombre">Lift Biológicobr <br><br></div>
                                    <p class="descripcion">Desacelera notablemente el envejecimiento <br><br> </p> 
                                </div>
                                <a href="{{url('/lift-biologico')}}" class="btn btn-primary">leer mas</a>
                            </div>
                            <div class="col-md-2 col-sm-5 tratamiento">
                                <div class="tratamiento-cuerpo">
                                    <img src="Laravel/Recursos/img/Tratamientos/3.png" alt="">
                                    <div class="nombre">Opera tratamiento<br>Antiaging</div>
                                    <p class="descripcion">¡Estimula la vitalidad celular y luce radiante como<br>#thalia!</p> 
                                </div>
                                <a href="{{url('/Opera_tratamiento_antiaging')}}" class="btn btn-primary">leer mas</a>
                            </div>
                            <div class="col-md-2 col-sm-5 tratamiento contraste">
                                <div class="tratamiento-cuerpo">
                                    <img src="Laravel/Recursos/img/Tratamientos/4.png" alt="">
                                    <div class="nombre">Peptonas <br><br></div>
                                    <p class="descripcion">Estimula la produccion colageno y elastina del rostro <br><br></p> 
                                </div>    
                            <a href="{{url('/Peptonas')}}" class="btn btn-primary">leer mas</a>
                            </div>
                            <div class="col-md-2 col-sm-5 tratamiento">
                                <div class="tratamiento-cuerpo">
                                    <img src="Laravel/Recursos/img/Tratamientos/5.png" alt="">
                                    <div class="nombre">PRP4G<br><p>(Plasma Rico en Plaquetas)</p></div>
                                    <p class="descripcion">Ten una piel mas fuerte yy joven <br><br><br></p> 
                                </div>
                                <a href="http://" class="btn btn-primary">leer mas</a>
                            </div> 
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-md-2 col-sm-5 tratamiento">
                                <div class="tratamiento-cuerpo">
                                    <img src="Laravel/Recursos/img/Tratamientos/6.png" alt="">
                                    <div class="nombre">Rinoplastia<br><p>(Rinomodelacion)</p></div>
                                    <p class="descripcion">Modifica la de forma de tu nariz sin cirugia<br><br><br></p> 
                                </div>
                                <a href="http://" class="btn btn-primary">leer mas</a>
                            </div>
                            <div class="col-md-2 col-sm-5 tratamiento contraste">
                                <div class="tratamiento-cuerpo">
                                    <img src="Laravel/Recursos/img/Tratamientos/7.png" alt="">
                                    <div class="nombre">Silicio plus + DMAE <br><br></div>
                                    <p class="descripcion">Reafirmante y antiestrías.<br><br><br></p> 
                                </div>
                                <a href="http://" class="btn btn-primary">leer mas</a>
                            </div>
                            <div class="col-md-2 col-sm-5 tratamiento">
                                <div class="tratamiento-cuerpo">
                                    <img src="Laravel/Recursos/img/Tratamientos/8.png" alt="">
                                    <div class="nombre">Scultur Refort<br><br></div>
                                    <p class="descripcion">Re-estructura y estimula <br> la formacion de fibras <br> de colágeno y elastina</p> 
                                </div>
                                <a href="http://" class="btn btn-primary">leer mas</a>
                            </div>
                            <div class="col-md-2 col-sm-5 tratamiento contraste">
                                <div class="tratamiento-cuerpo">
                                    <img src="Laravel/Recursos/img/Tratamientos/9.png" alt="">
                                    <div class="nombre">Terapia Neural<br><br></div>
                                    <p class="descripcion">Tratamiento para enfermedades <br>causadas por <br>trastorno en el sistema<br>eléctrico del cuerpo.</p> 
                                </div>
                                <a href="http://" class="btn btn-primary">leer mas</a>
                            </div>
                            <div class="col-md-2 col-sm-5 tratamiento"> 
                                <div class="tratamiento-cuerpo">
                                    <img src="Laravel/Recursos/img/Tratamientos/10.png" alt="">
                                    <div class="nombre">Tratamiento <br>Progresivo de  Ojos</p></div>
                                    <p class="descripcion">Elimiacíon biológica de<br>lineas profundas,sin<br>cirugía</p> 
                                </div>
                                <a href="http://" class="btn btn-primary">leer mas</a>
                            </div>
                        </div> 
                    </div>
                </div>
            @stop 
    </body>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>