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
  <script type="text/javascript" src="lib/fancybox/jquery.fancybox.pack.js"></script>
  <script type="text/javascript" src="lib/fancybox/jquery.mousewheel-3.0.6.pack.js"></script>
  <link rel="stylesheet" type="text/css" href="lib/fancybox/jquery.fancybox.css" />
  <link  rel="stylesheet" href="lib/style.css" />

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
            <div class="row-fluid">
              <ul  class="newPaj">

                <li>
                  <div class="span6">
                    <a href="/">
                      <div class="row-fluid fichaevento">
                       <div class="span1 fechaTitular"><div class="mes">OCT</div><div class="dia">15</div></div>                       <div class="span9" >
                       <p class="titulopreview">CEMDES es una Organizaci&#243;n de Empresarios y para empresarios</p>
                     </div>
                   </div>
                   <div class="row-fluid"> 
                    <div class="span10" >
                      <img src="asset/img/post-Eventos.jpg">
                    </div>
                  </div> 
                </a>
                <div class="row-fluid"> 
                  <div class="span10" >El diálogo se llevará acabo el día 7 de octubre con el objetivo de establecer un espacio anual, donde convergen los empresarios más destacados por su gestión hacia el desarrollo sostenible de nuestro país, a través del cual se expongan sus iniciativas más relevantes.
                  </div>
                </div> 
              </div> 
            </li>

            <li>
              <div class="span6">
                <a href="/">
                  <div class="row-fluid fichaevento">
                   <div class="span1 fechaTitular"><div class="mes">OCT</div><div class="dia">15</div></div>
                   <div class="span9" >
                    <p class="titulopreview">CEMDES creada para promover el concepto de Desarrollo Sostenible.</p>
                  </div>
                </div>
                <div class="row-fluid"> 
                  <div class="span10" >
                    <img src="asset/img/post-Eventos.jpg">
                  </div>
                </div> 
              </a>
              <div class="row-fluid"> 
                <div class="span10" >El diálogo se llevará acabo el día 7 de octubre con el objetivo de establecer un espacio anual, donde convergen los empresarios más destacados por su gestión hacia el desarrollo sostenible de nuestro país, a través del cual se expongan sus iniciativas más relevantes.
                </div>
              </div> 
            </div> 
          </li>

          <li>
            <div class="span6">
              <a href="/">
                <div class="row-fluid fichaevento">
                 <div class="span1 fechaTitular"><div class="mes">OCT</div><div class="dia">15</div></div>                   <div class="span9" >
                 <p class="titulopreview">CEMDES  promover el concepto de Desarrollo Sostenible.</p>
               </div>
             </div>
             <div class="row-fluid"> 
              <div class="span10" >
                <img src="asset/img/post-Eventos.jpg">
              </div>
            </div> 
          </a>
          <div class="row-fluid"> 
            <div class="span10" >El diálogo se llevará acabo el día 7 de octubre con el objetivo de establecer un espacio anual, donde convergen los empresarios más destacados por su gestión hacia el desarrollo sostenible de nuestro país, a través del cual se expongan sus iniciativas más relevantes.
            </div>
          </div> 
        </div> 
      </li>

      <li>
        <div class="span6">
          <a href="/">
            <div class="row-fluid fichaevento">
             <div class="span1 fechaTitular"><div class="mes">OCT</div><div class="dia">15</div></div>                 <div class="span9" >
             <p class="titulopreview">CEMDES es una Organizaci&#243;n de Empresarios y para empresarios, creada para promover el concepto de Desarrollo Sostenible.</p>
           </div>
         </div>
         <div class="row-fluid"> 
          <div class="span10" >
            <img src="asset/img/post-Eventos.jpg">
          </div>
        </div> 
      </a>
      <div class="row-fluid"> 
        <div class="span10" >El diálogo se llevará acabo el día 7 de octubre con el objetivo de establecer un espacio anual, donde convergen los empresarios más destacados por su gestión hacia el desarrollo sostenible de nuestro país, a través del cual se expongan sus iniciativas más relevantes.
        </div>
      </div> 
    </div> 
  </li>

</ul>
</div>

<div class="row-fluid">
  <div class="pagination span12">
    <ul class="pager"></ul>
  </div>
</div>


</div>

<div class="tab-pane myclase " id="b">

  <div class="row-fluid">
    <ul  class="newPaj">

      <li>
        <div class="span6">
          <a href="/">
            <div class="row-fluid fichaevento span10"> 
              <div class="span10" >
                <a id="various5" class="fancybox" href="ficha.php" title=""><img src="asset/img/post-Eventos.jpg" alt=""></a>
              </div>
            </div> 
          </a>
          <div class="row-fluid"> 
            <div class="span10" >El diálogo se llevará acabo el día 7 de octubre con el objetivo de establecer un espacio anual, donde convergen los empresarios más destacados por su gestión hacia el desarrollo sostenible de nuestro país, a través del cual se expongan sus iniciativas más relevantes.
            </div>
          </div> 
        </div> 
      </li>

      <li>
        <div class="span6">
          <a href="/">
            <div class="row-fluid fichaevento span10"> 
              <div class="span10" >
                <a id="various5" class="fancybox" href="ficha.php" title=""><img src="asset/img/post-Eventos.jpg" alt=""></a>
              </div>
            </div> 
          </a>
          <div class="row-fluid"> 
            <div class="span10" >El diálogo se llevará acabo el día 7 de octubre con el objetivo de establecer un espacio anual, donde convergen los empresarios más destacados por su gestión hacia el desarrollo sostenible de nuestro país, a través del cual se expongan sus iniciativas más relevantes.
            </div>
          </div> 
        </div> 
      </li>



    </ul>
  </div>

  <div class="row-fluid">
    <div class="pagination span12">
      <ul class="pager"></ul>
    </div>
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

<script  type="text/javascript" src="lib/scripts.js" ></script>
<script type="text/javascript" src="lib/paj.js"></script>
</body>

</html>
