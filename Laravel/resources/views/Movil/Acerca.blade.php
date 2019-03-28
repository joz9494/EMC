@extends('/Menu/Movil/barramenu')

@section('content')
    <style>
        #contenedormaestro
        {
            background-color: white;
            width: 100%;
        }
        .conte{
            text-align: center;
            margin-top: 10%;
        }
        .conte h2,.conte p,#final li
        {
            font-family: brandon_reg;
        }
        .text-img{
        position: absolute;
        top: 0;
        padding: 1%;
        color: black;
    }
    .conte img
    {
        z-index: 1;
        width: 100%;
        
    }
    .imgen-txt
    {
        width: 100%;
        position: relative;
        text-align: center;
    }
    .imgen-txt img
    {
        width: 100%;
    }
    #descripcion1
    {
        z-index: 2;
        position: relative;
        margin-top: -10%;
        margin-left: auto;
        margin-right: auto;
        width: 80%;
        background-color: white;
        text-align: center;
        
    }
    #info_dr_txt,#descripcion1 h2
    {
        color: #0280A7;
    }
    #indo_dr{
        
        text-align: left;
    }
    #indo_dr img
    {
        width: 40%;
        padding-left: 5%;
    }
    #info_dr_txt
    {
        text-align: center;
        padding-top: 5%;
        padding-left: 30%;
        padding-right:10%; 
    }
    #descripcion2
    {
        background-color: #242224;
        color: white;
        margin: 10%;
        padding: 10%;
    }
    #descripcion3
    {
        padding-left: 10%;
        padding-right: 10%;
    }
    @media (orientation:portrait)
    {
        #info_dr_txt,#descripcion2
        {
            font-size: 3.5vh;
        }
    }
    </style>
    <div id="contenedormaestro">
            <div class="">
                <img src="Laravel/recursos/img/AcercaDe/Fondo.png" alt="" style="width:100%;">
            </div>
            <div id="descripcion1" >
                <h2>Acerca de Eterna <br>
                Medical Center<br></h2>
                <p>
                    En Eterna Medical Center estamos 100%
                    <br>comprometidos con nuestros pacientes, donde el
                    <br>servicio a sus necesidades y atención de excelencia
                    <br>son las cualidades que procuramos en todo
                    <br>momento.
                </p>
            </div>
            <div class="row">
                    <div class="conte">
                        <div class="col-12">
                        <div id="" class="imgen-txt">
                            <img src="Laravel\Recursos\img\AcercaDe\Movil-ADN.png" alt="" style="width: 100%;">
                            <div id="descripcion2" class="text-img">
                            <p>
                                ESPECIALISTA EN<br>
                                MEDICINA  <br>ANTIENVEJECIMIENTO
                            </p>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            <div class="row">
                <div class="conte col-12 col-center">
                    <div id="indo_dr" class="imagen_text">
                        <img id="" src="Laravel/recursos/img/AcercaDe/Logo2.png" alt="" >
                        <div id="info_dr_txt" class="text-img">
                                <p>DR. TORIBIO MARTÍNEZ RIVERA<p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div id="descripcion3" class="conte col-12">
                        <h1>Céd. Prof:85511800 - Reg. SSG 12540</h1>
                        <p style="color:#0280A7">Medico Cirujano Partero, Egresado del instituto Politecnico Nacinonal</p>
                </div>
            </div>
            
    </div>
@stop
