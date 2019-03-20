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

    

</style>


@extends('Menu/barramenu')

@section('content')
  
<div id="contenedormaestro">


<div id="contenedor1">
    <br>
    <center><font style="color: #0280A7;font-size: 35px;font-weight: bold;font-family:txtbran">Opera tratamiento Antiaging</font></center>
    <br>
    <center><font style="font-family:txtbran;font-size: 18px">Estimula la vitalidad celular y luce radiante como Thalía. Mejora el aspecto de tu piel con el tratamiento Antiaging.</font><br></center>
    <center><font style="font-weight: bold;font-family:txtbran;font-size: 18px">Tonifica e Hidrata tu piel</font><br></center>
    <center><font style="font-family:txtbran;font-size: 18px">¿Quieres verte como Thalía usando Opera?</font><br></center>
    <br>
</div>



<div id="contenedor2">
    <img src="../Recursos/img/Opera-thalia.png" width="90%" style="margin-left: 5%;">
</div>



<div id="contenedor3">
    <br>
    <font style="font-family:txtbran;font-size: 18px">
        La máscara 'OPERA' de renombre mundial no es solo una máscara LED de terapia de luz de bajo nivel, utiliza 3 longitudes de onda para proporcionar una multitud de tratamientos de rejuvenecimiento de la piel en la cara y el cuello. También incorpora el uso de corrientes galvánicas para mejorar aún más los resultados, la opción de la terapia de oxígeno y las máscaras de hidrogel te llenan de nutrientes.
    </font><br>
    <br>
    <font style="font-family:txtbran;font-size: 18px">
        Los LED (Light Emitting Diodes), son diodos de semiconductores sometidos a una corriente eléctrica que emiten luz que es utilizada para fototerapia con ancho de onda que varía entre 405 nm (azul) a 940 nm (infra- rojo). No causan daño de tejido basándose en la foto termólisis, sino en la fotobioestimulación.
    </font><br>
    <br>
    <font style="font-family:txtbran;font-size: 18px">
        La técnica se basa en la administración de un agente fotosensibilizante y en la posterior estimulación de la zona a tratar mediante luz de la longitud de onda adecuada. Esto produce la formación de radicales libres y destruye las células malignas. Por otra parte, la estimulación luminosa provoca la muerte de las bacterias, debido a que produce formas reactivas de oxígeno causadas por la estimulación de la luz sobre los agentes fotosensibilizantes.
    </font><br>
    <br>
</div>



<div id="contenedor4">
    <div id="conte4-1">
        <font style="font-family:txtbran;font-size: 18px">
            Las terapias LED y Galvánica se pueden administrar juntas (secuencialmente) o como tratamientos completamente separados; dándole aún más margen para más variedad de tratamientos y un mayor retorno de la inversión.
        </font>
    </div>
    <div id="conte4-2">
        <img src="../Recursos/img/masks.jpg" width="80%" style="margin-left: 3%;">
    </div>
</div>



