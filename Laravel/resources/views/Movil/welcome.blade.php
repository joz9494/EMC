@extends('/Menu/Movil/barramenu')

@section('content')
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
            color: #1197c0;
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
            padding-top:21.5%; 
            padding-bottom: 0.5%;
            color: black !important;
        }
        #banner
        {
            border-top:4px #1197c0;
            border-top-style: solid;
        }
        #bienvenido
        {
            padding-bottom: 2%;
        }
        @media (orientation:portrait)
        {
            h3{
                font-size: 4vh !important;
            }
            #boton h2
            {
                font-size: 3.5vh;
            }
            p,h6
            {
                font-size: 3vh !important;
            }
        }
        @media (orientation:landscape)
        {
            h3,{
                font-size: 5vw;
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
    </style>
    <div id="inicio">
        <div id="banner" class="conte">
            <img src="Laravel\Recursos\img\Inicio\1.png" alt="">
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
                    <div class="imagen_text ">
                        <img src="Laravel\Recursos\img\Inicio\btn2.png" alt="">
                        <div id="boton" class="text-img ">
                            <h2 style="font-family: brandon_reg;">Eterna Medical Center</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div id="bajo_boton" class="col-12 conte">
                    <p >Retarda tu reloj fisiológico, te ayudamos a sentirte y lucir mejor.
                        En <b>Eterna Medical</b> Center estamos para ayudarte. <br>
                    Mejora y mantén tu estado físico. </p>
                </div>
            </div>
        </div>  
    </div>
    <div class="row">
        <div class="col-12">
            <img src="Laravel\Recursos\img\Inicio\bio.png" alt="" width="100%">
        </div>
    </div>
@stop   