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
    background-color: white;
    overflow-x: hidden;
    }
    @font-face {
        font-family: txtbran;
        src: url(../../Recursos/BRANDON_THIN.otf)format('otf');
    }
    #Linea1{
        width: 3px;
        height: 270px;
        background-color: #0280A7;
        margin-top: -40px;
        margin-left: -50px;
    }
    #Linea2{
        width: 3px;
        height: 270px;
        background-color: #0280A7;
        margin-top: -40px;
        margin-left: 40px;
    }
    #imgback{
        width: 100%;
        height: 80%;
        background-image: url('../Recursos/img/Acerca.jpg');
        background-size: 100%;
        background-position: center;
    }
    #imgback2{
        width: 100%;
        height: 62%;
        background-color: white;
        margin-top: 0%;
    }
    #cont1{
        width: 25%;
        height: 90%;
        background-color: white;
        float: right;
        margin-right: 20%;
        margin-top: 3%;
    }
    #cont2{
        width: 100%;
        height: 50%;
        background-color: white;
    }
    #cont3btn2{
        display: none;
    }
    #cont3btn:hover div{
        display: block;
    }

    #cont3btn:hover a{
        display: none;
    }
    #cabeceratxt{
        margin-left: 37%;
        margin-top: -4.5%;
    }
    #Titulo{
        color: #0280A7;
        font-family: txtbran;
    }
    #imgSuperior{
        width: 100%;
        margin-top: 40px;
    }
    #contenedor{
        width: 100%;
        height: 100%;
        background-color: white;
    }
    #tableopt{
        width: 100%;
    }
    #conteneop{
        height: 300px;
    }

</style>


@extends('Menu/barramenu')

@section('content')

    <div id="contenedor">

        <br>
        <center><h3 id="Titulo">Tratamientos</h3></center>


    <div>
        <img id="imgSuperior" src="../Recursos/img/11.png">
    </div>


    <div>
        <table border="1px" id="tableopt">

            <thead>
                <td id="conteneop">hola</td>
                <td id="conteneop">hola</td>
                <td id="conteneop">hola</td>
                <td id="conteneop">hola</td>
                <td id="conteneop">hola</td>
            </thead>

            <tbody>
                <td id="conteneop">hola</td>
                <td id="conteneop">hola</td>
                <td id="conteneop">hola</td>
                <td id="conteneop">hola</td>
                <td id="conteneop">hola</td>
            </tbody>

        </table>
    </div>



    </div>
    
    

    <a href="{{ url('/Opera_tratamiento_antiaging') }}">Opera tratamiento Antiaging</a>


@stop




<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>