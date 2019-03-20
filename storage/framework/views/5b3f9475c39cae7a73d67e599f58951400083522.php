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
        @font-face {
            font-family: brandon_reg;
            src: url(../Recursos/BRANDON_REG.otf);
        }
        @font-face {
            font-family: brandon_bold;
            src: url(../Recursos/BRANDON_BLD.otf);
        }
        body{
            background-color: #0280A7;
            overflow-x: hidden;
        }
    
               
                #contenedormaestro{
                    background-color: white;
                    width: 100%;
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
            @media  screen and (max-width: 1000px){
                #adaptacion{
                    margin-left: -20%;
                }
            }

            @media  screen and (max-width: 800px){
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
            @media  screen and (max-width: 600px){
                #adaptacionMovil{
                    margin-top: 10%;
                }
            }

            @media  screen and (max-width: 500px){
                #adaptacionMovil{
                    margin-top: 80%;
                    margin-left: -10%;
                }
            }

            /*  */
            .conte{
                padding-top: 2%;
                text-align: center;

            }
            .conte img
            {
                width: 100%;
            }
            h1,h2,p
            {
                font-family: brandon_reg;
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
            .conte h1,#esquinas h2,#esquinas2 h2{
                color: #0280A7;
                font-size: 21px;
                line-height: 30px;
                font-weight: bold;
            }
            #esquinas,#esquinas2{
                background: url("../Recursos/img/Tratamientos/Hormonas/Esquinas.png") no-repeat;
                background-size: 100% auto;
                color: black;
                padding:5%;
                line-height : 25px;
            }
            #esquinas2{
                background: url("../Recursos/img/Tratamientos/Hormonas/Esquinas-2.png") no-repeat;
                background-size: 100% auto;
                color: black;
                padding:5% 5% 15% 5%;
                line-height : 25px;
            }
            #hormonas2{
                background: url("../Recursos/img/Tratamientos/Hormonas/Hormonas-2.png") no-repeat;
                background-size: 100% auto;
                color: white; 
                padding:5%;

                line-height : 25px;
            }
            #hormonas2 .caption{
                padding: 6%;
            }
            #hormonas3{
                background: url("../Recursos/img/Tratamientos/Hormonas/Hormonas-3.png") no-repeat;
                background-size: 100% auto;
                color: white; 
                padding-top: 10%;
                padding-bottom: 10%;
                line-height : 5px;
                margin-bottom: 10%;

            }
            #hormonas2 .caption p,#esquinas .caption p,#esquinas2 .caption p,#hormonas2 h2,#hormonas3 p
            {
                font-size: 21px;
                line-height: 35px;

            }
            #hormonas2 h2
            {
                font-weight: bold;

            }

        </style>
        
        <?php $__env->startSection('content'); ?>
            <div id="contenedormaestro">
                <div id="regreso" class="row">
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
                <div class="row">
                    <div class="col-md-3"></div>
                    <div  class="col-md-6 conte" >
                        <div id="esquinas" class="thumbnail">
                            <div class="caption">
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
                <div class="row">
                    <div class="col-md-3"></div>
                    <div id="descripcion" class="col-md-6 conte">
                        <div id="hormonas2" class="thumbnail row">
                            <div class="col-md-4"></div>
                            <div class="caption col-md-8" >
                                <h2>¿Cómo se realiza?</h2>
                                <p>El estudio debe realizarse 14 días después de la menstruación, en caso de ya no tener menstruación el estudio se realiza en cualquier día.<p>
                                <br>
                                <h2>¿De qué manera ajustamos las hormonas bio-idénticas?</h2>
                                <p>Analizamos las deficiencias y se reponemos las hormonas que están por debajo de lo óptimo y son deficientes.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3"></div>
                     <div id="descripcion" class="col-md-6 conte">
                        <div id="esquinas2" class="thumbnail">
                            <div class="caption">
                                <h2>¿Quién puede usarlo?</h2>
                            <p>Es una alternativa para las mujeres que enfrentan los cambios de la menopausia, pero también es una opción tanto para hombres y mujeres de distintas edades.</p>
                            <br>
                            <h2>¿Es un tratamiento para la mesopausa?</h2>
                            <p>Es una alternativa para aquellas mujeres que sufren los síntomas de la menopausia temprana y que buscan poner fin a los bochornos o calores, la sudoración nocturna, la pérdida de la memoria, los cambios de ánimo, el aumento de peso y la disminución del apetito sexual son pacientes recurrentes en este tratamiento que le ayudará a terminar con estas molestias.</p>
                            <br>
                            <h2>¿Beneficios para los hombres?</h2>
                            <p>A la edad de 80 años, el nivel de testosterona de un hombre sólo puede ser de 20% de lo que fue en su juventud. Esta disminución de la testosterona se produce gradualmente, comenzando ya a mediados de los 30 años.
                            La deficiencia de testosterona también puede conducir a una serie de síntomas molestos, como la pérdida de resistencia y masa muscular, la reducciún de la libido, ansiedad, depresión y deterioro cognitivo.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3"></div>
                     <div id="descripcion" class="col-md-6 conte">
                        <div id="hormonas3" class="thumbnail">
                            <div class="caption col-md-8">
                                <h2>¿Cuánto dura?</h2>
                                <br>
                                <p>Aproximadamente de 6 a 8 meses.</p>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <h2>¿Tiene efectos secundarios?</h2>
                                <br>
                                <p>Sin efectos secundarios.</p>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
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
</html>
<?php echo $__env->make('Menu/barramenu', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>