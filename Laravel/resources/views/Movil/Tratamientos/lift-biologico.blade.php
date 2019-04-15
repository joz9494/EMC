@extends('/Menu/Movil/barramenu')
<style>
    #contenedormaestro
    { 
        width: 100%;
        background-color: white;
    }
    .conte
    {
       
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
            font-size: 8vw !important;
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
        padding-bottom: 0;
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
</style>

@section('content')



<div id="contenenedormaestro">
    <div  id="titulo" class="conte" style="margin-top: 20px;">
        <h2>Lift Biológico</h2>
    </div>
    <div class="row fila" style="margin-top: 0px;">
        <div class="col-2"></div>
        <div class="col-12 conte">
            <div class="text">
                <p>El lift biológico revitaliza la piel que tiene apariencia de “colgada”.</p>
            </div>
        </div>
    </div>
    <div class="row fila" style="margin-top: 10px;">
        <div class="col-12 conte">
            <img src="Laravel\Recursos\img\Tratamientos\LiftBiologico\Movil\iPhone 6-7-8 Plus – 19.png">
        </div>
    </div>
    <div class="row fila" style="margin-top: 20px;">
        <div class="col-2"></div>
        <div class="col-12 conte">
            <div class="text">
                <p>Revolucionaria técnica de rejuvenecimiento facial que estimula los tejidos
                    internos para reafirmar la piel y corregir la flacidez.</p>
            </div>
        </div>
    </div>
    <div class="row fila">
        <div class="col-12 conte" >
            <img src="Laravel\Recursos\img\Tratamientos\LiftBiologico\Movil\iPhone 6-7-8 Plus – 15.png">
        </div>
    </div>
    <div class="row fila " style="margin-top: 20px;">
            <div class="col-2"></div>
            <div class="col-12 conte">
                <div class="text">    
                    <p>Son Hilos de gran calidad, están compuestos de PDO (Polidioxanona).
                            Son conocidos como hilos mágicos ya que el material del que están fabricados es capaz de formar tejido de soporte de forma natural al producir colágeno y fibroblastos alrededor del hilo insertado que tensan y tensar la piel. 
                            </p>
                </div>
            </div>
        </div>
    <div class="row fila" style="margin-top:20px;">
        <div class="col-12 conte">
            <img src="Laravel\Recursos\img\Tratamientos\LiftBiologico\Movil\iPhone 6-7-8 Plus – 17.png">
        </div>
    </div>
    <div class="row fila" style="margin-top: 20px;">
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
    <div class=" row" style="margin-top: 20px;" >
        <div class="col-12 conte">
                <input type="checkbox" id="spoiler1"></input>
                <label for="spoiler1">¿Cómo se origina?</label>
                <img src="Laravel\Recursos\img\Tratamientos\LiftBiologico\Movil\iPhone 6-7-8 Plus – 9.png" alt="" class="spoiler">                
        </div>
    </div>
    <div class=" row" style="margin-top: 10px;">
        <div class="col-12 conte">
                <input type="checkbox" id="spoiler2"></input>
                <label for="spoiler2">¿Cuánto dura?</label>
                <img src="Laravel\Recursos\img\Tratamientos\LiftBiologico\Movil\iPhone 6-7-8 Plus – 13.png" alt="" class="spoiler">                
        </div>
    </div>
    <div class=" row" style="margin-top: 10px;">
        <div class="col-12 conte">
                <input type="checkbox" id="spoiler3"></input>
                <label for="spoiler3">¿Para quien esta indicando?</label>
                <img src="Laravel\Recursos\img\Tratamientos\LiftBiologico\Movil\iPhone 6-7-8 Plus – 14.png" alt="" class="spoiler">                
        </div>
    </div>
    <div class=" row" style="margin-top: 10px;margin-bottom: 20px;">
        <div class="col-12 conte">
                <input type="checkbox" id="spoiler4"></input>
                <label for="spoiler4">Beneficios</label>
                <div id="beneficios" class="spoiler col-12 ">
                        <p>
                            <ul style="text-align: justify;margin-top: -25px;">
                                <li style="text-align: justify !important;"><font style="margin-left: 10px;">Lifting de frente.</font></li>
                                <li style="text-align: justify !important;"><font style="margin-left: 10px;">Estirar y retira el exceso de piel.</font></li>
                                <li style="text-align: justify !important;"><font style="margin-left: 10px;">Elevación de pómulos.</font></li>
                                <li style="text-align: justify !important;"><font style="margin-left: 10px;">Aspecto más joven y natural.</font></li>
                                <li style="text-align: justify !important;"><font style="margin-left: 10px;">Surcos Nasogenianos o arrugas de amargura.</font></li>
                                <li style="text-align: justify !important;"><font style="margin-left: 10px;">Se denominan "surcos nasogenianos" o "pliegues nasolabiales" a las arrugas que se producen desde el final de la nariz y que descienden oblicuamente hasta ambos extremos de la boca.</font></li>
                            </ul>
                            </p>
                </div>                
        </div>
    </div>
</div>


@stop