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
    #contenedorcarrousel{
        width: 100%;
        height: 30%;
    }
    #imgcarrousel{
        width: 100%;
        height: 500px;%;
    }
    #bienvenidos{
        width: 55%;
        height: 33%;
        background-color: white;
        margin-left: 25%;
        margin-top: 230px;
    }
    #contenedorbtn{
        background-image: url("../Recursos/img/btn.jpg");
        background-size: 100%;
        width: 500px;
        height: 90px;
        margin-top: -2%;
    }
    #bienvenidos2{
            display: none;
        }
    #contenedorbtn:hover{
        background-image: url("../Recursos/img/btn2.jpg");
        background-size: 100%;
        width: 500px;
        height: 90px;
        margin-top: -2%;
    }
    #imgbio{
        width: 73%;
        height: 33%;
    }
    #Linea1{
        width: 3px;
        height: 290px;
        background-color: #0280A7;
        margin-top: -40px;
        margin-left: -50px;
    }
    #Linea2{
        width: 3px;
        height: 290px;
        background-color: #0280A7;
        margin-top: -40px;
        margin-left: 40px;
    }
    #imgback{
        width: 100%;
        height: 60%;
        background-image: url('../Recursos/img/Contacto.png');
    }
    #btnenviar{
        background-color: #0280A7;
    }
    #btnenviar:hover {
        background: #7FB3D5;
    }

    #formulario{
        float: right;
        margin-right: 300px;
    }
    #pinfet{
        float: right;
        margin-right: -210px;
        margin-top: 200px;
        border-collapse: separate;
        border-spacing: 5px;
    }
    #psupt{
        float: right;
        margin-right: 30px;
        margin-top: 30px;
    }

    ::placeholder { color: #0280A7; }




    @media screen and (max-width: 600px){
        body{
            overflow-x: visible;
        }
        #formulario{
            margin-left: 40%;
            float: left;
        }
        #psupt{
            margin-top: 15%;
            margin-left: 10%;
        }
        #pinfet{
            margin-left: -40%;
            float: left;
            margin-top: 10%;
        }
    }
</style>


@extends('Menu/barramenu')

@section(@content)

<div id="imgback">
    <div id="formulario">
        <table id="psupt" width="15%">
            <thead>
                <tr><td><center><font style="font-size: 25px;color: #0280A7;font-weight: bold;font-family:txtbran">Contáctanos</font></center></td></tr>
                <tr><td><center><font style="font-size: 15px;color: black;font-family:txtbran">Estamos disponibles para contestar tus dudas, deja tus datos y te responderemos a la brevedad.</font></center></td></tr>
            </thead>
        </table>

        <table id="pinfet" width="15%" style="color: #0280A7;">
            <thead>
                <tr><td style="border: #0280A7 1px solid;"><input type="text" name="name" placeholder="Nombre *"></td></tr>
                <tr><td style="border: #0280A7 1px solid;"><input type="text" name="name" placeholder="Apellidos *"></td></tr>
                <tr><td style="border: #0280A7 1px solid;"><input type="text" name="name" placeholder="Email *"></td></tr>
                <tr><td style="border: #0280A7 1px solid;"><input type="text" name="name" placeholder="Teléfono *"></td></tr>
                <tr><td style="border: #0280A7 1px solid;"><textarea id="mensaje" placeholder="Mensaje *" rows="5" cols="30"></textarea></td></tr>
                <tr><td style="float: right;"><center><button type="button" id="btnenviar" class="btn btn-default btn-sm" style="color: white;font-weight: bold;">Enviar</button></center></td></tr>
            </thead>
        </table>
    </div>
</div>

@stop




<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>