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
    <style type="text/css">
        @font-face {
            font-family: brandon_reg;
            src: url(-"Laravel/Recursos/BRANDON_REG.otf");
        }
        @font-face {
            font-family: brandon_bold;
            src: url("Laravel/Recursos/BRANDON_BLD.otf");
        }
        body{
            background-color: #0280A7;
            overflow-x: hidden;
            font-family: brandon_reg;
        }
    
               
        #contenedormaestro
        { 
            background-color: white;
            width: 100%;
        }
        .conte{
            padding-top: 2%;
            text-align: center;
        }
        #final
        {
            padding-bottom: 2%;
        }
        .conte img
        {
            width: 100%;
        }
        h1,h2,p,li
        {
            font-family: brandon_reg;
        }
        #titulo h1,.text-img h2
        {
            color: #0280A7;
            font-size: 21px;
            font-weight: bold;
        }
        #txt_hormonas1
        {
            width: 100%;
            background-color:rgb(236,236,236);
            padding: 2%;


        }
        #txt_hormonas1 p
        {
            font-size: 3vh;
            color: black;
        }
        .imagen_text{
            position: relative;
            text-align: center;
        }
        .imagen_text img
        {
            width: 100%;
        }
 
        .text-img{
            position: absolute;
            top: 0;
            padding: 5%;
            color: black;
        }
        #prp4g1
        {
            top: 5%;
            width: 75%;
            right: 25%;
        }
        #prp4g3
        {
            top: 5%;
            width: 60%;
            right: 40%;
        }
        #prp4g3 ul
        {
            text-align: left;
            margin: 2%;
        }
        #prp4g3 li
        {
            line-height: 100%;
        }
        #prp4g3 li::before {content: "•"; color:grey}
        #prp4g1 h2,#hormonas3 p,#prp4g3 h2
        {
            color: black;
        }
        #hormonas3 h2
        {
            color: #0280A7;
        }
        #hormonas3
        {
            top: 2% ;
            width: 70%;
            left:  30%;
        }

        #prp4g1 p,#prp4g3 li
        {
            color: gray;
        }
        @media  (orientation: portrait) {
            .text-img h2, .imagen_text p
            {
                font-size: 2.5vw;
            }
            #prp4g1 h2,#prp4g1 p,#prp4g3 h2,#prp4g3 li
            {
                font-size: 2.6vw;
            }
            #hormonas3 h2,#hormonas3 p
            {
                font-size: 2.5vw;
            }
        }
        @media  (orientation: landscape) {
            .text-img h2, .imagen_text p
            {
                font-size: 1.6vw;
            }
            #prp4g1 h2,#prp4g1 p,#prp4g3 h2,#prp4g3 li
            {
                font-size: 1.8vw;
            }
            #hormonas3 h2,#hormonas3 p
            {
                font-size: 1.8vw;
            }
            
        }
        
    </style>

    <body>
        @extends('Menu/barramenu')

        @section('content')
        
        <div id="contenedormaestro">
            <div id="titulo" class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8 conte">
                    <h1>Hormonas Bio-Idénticas</h1>    
                </div> 
            </div>
            <div class=" row">
                <div class="col-md-2"></div>
                <div class="col-md-8 conte">
                    <div class="imagen_text">
                        <img src="Laravel\Recursos\img\Tratamientos\PRP\PRP1.jpg" alt="">
                        <div id="prp4g1" class="text-img">
                            <h2>¿Qué es?</h2>
                            <p>
                                Es una sustancia que se obtines centrifugando tu sangre para seguir una fracción de plasma con una alta consetración de plaquetas.
                                <br>
                                Al ser utilizando mediante micropunciones dérmicas en las zonas a tratar, el Plasma Rico en Plaquetas estimula la producción de colageno, elastina y tejido epidérmico, lo que se traduce en una piel joven, tersa y de mejor calidad.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class=" row">
                <div class="col-md-2"></div>
                <div class="col-md-8 conte">
                    <div class="imagen_text">
                        <img src="Laravel\Recursos\img\Tratamientos\PRP\PRP2.png" alt="">
                        <div id="hormonas3" class="text-img">
                            <h2>¿Qué tipo de tratamiento es?</h2>
                            <p>
                                Suele utilizarse como tratamiento preventivo y regenerador, se recomienda su utilización cuando comienzan a aprecer signos del envejecimiento cutáneo.
                            </p>
                            <br>
                            <h2>¿Cómo funciona?</h2>
                            <p>
                                Consiste en inyecciones en puntos espesificos según cada caso para mejorar notablemente el aspecto de la piel.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class=" row">
                <div class="col-md-2"></div>
                <div class="col-md-8 conte">
                    <div class="imagen_text">
                        <img src="Laravel/Recursos/img/Tratamientos/Hormonas/Esquinas.png" alt="">
                        <div class="text-img " >
                                <h2>¿Cuasa efecctos secundarios?</h2> 
                                <p>
                                no posee efectos secundarios. es un procedimineto libre de riesgos de
                                reacciones de algún tipo ya que es uuna sustancia de proviene
                                de la sangre 
                                <p>
                                <br>
                                <h2>¿Cuánto timepo dura el procedimeinto?</h2>
                                <p>
                                En promedio dura de 6 a 12 meses dependiendo de cada paciente
                                </p>
                                <br>
                                <h2>¿Como se realiza?</h2>
                                <p>
                                    Es un procedimiento en el cual se toma una muestra de sanngre y se presesa para
                                    tomar la parte rica en plaquetas y se activa para tener un mejor resutado del plasma
                                </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class=" row">
                <div class="col-md-2"></div>
                <div class="col-md-8 conte">
                    <div id="final" class="imagen_text">
                        <img src="Laravel\Recursos\img\Tratamientos\PRP\PRP3.jpg" alt="">
                        <div id="prp4g3" class="text-img">
                            <h2>¿Cuándo se recomienda?</h2>
                            <p>Se sugiere cuando los signos de envejecimiento sean visiblesSe pude aplicar a los 20 años, pero depende de cada paciente.
                            </p>
                            <br>
                            <br>
                            <h2>¿Qué beneficios obtines?</h2>
                            <p>
                                <ul>
                                    <li>Aumento de la tensión de la piel.</li>
                                    <li>Aumento voluétrico de populo.</li>
                                    <li>Aspecto saludable de la piel.<br> 
                                    (brillo, color, testura, suavidad).</li>
                                    <li>Disminucion de arrugas y flacidez.</li>
                                </ul>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @stop
    </body>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</html>
        