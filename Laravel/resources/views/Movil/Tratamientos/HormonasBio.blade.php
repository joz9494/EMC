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
      color: black;
    }
    h2{
      font-family: brandon_reg !important;
      font-size: 5.5vw !important;
      color: #0280A7 !important;
      text-align: center !important;
    }
    h1{
      font-family: brandon_reg !important;
      font-size: 8vw !important;
      color: #0280A7 !important;
      text-align: center;
    }
    
    #contenedor1{
      position: relative;
    }

</style>
@section('content')




<!-- Sección 1 de titulo   -->
<div style="width: 100%;margin-top: 5px;margin-bottom: 5px;">
  <h1>Hormonas Bio-Idénticas</h1>
</div> 

<div class="row" style="margin-top: 5px;">
      <div id="carrusel_principal" class="col-12">
      <img id="Hormonas-1" src="Laravel/Recursos/img/Tratamientos/Hormonas/Hormonas-1.jpg" width="100%;" >
          <div id="txt_hormonas1">
              <p>Puedes tener síntomas que aparentan</p>
              <p style="font-family: brandon_reg !important;">"Estar fuera de control".</p>
          </div>
    </div>
</div>



<!-- Sección 2 que son las hormonas -->
<div class="row" style="margin-top: 30px;">
      <div id="carrusel_principal" class="col-md-12">
      <img src="Laravel/Recursos/img/Tratamientos/Hormonas/esquinas1.png" width="100%">
      <br>
      <h2>¿Qué son las hormonas <br> Bio-idénticas?</h2>
      <p style="margin-top: 10px;">Son biológicamente idénticas, tienen una estructura molecular idéntica a las hormonas que produce el organismo, sin los efectos secundarios de las hormonas sintéticas.</p>
      <br>
      <h2>¿Como funciona?</h2>
      <p style="margin-top: 10px;">Mejoran la comunicación celular, recuperando el equilibrio y optimizan las funciones del organismo.<br>
        Es un procedimiento donde se balancea el requerimiento hormonal donde se pide al paciente acudir con un estudio de sangre llamado Perfil Ovárico Femenino el cual debe incluir Estradiol, Progesterona, Hormona Folículo Estimulante, Hormona Luteinizante y prolactina.
      </p>
      <img src="Laravel/Recursos/img/Tratamientos/Hormonas/esquinas2.png" width="100%">
    </div>
</div>





<!-- Sección 3 como se realiza   -->

<div style="width: 100%;margin-top: 30px;">
    <img src="Laravel/Recursos/img/Tratamientos/Hormonas/Hormonas movilA.png" width="100%;">
</div>




<!-- Sección 4 quien puede usarlo   -->

<img src="Laravel/Recursos/img/Tratamientos/Hormonas/esquinas1.png" width="100%" style="margin-top: 40px;">

<div class="row">
  <div class="col-md-12">
    <h2>¿Quién puede usarlo?</h2>
    <p style="margin-top: 10px;">Es una alternativa para las mujeres que enfrentan los cambios de la menopausia, pero también es una opción tanto para hombres y mujeres de distintas edades. <br></p>
    <br>
    <h2>¿Es un tratamiento para la mesopausa?</h2>
    <p style="text-align : center;margin-top: 10px;">Es una alternativa para aquellas mujeres que sufren los síntomas de la menopausia temprana y que buscan poner fin a los bochornos o calores, la sudoración nocturna, la pérdida de la memoria, los cambios de ánimo, el aumento de peso y la disminución del apetito sexual son pacientes recurrentes en este tratamiento que le ayudará a terminar con estas molestias.</p>
    <br>
    <h2>¿Beneficios para los hombres?</h2>
    <p style="text-align : center;margin-top: 10px;">A la edad de 80 años, el nivel de testosterona de un hombre sólo puede ser de 20% de lo que fue en su juventud. <br> Esta disminución de la testosterona se produce gradualmente, comenzando ya a mediados de los 30 años.<br>
    La deficiencia de testosterona también puede conducir a una serie de síntomas molestos, como la pérdida de resistencia y masa muscular, la reducciún de la libido, ansiedad, depresión y deterioro cognitivo. <br> La deficiencia de testosterona puede ser revertida mediante el tratamiento de  hormonas bioidénticas.</p>
  </div>
</div>

<img src="Laravel/Recursos/img/Tratamientos/Hormonas/esquinas2.png" width="100%" style="margin-top: 0px;">


<!-- Sección 5 como dura -->
<div style="width: 100%;margin-top: 30px;margin-bottom: 30px">
    <img src="Laravel/Recursos/img/Tratamientos/Hormonas/Hormonas-Movil1A.png" width="100%;">
</div>

@stop