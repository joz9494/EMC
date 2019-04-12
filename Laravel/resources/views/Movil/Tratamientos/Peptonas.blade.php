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
</style>

@section('content')

<div style="width: 100%;margin-top: 10px;margin-bottom: 10px;">
  <h1>Peptonas</h1>
</div> 

<div class="row" style="margin-top: 10px;width: 100%;">
  <div class="col-12">
    <img src="Laravel/Recursos/img/Tratamientos/Peptonas/movil1.png" width="100%">
  </div>
</div>

<div class="row" style="margin-top: 30px;width: 100%;">
  <div class="col-12">
    <img src="Laravel/Recursos/img/Tratamientos/Peptonas/movil2.png" width="100%">
  </div>
</div>

<div class="row" style="margin-top: 30px;width: 100%;margin-bottom: 30px;">
  <div class="col-12">
    <img src="Laravel/Recursos/img/Tratamientos/Peptonas/movil3.png" width="100%">
  </div>
</div>


@stop