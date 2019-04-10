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
    @font-face {
            font-family: brandon_light;
            src: url(Laravel/Recursos/BRANDON_LIGHT.otf);
            }

    h1{
      font-family: brandon_reg;
      font-size: 8vw !important;
    }
    .text{
      font-family: brandon_light;
      font-size: 3vh;
    }
    #contenedormaestro
    {
        background-color: white;
        text-align: center;
    }
    .conte
    {
        padding-top: 5%;
    }
    .conte p
    {
        padding: 5%;
    }
    #titulo h1,.text-img h2,.conte h1
   {
       color: #0280A7;
       font-size: 21px;
   }
   #banner img
   {
       width: 100%;
   }
   .conte p
   {
       color: #0280A7;
       font-family: brandon_reg;
   }
   .final
   {
       padding-bottom: 10%;
   }
   @media(orientation:landscape )
   {
       .conte .text
       {
           font-size: 2.9vw;
       }
   }
</style>
<div id="contenedormaestro">
    <div id="titulo" class="row">
        <div class="col-12 conte" style="margin-top:10px;">
            <h1>Servicios</h1>    
        </div>
    </div>
    <div class="row" style="margin-top: -30px;">
        <div class="col-12 conte">
            <p  class="text">
                En Eterna Medical Center, contamos con servicios para sentirte y verte más joven.<br> Mediante tratamientos preventivos y correctivos con la tecnología más avanzada, diseñamos todos nuestros servicios completamente a las necesidades de tu cuerpo.
            </p> 
        </div>
    </div>
    <div id="banner" class="conte" style="margin-top: -3px;">
        <div class="text-img"><h1>Elimina dolores crónicos</h1></div>
        <img src="Laravel\Recursos\img\Servicios\Movil\Mesa de trabajo – 5@3x.png"  alt="">
    </div>
    <div id="banner" class="conte">
        <div class="text-img"><h1>Mejora la apariencia</h1>
            <font style="font-family: brandon_light;color: #0280A7;font-size: 3.5vh">Luciendo más joven</font>
        </div>
        <img src="Laravel\Recursos\img\Servicios\Movil\Mesa de trabajo – 3@3x.png" style="margin-top: -3px;">
    </div> 
    <div id="banner" class="conte final">
        <div id="" class="text-img" style="margin-top: 2px;"><h1>Elimina el cansancio</h1>
        </div>
        <img src="Laravel\Recursos\img\Servicios\Movil\Mesa de trabajo – 6@3x.png"  alt="">
    </div> 

</div>
@stop

