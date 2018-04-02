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
       font-weight: bold;
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
        <div class="col-12 conte">
            <h1>Servicios</h1>    
        </div>
    </div>
    <div class="row">
        <div class="col-12 conte">
            <p  class="text">
                En eterna medical center, contamos con
                servicios para sentirte y verte más jover <br>
                Mediante trataminetos preventivos y correctiovos con la tegnología mas avanzada,
                diseñamos todos nuestros servicios
                completamente a las nesecidades de tu cuerpo.
            </p>
        </div>
    </div>
    <div id="banner" class="conte">
        <div class="text-img"><h1>Elimina dolores <br> crónicos</h1></div>
        <img src="Laravel\Recursos\img\Servicios\Movil\Mesa de trabajo – 5@3x.png"  alt="">
    </div>
    <div id="banner" class="conte">
        <div class="text-img"><h1>Mejora la experiencia</h1>
            <h1 style="font-weight: normal;">Luciendo mas joven</h1>
        </div>
        <img src="Laravel\Recursos\img\Servicios\Movil\Mesa de trabajo – 3@3x.png"  alt="">
    </div> 
    <div id="banner" class="conte final">
        <div id="" class="text-img"><h1>Elimina el cansancio</h1>
        </div>
        <img src="Laravel\Recursos\img\Servicios\Movil\Mesa de trabajo – 6@3x.png"  alt="">
    </div> 

</div>
@stop

