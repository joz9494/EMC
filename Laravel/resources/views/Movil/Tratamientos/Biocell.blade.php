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

<div class="row">
  <div class="col-md-4"></div>
  <div class="col-md-4">
    <img src="Laravel/Recursos/img/tratamientos/Movil/Logo Biocell800.png" width="100%">
  </div>
</div>


<div class="row" style="margin-top: 30px;text-align: center;">
  <div class="col-12">
    <p>La célula es la parte más pequeña y maravillosa del organismo, se deterioran con el tiempo, por el estilo de vida o la herencia genética, causando enfermedades, mutaciones celulares y dolencias crónicas.
    La terapia en renovación celular, estimula los mecanismos propios de las células, especialmente al sistema inmunológico, activando sus funciones para hacer rejuvenecimiento nuestros órganos y evitar los riesgos a contraer enfermedades degenerativas. Human Ultracell V ha logrado proveer al ser humano de salud celular para lucir joven por fuera y alargar su vida ayudando a prevenir el envejecimiento orgánico y sus secuelas.</p>
  </div>
</div>

<div style="width: 100%;margin-top: 30px;">
    <img src="Laravel/Recursos/img/Biocel/Biocell Movil2.jpg" width="100%;">
</div>

<div style="width: 100%;margin-top: 20px;">
    <img src="Laravel\Recursos\img\Biocel\Biocell  Movil1.jpg" width="100%;">
</div>

<div style="width: 100%;margin-top: 20px;">
    <img src="Laravel/Recursos/img/Biocel/Biocell Version Movil.jpg" width="100%;">
</div>

<div style="width: 100%;margin-top: 30px;margin-bottom: 30px;">
    <img src="Laravel/Recursos/img/Biocel/Biocell Version Movil1.jpg" width="100%;">
</div>



@stop