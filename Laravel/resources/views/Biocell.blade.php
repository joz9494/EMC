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
    #contenedormaster{
        width: 100%;
        height: 200%;
        background-color: white;
    }
    #imgbanner{
        width: 50%;
        height: 20%;
        margin-top: 5%;
        margin-left: 20%;
    }
    #imgbannercambio{
        width: 52%;
        height: 20%;
        margin-top: 5%;
        margin-left: 20%;
        background-image: url('Laravel/Recursos/img/Biocel/inicio.png');
    }
    #imgbannercambio div div font{
        display: none;
    }
    #imgbannercambio:hover {
        background-image: url('Laravel/Recursos/img/Biocel/inicio-2.png');
    }
    #imgbannercambio:hover div div font{
        display: block;
    }
    #imgbannercambio:hover div font{
        display: none;
    }
    #linea1{
        height: 2px;
        width: 1050px;
        margin-top: 100px;
        margin-left: 18%;
        background-color: red;
    }
    #linea2{
        height: 2px;
        width: 1050px;
        margin-top: 100px;
        margin-left: 18%;
        background-color: red;
    }
    #Textocontenedor{
        width: 50%;
        margin-left: 20%;
        margin-right: 20%;
        margin-top: 10%;
    }
    #txtregeneracion2{
        width: 40%;
        font-size: 15px;
        color: red;
        float: right;
        margin-right: 5%;
        margin-top: 100px;
    }
    #txtprincipal{
        font-size: 50px;
        color: red;
        font-weight: bold;
        margin-left: 250px;
        margin-top: 160px;
        float: left;
        z-index: 200;
        position: absolute;
    }
</style>


@extends('Menu/barramenu')

@section(@content)

    <div id="contenedormaster">
        <div id="Texto superior">
            <img src="">
        </div>
        <div id="Textocontenedor">
            <font>La célula es la parte más pequeña y maravillosa del organismo, se deterioran con el tiempo, por el estilo de vida o la herencia genética, causando enfermedades, mutaciones celulares y dolencias crónicas.</font><br>
            <br>
            <font>La terapia en renovación celular, estimula los mecanismos propios de las células, especialmente al sistema inmunológico, activando sus funciones para hacer rejuvenecer nuestros órganos y evitar los riesgos a contraer enfermedades degenerativas. Human Ultracell V ha logrado proveer al ser humano de salud celular para lucir joven por fuera y alargar su vida ayudando a prevenir el envejecimiento orgánico y sus secuelas.</font>
        </div>

        <div id="encabezado">
            
        </div>

        <div id="imgbannercambio">
            <div>
                <font id="txtprincipal">Regeneración Celular</font>
            </div>
            <div id="txtregeneracion2">
                <div>
                    <font style="font-weight: bold;font-size: 30px">Regeneración Celular</font><br>
                    <font>Regeneración, revitalización y renovación celular para:</font>
                    <font>refuerzo del sistema inmunológo, coadyuvante en <br> enfermedades del sistema inmunológico, <br>
                    envejecimiento prematuro, disminución de facultades <br> mentales y fisicas, cansancio, astenia física <br> prevención de enfermedades degegenerativas, aumento de la energía general.</font>
                </div>
            </div>
        </div>

        <div id="linea1">
            
        </div>

        <div id="imagen2">
            <img id="imgbanner" src="Laravel/Recursos/img/Biocel/BANNER1.png">
        </div>

        <div id="linea2">
            
        </div>

        <div id="imagen3">
            <img id="imgbanner" src="Laravel/Recursos/img/Biocel/BANNER2.png">
        </div>


    </div>

@stop




<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>