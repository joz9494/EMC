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
    h2,h1{
        color: #1197c0 !important;
        text-align: center;
    }
    p
    {
       text-align: center;
    }

    @media( orientation:portrait)
    {
        #titutlo h1
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
        padding:2% 10%;
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
        <h1>Rinomodelacion</h1>
    </div>
    <div class="row" style="margin-top: 20px;">
        <div class="col-12 conte">
            <img src="Laravel\Recursos\img\Tratamientos\Rinomodelacion\RinomodelaciónMovilv2.png">
        </div>
    </div>
    <div class="row">
        <div class="col-12 conte" style="margin-top: 20px;">
            <img src="Laravel\Recursos\img\Tratamientos\Rinomodelacion\RinomodelaciónMovil-1b.png">
        </div>
    </div>
    
    <div class="row">
        <div class="col-12 conte">
            <img src="Laravel/Recursos/img/Tratamientos/Hormonas/esquinas1.png" width="100%" style="margin-top: 20px;" class="esquinas">
            <div id="marco1">
                <h2>¿Es una cirugía?</h2>
                <p>No, es una técnica sin necesidad de someterse a complicadas cirugías.</p>
                <br>
                <h2>¿Necesita recuperación?</h2>
                <p>La recuperación es muy llevadera, el paciente puede hacer vida normal prácticamente desde la 
                    salida de la clínica. Si bien se recomienda tener cuidado a la hora de dormir, tratando
                    de mantener siempre la nariz arriba. Al igual se recomienda tener cuidados en los primeros días de dormir cabeza arriba evitando que nuestra nariz se apoye contra la almohada o cualquier superficie.</p>
                <br>
                <h2>¿Requiere   anestesia?</h2>
                <p>Se utiliza anestesia local.</p>
            </div>
            <img src="Laravel/Recursos/img/Tratamientos/Hormonas/esquinas2.png" width="100%" style="margin-top: 0px;" class="esquinas">
        </div>
    </div>

<div class="row" style="margin-top: 20px;">
    <div class="col-12 conte">
        <img src="Laravel\Recursos\img\Tratamientos\Rinomodelacion\RinomodelaciónMovil-2.png">
    </div>
</div>
<div class="row">
        <div class="col-12 conte">
            <img src="Laravel/Recursos/img/Tratamientos/Hormonas/esquinas1.png" width="100%" style="margin-top: 20px;" class="esquinas">
            <div id="marco2">
                    <h2>¿A qué edad puede aplicarse este procedimiento?</h2>
                    <p>Puede ser aplicado a partir de <br>los 15 o 60 años.</p>
                    <br>
                    <h2>¿En cuánto tiempo veo los resultados?</h2>
                    <p>Los resultados son inmediatamente. </p>
            </div>
            <img src="Laravel/Recursos/img/Tratamientos/Hormonas/esquinas2.png" width="100%" style="margin-bottom: 20px;" class="esquinas">
        </div>
    </div>
@stop