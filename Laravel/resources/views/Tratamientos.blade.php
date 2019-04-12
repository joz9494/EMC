
    <style type="text/css">
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
        body{
            background-color: #1197c0;
            overflow-x: hidden;
            font-family: brandon_reg !important;
        }
        h1,h2
        {
            font-family: brandon_reg;
        }
               
        #contenedormaestro
        { 
            background-color: white;
            width: 100%;
        }
        .conte{
            margin-top: 2%;
            text-align: center;
        }
        #titulo h1,.text-img h2
        {
            color: #0280A7;
            font-size: 21px;
            font-weight: bold;
        }
        #banner img
        {
            width: 100%;
        }
        .tratamiento
        {
            position: relative;
           margin-top: 2%;
           margin-bottom: 2%
           
        }
        .tratamiento-cuerpo
        {
            color: #0280A7;
            width: 100%;
            padding-top: 20%;
            padding-bottom: 15%;
            margin-left: auto;
            margin-right: auto;
        }
        .tratamiento-cuerpo img
        {
            width: 40%;   
        }
        .tratamiento-cuerpo .nombre
        {
            width: 100%;
            margin-top: 10%; 
            margin-left: auto;
            margin-right: auto;
            
        }
        .tratamiento-cuerpo .nombre>p{
            margin-bottom: 12%;
        }
        .tratamiento-cuerpo .descripcion
        {
            margin-top: 10%; 
        }
        .tratamiento > a
        { 
            position: absolute;
            width: 100%;
            left: 0;
            bottom: 0;
            visibility: hidden;
            
        }
        .tratamiento:hover  
        {
            padding: 0;
             
        }

        .tratamiento:hover >a
        {
            visibility:visible;
        }
        .contraste
        {
            background-color: #E9F8FF;
        }
        .imagen_text{
            position: relative;
            text-align: center;
        }
        .imagen_text img
        {
            width: 100%;
        }
 
        .text-img{
            position: absolute;
            top: 0;
            padding: 5%;
            color: black;
        }
        #biocell
        {
            top: 30%;
            width: 30%;
            right:4%;
            color: #CA5D6D;
            
        }
        #biocell h1,#biocell a
        {
            /*font-weight: bold;*/
            color:#C44548;
        }
        #biocell a:hover
        {
            color: #4BD1A0;
        }
        @media (orientation:landscape)
        {
            #biocell h1,#biocell a
            {
                font-size: 1.9vw;   
            }
            #biocell
            {
                font-size: 1.5vw;   
            }
            .tratamiento-cuerpo .nombre
            {font-size: 2.5vh;}
            .tratamiento-cuerpo .nombre>p{
                font-size: 2vh;
            }
            .tratamiento-cuerpo .descripcion
            {
                font-size: 2vh; 
            }
            .tratamiento > a
            { 
                font-size: 2.5vh;  
            }
        }
        @media (orientation:portrait)
        {
            #biocell h1,#biocell a
            {
                font-size: 1.9vw;   
            }
            #biocell
            {
                font-size: 1.5vw;   
            }
            .tratamiento-cuerpo .nombre
            {font-size: 2vh;}
            .tratamiento-cuerpo .nombre>p{
                font-size: 1vh;
            }
            .tratamiento-cuerpo .descripcion
            {
                font-size: 1vh; 
            }
            .tratamiento > a
            { 
                font-size: 1.5vh;  
            }
        }
        
    </style>
    <body>
        
                @extends('Menu/barramenu')
            @section('content')
                <div id="contenedormaestro" class="container-fluid">
                    <div id="titulo" class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8 conte" style="margin-top: 10px;">

                    <font style="color: #1197c0; font-family: brandon_reg;"><center><font style="font-size: 30px;margin-left: 1%;">Tratamientos</font></center></font>

                </div> 
            </div>
                    <div id="banner" class="row conte" style="margin-top: 30px;">
                        <div class="col-md-12">
                            <div class="imagen_text">
                                <img src="Laravel/Recursos/img/Tratamientos/Biomas.png" style="margin-left: -5%;margin-top: -20px;">
                                <div id="biocell" class="text-img">
                                    <h1>Human Ultracell® </h1>
                                    <p>Regeneracion Celular</p>

                                    <a href="{{url('Biocell')}}">Ver más</a>

                                </div>
                            </div>
                        </div>
                    </div> 
                    <div style="width: 115%;margin-left: -8%;" class="conte">
                         
                        <div class="row justify-content-center row-eq-height">
                            <div class="col-md-2 col-sm-5 tratamiento">
                                <div class="tratamiento-cuerpo">
                                    <img src="Laravel/Recursos/img/Tratamientos/1.png" alt="">
                                    <div class="nombre">Hormonas<br>Bio-Idénticas</div>
                                    <p class="descripcion" style="font-family: brandon_light;margin-top: 30px;px;">Balancea los niveles<br> hormonales, sin efectos<br> secundarios.</p>     
                                </div>
                                <a href="{{url('/Hormonas')}}" class="btn btn-primary" style="background-color: #1197c0;border-color: #1197c0">Leer más</a>
                            </div>
                            <div class="col-md-2 col-sm-5 tratamiento contraste">
                                <div class="tratamiento-cuerpo">
                                    <img src="Laravel/Recursos/img/Tratamientos/2.png" alt="">
                                    <div class="nombre">Lift Biológico <br><br></div>
                                    <p class="descripcion" style="font-family: brandon_light;margin-top: 30px;">Desacelera<br> notablemente el<br> envejecimiento.</p> 
                                </div>
                                <a href="{{url('/lift-biologico')}}" class="btn btn-primary" style="background-color: #1197c0;border-color: #1197c0">Leer más</a>
                            </div>
                            <div class="col-md-2 col-sm-5 tratamiento">
                                <div class="tratamiento-cuerpo">
                                    <img src="Laravel/Recursos/img/Tratamientos/3.png" alt="">
                                    <div class="nombre">Opera tratamiento<br>Antiaging</div>
                                    <p class="descripcion" style="font-family: brandon_light;margin-top: 30px;">¡Estimula la vitalidad<br> celular y luce <br> radiante como <br>#Thalía!</p>
                                    <p class="descripcion"></p> 
                                </div>
                                <a href="{{url('/Opera_tratamiento_antiaging')}}" class="btn btn-primary" style="background-color: #1197c0;border-color: #1197c0">Leer más</a>
                            </div>
                            <div class="col-md-2 col-sm-5 tratamiento contraste">
                                <div class="tratamiento-cuerpo">
                                    <img src="Laravel/Recursos/img/Tratamientos/4.png" alt="">
                                    <div class="nombre">Peptonas <br><br></div>
                                    <p class="descripcion" style="font-family: brandon_light;margin-top: 30px;">Estimula la producción de <br> colágeno y elastina del rostro.</p> 
                                </div>    
                            <a href="{{url('/Peptonas')}}" class="btn btn-primary" style="background-color: #1197c0;border-color: #1197c0">Leer más</a>
                            </div>
                            <div class="col-md-2 col-sm-5 tratamiento">
                                <div class="tratamiento-cuerpo">
                                    <img src="Laravel/Recursos/img/Tratamientos/5.png" alt="">
                                    <div class="nombre">PRP 4G<br><p>(Plasma Rico en Plaquetas)</p></div>
                                    <p class="descripcion" style="font-family: brandon_light;margin-top: 30px;">Ten una piel más fuerte y joven.<br></p> 
                                </div>
                                <a href="{{url('/PRP4G')}}" class="btn btn-primary" style="background-color: #1197c0;border-color: #1197c0">Leer más</a>
                            </div> 
                        </div>
                        <div class="row justify-content-center row-eq-height" style="margin-top: -30px;">
                            <div class="col-md-2 col-sm-5 tratamiento">
                                <div class="tratamiento-cuerpo">
                                    <img src="Laravel/Recursos/img/Tratamientos/6.png" alt="">
                                    <div class="nombre">Rinomodelación<br><p></p></div>
                                    <br>
                                    <br>
                                    <p class="descripcion" style="font-family: brandon_light;margin-top: 8px;">Modifica la forma de tu <br> nariz sin cirugía.<br></p> 
                                </div>
                                <a href="http://" class="btn btn-primary" style="background-color: #1197c0;border-color: #1197c0">Leer más</a>
                            </div>
                            <div class="col-md-2 col-sm-5 tratamiento contraste">
                                <div class="tratamiento-cuerpo">
                                    <img src="Laravel/Recursos/img/Tratamientos/7.png" alt="">
                                    <div class="nombre">Silicio plus + DMAE </div>
                                    <br>
                                    <br>
                                    <p class="descripcion" style="font-family: brandon_light;margin-top: 35px;">Reafirmante y antiestrías.<br></p> 
                                </div>
                                <a href="{{ url ('/Silicio_plus_DMAE')}}" class="btn btn-primary" style="background-color: #1197c0;border-color: #1197c0">Leer más</a>
                            </div>
                            <div class="col-md-2 col-sm-5 tratamiento">
                                <div class="tratamiento-cuerpo">
                                    <img src="Laravel/Recursos/img/Tratamientos/8.png" alt="">
                                    <div class="nombre">Scultur Refort</div>
                                    <br>
                                    <br>
                                    <p class="descripcion" style="font-family: brandon_light;margin-top: 35px;">Re-estructura y estimula <br> la formación de fibras <br> de colágeno y elastina.</p> 
                                </div>
                                <a href="http://" class="btn btn-primary" style="background-color: #1197c0;border-color: #1197c0">Leer más</a>
                            </div>
                            <div class="col-md-2 col-sm-5 tratamiento contraste">
                                <div class="tratamiento-cuerpo">
                                    <img src="Laravel/Recursos/img/Tratamientos/9.png" alt="">
                                    <div class="nombre">Terapia Neural</div>
                                    <br>
                                    <br>
                                    <p class="descripcion" style="font-family: brandon_light;margin-top: 35px;">Tratamiento para enfermedades <br>causadas por <br>trastorno en el sistema<br>eléctrico del cuerpo.</p> 
                                </div>
                                <a href="http://" class="btn btn-primary" style="background-color: #1197c0;border-color: #1197c0">Leer más</a>
                            </div>
                            <div class="col-md-2 col-sm-5 tratamiento"> 
                                <div class="tratamiento-cuerpo">
                                    <img src="Laravel/Recursos/img/Tratamientos/10.png" alt="">
                                    <div class="nombre" style="margin-top: 32px;">Tratamiento <br>Progresivo de Ojos</p></div>
                                    <br>
                                    <br>
                                    <p class="descripcion" style="font-family: brandon_light;margin-top: -35px;">Eliminación biológica de<br>líneas profundas,sin<br>cirugía.</p> 
                                </div>
                                <a href="http://" class="btn btn-primary" style="background-color: #1197c0;border-color: #1197c0">Leer más</a>
                            </div>
                        </div> 
                    </div>
                </div>
            @stop 
    