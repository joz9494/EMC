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
    background-color: white;
    overflow-x: hidden;
    }
    @font-face {
            font-family: brandon_reg;
            src: url(-"Laravel/Recursos/BRANDON_REG.otf");
        }
        @font-face {
            font-family: brandon_bold;
            src: url("Laravel/Recursos/BRANDON_BLD.otf");
        }
        @font-face {
            font-family: brandon_light;
            src: url(Laravel/Recursos/BRANDON_LIGHT.otf);
            }
    #contenedormaestro{
        background-color: white;
    }

.txtparrafo{
    font-family: brandon_light !important;
    color: black !important;
    font-size: 1.27vw !important;
    text-align: justify !important;
    margin-left: -10px;
    }
    .txtparrafo2{
      font-family: brandon_light !important;
    color: black !important;
    font-size: 1.27vw !important;
    text-align: right !important;
    margin-left: -10px;  
    }
.txttitulo{
    font-family: brandon_reg !important;
    color: black !important;
    font-size: 1.37vw !important;
}

#txtCuadros li::before {
    content: "•"; 
    color:#0280A7;
    font-size: 30px;
}  


#Linea1Horizontal{
    height: 3px !important;
    width: 100px !important;
    background-color: #1197c0 !important;
    margin-top: 10px;
    margin-bottom: 10px;
}
#txtCuadros{
    font-family: brandon_light !important;
    font-size: 0.97vw !important;
    text-align: justify !important;
    line-height: 120% !important;
    text-align: left;
    margin-left: 16%;
    margin-top: -1%;
}
#txtCuadrosTitle{
    font-family: brandon_reg;
    font-size: 1vw;
    text-align: justify;
    text-align: center;
    margin-top: 5%; 
}



.contenedor1 div img{
    display: none;
}
.contenedor1:hover img{
    display: none;
}
.contenedor1:hover div img{
    display: block;
}
.contenedor1 div div img{
    display: block;
}
.contenedor1 div div div img{
    display: none;
}
.contenedor1:hover div div img{
    display: none;
}
.contenedor1:hover div div div img{
    display: block;
}


@media screen and (max-width: 1500px){
    #parteinferior{
        margin-top: -6%;
    }
    #txtCuadros{
    line-height: 112% !important;
}

}


</style>


@extends('Menu/barramenu')

@section('content')
  
<div id="contenedormaestro">


<div>
    <div id="titulo" class="row">
        <div class="col-md-2"></div>
            <div class="col-md-8 conte" style="margin-top: 30px;">

                <font style="font-family: brandon_reg"><center><a style="color: #1197c0" href="{{ url('/Tratamientos') }}"><img src="Laravel\Recursos\img\Tratamientos\flecha160x160.png" alt="" style="width:60px;margin-top: -10px"><font style="font-size: 30px;margin-left: 1%;">Opera tratamiento Antiaging</font></a></center></font>

            </div> 
    </div>
</div>

<div class="row" style="margin-top: 13px;">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <center>
            <font class="txtparrafo">
            Estimula la vitalidad celular y luce radiante como Thalía.<br> Mejora el aspecto de tu piel con el tratamiento Antiaging.
        </font>
        </center>

        <center>
            <font class="txttitulo">
            Tonifica e Hidrata tu piel
        </font>
        </center>

        <center>
            <font class="txtparrafo">
            ¿Quieres verte como Thalía usando Opera?
        </font>
        </center>

    </div>
</div>



<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6" style="margin-top: 32px;">
        <img src="Laravel/Recursos/img/Tratamientos/Opera/Opera-thalia.png" width="96%;" style="margin-left: -13px;">
    </div>
</div>


<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6" style="margin-top: 42px;">
        <div style="width: 95%">
            <p class="txtparrafo">
            La máscara 'OPERA' de renombre mundial no es solo una máscara LED de terapia de luz de bajo nivel, utiliza 3 longitudes de onda para proporcionar una multitud de tratamientos de rejuvenecimiento de la piel en la cara y el cuello. También incorpora el uso de corrientes galvánicas para mejorar aún más los resultados, la opción de la terapia de oxígeno y las máscaras de hidrogel te llenan de nutrientes.
            </p>
        </div>
    </div>
</div>
<br>



