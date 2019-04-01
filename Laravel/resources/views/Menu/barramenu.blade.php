<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">  
        <link rel="icon" type="image/png" href="Laravel/Recursos/images/icons/favicon.png"/>
        <link rel="stylesheet" type="text/css" href="Laravel/Recursos/vendor/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="Laravel/Recursos/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="Laravel/Recursos/fonts/iconic/css/material-design-iconic-font.min.css">
        <link rel="stylesheet" type="text/css" href="Laravel/Recursos/fonts/linearicons-v1.0.0/icon-font.min.css">
        <link rel="stylesheet" type="text/css" href="Laravel/Recursos/vendor/animate/animate.css">  
        <link rel="stylesheet" type="text/css" href="Laravel/Recursos/vendor/css-hamburgers/hamburgers.min.css">
        <link rel="stylesheet" type="text/css" href="Laravel/Recursos/vendor/animsition/css/animsition.min.css">
        <link rel="stylesheet" type="text/css" href="Laravel/Recursos/vendor/select2/select2.min.css">  
        <link rel="stylesheet" type="text/css" href="Laravel/Recursos/vendor/daterangepicker/daterangepicker.css">
        <link rel="stylesheet" type="text/css" href="Laravel/Recursos/vendor/slick/slick.css">
        <link rel="stylesheet" type="text/css" href="Laravel/Recursos/vendor/MagnificPopup/magnific-popup.css">
        <link rel="stylesheet" type="text/css" href="Laravel/Recursos/vendor/perfect-scrollbar/perfect-scrollbar.css">
        <link rel="stylesheet" type="text/css" href="Laravel/Recursos/css/util.css">
        <link rel="stylesheet" type="text/css" href="Laravel/Recursos/css/main.css">
        <link rel="stylesheet" type="text/css" href="Laravel/Recursos/BRANDON_REG.otf">
        <link rel="stylesheet" type="text/css" href="Laravel/Recursos/BRANDON_BLD.otf">
        <style>
            html, body {
                background-color: #1197c0;
            }
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

            #fottmobi{
                display: none;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            #barramenu{
            width: 100%;
            height: 12%;
            background-color: #1197c0;
            display: inline-block;
            }
            #letrasmenu{
            font-family: brandon_light;
            color: white;
            font-size: 21px;
            margin-top: 10px;
            }
            #letrasmenuA{
            font-family: brandon_light;
            color: white;
            font-size: 21px;
            }
            #letrasmenuA2{
            font-family: brandon_light;
            color: white;
            font-size: 21px;
            display: none;
            }
            #linea{
            border-bottom:solid 1px white;
            width:100%;
            height:1px;
            background-color: white;
            }

            #lineaActiva{
            border-bottom:solid 1px white;
            width:100%;
            height:5px;
            background-color: white;
            }
            #activarmenu:hover #linea{
                height: 5px;
            }
            #activarmenuL:hover #linea{
                height: 5px;
            }
            #btnfooter:hover{
                color: black;
                font-weight: bold;
            }
            #btnfooter{
                font-family: brandon_reg;
            }
            #Linea1{
            background-color: #1197c0;
            }
            #Linea2{
            width: 3px;
            height: 270px;
            background-color: #1197c0;
            margin-top: -40px;
            margin-left: 40px;
            }
            #sec1{
                margin-left: 50%;
            }
            #sec2{
                margin-left: 25%;
            }

            @media screen and (max-width: 1800px){
            #letrasmenuA2{
            display: block;
            position: relative;
            margin-top: 5px;
            } 
            #letrasmenuA{
            display: none;
            } 
            }

            @media screen and (max-width: 1600px){
                #activarmenuL{
                    margin-left: 6% !important;
                }
            }

            @media screen and (max-width: 1100px){
                #imglogo{
                    width: 40px;
                    height: 40px;
                }
                #letrasmenu{
                    font-size: 15px;
                }
                #barramenu{
                    height: 5%;
                }
                #letrasmenu{
                    display: block;
                }
                #letrasmenuA{
                    display: none;
                    font-size: 15px;
                }
                #letrasmenuA2{
                    display: block;
                    font-size: 15px;
                }
                #navmenu{
                    margin-left: 2%;
                }
                #sec1{
                    margin-left: 47%;
                }
                #sec2{
                    margin-left: 17%;
                }
            }
            @media screen and (max-width: 800px){
                #navmenu{
                    margin-left: -5%;
                }
            }
            </style>
    </head>
    <body>

    <!-- Menu de inicio -->
    <table width="100%">
        <thead>
            <tr>
                <td style="width: 25%;"></td>
                <td style="width: 50%;">
                    <div id="barramenu">
                        <div class="menu-desktop" id="navmenu">
                            <ul class="main-menu" id="navmenu" style="width: 100%">
                                <a href="{{ url('/') }}"><img src="Laravel/Recursos/img/BaseMenu/logo.png" id="imglogo" width="100px" height="100px" style="margin-top: 10px;margin-bottom: 10px;margin-left: -5%;"></a              >
                                <li id="activarmenuL" style="margin-left: 15%;">
                                    <?php
                                    $url= $_SERVER["REQUEST_URI"];
                                    ?>
                                    @if ($url == '/EMC/')
                                    <div id="lineaActiva"></div>
                                    @else
                                    <div id="linea"></div>
                                    @endif
                                    <div style="margin-top: 5px;">
                                    </div>
                                    <a href="{{ url('/') }}" id="letrasmenu">Inicio</a>
                                </li>
                
                                <li id="activarmenu" style="margin-left: 4%;">
                                    <?php
                                    $url= $_SERVER["REQUEST_URI"];
                                    ?>
                                    @if ($url == '/EMC/Servicios')
                                    <div id="lineaActiva"></div>
                                    @else
                                    <div id="linea"></div>
                                    @endif
                                    <div style="margin-top: 5px;"></div>
                                    <a href="{{ url('/Servicios') }}" id="letrasmenu">Servicios</a>
                                </li>

                                <li id="activarmenu" style="margin-left: 4%;">
                                    <?php
                                    $url= $_SERVER["REQUEST_URI"];
                                    ?>
                                    @if ($url == '/EMC/Acerca_de_EMC')
                                    <div id="lineaActiva"></div>
                                    @else
                                    <div id="linea"></div>
                                    @endif
                                    <div style="margin-top: 5px;"></div>
                                    <a href="{{ url('/Acerca_de_EMC') }}" id="letrasmenuA">
                                    Acerca de E.M.C</a>
                                    <a href="{{ url('/Acerca_de_EMC') }}" id="letrasmenuA2">E.M.C</a>
                                </li>
                
                                <li id="activarmenu" style="margin-left: 4%;">
                                    <?php
                                    $url= $_SERVER["REQUEST_URI"];
                                    ?>
                                    @if ($url == '/EMC/Tratamientos')
                                    <div id="lineaActiva"></div>
                                    @else
                                    <div id="linea"></div>
                                    @endif
                                    <div style="margin-top: 5px;"></div>
                                    <a href="{{ url('/Tratamientos') }}" id="letrasmenu">Tratamientos</a>
                                </li>
                
                                <li id="activarmenu" style="margin-left: 4%;">
                                    <?php
                                    $url= $_SERVER["REQUEST_URI"];
                                    ?>
                                    @if ($url == '/EMC/Contacto')
                                    <div id="lineaActiva"></div>
                                    @else
                                    <div id="linea"></div>
                                    @endif
                                    <div style="margin-top: 5px;"></div>
                                    <a href="{{ url('/Contacto') }}" id="letrasmenu">Contacto</a>
                                </li>
                
                            </ul>
                        </div>
                    </div>

                </td>
                <td style="width: 25%;"></td>
            </tr>
        </thead>
    </table>
    




    @yield('content')





    <!-- Footer principal -->
    <footer class="bg3 p-t-75 p-b-32" id="fott" style="margin-top: 15px;background-color: #FFFFFF;height: 25%;">
       <table width="100%" style="margin-top: -75px">
           <tbody>
               <tr>
                <!-- Sección uno -->
                 <td style="width: 38%;">
                    <div id="sec1">
                    <h4 style="color: #079EE2;margin-left: 45px;font-family: brandon_reg;margin-top: 5px"> 
                        Citas
                    </h4>
                    <ul>
                        <table>
                            <thead>
                                <tr>
                                    <td><img src="Laravel/Recursos/img/BaseMenu/Whatsp.png" width="35px"></td>
                                    <td style="margin-left: 30px;">
                                        <li>
                                         <font style="font-size: 15px;font-family: brandon_reg;">+52 (461) 132 4851</font>
                                        </li>
                                        <li class="p-b-10">
                                        <font style="font-size: 15px;font-family: brandon_reg;">+52 (461) 138 6905</font>
                                        </li>
                                    </td>
                                    <td></td>
                                </tr>
                            </thead>     
                        </table>
                        <li style="margin-top: 30px;">
                            <button type="button" id="btnfooter" data-toggle="modal" data-target="#exampleModal2">
                            <p class="stext-107 cl6 txt-center" style="color: #0081a9;font-size: 16px;font-family: brandon_reg;">
                            Términos y condiciones
                            </p>
                        </button>
                        </li>
                    </ul>
                    </div>
                 </td>

                <!-- Sección dos linea -->
                 <td style="width: 2px">
                    <div id="Linea1" style="height: 180px;"></div> 
                 </td>


                <!-- Sección 3 -->
                   <td style="width: 23.5%">
                    <div id="sec2">
                       <h4 style="color: #079EE2;margin-left: 35px;font-family: brandon_reg;">
                        Horarios
                        </h4>
                        <font style="margin-left: 30px;font-size: 15px;font-family: brandon_reg;">Lunes a viernes</font><br>
                        <font style="font-size: 15px;font-family: brandon_reg;margin-left: -10px">9 a.m. a 2 p.m. y 4 p.m. a 7 p.m.</font>
                        <br>

                        <p class="stext-107 cl7 size-201">
                            <br>
                            <h4 style="color: black;margin-left: 35px;font-family: brandon_reg;color: #5E5D5D">Sábados</h4>
                            <font style="font-weight: bold;color: #5E5D5D;font-size: 15px;font-family: brandon_reg;">Atendemos con previa cita.</font>
                        </p>
                    </div>
                   </td>


                   <!-- Sección cuatro linea -->
                 <td style="width: 2px">
                    <div id="Linea1" style="height: 180px;"></div> 
                 </td>


                    <!-- Sección cinco -->
                   <td style="width: 38%">
                    <div style="margin-left: 10%;">
                      <form>
                        <div class="p-t-18">
                            <font style="font-family: brandon_reg;font-size: 15px;"> © 2019 Eterna Medical Center<br> by <a style="color: #5E5D5D" href="{{ url('http://crowdsulting.com/') }}">Crowdsulting V-Solutions</a></font>
                        </div>
                        <div style="margin-top: 5px;margin-left: -40px;">
                            <div id="fb-root"></div>
                            <script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v3.2"></script>
                            <div class="fb-like" data-href="https://www.eterna-medical.com/" data-width="200" data-layout="standard" data-action="like" data-size="small" data-show-faces="false" data-share="false"></div>
                        </div>
                        <br>
                        <button type="button" id="btnfooter" data-toggle="modal" data-target="#exampleModal">
                            <p class="stext-107 cl6 txt-center" style="color: #0081a9;font-size: 16px;font-family: brandon_reg;">
                            Políticas de privacidad
                            </p>
                        </button>
                    </form> 
                    </div>
                   </td>

               </tr>
                
            </div>

           </tbody>
       </table>

       <td style="width: 2px;">
            <div id="Linea1" style="height: 80px;">
                <center><font style="color: white;font-size: 25px;font-family: brandon_reg">Dirección</font></center>
                <center><font style="color: white;font-size: 20px;font-family: brandon_light">Álvaro Obregón #312 Int.36B. Celaya, Guanajuato, México</font></center>
            </div> 
        </td>

    </footer>



    <!-- Footer mobile -->



