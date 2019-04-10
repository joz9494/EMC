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
    #contenedormaestro
    {
            background-color: white;
            width: 100%;
            margin-bottom: 150px;
    }
    #descripcion1
    {
        z-index: 2;
        position: relative;
        margin-top: -150%;
        margin-left: auto;
        margin-right: auto;
        width: 80%;
        text-align: center;
        
    }
    .caja
     {
         width: 100%;
         margin-bottom: 1%;
         border: #0280A7 1px solid;background-color: white;font-family:brandon_light;
     }
     h1{
      font-family: brandon_reg !important;
      color: #0280A7 !important;
      font-size: 8vw !important;
     }
     p{
      font-family: brandon_light !important;
      color: black !important;
      font-size: 5vw !important;
     }
     ::placeholder{
      color: #0280A7 !important;
      font-family: brandon_light !important;
     }
  
</style>
@section('content')
<div id="contenedormaestro">

  <img src="Laravel/Recursos/img/Contacto/Movil.png" width="100%">

  <div id="descripcion1">
      <h1>Contáctanos</h1>
      <p>Estamos disponibles para contestar tus<br>dudas, deja tus datos y te responderemos a la brevedad.</p>

      <div class="caja" style="margin-top: 5%;"><input type="text" name="name" placeholder="Nombre *"></div>
      <div class="caja"><input type="text" name="name" placeholder="Apellido *"> </div>
      <div class="caja"><input type="text" name="name" placeholder="Email *"></div>
      <div class="caja"><input type="text" name="name" placeholder="Teléfono"> </div>
      <div class="caja">
          <textarea id="mensaje" placeholder="Mensaje" rows="5" style="width:100%;"></textarea>
      </div>
      <div style="text-align:right;margin-top: 10px;">
          <button class="btn btn-primary btn-sm" style="background-color: #0280A7">Enviar</button>
      </div>
  </div>

</div>
@stop