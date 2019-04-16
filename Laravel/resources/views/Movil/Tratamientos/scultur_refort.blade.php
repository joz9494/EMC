@extends('/Menu/Movil/barramenu')
<style>
    #contenedormaestro
    { 
        width: 100%;
        background-color: white;
    }
    h2,h1{
        font-family: brandon_reg !important;
    }
    p
    {
        font-family: brandon_light !important;
    }
    .conte
    {
        margin-top: 5px;margin-bottom: 5px;
        text-align: center;
    }
    .conte img
    {
        width: 100%;
    }
    h2,h1,p{
        color: #1197c0 !important;
        text-align: center;
    }
    p
    

    @media( orientation:portrait)
    {
        #titulo h1
        {
            font-size: 8vw !important;
        }
        h2
        {
            font-size: 5.5vw !important;
        }
        p
        {
            font-size: 5vw;
        }
    }
    @media(orientation:landscape)
    {
        h2
        {
            font-size: 5.5vw !important;
        }
        .conte,#beneficios li,#beneficios li::before,p
        {
            font-size: 5.5vw;
        }
    }
    #marco1
    {
        padding:2% 3%;
    }
    #marco2
    {
        padding:2% 5%;
    }
    .esquinas
    {
        padding: 2%;
    }
    h1{
        text-align: center;
    }
</style>

@section('content')



<div id="contenenedormaestro">
    <div  id="titulo" class="conte" style="margin-top: 20px;">
        <h1 style="font-size:8vw;">Scultur Refort</h1>
    </div>
    <div class="row" style="margin-top: 20px;">
        <div class="col-12 conte">
            <img src="Laravel\Recursos\img\Tratamientos\Scultur Refort\refort movil 1.png">
        </div>
    </div>
    <div class="row" style="margin-top: 20px;">
        <div class="col-12 conte">
            <div id="marco1">
                <h2 style="font-size:5.5vw;">¿Cómo funciona?</h2>
                <p style="font-size:5vw;">Actúa como re-estructurante y estimulante de la formación de fibras de colágeno y elastina. <br>
                <b>¡Es para todo tipo de piel!</b></p>
            </div>
        </div>
    </div>

<div class="row" style="margin-top: 20px;margin-bottom: 20px;">
    <div class="col-12 conte">
        <img src="Laravel\Recursos\img\Tratamientos\Scultur Refort\refort movil 2.png">
    </div>
</div>
@stop