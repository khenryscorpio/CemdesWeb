<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cemdes</title>
  <link  rel="stylesheet" href="lib/bootstrap/css/bootstrap.css" />
  <link  rel="stylesheet" href="lib/bootstrap/css/bootstrap-responsive.css" />        
  <link  rel="stylesheet" href="lib/reset.css" />        
  <link  rel="stylesheet" href="lib/style.css" />        
  <script  type="text/javascript" src="lib/jquery/jquery.js" ></script>
  <script  type="text/javascript" src="lib/jquery.roundabout.js" ></script>
  <script  type="text/javascript" src="lib/bootstrap/js/bootstrap.js" ></script>


  <link type="text/css" rel="stylesheet" href="lib/fancybox/jquery.fancybox.css" media="screen">
  <script type="text/javascript" src="lib/fancybox/jquery.fancybox.js"></script>
  <script type="text/javascript" src="lib/fancybox/jquery.fancybox.pack.js"></script>
  <script type="text/javascript" src="lib/fancybox/jquery.mousewheel-3.0.6.pack.js"></script>
  <link href='http://fonts.googleapis.com/css?family=Josefin+Sans' rel='stylesheet' type='text/css'>

  <style type="text/css">
  .tabs-left > .nav-tabs .active > a, .tabs-left > .nav-tabs .active > a:hover, .tabs-left > .nav-tabs .active > a:focus {
    border-color: transparent transparent transparent transparent;
  }
  .tabs-left > .nav-tabs > li, .tabs-right > .nav-tabs > li {
    border-color: transparent transparent #ddd transparent;
  }

  </style>







</head>


<body>      

  <div class="container" >

   <?php require_once './header.php'; ?>

 </div>
 <div class="container-fluid">


  <?php require_once './menu.php'; ?>



 

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
        <li class="navmenu" ><a href="#a" data-toggle="tab">Publicaciones</a></li>
        <li class="navmenu"  ><a href="#b" data-toggle="tab">Blog</a></li>

      </ul>

    </div>
    <!-- /tabs -->

  </div>
  <div class="span6">
    <ul class="breadcrumb">
      <li><a class="link_a" href="#">Inicio</a> <span style="color:#6e6e6e" class="divider">></span></li>
      <li><a class="link_a encabezadoSide" href="#">Cemdes</a> <span style="color:#6e6e6e" class="divider">></span></li>
      <li id="actual" class="active">Publicaciones</li>
    </ul>
    <div class="row-fluid">
      <div id="cemdesnav"class="cemdes" >
        <h3  id="Titular">Publicaciones</h3>
      </div>
      <div class=" tab-content  ">
        <div class="tab-pane active" id="a">

          <div class="row-fuid ">
            <div class="span4 publicaciones">
              <img src="asset/Publicaciones/1-Publicacion.jpg">
              
            </div>
            <div class="span4 publicaciones">
              <img src="asset/Publicaciones/2-Publicacion.jpg">
            </div>
            <div class="span4 publicaciones">
              <img src="asset/Publicaciones/3-Publicacion.jpg">
            </div>
          </div>

          <div class="row-fuid ">
            <div class="span4 publicaciones">
              <img src="asset/Publicaciones/4-Publicacion.jpg">
            </div>
            <div class="span4 publicaciones">
              <img src="asset/Publicaciones/5-Publicacion.jpg">
            </div>
            <div class="span4 publicaciones">
              <img src="asset/Publicaciones/6-Publicacion.jpg">
            </div>
          </div>

          <div class="row-fuid ">
            <div class="span4 publicaciones">
              <img src="asset/Publicaciones/7-Publicacion.jpg">
            </div>
            <div class="span4 publicaciones">
              <img src="asset/Publicaciones/8-Publicacion.jpg">
            </div>
            <div class="span4 publicaciones">
              <img src="asset/Publicaciones/9-Publicacion.jpg">
            </div>
          </div>          
        </div>
        <div class="tab-pane" id="b">
          <p>Los invitamos a revisar en línea el Informe 2012.</p>
          <div><object style="width: 420px; height: 158px;"><param name="movie" value="http://static.issuu.com/webembed/viewers/style1/v2/IssuuReader.swf?mode=mini&amp;embedBackground=%23000000&amp;backgroundColor=%23222222&amp;documentId=121210184617-3c03bf7ec81b4d7aaf9c2534a852452e" /><param name="allowfullscreen" value="true" /><param name="menu" value="false" /><param name="wmode" value="transparent" /></object>
            <div style="width: 420px; text-align: left;"><a href="http://issuu.com/cemdes/docs/informe_asamblea_2012-3?mode=window&amp;backgroundColor=%23222222" target="_blank">Open publication</a> - Free <a href="http://issuu.com" target="_blank">publishing</a> - <a href="http://issuu.com/search?q=informe%20cemdes" target="_blank">More informe cemdes</a></div>
          </div>
          <p><br />Los invitamos a revisar en línea el Informe 2011 <a href="INFORME-2010-2011.pdf">haciendo click aquí.</a></p>
          <p> </p> </div>

        </div>
      </div>
      <!--- LOmas-->

      <!--Lomas -->

    </div>
    <div class="span2"></div>

  </div>














  <div class="container-fluid  footer-bg">


    <div  class="container" >
      <?php require_once './footer.php'; ?>
    </div>
  </div>
  <?php require_once './footericons.php'; ?>


</body>
<script  type="text/javascript" src="lib/scripts.js" ></script>
<script type="text/javascript">
$(".mifancy").fancybox({
         /*'width' : '100%',
         'height' : '100%',*/
         'autoScale' : false,
         'transitionIn' : 'none',
         'transitionOut' : 'none',
         'top' : '0px',
         'padding': 0,
         'margin': 0,
         'border': 0,
         'closeBtn' : true,

         'maxWidth'  : '80%',
         'maxHeight' : '90%',
         'text-align' : 'center',
         'fitToView' : 'false',
         'width'     : '100%',
         'height'    : '100%',
         'autoSize'  : true,
         'closeClick' : false,
         'openEffect' : 'none',
         'closeEffect' : 'none',
         'type' : 'iframe',


         helpers:{
           overlay:{
            css: { 'background': 'rgba(0, 0, 0, 0)' }
          }
        }

      });
</script>
</html>
