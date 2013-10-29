<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Eventos</title>
  <link  rel="stylesheet" href="lib/bootstrap/css/bootstrap.css" />
  <link  rel="stylesheet" href="lib/bootstrap/css/bootstrap-responsive.css" />        
  <link  rel="stylesheet" href="lib/reset.css" />        
  <link  rel="stylesheet" href="lib/style.css" />        
  <script  type="text/javascript" src="lib/jquery/jquery.js" ></script>
  <script  type="text/javascript" src="lib/jquery.roundabout.js" ></script>
  <script  type="text/javascript" src="lib/bootstrap/js/bootstrap.js" ></script>

  <link href='http://fonts.googleapis.com/css?family=Josefin+Sans' rel='stylesheet' type='text/css'>





</head>


<body>      

  <div class="container" >

   <?php require_once './header.php'; ?>

 </div>
 <div class="container-fluid">


  <?php require_once './menu.php'; ?>



<!--         <div class="banner" >
            <img alt="banner" src="asset/banner/banner1.jpg"  />
        </div>
      -->
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
            <li class="navmenu" ><a href="#a" data-toggle="tab">Agenda de eventos</a></li>
            <li class="navmenu"  ><a href="#b" data-toggle="tab">Galer&#237;a de eventos</a></li>

          </ul>

        </div>
        <!-- /tabs -->

      </div>
      <div class="span6">
        <ul class="breadcrumb">
          <li><a class="link_a" href="#">Inicio</a> <span style="color:#6e6e6e" class="divider">></span></li>
          <li><a class="link_a encabezadoSide" href="#">Cemdes</a> <span style="color:#6e6e6e" class="divider">></span></li>
          <li id="actual" class="active">Agenda de eventos</li>
        </ul>
        <div class="row-fluid">
          <div id="cemdesnav"class="cemdes" >
            <h3  id="Titular">Agenda de eventos</h3>
          </div>
          <div class=" tab-content  ">
            <div class="tab-pane active myclase" id="a">    
              <h4>Bootstrap Pager</h4>
              <div class="row-fluid">
                <ul id="newStuff" class="">

                  <li>
                    <div class="span6">
                      <a href="/">
                        <div class="row-fluid">
                         <div class="span1" style="border-right: 1px solid green;color:green; font-weight:bold;"><p>OCT <br /> 9</p></div>
                         <div class="span9" >
                          <p class="titulopreview">CEMDES es una Organizaci&#243;n de Empresarios y para empresarios, creada para promover el concepto de Desarrollo Sostenible.</p>
                        </div>
                      </div></a>
                      <div class="row-fluid"> 
                        <div class="span10" >El diálogo se llevará acabo el día 7 de octubre con el objetivo de establecer un espacio anual, donde convergen los empresarios más destacados por su gestión hacia el desarrollo sostenible de nuestro país, a través del cual se expongan sus iniciativas más relevantes.
                        </div>
                      </div> 
                    </div> 
                  </li>

                  <li>
                    <div class="span6">
                      <a href="/">
                        <div class="row-fluid">
                         <div class="span1" style="border-right: 1px solid green;color:green; font-weight:bold;"><p>OCT <br /> 9</p></div>
                         <div class="span9" >
                          <p class="titulopreview">Diálogo con Líderes en Sostenibilidad.</p>
                        </div>
                      </div></a>
                      <div class="row-fluid"> 
                        <div class="span10" >El diálogo se llevará acabo el día 7 de octubre con el objetivo de establecer un espacio anual, donde convergen los empresarios más destacados por su gestión hacia el desarrollo sostenible de nuestro país, a través del cual se expongan sus iniciativas más relevantes.
                        </div>
                      </div> 
                    </div> 
                  </li>

                  <li>
                    <div class="span6">
                      <a href="/">
                        <div class="row-fluid">
                         <div class="span1" style="border-right: 1px solid green;color:green; font-weight:bold;"><p>OCT <br /> 9</p></div>
                         <div class="span9" >
                          <p class="titulopreview">El Panel Internacional se llevará a cabo el día 12 de junio, 2013 de 08H00 a 11H00, en el Salón Neptuno del Hotel Sheraton de Guayaquil.</p>
                        </div>
                      </div></a>
                      <div class="row-fluid"> 
                        <div class="span10" >En el marco de nuestro programa de comunicación y como una forma de contribuir de manera efectiva a la difusión de información basado en el conocimiento sobre los transgénicos, Cemdes realiza el Panel Internacional “Transgénicos, ¿un asunto de sostenibilidad ecuatoriana?.
                        </div>
                      </div> 
                    </div> 
                  </li>

                  <li>
                    <div class="span6">
                      <a href="/">
                        <div class="row-fluid">
                         <div class="span1" style="border-right: 1px solid green;color:green; font-weight:bold;"><p>OCT <br /> 9</p></div>
                         <div class="span9" >
                          <p class="titulopreview">CEMDES es una Organizaci&#243;n de Empresarios y para empresarios, creada para promover el concepto de Desarrollo Sostenible desde la perspectiva empresarial, y facilitar la implementaci&#243;n de soluciones innovadoras en temas ambientales y de responsabilidad social en el Ecuador.</p>
                        </div>
                      </div></a>
                      <div class="row-fluid"> 
                        <div class="span10" >3 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc iaculis turpis sit amet lorem molestie tristique. Curabitur porta dapibus p
                        </div>
                      </div> 
                    </div> 
                  </li>
                  <li><a href="/"> <span class="span6">5 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc iaculis turpis sit amet lorem molestie tristique. Curabitur porta dapibus purus, at rutrum tortor suscipit nec. Morbi sed diam quis augue porta faucibus. Curabitur sagittis pharetra velit, et varius diam tempor in. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vestibulum tincidunt adipiscing nisl vitae accumsan. Fusce non nibh ut est ullamcorper rutrum. In aliquam libero eget augue consectetur, ornare pulvinar arcu vestibulum. Nullam eget dictum quam. Morbi ac erat quis justo vehicula posuere. Curabitur facilisis, leo vitae facilisis luctus, dolor magna venenatis purus, id rutrum velit magna in velit. Curabitur convallis aliquet ligula at iaculis. Vestibulum eget urna elit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;</span></a></li>
                  <li><a href="/"> <span class="span6">6 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc iaculis turpis sit amet lorem molestie tristique. Curabitur porta dapibus purus, at rutrum tortor suscipit nec. Morbi sed diam quis augue porta faucibus. Curabitur sagittis pharetra velit, et varius diam tempor in. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vestibulum tincidunt adipiscing nisl vitae accumsan. Fusce non nibh ut est ullamcorper rutrum. In aliquam libero eget augue consectetur, ornare pulvinar arcu vestibulum. Nullam eget dictum quam. Morbi ac erat quis justo vehicula posuere. Curabitur facilisis, leo vitae facilisis luctus, dolor magna venenatis purus, id rutrum velit magna in velit. Curabitur convallis aliquet ligula at iaculis. Vestibulum eget urna elit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;</span></a></li>
                  <li><a href="/"> <span class="span6">7 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc iaculis turpis sit amet lorem molestie tristique. Curabitur porta dapibus purus, at rutrum tortor suscipit nec. Morbi sed diam quis augue porta faucibus. Curabitur sagittis pharetra velit, et varius diam tempor in. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vestibulum tincidunt adipiscing nisl vitae accumsan. Fusce non nibh ut est ullamcorper rutrum. In aliquam libero eget augue consectetur, ornare pulvinar arcu vestibulum. Nullam eget dictum quam. Morbi ac erat quis justo vehicula posuere. Curabitur facilisis, leo vitae facilisis luctus, dolor magna venenatis purus, id rutrum velit magna in velit. Curabitur convallis aliquet ligula at iaculis. Vestibulum eget urna elit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;</span></a></li>
                  <li><a href="/"> <span class="span6">8 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc iaculis turpis sit amet lorem molestie tristique. Curabitur porta dapibus purus, at rutrum tortor suscipit nec. Morbi sed diam quis augue porta faucibus. Curabitur sagittis pharetra velit, et varius diam tempor in. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vestibulum tincidunt adipiscing nisl vitae accumsan. Fusce non nibh ut est ullamcorper rutrum. In aliquam libero eget augue consectetur, ornare pulvinar arcu vestibulum. Nullam eget dictum quam. Morbi ac erat quis justo vehicula posuere. Curabitur facilisis, leo vitae facilisis luctus, dolor magna venenatis purus, id rutrum velit magna in velit. Curabitur convallis aliquet ligula at iaculis. Vestibulum eget urna elit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;</span></a></li>
                </ul>
              </div>
              
              <div class="row-fluid">
                <div class="pagination span12">
                <ul class="pager"></ul>
              </div></div>


            </div>

            <div class="tab-pane myclase " id="b">


             <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script> <script type="text/javascript" src="http://yandex.st/jquery/easing/1.3/jquery.easing.min.js"></script> <script type="text/javascript" src="http://yandex.st/jquery/fancybox/1.3.4/jquery.fancybox.min.js"></script> <script type="text/javascript" src="http://yandex.st/jquery/mousewheel/3.0.4/jquery.mousewheel.min.js"></script> <link rel="stylesheet" type="text/css" href="lib/fancybox/jquery.fancybox-1.3.4.css"> <p style="text-align: justify; color: #888; font-size: small;"> <a rel="example_group" title="Custom title" href="http://flickr.com/4163443812.jpg"> <img alt="" src="asset/banner/4-IMG-Banner-R.Social.jpg" /> </a> <a rel="example_group" title="" href="asset/banner/3-IMG-Banner-I.Sostenible.jpg"> <img alt="" src="asset/banner/2-IMG-Banner-Miembros.jpg" /> </a> <a rel="example_group" title="" href="http://flickr.com/4048285842.jpg"> <img alt="" src="asset/banner/2-IMG-Banner-Miembros.jpg" /> </a> </p> <script type="text/javascript"> $("a[rel=example_group]").fancybox({ 'transitionIn'  : 'none', 'transitionOut'   : 'none', 'titlePosition' : 'over', 'titleFormat' : function(title, currentArray, currentIndex, currentOpts) { return '<span id="fancybox-title-over">Image ' + (currentIndex + 1) + ' / ' + currentArray.length + ' ' + title + '</span>'; } }); </script> 
           </div>



         </div>
       </div>
       <!--- LOmas-->

       <!--Lomas -->

     </div>
     <div class="span2"></div>

   </div>






   <div  class="container-fluid" >
    <div  class="entrevista" >
      <div  class="container" >
        <div  class="row-fluid " >
          <div  class="span6 "  >
            <div  class="row-fluid" >
              <div class="span8 offset2" style="margin-top: 125px;" >
                <h3  class="entrevistaTitulo" >Entrevista </h3>
                <hr/>
                <p  class="entrevistaResumen" >Paola Leone. Ph.D. Instituto de Investigaciones 
                  Biomédicas Universidad de Las Américas</p>
                </div>
              </div>
            </div>
            <div  class="span6"  >
              <div  class="entrevistaContenido" >
                <iframe width="480" height="360" src="//www.youtube.com/embed/n7RlkKIG8do" frameborder="0" allowfullscreen></iframe>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>




  </div>




  <div class="container-fluid  footer-bg">


    <div  class="container" >
      <?php require_once './footer.php'; ?>
    </div>
  </div>
  <?php require_once './footericons.php'; ?>


</body>
<script  type="text/javascript" src="lib/scripts.js" ></script>
<script type="text/javascript" src="lib/paj.js"></script>
</html>