<!-- Modal politica -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="width: 200%;margin-left: -40%;">
      <div class="modal-header">
        <font style="font-size: 25px;color: #0081a9;font-family:brandon_light;margin-left: 33%;"> POLÍTICAS DE PRIVACIDAD </font>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <font style="color: black;font-style: oblique;"> 
            

        <center><font style="color: black;width: bold;font-family:brandon_light">REGISTRO DE DATOS DE CARÁCTER PERSONAL</font><br></center>
        <br>

        El envío de datos de carácter personal es obligatorio para contactar, comentar y realizar operaciones comerciales con el responsable. También debes saber que él no facilitar los datos personales solicitados en los diferentes formularios de contacto o el no aceptar la presente política de privacidad supone la imposibilidad de procesar las solicitudes que realices en este web. Toda la información que el usuario proporcione durante el proceso de contacto, suscripción o contratación de servicios será almacenada por el responsable y gestor de esta web.<br>
        <br>
        

        <center><font style="color: black;width: bold;font-family:brandon_light">SISTEMAS DE CAPTURA DE INFORMACIÓN PERSONAL</font><br>
        <br></center>

        Esta web puede requerir información personal en los siguientes casos:<br>

        &bull;Cuando el usuario utilice cualquier formulario en la web.<br>

        &bull;Al compartir contenido en redes sociales, en ese caso se recorre el perfil de la red social.<br>

        &bull;También se recogen otros datos NO IDENTIFICATIVOS que se obtienen mediante algunas cookies que se descargan en tu ordenador cuando navegas en esta web detallados en la Política de cookies.<br>
        <br>
