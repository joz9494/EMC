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
            margin-top: 5%;
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
    #descripcion1 h2
    {
        padding-top: 5%;
    }
    #info_dr_txt,#descripcion1 h2,#lista1 h1
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
    #lista1
    {
        text-align: left;
        padding-left: 10%;
        padding-right: 10%;
    }

    #lista1 ul
        {
            text-align: left;
            margin: 2%;
        }
        #lista1 li
        {
            line-height: 125%;
        }
        #lista1 li::before {content: "•"; color:grey;font-size: 6vh; padding-right: 3%; }
    @media (orientation:portrait)
    {
        #descripcion1 h2
        {
            font-size: 4vh !important;
        }
        #info_dr_txt,#descripcion2,#descripcion1 h2
        {
            font-size: 3.5vh;
        }
        #descripcion3
        {
            font-size: 2.5vh;
        }
        #descripcion3 h1,#lista1 li,#lista1 h1,#descripcion1
        {
            font-size:  3vh;
        }
    }
    @media (orientation:landscape)
    {
        #descripcion1 h2
        {
            font-size: 5vw !important;
        }
        #info_dr_txt,#descripcion2
        {
            font-size: 4.5vw;
        }
        #descripcion3
        {
            font-size: 3.5vw;
        }
        #descripcion3 h1,#lista1 li,#lista1 h1,#descripcion1
        {
            font-size:  4vw;
        }
        #indo_dr img
        {
            width: 30%;
            padding-left: 10%;
        }
        #info_dr_txt
        {
            text-align: center;
            padding-top: 5%;
            padding-left: 35%;
            padding-right:25%; 
        }
        #descripcion2
        {
            margin-bottom: 15%;
            margin-top: 15%;
            margin-left: 18%;
            margin-right: 18%;

            padding: 10%;
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
                    comprometidos con nuestros pacientes, donde el
                    servicio a sus necesidades y atención de excelencia
                    son las cualidades que procuramos en todo
                    momento.
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
            <div class="row">
                <div id="lista1" class="col-12 conte">
                    <h1>Trayectoria</h1>
                    <p>
                        <ul>
                            <li>Miembro de American Acadey of Anti-Agin <br>
                            Medicine(Estados Unidos).</li>
                            <li> Miembro del colegio NAcional de Medicina <br>
                                    Antienjecimiento(Mexico).
                            </li>
                            <li>
                                Fellowship en Medicina Antienvejecimiento
                            </li>
                            <li>Conferencista en el II y III Congreso Mundial de<br>
                                    Medicina Antienjecimiento.</li>
                            <li>
                                profesor de Curso Internacional de <br>
                                    Medicina Antienjecimiento. 
                            </li>
                            <li>
                                Profesor de terapia Neuronal y ARP Articular en 
                                <br> Certificacion Antienjecimiento.
                            </li>
                            <li>
                                Profesor de viscosuplementacion articular
                            </li>
                            <li>Certificación Internacional de remodelación facial <br>y corporal con hilos PDO.</li>

                        </ul>
                    </p>
                </div>
            </div>
            <div class="row">
                    <div id="lista1" class="col-12 conte">
                        <h1>Experinecia</h1>
                        <ul>
                            <li>Antienjecimiento Cerebral</li>
                            <li>Antienjecimiento y Nutricion Ortomolecular</li>
                            <li>Aplicación de Peptonas Antienjecimiento</li>
                            <li>Plasma Rico en Plaquetas de Cuarta
                                <br>Generacion (PRP4G)</li>
                            <li>Terapia Neuronal</li>
                            <li>Nutrición Antienjecimiento</li>
                        </ul></div>
            </div>
            
    </div>
@stop