<div id="adaptacion">
<div class="container" style="margin-left: 23%;margin-top: 10%;">
    <div class="row">
            <div id="cardcambio">
                <div>
                    <img src="../Recursos/img/mascaraazul1.png" width="70px" style="margin-left: 37%;margin-top: 3%;margin-bottom: 2%;">
                    <div>
                        <img src="../Recursos/img/morada1.png" width="70px" style="margin-left: 37%;margin-top: 3%;margin-bottom: 2%;">
                    </div>
                    <font style="margin-left: 39%;font-size: 12px;font-weight: bold;font-family:txtbran">Post Care</font><br>
                    <font style="margin-left: 29%;font-size: 12px;font-weight: bold;font-family:txtbran">con LED Foto-Terapia</font><br>

                    <div>
                        <div></div>
                    </div>

                    <font style="margin-left: 5%;font-size: 12px;font-weight: bold;font-family:txtbran">Beneficios</font><br>
                    <font style="margin-left: 5%;font-size: 12px;font-weight: bold;font-family:txtbran"><span style="color: #0280A7">&bull;</span>Antiinflamatorio:</font><br>
                    <font style="margin-left: 15%;font-size: 12px;font-weight: bold;font-family:txtbran"><span style="color: #0280A7">&bull;</span>Post Botox, rellenos.</font><br>
                    <font style="margin-left: 15%;font-size: 12px;font-weight: bold;font-family:txtbran"><span style="color: #0280A7">&bull;</span>Post laser.</font><br>
                    <font style="margin-left: 5%;font-size: 12px;font-weight: bold;font-family:txtbran"><span style="color: #0280A7">&bull;</span>Cicatrización.</font><br>
                    <font style="margin-left: 5%;font-size: 12px;font-weight: bold;font-family:txtbran"><span style="color: #0280A7">&bull;</span>Mejora la circulación sanguínea.</font><br>
                    <font style="margin-left: 5%;font-size: 12px;font-weight: bold;font-family:txtbran"><span style="color: #0280A7">&bull;</span>Rejuvenecimiento de la piel y cuidado del acné.</font>
                </div>
            </div>

            <div id="cardcambio">
                <div>
                    <img src="../Recursos/img/mascaraazul1.png" width="70px" style="margin-left: 37%;margin-top: 3%;margin-bottom: 2%;">
                    <div>
                        <img src="../Recursos/img/rojo1.png" width="70px" style="margin-left: 37%;margin-top: 3%;margin-bottom: 2%;">
                    </div>
                    <font style="margin-left: 18%;font-size: 12px;font-weight: bold;font-family:txtbran">Rejuvenecimiento de piel con LED</font><br>
                    <font style="margin-left: 36%;font-size: 12px;font-weight: bold;font-family:txtbran">Foto-Terapia</font><br>

                    <div>
                        <div></div>
                    </div>

                    <font style="margin-left: 5%;font-size: 12px;font-weight: bold;font-family:txtbran">Beneficios</font><br>
                    <font style="margin-left: 5%;font-size: 12px;font-weight: bold;font-family:txtbran"><span style="color: #0280A7">&bull;</span>Programa de rejuvenecimiento de la piel:</font><br>
                    <font style="margin-left: 15%;font-size: 12px;font-weight: bold;font-family:txtbran"><span style="color: #0280A7">&bull;</span>Reducción de arrugas.</font><br>
                    <font style="margin-left: 5%;font-size: 12px;font-weight: bold;font-family:txtbran"><span style="color: #0280A7">&bull;</span>Curación de la piel y daños solares.</font><br>
                    <font style="margin-left: 5%;font-size: 12px;font-weight: bold;font-family:txtbran><span style="color: #0280A7">&bull;</span>Antienvejecimiento.</font><br>
                    <font style="margin-left: 5%;font-size: 12px;font-weight: bold;font-family:txtbran"><span style="color: #0280A7">&bull;</span>Producción de colágeno.</font><br>
                    <font style="margin-left: 5%;font-size: 12px;font-weight: bold;font-family:txtbran"><span style="color: #0280A7">&bull;</span>Blanqueamiento de la piel.</font>
                    <br>
                    <font style="margin-left: 5%;font-size: 12px;font-weight: bold;font-family:txtbran"><span style="color: #0280A7">&bull;</span>Efecto lifting de piel.</font>
                    <br>
                    <font style="margin-left: 5%;font-size: 12px;font-weight: bold;font-family:txtbran"><span style="color: #0280A7">&bull;</span>Eliminación de todo tipo de pigmentación.</font>
                    <br>
                    <font style="margin-left: 15%;font-size: 12px;font-weight: bold;font-family:txtbran"><span style="color: #0280A7">&bull;</span>Desvanecimiento de pecas.</font>
                    <br>
                    <font style="margin-left: 15%;font-size: 12px;font-weight: bold;font-family:txtbran"><span style="color: #0280A7">&bull;</span>Manchas en la piel.</font>
                    <br>
                    <font style="margin-left: 15%;font-size: 12px;font-weight: bold;font-family:txtbran"><span style="color: #0280A7">&bull;</span>Manchas de la edad.</font>
                </div>
            </div> 


        </div>
    </div>


  


    <div class="container" style="margin-left: 23%;margin-top: 5%;">
    <div class="row">
            <div id="cardcambio">
                <div>
                    <img src="../Recursos/img/mascaraazul1.png" width="70px" style="margin-left: 37%;margin-top: 3%;margin-bottom: 2%;">
                    <div>
                        <img src="../Recursos/img/azul-oscuro1.png" width="70px" style="margin-left: 37%;margin-top: 3%;margin-bottom: 2%;">
                    </div>
                    <font style="margin-left: 19%;font-size: 12px;font-weight: bold;font-family:txtbran">Tratamiento contra el acné con</font><br>
                    <font style="margin-left: 34%;font-size: 12px;font-weight: bold;font-family:txtbran">LED Foto-Terapia</font><br>

                    <div>
                        <div></div>
                    </div>

                    <font style="margin-left: 5%;font-size: 12px;font-weight: bold;font-family:txtbran">Beneficios</font><br>
                    <font style="margin-left: 5%;font-size: 12px;font-weight: bold;font-family:txtbran"><span style="color: #0280A7">&bull;</span>Eliminación del acné.</font><br>
                    <font style="margin-left: 15%;font-size: 12px;font-weight: bold;font-family:txtbran"><span style="color: #0280A7">&bull;</span>Leve.</font><br>
                    <font style="margin-left: 15%;font-size: 12px;font-weight: bold;font-family:txtbran"><span style="color: #0280A7">&bull;</span>Moderado.</font><br>
                    <font style="margin-left: 5%;font-size: 12px;font-weight: bold;font-family:txtbran"><span style="color: #0280A7">&bull;</span>Grave.</font><br>
                    <font style="margin-left: 5%;font-size: 12px;font-weight: bold;font-family:txtbran"><span style="color: #0280A7">&bull;</span>Disminución de la inflamación.</font><br>
                    <font style="margin-left: 5%;font-size: 12px;font-weight: bold;font-family:txtbran"><span style="color: #0280A7">&bull;</span>Purificación de la piel.</font>
                </div>
            </div>

            <div id="cardcambio">
                <div>
                    <img src="../Recursos/img/mascaraazul1.png" width="70px" style="margin-left: 37%;margin-top: 3%;margin-bottom: 2%;">
                    <div>
                        <img src="../Recursos/img/verde1.png" width="70px" style="margin-left: 37%;margin-top: 3%;margin-bottom: 2%;">
                    </div>
                    <font style="margin-left: 25.5%;font-size: 12px;font-weight: bold;font-family:txtbran">Corriente galvánica utilizado</font><br>
                    <font style="margin-left: 28%;font-size: 12px;font-weight: bold;font-family:txtbran">con máscaras de hidrogel</font><br>

                    <div>
                        <div></div>
                    </div>

                    <font style="margin-left: 5%;font-size: 12px;font-weight: bold;font-family:txtbran">Beneficios</font><br>
                    <font style="margin-left: 5%;font-size: 12px;font-weight: bold;font-family:txtbran"><span style="color: #0280A7">&bull;</span>Crea una corriente para abrir los poros y </font><br>
                    <font style="margin-left: 5%;font-size: 12px;font-weight: bold;font-family:txtbran">permitir que los nutrientes sean absorbidos desde</font><br>
                    <font style="margin-left: 5%;font-size: 12px;font-weight: bold;font-family:txtbran">la máscara de hidrogel.</font><br>
                    <font style="margin-left: 5%;font-size: 12px;font-weight: bold;font-family:txtbran"><span style="color: #0280A7">&bull;</span>La carga positiva atrae y rompe toxinas e</font><br>
                    <font style="margin-left: 5%;font-size: 12px;font-weight: bold;font-family:txtbran"><span style="color: #0280A7"></span>impurezas cargadas negativamente.</font><br>
                </div>
            </div> 


        </div>
    </div>







