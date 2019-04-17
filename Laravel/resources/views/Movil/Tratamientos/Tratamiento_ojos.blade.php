@extends('/Menu/Movil/barramenu')
<style>
    #contenedormaestro
    { 
        width: 100%;
        background-color: white;
    }
    label{
        font-family: brandon_reg !important;
        margin-bottom: 2px !important;
    }
    .conte
    {
       
        text-align: center;
    }
    .conte img
    {
        width: 100%;
    }
    h2,h1{
        color: #1197c0 !important;
        text-align: center;
    }
    p
    {
       color: #1197c0 !important;
       text-align: center;
       font-size: 5vw !important;
    }

    /* Ocultar botón radio */
    input[id^="spoiler"]{
    display: none;

    }
    /* Estilo botón clicable */
    input[id^="spoiler"] + label {
    display: block;
    text-align: center;
    width: 100%;
    padding: 10px 20px;
    background-color: #0280A7;
    color: white;
    cursor: pointer;
    }
    /* Estilo botón cuando su INPUT está seleccionado */
    input[id^="spoiler"]:checked + label {
    color: white;        
    background: #1197c0;
    }
    /* Estilo caja SPOILER (inicialmente oculto) */
    input[id^="spoiler"] ~ .spoiler {
    display: none;
    }
    /* Estilo caja SPOILER cuando su INPUT está seleccionado */
    input[id^="spoiler"]:checked + label + .spoiler{
        
        display: block;
        width: 100%;
        opacity: 1;
    }
    @media( orientation:portrait)
    {
        #titulo h1
        {
            font-size: 8vw;
        }
        h2,label
        {
            font-size: 6vw !important;
        }
        .conte
        {
            font-size: 5vw;
        }
    }
    @media(orientation:landscape)
    {

    }
    .text
    {
        width: 90%;
        margin-left: auto;
        margin-right: auto;
        text-align: center;
    }
    .fila
    {
        margin-top: 20px;
    }
    .img_boton img
    {
        margin: 20px 0;
    }
</style>

@section('content')



<div id="contenenedormaestro">
    <div  id="titulo" class="conte" style="margin-top: 20px;">
        <h1>PRP Ocular</h1>
    </div>
    <div class="row fila" style="margin-top: 10px">
        <div class="col-2"></div>
        <div class="col-12 conte">
            <div class="text">
                <p><b>¡Tratamiento progresivo de ojos!.</b></p>
            </div>
        </div>
    </div>
    <div class="row fila" style="margin-top: 10px">
        <div class="col-2"></div>
        <div class="col-12 conte">
            <div class="text">
                <p>La piel de los ojos es diferente al resto de la cara, por el constante movimiento y 
                    expresiones, tiende a generar más líneas al ser una piel más delicada. Requiere un proceso diferente.</p>
            </div>
        </div>
    </div>
    <div class="row fila" style="margin-top: 20px;">
        <div class="col-12 conte">
            <img src="Laravel\Recursos\img\Tratamientos\Tratamiento progresivo de ojos\Movil\prp1 – 1 movil.png">
        </div>
    </div>
    <div class=" row" style="margin-top: 20px;" >
        <div class="col-12 conte img_boton">
                <input type="checkbox" id="spoiler1" >
                <label for="spoiler1">¿Qué es?</label>
                <img src="Laravel\Recursos\img\Tratamientos\Tratamiento progresivo de ojos\Movil\prp1 – 4 movil.png" alt="" class="spoiler">                
        </div>
    </div>
    <div class=" row" style="">
        <div class="col-12 conte img_boton">
                <input type="checkbox" id="spoiler2">
                <label for="spoiler2">¿Qué tipos de pieles pueden utilizar este tratamiento?</label>
                <img src="Laravel\Recursos\img\Tratamientos\Tratamiento progresivo de ojos\Movil\prp1 – 5 movil.png" alt="" class="spoiler">                
        </div>
    </div>
    <div class=" row" style="">
        <div class="col-12 conte img_boton">
                <input type="checkbox" id="spoiler3">
                <label for="spoiler3">¿Cuántas sesiones son?</label>
                <img src="Laravel\Recursos\img\Tratamientos\Tratamiento progresivo de ojos\Movil\prp1 – 6 movil.png" alt="" class="spoiler" style="margin-bottom:0;">                
        </div>
    </div>
    <div class="row fila" style="margin-top: 20px;">
        <div class="col-12">
            <div  id="titulo">
                <h2>¿De qué manera funciona?</h2>
            </div>
        </div>
        <div class="col-12 conte">
            <img src="Laravel\Recursos\img\Tratamientos\Tratamiento progresivo de ojos\Movil\prp1 – 2 movil.png" alt="" class="spoiler">
        </div>
    </div>
    <div class="row fila" style="margin-top: 20px;">
        <div class="col-12 conte">
            <img src="Laravel\Recursos\img\Tratamientos\Tratamiento progresivo de ojos\Movil\prp1 – 3 movil.png">
        </div>
    </div>
    <div class="row fila" style="margin-top: 20px; margin-bottom:20px;">
        <div class="col-2"></div>
        <div class="col-12 conte">
            <div class="text">
                <p>La ventaja del uso del PRP como medicina "antiage"
                     o antienvejecimiento es la de utilizar una sustancia biológica fabricada por el propio organismo, libre de químicos y exenta de riesgos.</p>
            </div>
        </div>
    </div>
    
</div>


@stop