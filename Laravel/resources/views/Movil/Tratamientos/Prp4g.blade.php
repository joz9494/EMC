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
  p{
    font-family: brandon_light;
    color: black;
    font-size: 5vw;
  }
  h1{
    font-size: 8vw !important;
    font-family: brandon_reg !important;
    color: #0280A7 !important;
    text-align: center;
  }
  h2{
    font-size: 8vw !important;
    font-family: brandon_reg !important;
    color: #0280A7 !important;
    text-align: center;
  }
</style>

@section('content')

<div style="width: 100%;margin-top: 10px;margin-bottom: 10px;">
  <h1>PRP 4G (Plasma Rico en Plaquetas de Cuarta Generación)</h1>
</div> 

<div class="row" style="margin-top: 10px;width: 100%;">
  <div class="col-12">
    <img src="Laravel/Recursos/img/Tratamientos/Peptonas/movil1.png" width="100%">
  </div>
</div>

<div class="row" style="margin-top: 30px;width: 100%;">
  <div class="col-12">
    <img src="Laravel/Recursos/img/Tratamientos/Peptonas/movil1.png" width="100%">
  </div>
</div>

<div class="row" style="margin-top: 30px;width: 100%;">
  <div class="col-12">
    <img src="Laravel/Recursos/img/Tratamientos/Hormonas/esquinas1.png" width="100%">
  </div>
</div>


<div class="row" style="text-align: center;">
  <div class="col-12">
    <h2>¿Causa efectos secundarios?</h2> 
    <p>
    No posee efectos secundarios. es un procedimiento libre de riesgos y de
    reacciones de algún tipo ya que es una sustancia que proviene
    de la sangre del paciente. 
    <p>
    <br>
    <h2>¿Cuánto tiempo dura el procedimiento?</h2>
    <p>
   En promedio dura de 6 a 12 meses dependiendo de cada paciente.
   </p>
   <br>
   <h2>¿Cómo se realiza?</h2>
   <p>
      Es un procedimiento en el cual se toma una muestra de sangre y se procesa para
      tomar la parte rica en plaquetas y se activa para tener un mejor resultado del plasma.
  </p>
  </div>
</div>

<div class="row" style="width: 100%;">
  <div class="col-12">
    <img src="Laravel/Recursos/img/Tratamientos/Hormonas/esquinas2.png" width="100%">
  </div>
</div>


<div class="row" style="margin-top: 30px;width: 100%;margin-bottom: 30px;">
  <div class="col-12">
    <img src="Laravel/Recursos/img/Tratamientos/Peptonas/movil3.png" width="100%">
  </div>
</div>


@stop