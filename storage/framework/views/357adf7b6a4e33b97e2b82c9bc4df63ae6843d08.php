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
        font-family: brandon_reg;
        src: url(../Recursos/BRANDON_REG.otf);
    }
    @font-face {
        font-family: brandon_bold;
        src: url(../Recursos/BRANDON_BLD.otf);
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
        height: 62%;
        background-color: white;
        margin-top: 0%;
    }
    #cont1{
        width: 25%;
        height: 90%;
        background-color: white;
        float: right;
        margin-right: 20%;
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
    #contentimg{
        width: 100%;
    }
    #contenedor{
        margin-top: 50px;
    }


    @media  screen and (max-width: 1000px){
        #conteneimg{
            margin-left: -15%;
        }
        #imgconte{
            height: 300px;
            width: 400px;
            margin-left: -70px;
        }

    }
</style>




<?php $__env->startSection('content'); ?>

    <div id="contenedormaster" style="background-color: white;margin-bottom: 0%;width: 100%;">
        <div id="contetxt" style="width: 60%;margin-left: 20%">
            <br>
            <font style="color: #0280A7; font-family: brandon_bold;"><center><font style="font-size: 40px;margin-left: -1%;">Servicios</font></center></font><br>
            <font style="font-family: brandon_reg;font-size: 20px">En Eterna Medical Center, contamos con servicios para sentirte y verte más joven. Mediante tratamientos preventivos y correctivos con la tecnología más avanzada, diseñamos todos nuestros servicios completamente a las necesidades de tu cuerpo.</font>
        </div>


        <!-- imagen 1 -->
        <div class="row" id="contenedor">
            <div class="col-md-3"></div>
                <div class="col-md-6 conte">
                    <img id="contentimg" src="../Recursos/img/Servicios/Elimina-C.png">
                </div>
        </div>


        <!-- imagen 2 -->
        <div class="row" id="contenedor">
            <div class="col-md-3"></div>
                <div class="col-md-6 conte">
                    <img id="contentimg" src="../Recursos/img/Servicios/Mejora-A.png">
                </div>
        </div>


        <!-- imagen 3 -->
        <div class="row" id="contenedor">
            <div class="col-md-3"></div>
                <div class="col-md-6 conte">
                    <img id="contentimg" src="../Recursos/img/Servicios/Elimina--C.png">
                </div>
        </div>

        <br>
        <br>
    </div>
    

<?php $__env->stopSection(); ?>




<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>
<?php echo $__env->make('Menu/barramenu', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>