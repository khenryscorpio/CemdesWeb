<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciativas sostenibles</title>
    <link  rel="stylesheet" href="lib/bootstrap/css/bootstrap.css" />
    <link  rel="stylesheet" href="lib/bootstrap/css/bootstrap-responsive.css" />        
    <link  rel="stylesheet" href="lib/reset.css" />        
    <link  rel="stylesheet" href="lib/style.css" />        
    <script  type="text/javascript" src="lib/jquery/jquery.js" ></script>
    <script  type="text/javascript" src="lib/jquery.roundabout.js" ></script>
    <script  type="text/javascript" src="lib/bootstrap/js/bootstrap.js" ></script>
    <link href='http://fonts.googleapis.com/css?family=Josefin+Sans' rel='stylesheet' type='text/css'>

    <script type="text/javascript" >

    $(document).ready(function(){
        $(".encabezadoSide").text( $(this).attr('title'));
        $("li.navmenu").click(function() {
        //alert("click");
        $("#actual").text($(this).text());
        $("#Titular").text($(this).text());
        
    });

        $("#send-btn").hover(function(){
            $(this).attr("src", "asset/img/send-hover.png");

        }, function(){
            $(this).attr("src", "asset/img/send-normal.png");
        });


        $('#slider').roundabout();




// Find all YouTube videos
var $allVideos = $("iframe[src^='http://www.youtube.com']"),

        // The element that is fluid width
        $fluidEl = $("body");

    // Figure out and save aspect ratio for each video
    $allVideos.each(function() {

        $(this)
        .data('aspectRatio', this.height / this.width)
        
            // and remove the hard coded width/height
            .removeAttr('height')
            .removeAttr('width');

        });

    // When the window is resized
    // (You'll probably want to debounce this)
    $(window).resize(function() {

        var newWidth = $fluidEl.width();
        
        // Resize all videos according to their own aspect ratio
        $allVideos.each(function() {

            var $el = $(this);
            $el
            .width(newWidth)
            .height(newWidth * $el.data('aspectRatio'));

        });

    // Kick off one resize to fix all videos on page load
}).resize();
    

});


</script>



</head>


<body>      

 <div class="container" >

   <?php require_once './header.php'; ?>

</div>
<div class="container-fluid">


    <?php require_once './menu.php'; ?>



    <div class="banner" >
        <img alt="banner" src="asset/banner/3-IMG-Banner-I.Sostenible.jpg"  />
    </div>

</div>

