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
        height: 60%;
        background-color: white;
        margin-top: 0%;
    }
    #cont1{
        width: 500px;
        height: 650px;
        background-color: white;
        float: right;
        margin-right: 15%;
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
    #fontespe2{
        display: none;
    }
    #cambiohover{
        font-size: 22px;
    }
    #mobile{
        display: none;
    }
    #derecha{
        margin-left: 55%;
        margin-top: -350px;
    }

    @media screen and (max-width: 1110px){
        #derecha{
            margin-top: -550px;
        }
        #imgback2{
            height: 80%;
        }
    }

    @media screen and (max-width: 1000px){
        #cont1{
            width: 370px;
            margin-left: 5%;
            margin-top: 40px;
            position: relative;
            float: left;
        }
        #fontespe{
            display: none;
        }
        #fontespe2{
            display: block;
            margin-left: 6%;
        }
        #cambiohover{
            font-size: 16px;
        }
        #cabecera{
            margin-left: -40%;
            margin-bottom: 10%;
        }
        #lateral{
            display: none;
        }
        #derecha{
            display: none;
        }
        #mobile{
            display: block;
            width: 80%;
            margin-left:5%;
            font-size: 18px;
        }
        #imgback2{
            height: 1000px;
            background-color: white;
        }
    }


</style>


@extends('Menu/barramenu')

@section('content')
    
<div id="imgback">
    <div id="cont1">
        <div id="cont2">
            <br>
            <font style="margin-top: -50%;color: #0280A7;font-size: 30px;margin-left: 28%;font-family: txtbran;">Acerca de Eterna<br> </font>
            <font style="margin-top: -50%;color: #0280A7;font-size: 30px;margin-left: 30%;font-family: txtbran;">Medical Center<br> </font>
            <br>
            <center><font style="margin-left: -4%;font-size: 20px;font-family: txtbran;">​En Eterna Medical Center estamos 100%</font><br>
            <font style="margin-left: -4%;font-size: 20px;font-family: txtbran;">​comprometidos con nuestros pacientes, donde el</font><br>
            <font style="margin-left: -4%;font-size: 20px;font-family: txtbran;">​servicio a sus necesidades y atención de excelencia</font><br>
            <font style="margin-left: -4%;font-size: 20px;font-family: txtbran;">​son las cualidades que procuramos en todo</font><br>
            <font style="margin-left: -4%;font-size: 20px;font-family: txtbran;">​momento.</font></center>
        </div>
        <div id="cont3">
        <img src="../Recursos/img/Boton.jpg" width="100%" height="50%">
        <div id="cont3btn" style="margin-top: -50%;margin-left: 10%;">
            <a>
                <font id="fontespe" style="margin-top: -50%;color: white;font-size: 34px;font-family: txtbran;">&nbsp;&nbsp;ESPECIALISTAS EN<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MEDICINA<br> ANTIENVEJECIMIENTO</font>
                <font id="fontespe2" style="margin-top: -50%;color: white;font-size: 24px;font-family: txtbran;">&nbsp;&nbsp;ESPECIALISTAS EN<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MEDICINA<br> ANTIENVEJECIMIENTO</font>
            </a>

            <div id="cont3btn2" style="margin-top: -60%;margin-left: 5%;">
                 <font id="cambiohover" style="margin-top: -70%;color: white;text-align: center;font-family: txtbran;">Observamos la salud de froma integral y <br> colaboramos con especialistas en todas las<br> áreas de la medicina para lograr el estado<br>óptimo de cada uno de nuestros pacientes.<br>En Eterna Medical Center te ayudamos a<br> ralentizar el proceso de envejecimiento con<br>la mejor tecnología disponible.</font>
            </div>
        </div>

        
        </div>
    </div>
</div>

