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
        font-family: txtbran;
        src: url(BRANDON_THIN.otf)format('otf');
    }
    @font-face {
            font-family: brandon_light;
            src: url(Laravel/Recursos/BRANDON_LIGHT.otf);
            }
    @font-face {
        font-family: brandon_reg;
        src: url(Laravel/Recursos/BRANDON_REG.otf);
        }
    
    #imgback{
        width: 100%;
        height: 60%;
        background-image: url('Laravel/Recursos/img/Contacto/Contacto.png');
    }
    #btnenviar{
        background-color: #0280A7;
    }
    #btnenviar:hover {
        background: #079EE2;
    }

    #pinfet{
        width: 100%;
        text-align: center;
        border-collapse: separate;
        border-spacing: 5px;
    }
    ::placeholder { 
        color: #0280A7;
        padding: 5px;
     }
     .caja
     {
         width: 100%;
         margin-bottom: 1%;
         border: #0280A7 1px solid;background-color: white;font-family:brandon_light;
     }
     #psupt th
        {
            color: #0280A7;font-family:txtbran;font-family: brandon_reg;
            font-weight: normal;
        }
        #psupt td
        {color: black;font-family:txtbran;font-family: brandon_light; line-height: 125%;}
    @media  (orientation: landscape) and (min-width:768px){
        #psupt th
        {
            font-size: 2vw;
        }
        #psupt td
        {font-size: 1.15vw}
        #formulario_contacto
        {
            top: 2%;
            width: 25%;
            right: 28%;
        }
    }
    @media  (max-width:768px) {
        #psupt th
        {
            font-size: 3vw;
        }
        #psupt td
        {font-size: 2.15vw}
        #formulario_contacto
        {
            width: 40%;
            right: 28%;
        }
    }
    .imagen_text{
        position: relative;
        text-align: center;
    }
    .imagen_text img
    {
        width: 100%;
        min-width: 1000px;
    }

    .text-img{
        position: absolute;
        
        top: 0;
        padding: 2%;
    }
    input,textarea,button
    {
        padding: 2%;
        background-color: white;
        font-size: 0.8vw !important;
    }
</style>


@extends('Menu/barramenu')

@section(@content)
<div class="row">
    <div class="col-12">
        <div class="imagen_text">
            <img src="Laravel/Recursos/img/Contacto/Contacto-Miguel.png" alt="" width="100%;">
            <div id="formulario_contacto" class="text-img">
               
                    <table id="psupt">
                        <thead>
                            <tr><th><center><font >Contáctanos</font></center></td></tr>
                            <tr><td><center><font>Estamos disponibles para contestar tus<br>dudas, deja tus datos y te responderemos a la brevedad.</font></center></td></tr>
                        </thead>
                    </table>
                    <div class="caja" style="margin-top: 5%;"><input type="text" name="name" placeholder="Nombre *"></div>
                    <div class="caja"><input type="text" name="name" placeholder="Apellidos"> </div>
                    <div class="caja"><input type="text" name="name" placeholder="Email "></div>
                    <div class="caja"><input type="text" name="name" placeholder="Teléfono"> </div>
                    <div class="caja">
                        <textarea id="mensaje" placeholder="Mensaje *" rows="5" style="width:100%;"></textarea>
                    </div>
                    <div style="text-align:right;">
                        <button type="button" id="btnenviar" class="btn btn-default btn-sm" style="color: white;font-weight: bold;right:0; ">Enviar</button>
                    </div>
            </div>

        </div>

    </div>
</div>
@stop




<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>