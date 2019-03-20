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
        <link rel="stylesheet" type="text/css" href="../Recursos/BRANDON_REG.otf">
        <link rel="stylesheet" type="text/css" href="../Recursos/BRANDON_BLD.otf">
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
    #contenedorcarrousel{
        width: 100%;
        height: 30%;
        background-color: white;
    }
    #bienvenidos{

    }
    #contenedorbtn{
        background-image: url("../Recursos/img/Inicio/btn.png");
        background-size: 100%;
        width: 500px;
        height: 90px;
        margin-top: -2%;
    }
    #contenedorbtn:hover{
        background-image: url("../Recursos/img/Inicio/btn2.png");
        background-size: 100%;
        width: 500px;
        height: 90px;
        margin-top: -2%;
    }
    #imgbio{
        width: 73%;
        height: 33%;
    }
    
    #contenedorbienvenido{
        background-color: white;
        width: 50%;
        margin-left: 25%;
    }
    #txtbtnconte{
        color: white;
        font-size: 30px;
        margin-left: 20px;
    }


    @media  screen and (max-width: 1100px){
        body{
            overflow-x: visible;
        }
        #contenedorbtn{
            width: 350px;
            height: 70px;
        }
        #txtbtnconte{
            font-size: 20px;
            margin-top: -7px;
            margin-left: -15px;
        }
        #contenedorbtn:hover{
        background-image: url("../Recursos/img/Inicio/btn2.png");
        background-size: 100%;
        width: 350px;
        height: 70px;
        }
        #imgbio{
            width: 106%;
            margin-left: -16%;
            margin-top: 3%;
        }
    }

    @media  screen and (max-width: 800px){
        #contenedorbtn{
            width: 250px;
            height: 40px;
            margin-left: -10px;
        }
        #contenedorbtn:hover{
        background-image: url("../Recursos/img/Inicio/btn2.png");
        background-size: 100%;
        width: 250px;
        height: 40px;
        }
        #txtbtnconte{
            font-size: 15px;
            margin-left: -40px;
            margin-top: -15px;
        }
    }
</style>




<?php $__env->startSection(@content); ?>


<table width="100%" border="1px">
    <thead>
        <tr><th>
        <div id="contenedorcarrousel" style="width: 100%;">
          <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" id="imgcarrousel" src="../Recursos/img/Inicio/1.png" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" id="imgcarrousel" src="../Recursos/img/Inicio/2.png" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" id="imgcarrousel" src="../Recursos/img/Inicio/3.png" alt="Third slide">
                </div>
            </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Anterior</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Siguiente</span>
                </a>
            </div>
            </div>
        </th></tr>
    </thead>



    <tbody>

        <tr><td>
            <br>
        </td></tr>

        <tr><td>
           
           <div id="contenedorbienvenido">
           <br>
            <center><p style="font-size: 50px;color: #0280A7;font-family:brandon_reg">B&nbsp;I&nbsp;E&nbsp;N&nbsp;V&nbsp;E&nbsp;N&nbsp;I&nbsp;D&nbsp;O&nbsp;S</p></center>

            <center><h6 style="font-size: 20px;font-family:brandon_reg">Mejora tu apariencia física, incrementa la vitalidad de tu piel y elimina dolores crónicos asociados a la vejez.</h6></center><br>
            <br>

            <center>
            <div id="contenedorbtn">
                <a href="<?php echo e(url('/')); ?>">
            <div style="position: absolute;margin-top: 30px;margin-left: 100px;font-family:brandon_reg">
                <center><h1 id="txtbtnconte">Eterna Medical Center</h1></center>
            </div>
                </a>
            </div>
            </center>

            <br>
            <center><p style="font-size: 20px;font-family:brandon_reg">Retarda tu reloj fisiológico, te ayudamos a sentirte y lucir mejor.</p></center>
            <center><p style="font-size: 20px;font-family:brandon_reg">En Eterna Medical Center estamos para ayudarte.</p></center>
            <center><p style="font-size: 20px;color: black;font-family:brandon_reg"><b>Mejora y mantén tu estado físico.</b></center>
            <br>
            </div>

        </td></tr>

        <tr><td>
            <br>
        </td></tr>

        <tr><td style="background-color: white">
            <img src="../Recursos/img/Inicio/bio.png" width="50%" style="margin-left: 25%;">
        </td></tr>


    </tbody>


</table>









<?php $__env->stopSection(); ?>




<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>
<?php echo $__env->make('Menu/barramenu', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>