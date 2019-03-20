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
    <style type="text/css">
        @font-face {
            font-family: brandon_reg;
            src: url(-"../Recursos/BRANDON_REG.otf");
        }
        @font-face {
            font-family: brandon_bold;
            src: url("../Recursos/BRANDON_BLD.otf");
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
        h1,h2,p
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
        #hormonas2
        {
            top: 5%;
            width: 75%;
            left: 25%;
        }
        #hormonas3
        {
            top: 10% ;
            width: 75%;
            right:  25%;
        }

        #hormonas2 p,#hormonas2 h2,#hormonas3 p,#hormonas3 h2
        {
            color: white;
        }
        @media  (orientation: portrait) {
            .text-img h2, .imagen_text p
            {
                font-size: 2.5vw;
            }
            #hormonas2 h2,#hormonas2 p
            {
                font-size: 2.6vw;
            }
            #hormonas3 h2,#hormonas3 p
            {
                font-size: 2.8vw;
            }
        }
        @media  (orientation: landscape) {
            .text-img h2, .imagen_text p
            {
                font-size: 1.2vw;
            }
            #hormonas2 h2,#hormonas2 p
            {
                font-size: 1.4vw;
            }
            #hormonas3 h2,#hormonas3 p
            {
                font-size: 1.8vw;
            }
        }
        
    </style>

    <body>
        

        <?php $__env->startSection('content'); ?>
        
        <div id="contenedormaestro">
            <div id="titulo" class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8 conte">
                    <h1>Hormonas Bio-Idénticas</h1>    
                </div> 
            </div>
            <div class="row">
                <div class="col-md-3"></div>
                <div id="carrusel_principal" class="col-md-6 conte">
                    <img id="Hormonas-1" src="../Recursos/img/Tratamientos/Hormonas/Hormonas-1.jpg" >
                    <div id="txt_hormonas1">
                        <p>Puedes tener síntomas que aparentan</p>
                        <p style="font-weight: bold;">"Estar fuera de control".</p>
                    </div>
                </div>
            </div>
            <div class=" row">
                <div class="col-md-3"></div>
                <div class="col-md-6 conte">
                    <div class="imagen_text">
                        <img src="../Recursos/img/Tratamientos/Hormonas/Esquinas.png" alt="">
                        <div class="text-img " >
                                <h2>¿Que son las hormonas Bio-idínticas?</h2>
                                <p>
                                Son biológicamente idínticas, tienen una estructura molecular idéntica a las hormonas que produce el organismo, sin los efectos secundarios de las hormonas sintéticas.
                                <p>
                                <br>
                                <h2>¿Como funciona?</h2>
                                <p>
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
                        <img src="../Recursos/img/Tratamientos/Hormonas/Hormonas-2.png" alt="">
                        <div id="hormonas2" class="text-img">
                                <h2>¿Cómo se realiza?</h2>
                                <p>El estudio debe realizarse 14 días después de la Menstruación, en caso de ya no tener menstruación el estudio se realiza en cualquier día.</p>
                                <br>
                                <h2>¿De qué manera ajustamos las hormonas bio-idénticas?</h2>
                                <p>Analizamos las deficiencias y se reponemos las hormonas que están por debajo de lo óptimo y son deficientes.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class=" row">
                <div class="col-md-3"></div>
                <div class="col-md-6 conte">
                    <div class="imagen_text">
                        <img src="../Recursos/img/Tratamientos/Hormonas/Esquinas-2.png" alt="">
                        <div id="esquinas2" class="text-img">
                            <h2>¿Quién puede usarlo?</h2>
                            <p>Es una alternativa para las mujeres que enfrentan los cambios de la menopausia, pero también es una opción tanto para hombres y mujeres de distintas edades.</p>
                            <br>
                            <h2>¿Es un tratamiento para la mesopausa?</h2>
                            <p style="text-align : justify;">Es una alternativa para aquellas mujeres que sufren los síntomas de la menopausia temprana y que buscan poner fin a los bochornos o calores, la sudoración nocturna, la pérdida de la memoria, los cambios de ánimo, el aumento de peso y la disminución del apetito sexual son pacientes recurrentes en este tratamiento que le ayudará a terminar con estas molestias.</p>
                            <br>
                            <h2>¿Beneficios para los hombres?</h2>
                            <p style="text-align : justify;">A la edad de 80 años, el nivel de testosterona de un hombre sólo puede ser de 20% de lo que fue en su juventud. Esta disminución de la testosterona se produce gradualmente, comenzando ya a mediados de los 30 años.
                            La deficiencia de testosterona también puede conducir a una serie de síntomas molestos, como la pérdida de resistencia y masa muscular, la reducciún de la libido, ansiedad, depresión y deterioro cognitivo.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class=" row">
                <div class="col-md-3"></div>
                <div id="final" class="col-md-6 conte">
                    <div class="imagen_text">
                        <img src="../Recursos/img/Tratamientos/Hormonas/Hormonas-3.png" alt="">
                        <div id="hormonas3" class="text-img">
                                <h2>¿Cuánto dura?</h2>
                                <p>Aproximadamente de 6 a 8 meses.</p>
                                <br>
                                <h2>¿Tiene efectos secundarios?</h2>
                                <p>Sin efectos secundarios.</p>
                                <br>
                                <h2>¿Cambios Hormonales?</h2>
                                <p>Toma el control</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php $__env->stopSection(); ?>
    </body>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</html>
        
<?php echo $__env->make('Menu/barramenu', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>