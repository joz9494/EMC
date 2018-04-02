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
            background-color: white;
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
            margin: 2%;
            padding: 5%;
            text-align: center;
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
            color: #0280A7;
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
            padding: 6%;
            color: white; 
        }
        #inicio
        {
            background-color: #0280A7;
            padding-bottom: 0.5%;
        }
    </style>
    <div id="inicio">
        <div class="conte">
            <img src="Laravel\Recursos\img\Inicio\1.png" alt="">
        </div>
        <div id="cuerpo" class="">
            <div id="bienvenido" class="row">
                <div class="col-12">
                    <h3>B&nbsp;I&nbsp;E&nbsp;N&nbsp;V&nbsp;E&nbsp;N&nbsp;I&nbsp;D&nbsp;O&nbsp;S <br><br></h3>
                    <h6 style="font-weight: normal;">Mejora tu apariencia física, incrementa la vitalidad de tu piel y elimina dolores crónicos asociados a la vejez.</h6>
                </div>
            </div>
            <div class="row">
                <div class="col-12 conte">
                    <div class="imagen_text ">
                        <img src="Laravel\Recursos\img\Inicio\btn2.png" alt="">
                        <div id="boton" class="text-img ">
                            <h4 style="font-family: brandon_reg;">Eterna Medical Center</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 conte">
                    <p >Retarda tu reloj fisiológico, te ayudamos a sentirte y lucir mejor.
                        En Eterna Medical Center estamos para ayudarte <br>
                    <b>Mejora y mantén tu estado físico.</b> </p>
                </div>
            </div>
        </div>
        
    </div>
@stop   