​

        En esta web estamos asociados con Google para mostrar anuncios a los usuarios que acceden a esta web.. Se incluyen en este tipo de cookies servicios de terceros como: AdSense, AdWords y Google Analytics, así como una serie de servicios de la marca DoubleClick. Al visitar esta página, se envían cookies procedentes de esos servicios a tu navegador. Aunque decidas no recibir este tipo de anuncios, pueden seguir apareciendo en función de factores como tu ubicación general derivada de la dirección IP, el tipo de navegador y las búsquedas recientes y anteriores relacionadas con tu búsqueda actual. Entre los datos NO IDENTIFICATIVOS a los que podemos tener acceso gracias a estos servicios están:<br>

        &bull;Dirección IP.<br>

        &bull;La fecha y hora en la que el usuario ha accedido o utilizaste esta web.<br>

        &bull;Páginas visitadas -El tipo de navegador, el idioma del navegador.<br>

        &bull;Las páginas de referencia y salida y las URL. El número de clics.<br>

        &bull;Información sobre las páginas visitadas y el orden de dichas páginas, y el tiempo que el usuario pasa en páginas específicas.<br>
        <br>
​
        <center><font style="color: black;width: bold;font-family:brandon_light">FINALIDADES CON LAS QUE SE UTILIZAN LOS DATOS PERSONALES EN ESTA WEB</font><br>
        <br></center>
        

        Las finalidades con las que se recogen y gestionan datos en aceitedearganweb.com son:<br>

        &bull;Para permitir a los usuarios acceder a esta web y que puedan participar según sus intereses y preferencias.<br>

        &bull;Para que los usuarios puedan compartir contenidos en redes sociales.<br>

        &bull;Para permitir participar y moderar comentarios en el blog.<br>

        &bull;Para poder gestionar anuncios y un esquema de afiliados.<br>

        &bull;Para gestionar, proteger, mejorar y optimizar la web de aceitedearganweb.com.<br>

        &bull;Para mejorar la experiencia de los usuarios, por ejemplo, llevando a cabo análisis y desarrollando actividades de investigación SEO, personalizando o de otro modo adaptando su experiencia, y proporcionando una mejor experiencia de usuario.<br>

        &bull;Fines Estadísticos: Podrán utilizarse únicamente estadísticas y datos genéricos para fines publicitarios, JAMÁS se compartirán datos sensibles que permitan identificar a los usuarios a estas empresas o terceras personas. Arganelix.com no venderá ninguna información a ningún tercero que pueda permitirle identificar las condiciones médicas de una persona. Aceitedearganweb.com no cederá los datos personales de los usuarios a terceros sin solicitar previamente su consentimiento informando del receptor de esos datos y la finalidad de esa posible cesión.<br>
        <br>
