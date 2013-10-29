<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
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
            <img alt="banner" src="asset/banner/banner1.jpg"  />
        </div>

    </div>

    <div class="container">

        <div class="noticias" >                
            <h3>NOTICIAS</h3>

            <div class="noticiasHolder container-fluid"  >   

                <div  class="row-fluid" >

                    <div  class="span3 offset1" >                        
                        <img  class="noticiasImagen" alt="" src="asset/noticias/noticia1.jpg"  />                        
                        <p  class="noticiasFecha" >Martes, 6 Agosto 2010 a la 13h30</p>
                        <p  class="noticiasTitulo" >Visión 2050: La nueva Agenda de negocios</p>                        
                    </div>                    
                    <div  class="span3 offset1" >                        
                        <img  class="noticiasImagen" alt="" src="asset/noticias/noticia2.jpg"  />                        
                        <p  class="noticiasFecha" >Martes, 6 Agosto 2010 a la 13h30</p>
                        <p  class="noticiasTitulo" >Visión 2050: La nueva Agenda de negocios</p>                        
                    </div>                    
                    <div  class="span3 offset1" >                        
                        <img  class="noticiasImagen" alt="" src="asset/noticias/noticia3.jpg"  />                        
                        <p  class="noticiasFecha" >Martes, 6 Agosto 2010 a la 13h30</p>
                        <p  class="noticiasTitulo" >Visión 2050: La nueva Agenda de negocios</p>                        
                    </div>
                </div>
            </div>                                              
        </div>

    </div>
    <div class="slider">

        <div class="noticias" >                
            <h3>Herramientas e iniciativas</h3>

            <ul id="slider" >
             

             <li  class="slider-element" >
                <div  class="slider-wrap" >
                    
                    <div class="header-slider">
                        MIEMBROS
                    </div>
                    <img src="asset/slider/lideres.jpg" alt=""/>
                    <div class="content-slider">
                        Empresas líderes en desarrollo sostenible y responsabilidad social en el Ecuador.
                    </div>
                </div>
            </li>
            <li  class="slider-element" >
                <div  class="slider-wrap" >
                    
                    <div class="header-slider">
                        MIEMBROS
                    </div>
                    <img src="asset/slider/lideres.jpg" alt=""/>
                    <div class="content-slider">
                        Empresas líderes en desarrollo sostenible y responsabilidad social en el Ecuador. 
                    </div>
                </div>
            </li>
            <li  class="slider-element" >
                <div  class="slider-wrap" >
                    
                    <div class="header-slider">
                        MIEMBROS
                    </div>
                    <img src="asset/slider/lideres.jpg" alt=""/>
                    <div class="content-slider">
                        Empresas líderes en desarrollo sostenible y responsabilidad social en el Ecuador. 
                    </div>
                </div>
            </li>
            <li  class="slider-element" >
                <div  class="slider-wrap" >
                    
                    <div class="header-slider">
                        MIEMBROS
                    </div>
                    <img src="asset/slider/lideres.jpg" alt=""/>
                    <div class="content-slider">
                        Empresas líderes en desarrollo sostenible y responsabilidad social en el Ecuador. 
                    </div>
                </div>
            </li>               <li  class="slider-element" >
            <div  class="slider-wrap" >
                
                <div class="header-slider">
                    MIEMBROS
                </div>
                <img src="asset/slider/lideres.jpg" alt=""/>
                <div class="content-slider">
                    Empresas líderes en desarrollo sostenible y responsabilidad social en el Ecuador. 
                </div>
            </div>
        </li>
        
    </ul>

</div>

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

    <div  class="miembros" >
        <h3>Miembros</h3>
        <div  class="container-fluid" >

            <div  class="row-fluid " >


                <div class="span1 offset3">
                    <img src="asset/miembros/cn.jpg" alt="">
                </div>

                <div class="span1">
                    <img src="asset/miembros/corpei.jpg" alt="">
                </div>

                <div class="span1">
                    <img src="asset/miembros/Pronaca.jpg" alt="">
                </div>

                <div class="span1">
                    <img src="asset/miembros/adelca.jpg" alt="">
                </div>

                <div class="span1">
                    <img src="asset/miembros/san-carlos.jpg" alt="">
                </div>

                <div class="span1">
                    <img src="asset/miembros/nobis.jpg" alt="">
                </div>


            </div>
            <div  class="row-fluid " >


                <div class="span2 offset5">
                    <input type="button" id="cargar" style="width:100%;" value="VER MAS" />
                </div>


            </div>


        </div>
    </div>


</div>



<div class="container-fluid  footer-bg">


    <div  class="container" >
 <div class="footer">
            <div class="row-fluid">

                <div class="span6">

                    <div class="row-fluid">
                        <div  class="footer-wrap" >

                            <div class="span8 offset2">  
                                <p class="centered" >                                 
                                    <img src="asset/img/icono-twitter.png" alt=""  class="text-center" style="text-align:center;" />
                                </p>
                                <p  class="titulo-footer text-center" style="" >                                        
                                    ultimos tweets
                                </p>
                                <p style="font-style:italic;"  class="content-footer text-center"  >                                        
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                </p>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="span6"  style="border-left:1px solid #043963;" >
                  <div class="row-fluid">
                      <div  class="footer-wrap" >

                        <div class="span10 offset1">  

                            <p class="titulo-footer" style="text-align:center;" >                                        
                                SUSCRÍBETE A NUESTRO NEWSLETTER
                            </p>
                            <p style="text-align:center;" class="content-footer" >                                        
                                podras recibir notificaciones de activades que cemdes esta realizando
                            </p>

                            <form action="" style="text-align:center;" >

                                <input type="text" class="email-txt" placeholder="ejemplo@correo.com" >

                                <div    >
                                    <img   id="send-btn" src="asset/img/send-normal.png" alt="">
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>

        </div>


    </div>
       


</div>
</div>
<div class="footer-icons" >
    <div class="container">
        <div class="row-fluid">

            <div class="span6 offset2">
                <div>
                    <img alt="social" src="asset/img/blog.png"  />
                    <img alt="social" src="asset/img/twitter.png"  />
                    <img alt="social" src="asset/img/fb.png"  />
                    <img alt="social" src="asset/img/plus.png"  />
                    <img alt="social" src="asset/img/youtube.png"  />         
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>

</html>
