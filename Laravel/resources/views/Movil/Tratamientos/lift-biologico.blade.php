@extends('/Menu/Movil/barramenu')
<style>
    #contenedormaestro
    { 
        width: 100%;
        background-color: white;
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
    h2{
        font-size: 8vw !important;
        color: #1197c0 !important;
        text-align: center;
    }
    p,#beneficios li
    {
       color: #1197c0 !important;
       text-align: center;
       font-size: 5vw !important;
    }
    #beneficios li::before {content: "•"; color:#0280A7;}

    /* Ocultar botón radio */
    input[id^="spoiler"]{
    display: none;

    }
    /* Estilo botón clicable */
    input[id^="spoiler"] + label {
    display: block;
    text-align: center;
    width: 80%;
    margin-left: auto;
    margin-right: auto;
    padding: 5px 20px;
    background-color: #0280A7;
    color: white;
    cursor: pointer;
    }
    /* Estilo botón cuando su INPUT está seleccionado */
    input[id^="spoiler"]:checked + label {
    color: white;;
    background: #ccc;
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
        h2
        {
            font-size: 6vw !important;
        }
        .conte,#beneficios li,#beneficios li::before
        {
            font-size: 5vw;
        }
    }
    @media(orientation:landscape)
    {

    }
    #beneficios
    {
        padding: 10%;
    }
</style>

@section('content')



<div id="contenenedormaestro">
    <div  id="titulo" class="conte" style="margin-top: 20px;">
        <h2>Lift Biológico</h2>
    </div>
    <div class="row">
        <div class="col-2"></div>
        <div id="pregunta" class="col-8">
            <p>¿De qué están compuestos los hilos? O ¿Hilos mágicos?</p>
        </div>
    </div>
    <div class="row" style="margin-top: 10px;">
        <div class="col-12 conte">
            <img src="Laravel\Recursos\img\LiftBiologico\Movil\iPhone 6-7-8 Plus – 6.png">
        </div>
    </div>
    <div class="row">
        <div class="col-12 conte" style="margin-top: 30px;">
            <img src="Laravel\Recursos\img\LiftBiologico\Movil\iPhone 6-7-8 Plus – 7.png">
        </div>
    </div>
    <div class="row" style="margin-top: 30px;">
        <div class="col-12">
            <div  id="titulo">
                <h2>¿Seguridad?</h2>
            </div>
            <div class="col-12 conte">
                <img src="Laravel\Recursos\img\LiftBiologico\Movil\iPhone 6-7-8 Plus – 8.png">
            </div>
        </div>
    </div>
    <div class="row" style="margin-top: 30px;">
        <div class="col-12">
            <div  id="titulo">
                <h2>¿Cómo funciona?</h2>
            </div>
            <div class="col-12 conte">
                <div class="text">
                    <p>
                        Se implantan en la dermis con una aguja guía, activando los fibroblastos, para generar colágeno y elastina, provocando un efecto lifting inmediato y aportando a los pacientes un moldeado natural al rostro y al cuerpo.<br>
                        Su implantación es sencilla y rápida, permitiendo el desarrollo normal de la actividad cotidiana, no produce cortes, marcas ni cicatrices.
                        Es un tratamiento rápido, cómodo y seguro.<br>   
                        La técnica es totalmente individualizada para cada paciente dependiendo de la edad, la fisonomía y el grado de flacidez, pero en una sesión estándar se suelen insertar entre 10 y 20 hilos.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class=" row" style="margin-top: 30px;">
        <div class="col-12 conte">
                <input type="checkbox" id="spoiler1"></input>
                <label for="spoiler1">¿Cómo se origina?</label>
                <img src="Laravel\Recursos\img\LiftBiologico\Movil\iPhone 6-7-8 Plus – 9.png" alt="" class="spoiler">                
        </div>
    </div>
    <div class=" row">
        <div class="col-12 conte">
                <input type="checkbox" id="spoiler2"></input>
                <label for="spoiler2">¿Cuánto dura?</label>
                <img src="Laravel\Recursos\img\LiftBiologico\Movil\iPhone 6-7-8 Plus – 13.png" alt="" class="spoiler">                
        </div>
    </div>
    <div class=" row">
        <div class="col-12 conte">
                <input type="checkbox" id="spoiler3"></input>
                <label for="spoiler3">¿Para quien esta indicando?</label>
                <img src="Laravel\Recursos\img\LiftBiologico\Movil\iPhone 6-7-8 Plus – 14.png" alt="" class="spoiler">                
        </div>
    </div>
    <div class=" row">
        <div class="col-12 conte">
                <input type="checkbox" id="spoiler4"></input>
                <label for="spoiler4" style="font-size: 8vw;">Beneficios</label>
                <div id="beneficios" class="spoiler col-12">
                        <p>
                                <ul style="margin-left: -20px;text-align: justify;">
                                    <li style="text-align: justify !important;">Lifting de frente.</li>
                                    <li style="text-align: justify !important;">Estirar y retira el exceso de piel.</li>
                                    <li style="text-align: justify !important;">Elevación de pómulos.</li>
                                    <li style="text-align: justify !important;">Aspecto más joven y natural.</li>
                                    <li style="text-align: justify !important;">Surcos Nasogenianos o arrugas de amargura.</li>
                                    <li style="text-align: justify !important;">Se denominan "surcos nasogenianos" o "pliegues nasolabiales" a las arrugas que se producen <font style="margin-left: 14px;">desde el final de la nariz y que descienden oblicuamente hasta ambos extremos de la boca.</font></li>
                                </ul>
                            </p>
                </div>                
        </div>
    </div>
</div>


@stop