​
        <center><font style="color: black;width: bold;font-family:brandon_light">SERVICIOS DE TERCEROS</font><br>
        <br></center>
        

​

        Para prestan servicios estrictamente necesarios para el desarrollo de su actividad, El responsable comparte datos con los siguientes prestadores bajo sus correspondientes condiciones de privacidad. -Hosting: pendiente -Google Analytics: un servicio analítico de web prestado por Google, Inc., una compañía de Delaware cuya oficina principal está en 1600 Amphitheatre Parkway, Mountain View (California), CA 94043, Estados Unidos (“Google”). Google Analytics utiliza “cookies”, que son archivos de texto ubicados en tu ordenador, para ayudar al aceitedearganweb.com a analizar el uso que hacen los usuarios del sitio web. La información que genera la cookie acerca de su uso del aceitedearganweb.com (incluyendo tu dirección IP) será directamente transmitida y archivada por Google en los servidores de Estados Unidos. Google usará esta información por cuenta nuestra con el propósito de seguir la pista de su uso de esta web, recopilando informes de la actividad y prestando otros servicios relacionados con la actividad de aceitedearganweb.com y el uso de Internet. Google podrá transmitir dicha información a terceros cuando así se lo requiera la legislación, o cuando dichos terceros procesen la información por cuenta de Google. Google no asociará tu dirección IP con ningún otro dato del que disponga Google. Puedes rechazar el tratamiento de los datos o la información rechazando el uso de cookies mediante la selección de la configuración apropiada de tu navegador, sin embargo, debes saber que, si lo haces, puede ser que no pueda usar la plena funcionabilidad de aceitedearganweb.com. Al utilizar este aceitedearganweb.com, consientes el tratamiento de tu información por Google en la forma y para los fines indicados. -Google Adsense: Google, como proveedor asociado, utiliza cookies para publicar anuncios en este sitio web. Los usuarios pueden inhabilitar el uso de la cookie de DART a través del anuncio de Google y accediendo a la política de privacidad de la red de contenido. Google utiliza empresas publicitarias asociadas para publicar anuncios cuando visitas nuestro sitio web. Es posible que estas empresas usen la información que obtienen de sus visitas a este y otros sitios web (sin incluir tu nombre, dirección, dirección de correo electrónico o número de teléfono) para ofrecerte anuncios sobre productos y servicios relacionados con tus intereses. Si deseas obtener más información sobre esta práctica y conocer sus opciones para impedir que estas empresas usen esta información, haz clic aquí. -Servicio de afiliados: Amazon Utilizamos las funciones de Amazon para a añadir productos que recomendamos fácilmente a la cesta en Amazon.es. Creamos algunos enlaces con los que los clientes pueden añadir productos de vendedores terceros en sus cestas. Amazon muestra publicidad basada en los intereses del usuario generada a partir de la información que el usuario pone a su disposición cuando interactúa con sitios web, contenidos o servicios. La publicidad basada en los intereses del usuario, se generan y se le muestran a partir de la información recogida en sitios webs que incluyen contenido o anuncios de Amazon, como es nuestro caso.<br>
        <br>
