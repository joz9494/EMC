<!DOCTYPE html>
<html>
<head>
    <title>EMC</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

        <!-- Styles -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">  
        <link rel="icon" type="image/png" href="../Recursos/images/icons/favicon.png"/>
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
        font-family: txtbran;
        src: url(BRANDON_THIN.otf)format('otf');
    }
    @font-face {
        font-family: brandon_reg;
        src: url(-"Laravel/Recursos/BRANDON_REG.otf");
    }
    @font-face {
        font-family: brandon_light;
        src: url(Laravel/Recursos/BRANDON_LIGHT.otf);
    }
    #contenedormaster{
        width: 100%;
        
        background-color: white;
    }
   
    h2
    {
        font-family: brandon_reg !important;
        
    }
    #con_raton h2
    {
        font-size: 3.5vh !important;
    }
    #sin_raton h2
    {
        font-size: 4.5vh !important;
    }
    p, #lista>li
    {
        font-family: brandon_light !important;
    }
    p
    {
        font-size: 2.17vh !important;
    }
    .salto_linea
    {
        margin-left: 3.5%;
    }
    .col-center
   {
       margin: 0 auto;
   }
   .conte img
   {
       width: 100%;
   }
    .conte
    {
        padding-top:2%; 
        text-align: center;
    }


   .imagen_text{
        position: relative;
        text-align: center;
    }
    .text-img{
        position: absolute;
        top: 0;
        padding: 1%;
    }
   #titulo_interno
    {
        width: 100%;
        top: 40%;
        margin: 0 auto; 
        
    }
    #texto_interno
    {
        width: 45%;
        top: 18%;
        right:3%; 
        margin: 0 auto; 
    }
    #texto_interno p
    {
        font-size: 1.8vh;
    }
    
    #interno h2,#interno p, #lista>li, #lista>li::before
    {
        color: #8e353e;
    }
    #lista>li::before { content: "•"; font-size: 1.9vh; padding-right: 2%;}
    #sin_raton{
        line-height: 150%;
        text-align: center;
        
    }
    #con_raton
    {
        
        visibility: hidden;
        opacity: 0;
        transition: visibility 0s, opacity .7s linear;
        display: none;
    }
    #interno:hover #con_raton
    {   display: block;
        visibility: visible;
        opacity: 1;
       
    }
    #interno:hover #sin_raton
    {
        display: none;
        opacity: 0; 
        
        
    }
    .linea
    {
        padding-top:4%; 
        border-top: #8e353e solid 2px;
    }
</style>


@extends('Menu/barramenu')

@section(@content)

    <div id="contenedormaster">
        <div class="row">
            <div id="" class="col-2 col-center conte" >
                <img src="Laravel\Recursos\img\logobio.webp">
            </div>
        </div>
        <div class="row">
            <div class="col-6 col-center conte">
            <div id="" style="text-align:justify">
                    <p>La célula es la parte más pequeña y maravillosa del organismo, se deterioran con el tiempo, por el estilo de vida o la herencia genética, causando enfermedades, mutaciones celulares y dolencias crónicas.</p><br>
                    <p>La terapia en renovación celular, estimula los mecanismos propios de las células, especialmente al sistema inmunológico, activando sus funciones para hacer rejuvenecer nuestros órganos y evitar los riesgos a contraer enfermedades degenerativas. Human Ultracell V ha logrado proveer al ser humano de salud celular para lucir joven por fuera y alargar su vida ayudando a prevenir el envejecimiento orgánico y sus secuelas.</p>
                </div>
            </div>
        </div>
        <div class=" row" style="">
            <div class=" col-6 col-center  conte">
                <div id="interno">
                    <div id="sin_raton" class="imagen_text">
                        <img src="Laravel/Recursos/img/Biocel/inicio.png" alt="" > 
                        <div id="titulo_interno" class="text-img">
                            <h2>Regeneración Celular</h2> 
                        </div> 
                    </div>
                    <div id="con_raton" class="imagen_text">
                        <img src="Laravel/Recursos/img/Biocel/inicio-2.png" alt="" >
                        <div id="texto_interno" class="text-img">
                            
                                <h2 style="font-size: 2.15vh !important; text-align:left;">Regeneración, revitalización y renovación <br> celular para: <br><br></h2>
                                <p >
                                    <ul id="lista" style="font-size: 1.9vh !important;text-align:left;">
                                        <li>Refuerzo del sistema inmunólogo.</li>
                                        <li>Coadyuvante en enfermedades del sistema <br>
                                                <div class="salto_linea">inmunológico.</li>
                                        <li>Envejecimiento prematuro.</li>
                                        <li>Disminución de facultades mentales y físicas.</li>
                                        <li>Cansancio.</li>
                                    </ul> 
                                </p>

                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div id="" class="col-6 col-center conte" >
                <img src="Laravel/Recursos/img/Biocel/BANNER1b.png" class="linea">
            </div>
        </div>
        <div class="row" style="padding-bottom:2%;">
            <div id="" class="col-6 col-center conte" >
                <img src="Laravel/Recursos/img/Biocel/BANNER2b.png" class="linea">
            </div>
        </div>



    </div>

@stop




<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>