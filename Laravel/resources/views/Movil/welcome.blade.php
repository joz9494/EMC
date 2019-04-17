
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<style>
        @font-face {
            font-family: brandon_reg;
            src: url(-"Laravel/Recursos/BRANDON_REG.otf");
        }
        @font-face {
            font-family: brandon_bold;
            src: url("Laravel/Recursos/BRANDON_BLD.otf");
        }
        .conte 
        {
            width: 100%;
        }
        .conte p,.conte h3,.conte h6,.conte h4
        {
            font-family: brandon_reg;
        }
        .conte img
        {
            width: 100%;
            
        }

        #cuerpo
        {
           background-color: white;
            margin: 5%;
            padding: 5%;
            text-align: center;
        }
        #bajo_boton
        {
            padding-right: 12%;
            padding-left: 12%;
        }
        .imagen_text{
            position: relative;
            text-align: center;
        }
        .imagen_text img
        {
            width: 100%;
        }
        h3
        {
            color: #1197c0 !important;
        }
        .text-img{
            position: absolute;
            top: 0;
            padding: 10%;
            color: black;
            
        }
        #boton
        {
            width: 100%;
            padding: 5.5%;
            color: white; 
        }
        #inicio
        {
            background-color: #0280A7;
            color: black !important;
        }
        #bienvenido
        {
            padding-bottom: 2%;
        }
        @media (orientation:portrait)
        {
            h3{
                font-size: 7vw !important;
            }
            #boton h2
            {
                font-size: 5.5vw;
            }
            p,h6
            {
                font-size: 5vw !important;
            }
        }
        @media (orientation:landscape)
        {
            h3{
                font-size: 6vw;
            }
            #boton h2
            {
                font-size: 4.5vw;
            }
            p,h6
            {
                font-size: 4vw !important;
            }
        }
        body{
            width: 100%;
        }

    </style>
<body>
    @extends('/Menu/Movil/barramenu')

    @section('content')

    <div id="inicio">
        <div id="banner" class="conte">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                        <div class="imagen_text">
                            <img class="d-block w-100" src="Laravel\Recursos\img\Inicio\122.png" alt="First slide">
                        </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="Laravel\Recursos\img\Inicio\2.png" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="Laravel\Recursos\img\Inicio\3.png" alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
        </div>
        <div id="cuerpo" class="">
            <div id="bienvenido" class="row">
                <div class="col-12">
                    <h3>B&nbsp;I&nbsp;E&nbsp;N&nbsp;V&nbsp;E&nbsp;N&nbsp;I&nbsp;D&nbsp;O&nbsp;S</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-12 conte">
                    <P style="font-weight: normal;">Mejora tu apariencia física, incrementa la vitalidad de tu piel y elimina dolores crónicos asociados a la vejez.</P>
                </div>
            </div>
            <div class="row">
                <div class="col-12 conte">
                    <a href="{{url('/')}}">
                        <div class="imagen_text ">
                            <img src="Laravel\Recursos\img\Inicio\btn2.png" alt="">
                            <div id="boton" class="text-img">
                                <h2 style="font-family: brandon_reg;">Eterna Medical Center</h2>
                            </div> 
                        </div>
                    </a>
                </div>
            </div>
            <div class="row">
                <div id="bajo_boton" class="col-12 conte">
                    <p >Retarda tu reloj fisiológico, te ayudamos a sentirte y lucir mejor.
                        En <b>Eterna Medical Center </b> estamos para ayudarte. <br>
                    Mejora y mantén tu estado físico. </p>
                </div>
            </div>
        </div>
        <div id="footer_baner" class="row">
            <div class="col-12">
                <a href="{{url('/Biocell')}}">
                    <img src="Laravel\Recursos\img\Inicio\bio.png" class="img-fluid" alt="">
                </a>
            </div>
        </div>
    </div>





    @stop
</body>
</html>