<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
        <div style="width: 95%">
            <p class="txtparrafo">
            Los LED (Light Emitting Diodes), son diodos de semiconductores sometidos a una corriente eléctrica que emiten luz que es utilizada para fototerapia con ancho de onda que varía entre 405 nm (azul) a 940 nm (infra - rojo). No causan daño de tejido basándose en la foto termólisis, sino en la fotobioestimulación.
            </p>
        </div>
    </div>
</div>
<br>


<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
        <div style="width: 95%">
            <p class="txtparrafo">
            La técnica se basa en la administración de un agente fotosensibilizante y en la posterior estimulación de la zona a tratar mediante luz de la longitud de onda adecuada. Esto produce la formación de radicales libres y destruye las células malignas. Por otra parte, la estimulación luminosa provoca la muerte de las bacterias, debido a que produce formas reactivas de oxígeno causadas por la estimulación de la luz sobre los agentes fotosensibilizantes.
            </p>
        </div>
    </div>
</div>
<br>


<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-3" style="margin-top: 32px;">
        <p class="txtparrafo2">Las<font style="font-family: brandon_reg">terapias LED y Galvánica</font> se pueden administrar juntas (secuencialmente) o como tratamientos completamente separados; dándole aún más margen para más variedad de tratamientos y un mayor retorno de la inversión.
        </p> 
    </div>

    <div class="col-md-3">
        <img src="Laravel/Recursos/img/Tratamientos/Opera/masks.jpg" width="90%">
    </div>
</div>



<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-3" style="margin-top: 50px;">

        <div class="contenedor1">

            <div>
                <img class=esconde1 src="Laravel/Recursos/img/Tratamientos/Opera/azul2.png" width="90%">
            </div>
            <img id="marco1" class="topmargen" src="Laravel/Recursos/img/Tratamientos/Opera/cuadro-gris2.png" width="90%">

        <div style="margin-top: -114%;margin-left: -13%">
            <center>

            <div>
                <div>
                    <img src="Laravel/Recursos/img/tratamientos/Opera/morada1.png" width="20%"/>
                </div>
            </div>

            <div>
                <img src="Laravel/Recursos/img/tratamientos/Opera/mascaraazul1.png" width="20%"/>
            </div>

            <font id="txtCuadrosTitle">Post Care</font><br>
            <font id="txtCuadrosTitle">con LED Foto-Terapia</font><br>

            <div id="Linea1Horizontal" style="margin-bottom: 1%;"></div>

            <font id="txtCuadros" style="margin-left: -52%;font-family: brandon_reg;font-size: 1.12vw;font-weight: bold;">Beneficios</font><br>
            <ul id="txtCuadros">
                <li>Antiinflamatorio:</li>
                <li style="margin-left: 5%;">Post Botox, rellenos.</li>
                <li style="margin-left: 5%;">Post laser.</li>
                <li>Cicatrización.</li>
                <li>Mejora la circulación sanguínea.</li>
                <li>Rejuvenecimiento de la piel y cuidado<br> <font style="margin-left: 10px;">del acné.</font></li>
            </ul>
            </center>
        </div>

        </div>

    </div>

    <div class="col-md-3" style="margin-top: 50px;">

        <div class="contenedor1">

            <div>
                <img class=esconde1 src="Laravel/Recursos/img/Tratamientos/Opera/azul2.png" width="90%">
            </div>
            <img id="marco1" class="topmargen" src="Laravel/Recursos/img/Tratamientos/Opera/cuadro-gris2.png" width="90%">

        <div style="margin-top: -114%;margin-left: -13%">
            <center>

            <div>
                <div>
                    <img src="Laravel/Recursos/img/tratamientos/Opera/rojo1.png" width="20%" />
                </div>
            </div>

            <div>
                <img src="Laravel/Recursos/img/tratamientos/Opera/mascaraazul1.png" width="20%"/>
            </div>

            <font id="txtCuadrosTitle">Rejuvenecimiento de piel con LED</font><br>
            <font id="txtCuadrosTitle">Foto-Terapia</font><br>

            <div id="Linea1Horizontal" style="margin-bottom: 1%;"></div>

            <font id="txtCuadros" style="margin-left: -52%;font-family: brandon_reg;font-size: 1.2vw;font-weight: bold;">Beneficios</font><br>
            <ul id="txtCuadros">
                <li>Programa de rejuvenecimiento de la piel:</li>
                <li style="margin-left: 5%;">Reducción de arrugas.</li>
                <li>Antienvejecimiento.</li>
                <li>Producción de colágeno.</li>
                <li>Blanqueamiento de la piel.</li>
                <li>Efecto lifting de piel.</li>
                <li>Eliminación de todo tipo de pigmentación.</li>
                <li style="margin-left: 5%;">Desvanecimiento de pecas.</li>
                <li style="margin-left: 5%;">Manchas en la piel.</li>
                <li style="margin-left: 5%;">Manchas de la edad.</li>
            </ul>
            </center>
        </div>

        </div>

    </div>

