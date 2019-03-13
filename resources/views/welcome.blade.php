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
        src: url(../Recursos/BRANDON_THIN.otf)format('otf');
    }
    #contenedorcarrousel{
        width: 100%;
        height: 30%;
    }
    #bienvenidos{
        width: 61%;
        height: 38%;
        background-color: white;
        margin-left: 16%;
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


    @media screen and (max-width: 1000px){
        body{
            overflow-x: visible;
        }
        #bienvenidos{
            display: none;
        }
        #bienvenidos2{
            display: block;
            margin-left: 2%;
            width: 90%;
            height: 350px;
            background-color: white;
        }
        #contenedorbtn2{
        background-image: url("../Recursos/img/btn.jpg");
        background-size: 100%;
        width: 320px;
        height: 60px;
        margin-top: -2%;
        margin-left: -10px;
        }
        #contenedorbtn2:hover{
        background-image: url("../Recursos/img/btn2.jpg");
        background-size: 100%;
        width: 320px;
        height: 60px;
        margin-top: -2%;
        }
        #imgbio{
            width: 106%;
            margin-left: -16%;
            margin-top: 3%;
        }
    }
</style>


@extends('Menu/barramenu')

@section(@content)
<div id="contenedorcarrousel" style="width: 100%;>
   <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" id="imgcarrousel" src="../Recursos/img/11.png" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" id="imgcarrousel" src="../Recursos/img/11.png" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" id="imgcarrousel" src="../Recursos/img/11.png" alt="Third slide">
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





<div id="bienvenidos" style="height: 33%;">
    <br>
    <center><p style="font-size: 50px;color: #0280A7;font-weight: bold;font-family:txtbran">B&nbsp;I&nbsp;E&nbsp;N&nbsp;V&nbsp;E&nbsp;N&nbsp;I&nbsp;D&nbsp;O&nbsp;S</p></center>
    <center><h6 style="font-size: 18px;font-family:txtbran">Mejora tu apariencia física, incrementa la vitalidad de tu piel y elimina dolores crónicos asociados a la vejez.</h6></center><br>
    <center><div id="contenedorbtn">
        <a href="{{ url('/') }}">
        <div style="position: absolute;margin-top: 30px;margin-left: 100px;font-family:txtbran">
            <center><h1 style="color: white;font-size: 30px;font-weight: bold;">Eterna Medical Center</h1></center>
        </div>
        </a>
    </div></center>
    <center><p style="font-size: 18px;font-family:txtbran">Retarda tu reloj fisiológico, te ayudamos a sentirte y lucir mejor.</p></center>
    <center><p style="font-size: 18px;font-family:txtbran">En Eterna Medical Center estamos para ayudarte.</p></center>
    <center><p style="font-size: 18px;color: black;font-family:txtbran"><b>Mejora y mantén tu estado físico.</b></center>
</div>




<div id="bienvenidos2">
    <br>
    <center><p style="font-size: 20px;color: #0280A7;font-weight: bold;font-family:txtbran">BIENVENIDOS</p></center>
    <center><h6 style="font-size: 18px;font-family:txtbran">Mejora tu apariencia física, incrementa la vitalidad de tu piel y elimina dolores crónicos asociados a la vejez.</h6></center><br>
    <center><div id="contenedorbtn2">
        <a href="{{ url('/') }}">
        <div style="position: absolute;margin-top: 20px;margin-left: 60px">
            <center><h1 style="color: white;font-size: 20px;font-weight: bold;font-family:txtbran">Eterna Medical Center</h1></center>
        </div>
        </a>
    </div></center>
    <br>
    <center><p style="font-size: 18px;font-family:txtbran">Retarda tu reloj fisiológico, te ayudamos a sentirte y lucir mejor.</p></center>
    <center><p style="font-size: 18px;font-family:txtbran">En Eterna Medical Center estamos para ayudarte.</p></center>
    <center><p style="font-size: 18px;color: black;font-family:txtbran"><b>Mejora y mantén tu estado físico.</b></center>
</div>

<div style="margin-top: 2%;margin-left: 16%;">
    <a href="{{ url('/Biocell') }}"><img id="imgbio" src="../Recursos/img/bio.png"></a>
</div>

@stop




<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>