</div>















<div id="adaptacionMovil">
<div class="container" style="margin-left: 15%;margin-top: 2%;position: absolute;">
    <div class="row">
            <div style="width: 310px;height: 340px;background-image: url('../Recursos/img/cuadro-gris.png');background-size: 100%;">
                <div>
                    <img src="../Recursos/img/mascaraazul1.png" style="margin-left: 35%;margin-top: 3%;">
                    <br>
                    <font style="margin-left: 43%;font-size: 12px;font-weight: bold;">Post Care</font><br>
                    <font style="margin-left: 33%;font-size: 12px;font-weight: bold;">con LED Foto-Terapia</font><br>
                    <div style="width: 80px;height: 1px;background-color: #0280A7;margin-left: 40%;"></div>
                    <font style="margin-left: 5%;font-size: 12px;font-weight: bold;">Beneficios</font><br>
                    <font style="margin-left: 5%;font-size: 12px;font-weight: bold;"><span style="color: #0280A7">&bull;</span>Antiinflamatorio:</font><br>
                    <font style="margin-left: 15%;font-size: 12px;font-weight: bold;"><span style="color: #0280A7">&bull;</span>Post botox, rellenos.</font><br>
                    <font style="margin-left: 15%;font-size: 12px;font-weight: bold;"><span style="color: #0280A7">&bull;</span>Post laser.</font><br>
                    <font style="margin-left: 5%;font-size: 12px;font-weight: bold;"><span style="color: #0280A7">&bull;</span>Cicatrización.</font><br>
                    <font style="margin-left: 5%;font-size: 12px;font-weight: bold;"><span style="color: #0280A7">&bull;</span>Mejora la circulación sanguínea.</font><br>
                    <font style="margin-left: 5%;font-size: 12px;font-weight: bold;"><span style="color: #0280A7">&bull;</span>Rejuvenecimiento de la piel y cuidado del acné.</font>
                </div>
            </div>

        </div>
    </div>

    <div class="container" style="margin-left: 15%;margin-top: 90%;position: absolute;">
    <div class="row">
            <div style="width: 310px;height: 340px;background-image: url('../Recursos/img/cuadro-gris.png');background-size: 100%;">
                <div>
                    <img src="../Recursos/img/mascaraazul1.png" style="margin-left: 35%;margin-top: 3%;">
                    <br>
                    <font style="margin-left: 43%;font-size: 12px;font-weight: bold;">Post Care</font><br>
                    <font style="margin-left: 33%;font-size: 12px;font-weight: bold;">con LED Foto-Terapia</font><br>
                    <div style="width: 80px;height: 1px;background-color: #0280A7;margin-left: 40%;"></div>
                    <font style="margin-left: 5%;font-size: 12px;font-weight: bold;">Beneficios</font><br>
                    <font style="margin-left: 5%;font-size: 12px;font-weight: bold;"><span style="color: #0280A7">&bull;</span>Antiinflamatorio:</font><br>
                    <font style="margin-left: 15%;font-size: 12px;font-weight: bold;"><span style="color: #0280A7">&bull;</span>Post botox, rellenos.</font><br>
                    <font style="margin-left: 15%;font-size: 12px;font-weight: bold;"><span style="color: #0280A7">&bull;</span>Post laser.</font><br>
                    <font style="margin-left: 5%;font-size: 12px;font-weight: bold;"><span style="color: #0280A7">&bull;</span>Cicatrización.</font><br>
                    <font style="margin-left: 5%;font-size: 12px;font-weight: bold;"><span style="color: #0280A7">&bull;</span>Mejora la circulación sanguínea.</font><br>
                    <font style="margin-left: 5%;font-size: 12px;font-weight: bold;"><span style="color: #0280A7">&bull;</span>Rejuvenecimiento de la piel y cuidado del acné.</font>
                </div>
            </div>

        </div>
    </div>


    <div class="container" style="margin-left: 15%;margin-top: 180%;position: absolute;">
    <div class="row">
            <div style="width: 310px;height: 340px;background-image: url('../Recursos/img/cuadro-gris.png');background-size: 100%;">
                <div>
                    <img src="../Recursos/img/mascaraazul1.png" style="margin-left: 35%;margin-top: 3%;">
                    <br>
                    <font style="margin-left: 43%;font-size: 12px;font-weight: bold;">Post Care</font><br>
                    <font style="margin-left: 33%;font-size: 12px;font-weight: bold;">con LED Foto-Terapia</font><br>
                    <div style="width: 80px;height: 1px;background-color: #0280A7;margin-left: 40%;"></div>
                    <font style="margin-left: 5%;font-size: 12px;font-weight: bold;">Beneficios</font><br>
                    <font style="margin-left: 5%;font-size: 12px;font-weight: bold;"><span style="color: #0280A7">&bull;</span>Antiinflamatorio:</font><br>
                    <font style="margin-left: 15%;font-size: 12px;font-weight: bold;"><span style="color: #0280A7">&bull;</span>Post botox, rellenos.</font><br>
                    <font style="margin-left: 15%;font-size: 12px;font-weight: bold;"><span style="color: #0280A7">&bull;</span>Post laser.</font><br>
                    <font style="margin-left: 5%;font-size: 12px;font-weight: bold;"><span style="color: #0280A7">&bull;</span>Cicatrización.</font><br>
                    <font style="margin-left: 5%;font-size: 12px;font-weight: bold;"><span style="color: #0280A7">&bull;</span>Mejora la circulación sanguínea.</font><br>
                    <font style="margin-left: 5%;font-size: 12px;font-weight: bold;"><span style="color: #0280A7">&bull;</span>Rejuvenecimiento de la piel y cuidado del acné.</font>
                </div>
            </div>

        </div>
    </div>


    <div class="container" style="margin-left: 15%;margin-top: 270%;position: absolute;">
    <div class="row">
            <div style="width: 310px;height: 340px;background-image: url('../Recursos/img/cuadro-gris.png');background-size: 100%;">
                <div>
                    <img src="../Recursos/img/mascaraazul1.png" style="margin-left: 35%;margin-top: 3%;">
                    <br>
                    <font style="margin-left: 43%;font-size: 12px;font-weight: bold;">Post Care</font><br>
                    <font style="margin-left: 33%;font-size: 12px;font-weight: bold;">con LED Foto-Terapia</font><br>
                    <div style="width: 80px;height: 1px;background-color: #0280A7;margin-left: 40%;"></div>
                    <font style="margin-left: 5%;font-size: 12px;font-weight: bold;">Beneficios</font><br>
                    <font style="margin-left: 5%;font-size: 12px;font-weight: bold;"><span style="color: #0280A7">&bull;</span>Antiinflamatorio:</font><br>
                    <font style="margin-left: 15%;font-size: 12px;font-weight: bold;"><span style="color: #0280A7">&bull;</span>Post botox, rellenos.</font><br>
                    <font style="margin-left: 15%;font-size: 12px;font-weight: bold;"><span style="color: #0280A7">&bull;</span>Post laser.</font><br>
                    <font style="margin-left: 5%;font-size: 12px;font-weight: bold;"><span style="color: #0280A7">&bull;</span>Cicatrización.</font><br>
                    <font style="margin-left: 5%;font-size: 12px;font-weight: bold;"><span style="color: #0280A7">&bull;</span>Mejora la circulación sanguínea.</font><br>
                    <font style="margin-left: 5%;font-size: 12px;font-weight: bold;"><span style="color: #0280A7">&bull;</span>Rejuvenecimiento de la piel y cuidado del acné.</font>
                </div>
            </div>

        </div>
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