​
        <center><font style="color: black;width: bold;font-family:brandon_light">EJERCICIO DE LOS DERECHOS DE ACCESO, RECTIFICACIÓN, CANCELACIÓN U OPOSICIÓN</font><br>
        <br></center>
        

        La legislación vigente en materia de Protección de Datos reconoce una serie de derechos a los ciudadanos, como son el derecho de acceso, rectificación, cancelación y oposición sobre sus datos personales. Este web no tengas dudas que se respetan estos derechos y que podrás ejercitarlos siempre que quieras y que sabré responder de manera diligente a tu requerimiento. El ejercicio de estos derechos es personal, y debe, por tanto, ser ejercido directamente por el interesado ante cada uno de los responsables/titulares de los ficheros. El usuario podrá dirigir sus comunicaciones y ejercitar los derechos de acceso, rectificación, cancelación y oposición a través de correo postal o el mail mencionados arriba junto con prueba válida en derecho, como fotocopia del D.N.I. o equivalente, indicando en el asunto “PROTECCIÓN DE DATOS”.<br>
        <br>
 
        <center><font style="color: black;width: bold;font-family:brandon_light">ACEPTACIÓN Y CONSENTIMIENTO</font><br>
        <br></center>
        

 

        Al navegar en esta web, el usuario confirma haber leído y estar conforme con estas condiciones sobre la protección de datos de carácter personal, aceptando y consintiendo el tratamiento de los mismos por parte del responsable en la forma y para las finalidades indicadas en esta política y en el aviso legal<br>.

        <br>
        <center><font style="color: black;width: bold;font-family:brandon_light">CAMBIOS EN LA PRESENTE POLÍTICA DE PRIVACIDAD</font><br>
        <br></center>
        



        Como responsable de esta web, me reservo el derecho a modificar la presente política para adaptarla a novedades legislativas o jurisprudenciales, así como a prácticas de la industria. En dichos supuestos, anunciaremos en esta página los cambios introducidos con razonable antelación a su puesta en práctica.<br>

        <br>
        <center><font style="color: black;width: bold;font-family:brandon_light">CORREOS COMERCIALES</font><br>
        <br></center>
        

 

        De acuerdo con la LSSICE, el propietario de la web no realiza prácticas de SPAM, por lo que no envía correos comerciales por vía electrónica que no hayan sido previamente solicitados o autorizados por el Usuario. En consecuencia, en cada uno de los formularios habidos en la Página Web, el Usuario tiene la posibilidad de dar su consentimiento expreso para recibir mi “Newsletter”, con independencia de la información comercial puntualmente solicitada.</font>
      </div>
    </div>
  </div>