<div id="imgback2">

    <div id="cabecera">
        <img src="../Recursos/img/Logo2.png" width="5%" height="5%" style="margin-left: 30%;;margin-top: 3%;">
        <div id="cabeceratxt">
            <font style="color: #0280A7;font-size: 25px;font-weight: bold; font-family: txtbran;">DR. TORIBIO MARTÍNEZ RIVEIRA</font><br>
            <font style="margin-left: 3%;font-family: txtbran;font-size: 16px">Céd. Prof: 8551800 - Reg. SSG 12540</font><br>
            <font style="font-size: 16px;color: #0280A7;margin-left: -2%;font-family: txtbran;">Médico Cirujano Partero, Egresado del Instituto Politécnico Nacional</font>
        </div>
    </div>

    <div id="lateral" style="margin-left: 25%;;margin-top: 2%;width: 25%;">
        <font style="font-size: 17px;color: #0280A7;font-weight: bold;font-family: txtbran;"><center>Trayectoria</center></font>
        <font style="font-size: 17px;color: black;font-family: txtbran;">&bull;Miembro de American Academy of Anti-Aging Medicine (Estados Unidos).</font><br>
        <font style="font-size: 17px;color: black;font-family: txtbran;">&bull;Miembro del Colegio Nacional de Medicina Antienvejecimiento (México).</font><br>
        <font style="font-size: 17px;color: black;font-family: txtbran;">&bull;Fellowship en Medicina Antienvejecimiento.</font><br>
        <font style="font-size: 17px;color: black;font-family: txtbran;">&bull;Conferencista en el II y III Congreso Mundial de Medicina Antienvejecimiento.</font><br>
        <font style="font-size: 17px;color: black;font-family: txtbran;">&bull;Profesor de Curso Internacional de Medicina Antienvejecimiento.</font><br>
        <font style="font-size: 17px;color: black;font-family: txtbran;">&bull;Profesor de Terapia Neural y PRP Articular en Certificación Antienvejecimiento.</font><br>
        <font style="font-size: 17px;color: black;font-family: txtbran;">&bull;Profesor de viscosuplementación articular.</font><br>
        <font style="font-size: 17px;color: black;font-family: txtbran;">&bull;Certificación Internacional de remodelación facial y corporal con hilos PDO.</font><br>
    </div>

    <div id="derecha" style="width: 25%;">
        <font style="font-size: 17px;color: #0280A7;font-weight: bold;font-family: txtbran;">Experiencia</font>
        <br>
        <font style="font-size: 17px;color: black;font-family: txtbran;">&bull;Antienvejecimiento Cerebral.</font><br>
        <font style="font-size: 17px;color: black;font-family: txtbran;">&bull;Antienvejecimiento y Nutricion Ortomolecular.</font><br>
        <font style="font-size: 17px;color: black;font-family: txtbran;">&bull;Plasma Rico en Plaquetas de Cuarta Generación (PRP 4G).</font><br>
        <font style="font-size: 17px;color: black;font-family: txtbran;">&bull;Terapia Neural.</font><br>
        <font style="font-size: 17px;color: black;font-family: txtbran;">&bull;Nutrición Antienvejecimiento.</font><br>
        
    </div>

    <div id="mobile">
        <font style="color: #0280A7;font-weight: bold;font-family: txtbran;"><center>Trayectoria</center></font>
        <font style="color: black;font-family: txtbran;">&bull;Miembro de American Academy of Anti-Aging Medicine (Estados Unidos).</font><br>
        <font style="color: black;font-family: txtbran;">&bull;Miembro del Colegio Nacional de Medicina Antienvejecimiento (México).</font><br>
        <font style="color: black;font-family: txtbran;">&bull;Fellowship en Medicina Antienvejecimiento.</font><br>
        <font style="color: black;font-family: txtbran;">&bull;Conferencista en el II y III Congreso Mundial de Medicina Antienvejecimiento.</font><br>
        <font style="color: black;font-family: txtbran;">&bull;Profesor de Curso Internacional de Medicina Antienvejecimiento.</font><br>
        <font style="color: black;font-family: txtbran;">&bull;Profesor de Terapia Neural y PRP Articular en Certificación Antienvejecimiento.</font><br>
        <font style="color: black;font-family: txtbran;">&bull;Profesor de viscosuplementación articular.</font><br>
        <font style="color: black;font-family: txtbran;">&bull;Certificación Internacional de remodelación facial y corporal con hilos PDO.</font><br>
        <br>
        <font style="color: #0280A7;font-weight: bold;font-family: txtbran;">Experiencia</font>
        <br>
        <font style="color: black;font-family: txtbran;">&bull;Antienvejecimiento Cerebral.</font><br>
        <font style="color: black;font-family: txtbran;">&bull;Antienvejecimiento y Nutricion Ortomolecular.</font><br>
        <font style="color: black;font-family: txtbran;">&bull;Plasma Rico en Plaquetas de Cuarta Generación (PRP 4G).</font><br>
        <font style="color: black;font-family: txtbran;">&bull;Terapia Neural.</font><br>
        <font style="color: black;font-family: txtbran;">&bull;Nutrición Antienvejecimiento.</font><br>
    </div>

</div>

@stop




<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>