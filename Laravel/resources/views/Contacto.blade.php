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
        background-image: url("Laravel/Recursos/img/btn.jpg");
        background-size: 100%;
        width: 500px;
        height: 90px;
        margin-top: -2%;
    }
    #bienvenidos2{
            display: none;
        }
    #contenedorbtn:hover{
        background-image: url("Laravel/Recursos/img/btn2.jpg");
        background-size: 100%;
        width: 500px;
        height: 90px;
        margin-top: -2%;
    }
    #imgbio{
        width: 73%;
        height: 33%;
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
        width: 200px !important;
    }
    #psupt{
        float: right;
        margin-right: 15%;
        margin-top: 30px;
    }

    ::placeholder { color: #0280A7; }




    @media screen and (max-width: 1600px){
        body{
            overflow-x: visible;
        }
        #formulario{
            margin-left: 50%;
            float: left;
        }
        #psupt{
            margin-top: 15%;
            margin-left: 10%;
        }
        #pinfet{
            margin-left: -11%;
            float: left;
            margin-top: 10%;
        }
    }

</style>


@extends('Menu/barramenu')

@section(@content)

<div id="imgback">
    <div id="formulario">
        <table id="psupt" width="100%">
            <thead>
                <tr><td><center><font style="font-size: 25px;color: #0280A7;font-family:txtbran;font-family: brandon_reg">Contáctanos</font></center></td></tr>
                <tr><td><center><font style="font-size: 20px;color: black;font-family:txtbran;font-family: brandon_light;">Estamos disponibles para contestar tus<br>dudas, deja tus datos y te responderemos a la <br>brevedad.</font></center></td></tr>
            </thead>
        </table>

        <table id="pinfet" style="color: #0280A7;margin-top: 3%;margin-right: 40%;">
            <thead>
                <tr><td style="border: #0280A7 1px solid;background-color: white;font-family:brandon_light"><input style="background-color: white;" type="text" name="name" placeholder="Nombre *"></td></tr>
                <tr><td style="border: #0280A7 1px solid;background-color: white;font-family:brandon_light"><input style="background-color: white;" type="text" name="name" placeholder="Apellidos *"></td></tr>
                <tr><td style="border: #0280A7 1px solid;background-color: white;font-family:brandon_light"><input style="background-color: white;" type="text" name="name" placeholder="Email *"></td></tr>
                <tr><td style="border: #0280A7 1px solid;background-color: white;font-family:brandon_light"><input style="background-color: white;" type="text" name="name" placeholder="Teléfono *"></td></tr>
                <tr><td style="border: #0280A7 1px solid;background-color: white;font-family:brandon_light"><textarea id="mensaje" placeholder="Mensaje *" rows="5" cols="55"></textarea></td></tr>
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