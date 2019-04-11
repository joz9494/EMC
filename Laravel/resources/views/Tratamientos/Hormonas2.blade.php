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
            font-family: brandon_light;
            src: url(Laravel/Recursos/BRANDON_LIGHT.otf);
        }
        body{
            background-color: #0280A7;
            overflow-x: hidden;
        }
        p{
            font-family: brandon_light !important;
        }
        h1,h2{
            font-family: brandon_reg !important;
        }
    
               
        #contenedormaestro
        { 
            background-color: white;
            width: 100%;
            text-align: center;
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
        h1,h2
        {
            font-family: brandon_reg;
        }
        #titulo
        {
            margin-left: 1%;
        }
        #titulo h1,.text-img h2
        {
            color: #1197C0;
            font-size: 20px;
            font-weight: normal;
        }
        #txt_hormonas1
        {
            width: 100%;
            background-color:rgb(236,236,236);
            padding: 2%;


        }
        #txt_hormonas1 p,#txt_hormonas1 h2
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
            padding: 4%;
            color: black;
        }
        #hormonas2
        {
            top: 3%;
            width: 70%;
            left: 30%;
            
        }
        #hormonas3
        {
            top: 8% ;
            width: 75%;
            right:  25%;
        }

        #hormonas2 p,#hormonas2 h2,#hormonas3 p,#hormonas3 h2
        {
            color: white;
        }
         
        @media  (max-width:768px) {
            .text-img h2, .imagen_text p
            {
                font-size: 2.5vw;
            }
            #hormonas2 h2,#hormonas2 p
            {
                font-size: 2.8vw;
                
            }
            #hormonas3 h2,#hormonas3 p
            {
                font-size: 2.8vw;
            }
        }
        @media  (orientation: landscape)and (min-width:768px){
            .text-img h2
            {
                font-size: 1.37vw;
            }
            .imagen_text p
            {
                font-size: 1.27vw;
                padding-bottom: 1.8%;
            }
            #hormonas2 h2,#hormonas2 p
            {
                font-size: 1.4vw;
                line-height:150%;
            }
            #hormonas3 h2,#hormonas3 p
            {
                font-size: 1.4vw;
            }
        }
        
        #esquinas1
        {
            padding-top: 3%;
        }
        #esquinas2
        {
            padding-top: 4.5%;
        }
    </style>

    <body>
        @extends('Menu/barramenu')

        @section('content')
        
        <div id="contenedormaestro">
            <div id="titulo" class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8 conte" style="margin-top: -8px;">

                    <font style="font-family: brandon_reg"><center><a style="color: #0280A7" href="{{ url('/Tratamientos') }}"><img src="Laravel\Recursos\img\Tratamientos\flecha160x160.png" alt="" style="width:60px;margin-top: -10px"><font style="font-size: 30px;">Hormonas Bio-Idénticas</font></a></center></font>

                </div> 
            </div>
            <div class="row" style="margin-top: 5px;">
                <div class="col-md-3"></div>
                <div id="carrusel_principal" class="col-md-6 ">
                    <img id="Hormonas-1" src="Laravel/Recursos/img/Tratamientos/Hormonas/Hormonas-1.jpg" width="100%;" >
                    <div id="txt_hormonas1">
                        <p>Puedes tener síntomas que aparentan</p>
                        <h2>"Estar fuera de control".</h2>
                    </div>
                </div>
            </div>
            <div class=" row">
                <div class="col-md-3"></div>
                <div class="col-md-6 conte">
                    <div class="imagen_text">
                        <img src="Laravel/Recursos/img/Tratamientos/Hormonas/Esquinas.png">
                        <div id="esquinas1"  class="text-img ">
                               <h2> ¿Qué son las hormonas Bio-idénticas?</h2>
                                <p style="text-align : justify;">
                                Son biológicamente idénticas, tienen una estructura molecular idéntica a las hormonas que produce el organismo, sin los efectos secundarios de las hormonas sintéticas.
                                <p>
                                <h2>¿Como funciona?</h2>
                                <p style="text-align : justify;">
                                Mejoran la comunicación celular, recuperando el equilibrio y optimizan las funciones del organismo.
                                Es un procedimiento donde se balancea el requerimiento hormonal donde se pide al paciente acudir con un estudio de sangre llamado Perfil Ovárico Femenino el cual debe incluir Estradiol, Progesterona, Hormona Folículo Estimulante, Hormona Luteinizante y prolactina.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class=" row">
                <div class="col-md-3"></div>
                <div class="col-md-6 conte">
                    <div class="imagen_text">
                        <img src="Laravel/Recursos/img/Tratamientos/Hormonas/Hormonas-2.png" alt="">
                        <div id="hormonas2" class="text-img">
                                <h2>¿Cómo se realiza?</h2>
                                <p>El estudio debe realizarse 14 días después de la menstruación, en caso de ya no tener menstruación el estudio se realiza en cualquier día.</p>
                                <br>
                                <h2>¿De qué manera ajustamos las<br>hormonas bio-idénticas?</h2>
                                <p>Analizamos las deficiencias y se reponemos las hormonas que están por debajo de lo óptimo y son deficientes.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class=" row">
                <div class="col-md-3"></div>
                <div class="col-md-6 conte">
                    <div class="imagen_text">
                        <img src="Laravel/Recursos/img/Tratamientos/Hormonas/Esquinas-2.png" alt="">
                        <div id="esquinas2" class="text-img">
                            <h2>¿Quién puede usarlo?</h2>
                            <p>Es una alternativa para las mujeres que enfrentan los cambios de la menopausia, pero también es una opción tanto para hombres y mujeres de distintas edades. <br></p>
                            <h2>¿Es un tratamiento para la mesopausa?</h2>
                            <p style="text-align : justify;">Es una alternativa para aquellas mujeres que sufren los síntomas de la menopausia temprana y que buscan poner fin a los bochornos o calores, la sudoración nocturna, la pérdida de la memoria, los cambios de ánimo, el aumento de peso y la disminución del apetito sexual son pacientes recurrentes en este tratamiento que le ayudará a terminar con estas molestias.</p>
                            <h2>¿Beneficios para los hombres?</h2>
                            <p style="text-align : justify;">A la edad de 80 años, el nivel de testosterona de un hombre sólo puede ser de 20% de lo que fue en su juventud. Esta disminución de la testosterona se produce gradualmente, comenzando ya a mediados de los 30 años.
                            La deficiencia de testosterona también puede conducir a una serie de síntomas molestos, como la pérdida de resistencia y masa muscular, la reducciún de la libido, ansiedad, depresión y deterioro cognitivo. La deficiencia de testosterona puede ser revertida mediante el tratamiento de hormonas bioidénticas.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class=" row">
                <div class="col-md-3"></div>
                <div id="final" class="col-md-6 conte">
                    <div class="imagen_text">
                        <img src="Laravel/Recursos/img/Tratamientos/Hormonas/Hormonas.png" alt="">
                        <div id="hormonas3" class="text-img">
                                <h2>¿Cuánto dura?</h2>
                                <p>Aproximadamente de 6 a 8 meses.</p>
                                <br>
                                <h2>¿Tiene efectos secundarios?</h2>
                                <p>Sin efectos secundarios.</p>
                                <br>
                                <h2>¿Cambios Hormonales?</h2>
                                <p>Toma el control.</p>
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
        