</div>

<br>
<br>
<div class="row" id="parteinferior">
    <div class="col-md-3"></div>
    <div class="col-md-3" style="margin-top: 80px;">

        <div class="contenedor1">

            <div>
                <img class=esconde1 src="Laravel/Recursos/img/Tratamientos/Opera/azul2.png" width="90%">
            </div>
            <img id="marco1" class="topmargen" src="Laravel/Recursos/img/Tratamientos/Opera/cuadro-gris2.png" width="90%">

        <div style="margin-top: -114%;margin-left: -13%">
            <center>

            <div>
                <div>
                    <img src="Laravel/Recursos/img/tratamientos/Opera/azul-oscuro1.png" width="20%" />
                </div>
            </div>

            <div>
                <img src="Laravel/Recursos/img/tratamientos/Opera/mascaraazul1.png" width="20%" />
            </div>

            <font id="txtCuadrosTitle">Tratamiento contra el acné con</font><br>
            <font id="txtCuadrosTitle">con LED Foto-Terapia</font><br>

            <div id="Linea1Horizontal" style="margin-bottom: 1%;"></div>

            <font id="txtCuadros" style="margin-left: -52%;font-family: brandon_reg;font-size: 1.2vw;font-weight: bold;">Beneficios</font><br>
            <ul id="txtCuadros">
                <li>Eliminación del acné.</li>
                <li style="margin-left: 5%;">Leve.</li>
                <li style="margin-left: 5%;">Moderado.</li>
                <li style="margin-left: 5%;">Grave.</li>
                <li>Disminución de la inflamación.</li>
                <li>Purificación de la piel.</li>
                <li>Reparación de la piel sensible posterior<br> <font style="margin-left: 10px">a tatuaje y laser.</font></li>
            </ul>
            </center>
        </div>

        </div>

    </div>

    <div class="col-md-3" style="margin-top: 80px;">

        <div class="contenedor1">

            <div>
                <img class=esconde1 src="Laravel/Recursos/img/Tratamientos/Opera/azul2.png" width="90%">
            </div>
            <img id="marco1" class="topmargen" src="Laravel/Recursos/img/Tratamientos/Opera/cuadro-gris2.png" width="90%">

        <div style="margin-top: -114%;margin-left: -13%">
            <center>

            <div>
                <div>
                    <img src="Laravel/Recursos/img/tratamientos/Opera/verde1.png" width="20%" />
                </div>
            </div>

            <div>
                <img src="Laravel/Recursos/img/tratamientos/Opera/mascaraazul1.png" width="20%" />
            </div>

            <font id="txtCuadrosTitle">Corriente galvánica utilizado con</font><br>
            <font id="txtCuadrosTitle">máscaras de hidrogel</font><br>

            <div id="Linea1Horizontal" style="margin-bottom: 1%;"></div>

            <font id="txtCuadros" style="margin-left: -52%;font-family: brandon_reg;font-size: 1.2vw;font-weight: bold;">Beneficios</font><br>
            <ul id="txtCuadros">
                <li>Crea una corriente para abrir los poros<br> <font style="margin-left: 10px;">y permitir que los nutrientes sean absorbidos</font><br><font style="margin-left: 10px;">desde la máscara de hidrogel.</font></li>
                <li>La carga positiva atrae y rompe toxina<br><font style="margin-left: 10px;">e impurezas cargadas negativamente.</font></li>
            </ul>
            </center>
        </div>

        </div>

    </div>

</div>


<div id="espacio" style="margin-top: 10%;">
    &nbsp;
</div>


</div>





@stop




<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>