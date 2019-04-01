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
        font-family: brandon_reg;
        src: url(Laravel/Recursos/BRANDON_REG.otf);
    }
    @font-face {
        font-family: brandon_bold;
        src: url(Laravel/Recursos/BRANDON_BLD.otf);
    }
    @font-face {
            font-family: brandon_light;
            src: url(Laravel/Recursos/BRANDON_LIGHT.otf);
            }
    #contentedor{
        background-color: white;
        width: 100%;
    }
    #tableinicio{
        width: 20%;
        margin-left: 10%;
        margin-top: -100px;
        margin-bottom: 30px;
    }
    #imgiback1{
        width: 70%;
        margin-left: 10%;
    }
    #txtinfo{
        font-size: 18px !important;
        font-family: brandon_light !important;
    }
    
    @media screen and (max-width: 1110px){

    }


    @media screen and (max-width: 1000px){

    }
    .conte{
            padding-top: 2%;
            text-align: center;
        }
    .conte h2,.conte p,#final li
    {
        font-family: brandon_reg;
    }
    .conte h2,#interno h2{
        color: #0280A7;
        font-size: 1vw;
        font-style: normal;
    }
    .conte p,.conte li
    {
        color: gray;
        font-size: 1vw;
    }
    #contenedormaestro
    {
        background-color: white;
            width: 100%;
    }
    .imagen_text{
        position: relative;
        text-align: center;
    }
    .text-img{
        position: absolute;
        top: 0;
        padding: 1%;
        color: black;
    }
    .conte img
    {
        width: 100%;
    }
    #prp4g1
    {
        top: 5%;
        width: 25%;
        right: 10%;
    }
    #descripcion1
    {
        padding: 10% 5% 5% 5%;
        background-color: white;
        width: 100%;
    }
    #interno
    {
        width: 100%;
        height: 100%;
        padding:10%;
        text-align: justify;
    }
    #interno h2,#interno p
    {
        color: white;
    }
    #sin_raton{
        padding: 20%;
        text-align: center;
    }
    #con_raton
    {

        visibility: hidden;
        opacity: 0;
        transition: visibility 0s, opacity .7s linear;
    }
    #interno:hover #con_raton
    {   
        visibility: visible;
        opacity: 1;
       
    }
    #interno:hover #sin_raton
    {
        display: none;
        opacity: 0; 
        
        
    }
    #indo_dr{
        padding-left: 10%;
        text-align: left;
        
    }
    #info_dr_txt
    {
        text-align: center;
        padding-left: 10%;
    }
    #final h2
    {
        color: #0280A7;
    }
    #final ul
        {
            text-align: left;
            margin: 2%;
        }
        #final li
        {
            font-size: 1.5vw;
            line-height: 150%;
        }
        #final li::before {content: "•"; color:grey}
    #final
    {
        padding-bottom: 2%;
    }
    .col-center
       {
        float: none;
        margin: 0 auto;
       }

</style>


@extends('Menu/barramenu')

@section('content')
    
<div id="contenedormaestro" class="container-fluid">
        <div class="row">
            <div class="col-md-12 conte">
                <div class="imagen_text">
                    <img src="Laravel/recursos/img/AcercaDe/Fondo.png" alt="">
                    <div id="prp4g1" class="text-img">
                       <div id="descripcion1" >
                            <h2>Acerca de Eterna <br>
                            Medical Center<br></h2>
                            <p>
                                En Eterna Medical Center estamos 100%
                                <br>comprometidos con nuestros pacientes, donde el
                                <br>servicio a sus necesidades y atención de excelencia
                                <br>son las cualidades que procuramos en todo
                                <br>momento.
                            </p>
                       </div>
                       <div class="imagen_text">
                            <img src="Laravel/recursos/img/AcercaDe/Boton.jpg" alt="" > 
                            <div id="interno" class="text-img">
                                <h2 id="sin_raton">ESPECUALISTAS EN <br>MEDICINA<br>ANTIENVEJECIMIENTO</h2> 
                                <p id="con_raton">
                                        Observamos la salud de foma integral y colaboramos con especialistas en todas las áreas de la medicina para lograr el estado óptimo de cada uno de nuestros pacientes. <br>
                                        En Eterna Medical Center te ayudamos a realentizar el proceso de envejecimiento con la mejor tegnología disponible.
                                </p>
                            </div> 
                       </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            
            <div class="conte col-md-5 col-center">
                <div id="indo_dr" class="imagen_text">
                    <table>
                        <tr>
                            <td width="15%">
                               <img id="" src="Laravel/recursos/img/AcercaDe/Logo2.png" alt=""   style="width: 100%;"> 
                            </td>
                            <td style="margin-left: -60%;width: 130%;">
                            <font style="font-size: 26px;font-family: brandon_reg;color: #0280A7"> DR. TORIBIO MARTÍNEZ RIVERA </font><br>
                            <font style="font-size: 20px;font-family: brandon_light;color: black;">Céd. Prof:85511800 - Reg. SSG 12540</font><br>
                            <font style="font-size: 15px;font-family: brandon_light;color: #0280A7;">Medico Cirujano Partero, Egresado del instituto Politecnico Nacinonal</font>
                            </td>
                        </tr>
                    </table>                                 
                </div>
            </div>
        </div>
        <div id="final" class="row ">
            <div class="col-md-5 col-center">
                <div class="row">
                    <div class="col-md-6">
                        <center><h3 style="font-family: brandon_light;color: #0280A7;">Trayectoria</h3></center>
                        <p>
                            <ul>
                                <li id="txtinfo">Miembro de American Acadey of Anti-Agin <br>
                                Medicine(Estados Unidos).</li>
                                <li id="txtinfo">Miembro del colegio NAcional de Medicina <br>
                                     Antienjecimiento(Mexico).
                                </li>
                                <li id="txtinfo">Fellowship en Medicina Antienvejecimiento
                                </li>
                                <li id="txtinfo">Conferencista en el II y III Congreso Mundial de<br>
                                     Medicina Antienjecimiento.</li>
                                <li id="txtinfo">profesor de Curso Internacional de <br>
                                     Medicina Antienjecimiento. 
                                </li>
                                <li id="txtinfo">Profesor de terapia Neuronal y ARP Articular en 
                                    <br> Certificacion Antienjecimiento.
                                </li>
                                <li id="txtinfo">Profesor de viscosuplementacion articular
                                </li>
                                <li id="txtinfo">Certificación Internacional de remodelación facial <br>y corporal con hilos PDO.</li>

                            </ul>
                        </p>
                    </div>
                    <div class="col-md-6"><center><h3 style="font-family: brandon_light;color: #0280A7;">Experiencia</h3></center>
                    <ul>
                        <li id="txtinfo">Antienjecimiento Cerebral</li>
                        <li id="txtinfo">Antienjecimiento y Nutricion Ortomolecular</li>
                        <li id="txtinfo">Aplicación de Peptonas Antienjecimiento</li>
                        <li id="txtinfo">Plasma Rico en Plaquetas de Cuarta
                            <br>Generacion (PRP4G)</li>
                        <li id="txtinfo">Terapia Neuronal</li>
                        <li id="txtinfo">Nutrición Antienjecimiento</li>
                    </ul></div>
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