</div>







<!-- Modal terminos -->
<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="width: 200%;margin-left: -40%;">
      <div class="modal-header">
        <font style="font-size: 25px;color: #0081a9;margin-left: 32%;font-family:brandon_light"> TÉRMINOS Y CONDICIONES</font>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <font> 
            
 

        <center><font style="color: black;width: bold;font-family:brandon_light">REGISTRO DE DATOS DE CARÁCTER PERSONAL CONDICIONES DE USO</font><br></center>
        <br>

        Sírvase leer cuidadosamente estas condiciones de uso antes de usar este sitio electrónico. El uso de este sitio electrónico significa que está de acuerdo con estas condiciones de uso. Si no acepta estas condiciones de uso, absténgase de usar este sitio electrónico.<br>
        <br>
        

        <center><font style="color: black;width: bold;font-family:brandon_light">RESTRICCIONES SOBRE EL USO DE MATERIALES</font><br>
        <br></center>

        El derecho de autor o copyright de todos los materiales provistos en este Sitio Electrónico (“Sitio”) lo tiene Eterna Medical Center. Con excepción de lo aquí indicado, ningún material del Sitio o de cualquier otro sitio de propiedad u operado, con licencia o controlado por Eterna Medical Center puede copiarse, reproducirse, volverse a publicar, transmitirse o distribuirse de ninguna manera. Cualquier uso no autorizado de cualquier material contenido en este Sitio podría violar las leyes de derechos de autor, las leyes de registro de marcas y otras leyes.<br>
        <br>
