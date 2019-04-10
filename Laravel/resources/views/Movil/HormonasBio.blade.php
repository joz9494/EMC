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
  .text-img{
            position: absolute;
            top: 55%;
            padding: 4%;
            color: black;
        }
</style>
@section('content')

<div id="titulo" class="row">
      <div class="col-md-2"></div>
      <div class="col-md-2 conte" style="margin-top: -8px;">
          <h1>Hormonas Bio-Idénticas</h1>
      </div> 
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

<div class=" row" style="margin-bottom: 50px;">
    <div class="col-md-3"></div>
          <div class="imagen_text">
                <img src="Laravel/Recursos/img/Tratamientos/Hormonas/Esquinas.png">
                    <div id="esquinas1"  class="text-img ">
                        <h2> ¿Que son las hormonas Bio-idénticas?</h2>
                        <p style="text-align : justify;">
                        Son biológicamente idénticas, tienen una estructura molecular idéntica a las hormonas que produce el organismo, sin los efectos secundarios de las hormonas sintéticas.
                        </p>
                        <h2>¿Como funciona?</h2>
                        <p style="text-align : justify;">
                        Mejoran la comunicación celular, recuperando el equilibrio y optimizan las funciones del organismo.
                        Es un procedimiento donde se balancea el requerimiento hormonal donde se pide al paciente acudir con un estudio de sangre llamado Perfil Ovárico Femenino el cual debe incluir Estradiol, Progesterona, Hormona Folículo Estimulante, Hormona Luteinizante y prolactina.
                          </p>
                    </div>
            </div>
      </div>

@stop