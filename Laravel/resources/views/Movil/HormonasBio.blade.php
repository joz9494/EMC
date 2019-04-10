@extends('/Menu/Movil/barramenu')
<style type="text/css">
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
    #txt_hormonas1
        {
            width: 100%;
            background-color:rgb(236,236,236);
            padding: 2%;
        }
    p{
      font-family:brandon_light !important;
      font-size: 5vw !important; 
      text-align: center !important;
    }
    h2{
      font-family: brandon_reg !important;
      font-size: 8vw !important;
      color: #0280A7 !important;
      text-align: center !important;
    }
    h1{
      font-family: brandon_reg !important;
      font-size: 8vw !important;
      color: #0280A7 !important;
      text-align: center;
    }
    #divconte1{
      background-image: url(Laravel/Recursos/img/Tratamientos/Hormonas/Hormonas-2.png);
    }
    .txtcomotitle{
      font-family: brandon_light;
      font-size: 4vw;
      color: #0280A7;
      margin-top: 40px;
    }

</style>
@section('content')





<div style="width: 100%;">
  <h1>Hormonas <br> Bio-Idénticas</h1>
</div> 

<div class="row" style="margin-top: 5px;">
      <div class="col-md-3"></div>
      <div id="carrusel_principal" class="col-md-6 ">
      <img id="Hormonas-1" src="Laravel/Recursos/img/Tratamientos/Hormonas/Hormonas-1.jpg" width="100%;" >
          <div id="txt_hormonas1">
              <p>Puedes tener síntomas que aparentan</p>
              <h2>"Estar fuera de control".</h2>
          </div>
    </div>
</div>

<div class="row" style="margin-top: 20px;">
      <div class="col-md-3"></div>
      <div id="carrusel_principal" class="col-md-6 ">
      <img src="Laravel/Recursos/img/Tratamientos/Hormonas/esquinas1.png" width="100%">
      <br>
      <h2>¿Que son las hormonas Bio-idénticas?</h2>
      <p>Son biológicamente idénticas, tienen una estructura molecular idéntica a las hormonas que produce el organismo, sin los efectos secundarios de las hormonas sintéticas.</p>
      <h2>¿Como funciona?</h2>
      <p>
        Mejoran la comunicación celular, recuperando el equilibrio y optimizan las funciones del organismo.
        Es un procedimiento donde se balancea el requerimiento hormonal donde se pide al paciente acudir con un estudio de sangre llamado Perfil Ovárico Femenino el cual debe incluir Estradiol, Progesterona, Hormona Folículo Estimulante, Hormona Luteinizante y prolactina.
      </p>
      <img src="Laravel/Recursos/img/Tratamientos/Hormonas/esquinas2.png" width="100%">
    </div>
</div>


<div class="row" style="margin-top: 20px;">
  <div class="col-md-3"></div>
  <div class="col-md-6" id="divconte1">
        <div id="txtimgfondo" class="col-md-2">
          <p class="txtcomotitle">¿Cómo se realiza?</p>
          <p>El estudio debe realizarse 14 días después de la menstruación, en caso de ya no tener menstruación el estudio se realiza en cualquier día.</p>
          <h2>¿De qué manera ajustamos las<br>hormonas bio-idénticas?</h2>
        </div>
  </div>
</div>

@stop