<div class="row-fluid">
    <div class="span2"></div>
    <div class="span2 bs-docs-sidebar">
        <div class="titulo1" >
            <h3 class="encabezadoSide"></h3>
        </div>
        <!-- tabs left -->
        <div class="tabbable tabs-left">
            <ul  class="nav nav-tabs ">
              <li class="navmenu" ><a href="#a" data-toggle="tab">Vision 2050</a></li>
              <li class="navmenu"  ><a href="#b" data-toggle="tab">Ranking de empresas</a></li>
              <li class="navmenu"  ><a href="#c" data-toggle="tab">Premio a la Ecoeficiencia</a></li>
              <li class="navmenu"  ><a href="#d" data-toggle="tab">Declaratoria del Agua</a></li>
              <li class="navmenu"  ><a href="#e" data-toggle="tab">RSE</a></li>
              <li class="navmenu"  ><a href="#f" data-toggle="tab">Pacto Global</a></li>
          </ul>

      </div>
      <!-- /tabs -->

  </div>
  <div class="span6">
    <ul class="breadcrumb">
      <li><a class="link_a" href="#">Inicio</a> <span style="color:#6e6e6e" class="divider">></span></li>
      <li><a class="link_a encabezadoSide" href="#">Cemdes</a> <span style="color:#6e6e6e" class="divider">></span></li>
      <li id="actual" class="active">Vision 2050</li>
  </ul>
  <div class="row-fluid">
      <div id="cemdesnav"class="cemdes" >
        <h3  id="Titular">Vision 2050</h3>
    </div>
    <div class=" tab-content  ">
        <div class="tab-pane active" id="a">
            <div><object style="width: 420px; height: 158px;"><param name="movie" value="http://static.issuu.com/webembed/viewers/style1/v2/IssuuReader.swf?mode=mini&amp;embedBackground=%23000000&amp;backgroundColor=%23222222&amp;documentId=121210184617-3c03bf7ec81b4d7aaf9c2534a852452e" /><param name="allowfullscreen" value="true" /><param name="menu" value="false" /><param name="wmode" value="transparent" /></object>
                <div style="width: 420px; text-align: left;"><a href="http://issuu.com/cemdes/docs/informe_asamblea_2012-3?mode=window&amp;backgroundColor=%23222222" target="_blank">Open publication</a> - Free <a href="http://issuu.com" target="_blank">publishing</a> - <a href="http://issuu.com/search?q=informe%20cemdes" target="_blank">More informe cemdes</a></div>
                <p> Visión 2050 – Una nueva agenda para los negocios, en el que se define una Hoja de Ruta hacia la sostenibilidad de aquí hacia el año 2050.  Esta Hoja de Ruta  muestra los retos y las opciones disponibles que nos permite incidir para que las empresas implementen sus estrategias con responsabilidad ambiental y social a nivel nacional, e identifica nueve elementos fundamentales; Valores de las Personas; Desarrollo Humano; Economía; Agricultura; Bosques; Energía y Electricidad; Edificios; Movilidad y Materiales,  para ir del “Business as Usual” hacia un mundo sostenible en el año 2050.</p>

                <p>Visión 2050 es el resultado del trabajo y colaboración de cientos de representantes de otras empresas, gobiernos y sociedad civil, así como socios regionales y expertos. Esta iniciativa pretende encontrar respuesta a tres interrogantes ¿Cómo sería un mundo sostenible? ¿Cómo podríamos alcanzarlo?, y ¿Qué papel pueden desempeñar las empresas para que avancemos más rápidamente hacia ese objetivo?</p>

                <p>Las respuestas a estas interrogantes encierran riesgos y oportunidades, muchas compañías se adaptarán y para otras el reto de esta transición será más difícil.  Pero la buena noticia es que la hoja de ruta de Visión 2050 y sus elementos claves presentan enormes oportunidades de como hacer más con menos (ser ecoeficientes), crear valor, prosperar y mejorar la condición humana.</p>

                <p>En nuestro país hemos identificado enormes coincidencias existentes entre el Plan Nacional para el Buen Vivir del gobierno ecuatoriano y la Visión 2050 lo que nos permite acercar posiciones de cooperación con el sector público. Tenemos una agenda para tu negocio, únete al grupo de empresas líderes en sostenibilidad en el Ecuador.</p>

            </div>
        </div>
        <div class="tab-pane" id="b">
            <p> El Ranking de Empresas Sostenibles de Ecuador es una iniciativa de Cemdes y Estudio Jurídico Manzano en alianza con Revista Verde.</p>

            <p>El Ranking es un instrumento que contribuye a agregar valor a la gestión de una empresa hacia su sostenibilidad y generar mayor competitividad a cualquier actividad.</p>


            <span class="enunciados">Objetivos<span >
                <ul>
                    <li>Crear una visión enmarcada en criterios que indican en lo que una empresa sustentable debe involucrarse; así como tener un espacio claro para que los consumidores reciban información veraz sobre las empresas que desarrollan sus actividades productivas en nuestro país.</li>
                    <li>Identificar ejemplos sobresalientes de responsabilidad corporativa, y  excelencia ambiental que  constituya un aporte destacado y relevante a favor del país.</li>
                    <li>Promover el reconocimiento público con una  distinción ejemplar que otorga el Concejo Empresarial para el Desarrollo Sostenible del Ecuador – CEMDES.</li>
                </ul>
            </div>
            <div class="tab-pane" id="c">Cras faucibus sem ut lorem porta, a tincidunt lacus varius. Proin ut orci enim. Sed cursus vel est pellentesque ullamcorper. Etiam massa ante, semper sed blandit vitae, consequat aliquet diam. Proin in tellus quis arcu rhoncus faucibus mattis a leo. Vestibulum ac mi tortor. Quisque ut ornare orci, eget auctor leo. Donec interdum congue quam. Maecenas malesuada, risus et volutpat gravida, risus sem feugiat libero, ut laoreet turpis lacus nec magna. Nam rhoncus, sapien vitae dictum tempor, enim diam convallis nulla, ac faucibus quam eros eget massa. Nam feugiat, felis nec vehicula auctor, enim massa iaculis felis, non lacinia augue est in nunc. Aliquam feugiat porta sem, et mollis magna facilisis sit amet. Nunc fringilla felis sem, et venenatis risus condimentum sit amet.

                In hac habitasse platea dictumst. Maecenas diam arcu, aliquam vitae urna id, dignissim pellentesque urna. Sed molestie, metus a faucibus laoreet, arcu est ullamcorper massa, consectetur consequat felis nibh id ipsum. Donec auctor convallis sem. Sed vehicula nunc risus, sed consequat sem scelerisque eget. In eu odio urna. In pellentesque, augue a porta ornare, justo purus posuere mauris, sit amet ullamcorper nunc ipsum ac purus. Phasellus tristique cursus eleifend. Aliquam rutrum eu dolor vitae consectetur. Vestibulum adipiscing, mauris id volutpat imperdiet, justo nibh mollis arcu, at iaculis magna libero nec lacus. Aenean nec sem est. Sed sollicitudin turpis nec porta porta. Vivamus nulla mauris, ornare et dolor sit amet, rhoncus gravida magna. Maecenas laoreet eget orci id fringilla. </div>
                <div class="tab-pane" id="d">
                    <div class="item-page">

                        <h2>
                            </h2><p><img src="/images/Untitled-1.png" border="0" alt=""></p>
                            <p >En el marco del Diálogo sobre la Ley de Recursos Hídricos que se realizó con el Secretario Nacional del Agua y como celebración del Día Mundial del Agua, el Consejo Empresarial para el Desarrollo Sostenible del Ecuador (CEMDES), &nbsp;Estudio Jurídico Manzano (EJM) y La Cámara de Industrias de Guayaquil (CIG), presentaron la iniciativa de la "Declaratoria del Agua", misma que tiene por objetivo evidenciar los esfuerzos, privados y públicos, en educación, comunicación, difusión y uso eficiente del agua en nuestro país.</p>
                            <p >Esta iniciativa convoca a &nbsp;empresas, ONG´s, personas, Universidades o instituciones públicas que dentro de su quehacer diario estén dedicando esfuerzos relacionados con el buen uso y conservación del agua y se cuenta con el apoyo del Secretario Nacional del Agua.</p>
                            <p >Los signatarios de esta Declaración Conjunta se constituirán en un Foro para el uso sostenible del agua, intercambio de información y experiencias. El cumplimiento de estos principios será reportado cada seis meses en el seno de este Foro con la presencia del SENAGUA como invitado permanente y como una forma de evidenciar las distintas iniciativas que distintos actores están haciendo en el país.</p>
                            <p ><strong>Contacto:</strong></p>
                            <p >Graciela Valarezo – 
                            </span> – Telf: 2683514- 2680010&nbsp;</p>
                            <p ><strong>Promotores</strong></p>
                            <p ><img src="/images/logos1.png" border="0" alt=""></p>
                            <p ><strong>Testigo de Honor</strong></p>
                            <p><img src="/images/logo2.png" border="0" alt=""></p>
                            <p ><strong>Patrocinadores</strong></p>
                            <p ><strong><img src="/images/LOGO TONI JPG.jpeg" border="0" alt="">&nbsp; &nbsp;&nbsp;<img src="/images/nobis342.jpeg" border="0" alt="">&nbsp;&nbsp;<img src="/images/ssdplas.png" border="0" alt=""></strong></p>

                        </div>

                    </div>
                    <div class="tab-pane" id="e">

                    </div>
                    <div class="tab-pane" id="f">
                        <p>El Pacto Global es una iniciativa de Naciones Unidas que tiene como objetivo comprometer a las empresas en la implementación de 10 principios universalmente reconocidos en materia de Derechos Humanos, Estándares Laborales, Medio Ambiente y Anticorrupción. Por su número de participantes, más de 8700 entre empresas y otras organizaciones en más de 130 países, es la iniciativa en ciudadanía corporativa con mayor acogida a nivel mundial.</p>
                       <span class="enunciados">Red del Pacto Global en Ecuador</span>

                        <p>Con el fin de promover los 10 principio del Pacto Global en el Ecuador y poder trabajarlos conforme a a realidad y prioridades locales, el Consorcio Ecuatoriano para la Responsabilidad Social (CERES) asumió la secretaría de la Red del Pacto Global en Ecuador, el 26 de julio de 2011. La red está conformada por un grupo de empresas, organizaciones de la sociedad civil y del Estado interesadas en promover el diálogo y colaboración para la consecución de los principios del Pacto en las empresas. </p>
                        <a href="http://www.pactoglobal.ec/">Visitar sitio web</a>

                    </div>
                </div>
            </div>
            <!--- LOmas-->

            <!--Lomas -->

        </div>
        <div class="span2"></div>

    </div>










</div>




<div class="container-fluid  footer-bg">


    <div  class="container" >
        <?php require_once './footer.php'; ?>
    </div>
</div>
<?php require_once './footericons.php'; ?>


</body>
</html>
