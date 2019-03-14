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
                #contenedormaestro{
                    background-color: white;
                    width: 100%;
                    height: 240%;
                }
                #contenedor1{
                    background-color: white;
                    width: 60%;
                    margin-left: 15%;
                }
                #contenedor2{
                    width: 60%;
                    margin-left: 15%;
                    font-size: 100%;
                }
                #contenedor3{
                    width: 60%;
                    margin-left: 16.5%;
                }
                #contenedor4{
                    width: 60%;
                    height: 8%;
                    margin-left: 16.5%;
                }
                #conte4-1{
                    width: 50%;
                    float: left;
                }
                #conte4-2{
                    width: 50%;
                    height: 100%;
                    float: right;
                }
                #contenedor5{
                    width: 60%;
                    margin-left: 16.5%;
                    height: 40%;
                    margin-top: 10%;
                    margin-bottom: 10%;
                    background-color: green;

                }
                #contenedor5-1{
                    width: 40%;
                    margin-left: 10%;
                    margin-top: 5%;
                    float: left;
                    background-color: red;
                }
                #imgcontene5{
                    width: 20%;
                    margin-top: -21%;
                    margin-left: 7%;
                    position: absolute;
                    background-color: blue;
                }

                #adaptacionMovil{
                    display: none;
                }





                #cardcambio{
                    width: 310px;
                    height: 410px;
                    margin-left: 7%;
                    background-image: url('../Recursos/img/cuadro-gris2.png');
                    background-size: 100%;
                }
                #cardcambio div div div{
                    background-color: #0280A7;
                    height: 1px;
                    width: 80px;
                    margin-left: 35%;
                }
                #cardcambio div div img{
                    display: none;
                }
                #cardcambio:hover{
                    background-image: url('../Recursos/img/azul2.png');
                }
                #cardcambio:hover div img{
                    display: none;
                }
                #cardcambio:hover div div img{
                   display: block;
                }
                #cardcambio:hover div div div{
                   height: 3px;
                   width: 170px;
                   margin-left: 20%;
                }
                





            .box {
              background-size: 150%;
            }

            .box:hover {
              border:2px solid #525C7A;
            }

            .box span.box-title {
                color: #fff;
                font-size: 24px;
                font-weight: 300;
                text-transform: uppercase;
            }

            .box .box-content {
              padding: 16px;
              border-radius: 0 0 2px 2px;
              background-clip: padding-box;
              box-sizing: border-box;
            }
            .box .box-content p {
              color:#515c66;
              text-transform:none;
            }
            #
            @media screen and (max-width: 1000px){
                #adaptacion{
                    margin-left: -20%;
                }
            }

            @media screen and (max-width: 800px){
                #adaptacion{
                    display: none;;
                }
                #adaptacionMovil{
                    display: block;
                }
                #contenedormaestro{
                    height: 410%;
                }
            }
            @media screen and (max-width: 600px){
                #adaptacionMovil{
                    margin-top: 10%;
                }
            }

            @media screen and (max-width: 500px){
                #adaptacionMovil{
                    margin-top: 80%;
                    margin-left: -10%;
                }
            }

            /*  */
            .conte{
                padding-top: 1%;
                text-align: center;

            }
            .conte img
            {
                width: 100%;
            }
            .conte h1,.conte h2{
                color: #0280A7;

            }
           .thumbnail {
             /*position: relative;*/
             background: url("../Recursos/img/Tratamientos/Hormonas/Esquinas.png") no-repeat;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            
            background-size: 100% auto;

            }

            
            .caption {
            width: 90%;
            }
            .caption p
            {
                font-size: 20px;
            }

        </style>
        @extends('Menu/barramenu')
        @section('content')
            <div id="contenedormaestro">
                <div id="regreso" class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8 conte">
                        <h1>Hormonas Bio-Idénticas</h1>    
                    </div>
                    
                </div>
                <div class="row">
                    <div class="col-md-2"></div>
                    <div id="carrusel_principal" class="col-md-8 conte">
                        <img id="Hormonas-1" src="../Recursos/img/Tratamientos/Hormonas/Hormonas-1.jpg"  >
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2"></div>
                    <div id="descripcion" class="col-md-8 conte">
                        <div class="thumbnail">
                            <div class ="caption">
                                <h2>�Qu� son las hormonas Bio-id�nticas?</h2>
                                <p>
                                Son biol�gicamente id�nticas, tienen una estructura molecular id�ntica a las hormonas que produce el organismo, sin los efectos secundarios de las hormonas sint�ticas.
                                <p>
                                <h2>¿Como funciona?</h2>
                                <p>
                                <br>Mejoran la comunicaci�n celular, recuperando el equilibrio y optimizan las funciones del organismo.
                                <br>Es un procedimiento donde se balancea el requerimiento hormonal donde se pide al paciente acudir con un estudio de sangre llamado Perfil Ov�rico Femenino el cual debe incluir Estradiol, Progesterona, Hormona Fol�culo Estimulante, Hormona Luteinizante y prolactina.
                            </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2"></div>
                    <div id="carrusel_principal" class="col-md-8 conte">
                        <img id="Hormonas-1" src="../Recursos/img/Tratamientos/Hormonas/Hormonas-2.png"  >
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2"></div>
                    <div id="carrusel_principal" class="col-md-8 conte">
                        <img id="Hormonas-1" src="../Recursos/img/Tratamientos/Hormonas/Hormonas-3.png"  >
                    </div>
                </div>

            </div>
        @stop
    </body>
</html>