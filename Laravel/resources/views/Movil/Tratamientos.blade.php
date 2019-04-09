@extends('/Menu/Movil/barramenu')
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
       background-color: #0280A7;
       overflow-x: hidden;
       font-family: brandon_light;
   }
   h1,h2
   {
       font-family: brandon_reg;
   }
          
   #contenedormaestro
   { 
       width: 100%;
       background-color: white;
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
    
      margin-top: 2%;
      margin-bottom: 2%;
      
   }
   .tratamiento-cuerpo
   {
       color: #0280A7;
       width: 100%;
       padding-top: 20%;
       padding-bottom: 15%;
       
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
   
   .contraste
   {
       background-color: #E9F8FF;
   }
   .descripcion
   {
       padding-left:5%;
       padding-right: 5%; 
   }
   @media (orientation:landscape)
   {
       .tratamiento-cuerpo .nombre
       {font-size: 3.5vh;}
       .tratamiento-cuerpo .nombre>p{
           font-size: 3vh;
       }
       .tratamiento-cuerpo .descripcion
       {
           font-size: 3vh; 
       }
   }
   @media (orientation:portrait)
   {
       .tratamiento-cuerpo .nombre
       {font-size: 4vh;}
       .tratamiento-cuerpo .nombre>p{
           font-size: 3vh;
       }
       .tratamiento-cuerpo .descripcion
       {
           font-size: 3vh; 
       }
   }
   .col-center
       {
        float: none;
        margin: 0 auto;
       }
       #biocell
       {
           text-align: center;
       }

       @font-face {
            font-family: brandon_reg;
            src: url(Laravel/Recursos/BRANDON_REG.otf);
            }
            @font-face {
            font-family: brandon_bold;
            src: url(Laravel/Recursos/BRANDON_BLD.otf);
            }
            @font-face {
            font-family: brandon_light;
            src: url(Laravel/Recursos/BRANDON_LIGHT.otf);
            }

       h1{
        font-family: brandon_light !important;
        font-size: 3.5vh !important;
       }
   
</style>
@section('content')
<div id="contenedormaestro">
        <div id="titulo" class="row">
            <div class="col-md-2 col-sm-5"></div>
            <div class="col-md-8 conte" style="margin-top: 10px;margin-bottom: 30px;">
                <h1 style="font-size: 4.5vh !important">Tratamientos</h1>    
            </div>
        </div>
        <div id="banner" class="conte">
                <img src="Laravel\Recursos\img\Tratamientos\Movil\Ima.Biocell.jpg"  alt="">
        </div>
        <div id="banner" class="conte" style="margin-top: 5px">
            <div class="col-8 col-center">
                <img src="Laravel\Recursos\img\Tratamientos\Movil\Logo Biocell800.png"  alt="">
            </div>
        </div>
        <div id="biocell" class="col-8 col-center">
              <h3 style="color: #B61A25; font-size:25px;">Human Ultralcell®</h3>
              <h3 style="color: #B61A25; font-size:22px; font-weight: normal">Regeneración Celular</h3> 
              <a href="" style="color: #B61A25; font-size:25px;">Leer Más</a> 
        </div> 
        <div id="tratamientos" class="conte" style="margin-top: -10px;">
             
            <div class="row justify-content-center row-eq-height">
                <div class="col-md-2 col-sm-5 tratamiento">
                    <a href="{{url('/Hormonas')}}" >
                        <div class="tratamiento-cuerpo">
                            <img src="Laravel/Recursos/img/Tratamientos/1.png" alt="">
                            <div class="nombre">Hormonas<br>Bio-Indénticas</div>
                            <p class="descripcion">Balancea los niveles hormonales, sin efectos secundarios </p>     
                        </div>
                    </a>
                </div>
                <div class="col-md-2 col-sm-5 tratamiento contraste">
                    <a href="{{url('/lift-biologico')}}">
                        <div class="tratamiento-cuerpo">
                            <img src="Laravel/Recursos/img/Tratamientos/2.png" alt="">
                            <div class="nombre">Lift Biológico <br><br></div>
                            <p class="descripcion">Desacelera notablemente el envejecimiento  </p> 
                        </div>
                    </a>
                </div>
                <div class="col-md-2 col-sm-5 tratamiento">
                    <a href="{{url('/Opera_tratamiento_antiaging')}}">
                        <div class="tratamiento-cuerpo">
                            <img src="Laravel/Recursos/img/Tratamientos/3.png" alt="">
                            <div class="nombre">Opera tratamiento<br>Antiaging</div>
                            <p class="descripcion">¡Estimula la vitalidad celular y luce radiante como</p>
                            <p class="descripcion">#thalia!</p> 
                        </div>
                    </a>
                </div>
                <div class="col-md-2 col-sm-5 tratamiento contraste">
                    <a href="{{url('/Peptonas')}}">
                        <div class="tratamiento-cuerpo">
                            <img src="Laravel/Recursos/img/Tratamientos/4.png" alt="">
                            <div class="nombre">Peptonas <br><br></div>
                            <p class="descripcion">Estimula la produccion colageno y elastina del rostro </p> 
                        </div>    
                    </a>
                </div>
                <div class="col-md-2 col-sm-5 tratamiento">
                    <a href="{{url('/PRP4G')}}">
                        <div class="tratamiento-cuerpo">
                            <img src="Laravel/Recursos/img/Tratamientos/5.png" alt="">
                            <div class="nombre">PRP 4G<br><p>(Plasma Rico en Plaquetas)</p></div>
                            <p class="descripcion">Ten una piel mas fuerte yy joven <br></p> 
                        </div>
                    </a>
                </div> 
                <div class="col-md-2 col-sm-5 tratamiento">
                    <a href="http://">
                        <div class="tratamiento-cuerpo">
                            <img src="Laravel/Recursos/img/Tratamientos/6.png" alt="">
                            <div class="nombre">Rinoplastia<br><p>(Rinomodelacion)</p></div>
                            <p class="descripcion">Modifica la de forma de tu nariz sin cirugia<br></p> 
                        </div>
                    </a>
                </div>
                <div class="col-md-2 col-sm-5 tratamiento contraste">
                    <a href="http://">
                        <div class="tratamiento-cuerpo">
                            <img src="Laravel/Recursos/img/Tratamientos/7.png" alt="">
                            <div class="nombre">Silicio plus + DMAE </div>
                            <p class="descripcion">Reafirmante y antiestrías.<br></p> 
                        </div>
                    </a>
                </div>
                <div class="col-md-2 col-sm-5 tratamiento">
                    <a href="http://">
                        <div class="tratamiento-cuerpo">
                            <img src="Laravel/Recursos/img/Tratamientos/8.png" alt="" >
                            <div class="nombre">Scultur Refort</div>
                            <p class="descripcion">Re-estructura y estimula <br> la formacion de fibras <br> de colágeno y elastina</p> 
                        </div>
                    </a>
                </div>
                <div class="col-md-2 col-sm-5 tratamiento contraste">
                    <a href="http://">
                        <div class="tratamiento-cuerpo">
                            <img src="Laravel/Recursos/img/Tratamientos/9.png" alt="">
                            <div class="nombre">Terapia Neural</div>
                            <p class="descripcion">Tratamiento para enfermedades <br>causadas por <br>trastorno en el sistema<br>eléctrico del cuerpo.</p> 
                        </div>
                    </a>
                </div>
                <div class="col-md-2 col-sm-5 tratamiento"> 
                    <a href="http://">
                        <div class="tratamiento-cuerpo">
                            <img src="Laravel/Recursos/img/Tratamientos/10.png" alt="">
                            <div class="nombre"><p> <br>Progresivo de  Ojos</p></div>
                            <p class="descripcion">Elimiacíon biológica de<br>lineas profundas,sin<br>cirugía</p> 
                        </div>
                    </a>
                </div>
            </div> 
        </div>
    </div>
@stop