​
​
        <center><font style="color: black;width: bold;font-family:brandon_light">LEYES CORRESPONDIENTES</font><br>
        <br></center>
        

        Este Sitio está controlado y operado por Eterna Medical Center no se hace representación alguna de que los materiales en este Sitio son apropiados o que están disponibles para su uso fuera de Estados Unidos. Aquellas personas que opten por obtener acceso a este Sitio desde otros lugares lo harán por iniciativa propia y son responsables de cumplir con las leyes locales correspondientes. Cualquier reclamo relacionado y el uso de este Sitio se rigen por las leyes del Estados Unidos Mexicanos, sin dar efecto a ningún principio de conflictos legales.
        <br>
​
        <center><font style="color: black;width: bold;font-family:brandon_light">MARCAS REGISTRADAS</font><br>
        <br></center>
        
        Las marcas registradas, las marcas de servicio y los logotipos (las “Marcas Registradas”) utilizadas y exhibidas en este Sitio son marcas registradas y no registradas de Eterna Medical Center, a menos que se indique lo contrario. Nada en este Sitio debe interpretarse como concesión de licencia, ya sea implícita, por impedimento, u otro, o como derecho a usar cualquier marca registrada exhibida en este Sitio.<br>
        <br>
​
        <center><font style="color: black;width: bold;font-family:brandon_light">CONTENIDO DE ETERNA MEDICAL CENTER.COM Y SUS ENLACES</font><br>
        <br></center>
        
        Eterna Medical Center no es responsable del mal uso que se realice de los contenidos de nuestra página web, siendo exclusiva responsabilidad de la persona que accede a ellos o los utiliza. No asumimos ninguna responsabilidad por la información contenida en las páginas web de terceros o links recomendados por o hacia Eterna Medical Center. No asumimos ninguna responsabilidad derivada de problemas técnicos o fallos en los equipos informáticos, no imputables a nuestra empresa, que se produzcan durante la conexión a la red de Internet, así como de daños que pudieran ser causados por terceras personas mediante intromisiones ilegítimas fuera de nuestro control. Los contenidos e información de las páginas de Internet Eterna Medical Center.com están elaboradas por profesionales de la salud y belleza. Sin embargo, los contenidos e información no vinculan a ETERNA MEDICAL CENTER ni constituyen opiniones ni consejos de ningún tipo pues se trata meramente de un servicio ofrecido con carácter informativo y divulgativo. Debido a la falta de armonización legislativa en la Unión Europea y en otros países, algunos de nuestros productos pueden estar catalogados como cosméticos en algunos países y en otros como plantas medicinales. El objetivo de esta Web es promocionar únicamente y producto de cosmética natural. Nos reservamos el derecho a actualizar, modificar o eliminar alguna información contenida en nuestra web, y la configuración o presentación de la misma, en cualquier momento, sin previo aviso, y sin asumir responsabilidad alguna por ello.<br>
        <br>
 
        <center><font style="color: black;width: bold;font-family:brandon_light">TRATAMIENTO DE DATOS DEL USUARIO</font><br>
        <br></center>
        

 

        En el transcurso de la compra o comunicación con nosotros, deberá proporcionar algunos datos de carácter personal que serán almacenados en nuestra base de datos; cumpliendo lo establecido en la Ley Orgánica 15/1999, de 13 de diciembre, de Protección de Datos de Carácter Personal. Eterna Medical Center asegura la confidencialidad de los datos aportados por sus clientes y en ningún caso esta información será cedida o vendida a terceras personas o empresas. Sus datos serán usados para el tratamiento de su compra, así como para informarles las mejoras del sitio Web y las novedades del sitio. Asimismo, le informamos que usted tiene la posibilidad de ejercer los derechos de acceso, rectificación, cancelación y oposición de sus datos de carácter personal, indicándonoslo en la sección de contacto. Los usuarios de Eterna Medical Center.com son conscientes de todo lo expuesto y lo aceptan voluntariamente.<br>.
        <br>

        El acceso y/o uso de este portal de Eterna Medical Center atribuye la condición de USUARIO, que acepta, desde dicho acceso y/o uso, las Condiciones Generales de Uso aquí reflejadas. Las citadas Condiciones serán de aplicación independientemente de las Condiciones Generales de Contratación que en su caso resulten de obligado cumplimiento.<br>
        <br>

        <center><font style="color: black;width: bold;font-family:brandon_light">PROCESO DE COMPRA</font><br>
        <br></center>
        



        Para realizar tu pedido simplemente tienes que ir insertando los productos que quieras en el carrito de compra, cuando hayas acabado debes confirmar la compra e introducir tus datos y forma de pago, tal como se va indicando en cada paso. Deberás registrar tus datos personales y elegir una contraseña que te permitirá acceder a todas aquellas zonas que requieran una identificación previa. Esto evitará que, en lo sucesivo, tengas que volver a cumplimentarlos, agilizando tus compras y también podrás añadir múltiples direcciones de envío, ver y hacer un seguimiento de tus pedidos, etc<br>
        <br>

        Al finalizar y confirmar la compra, automáticamente te llegará un correo electrónico con los datos de tu pedido. Si tu correo es gratuito (yahoo, Hotmail, etc..) comprueba que no se envíe el correo a la carpeta de correo no deseado. Todos los productos poseen una ficha detallada, en la que se incluye una descripción del producto, así como los tamaños disponibles y su precio, impuestos incluidos.<br>
        <br>

        <br>
        <center><font style="color: black;width: bold;font-family:brandon_light">PRODUCTOS</font><br>
        <br></center>

        Todos los productos de Eterna Medical Center son de marcas originales, nuevos, presentados en su envase o caja individual, según el producto. Los colores de los productos pueden sufrir variaciones respecto a la realidad debido a los diferentes ajustes de cada monitor.<br>
        <br>


        <center><font style="color: black;width: bold;font-family:brandon_light">PRODUCTOS AGOTADOS </font><br>
        <br></center>

        Los productos agotados se podrán comprar igualmente. Normalmente el pedido se demorará entre 5 y 7 días adicionales al tiempo de los productos en stock, siempre y cuando el producto siga en catálogo en la marca.<br>
        <br>


        <center><font style="color: black;width: bold;font-family:brandon_light">FORMAS DE PAGO, PRECIOS Y PROMOCIONES </font><br>
        <br></center>

       EternaMedicalCenter.com ofrece los siguientes métodos de pago:<br>

        &bull;Pago con tarjeta de crédito, 100% seguro con datos cifrados y enviados bajo servidor seguro al TPV virtual del banco. Este procedimiento no facilita el número de tarjeta a EternaMedicalCenter.com.<br>

        &bull;Pago vía PayPal, con tu cuenta habitual. Para más información www.paypal.es.<br>

        &bull;Pago vía transferencia bancaria. Al realizar el pedido, junto con la confirmación del mismo, se te comunicarán las instrucciones para la transferencia.<br> 
        <br>

        Los precios se regirán por nuestra tarifa vigente, reservándose EternaMedicalCenter.com el derecho a modificar la misma sin previo aviso. Las ofertas sobre productos en venta en la tienda online EternaMedicalCenter.com se mostrarán en el apartado "Ofertas" o se indicará en la ficha del producto y, si no se indica lo contrario, serán válidas mientras se muestren en pantalla y bajo el límite de disponibilidad de existencias.<br>
        <br>
        Los vales de descuento tendrán una vigencia y condiciones especiales para su utilización claramente especificadas.<br>
        <br>



        </font>
      </div>
    </div>
  </div>
</div>





    </body>
</html>
