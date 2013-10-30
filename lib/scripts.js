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


        //$('#slider').roundabout();




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
    
   // $('.fancybox').fancybox(); 
   

    /* Apply fancybox to multiple items */
    
    $("a.fancybox").fancybox({
     'width'             : '600',
        'height'            : '500',
        'autoScale'         : false,
        'transitionIn'      : 'none',
        'transitionOut'     : 'none',
        'type'              : 'iframe'
    });
    // $("#various5").fancybox({
    //     'width'             : '75%',
    //     'height'            : '75%',
    //     'autoScale'         : false,
    //     'transitionIn'      : 'none',
    //     'transitionOut'     : 'none',
    //     'type'              : 'iframe'
    // });


       // $("#pikame").PikaChoose();
   

});