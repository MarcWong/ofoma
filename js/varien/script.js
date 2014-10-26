jQuery(document).ready(function(){
    jQuery('li.level-top').hover(function() {
        jQuery(this).addClass('over');
    }, function() {
        jQuery(this).removeClass('over');
    });

        //"Top" button
        var scroll_timer;
        var displayed = false;
        var $message = jQuery('#footer #message');
        var $window = jQuery(window);
        var top = jQuery(document.body).children(0).position().top;
        
        $window.scroll(function () {
            window.clearTimeout(scroll_timer);
            scroll_timer = window.setTimeout(function () { 
            if($window.scrollTop() <= top) 
            {
                displayed = false;
                $message.fadeOut(500);
            }
            else if(displayed == false) 
            {
                displayed = true;
                $message.stop(true, true).fadeIn(500).click(function () { $message.fadeOut(500); });
            }
            }, 400);
        });
        
        jQuery('#top-link').click(function(e) {
                jQuery('html, body').animate({scrollTop:0}, 'slow');
                return false;
        }); 
    jQuery('.top-link-cart').parent().addClass('top-link-cart-li');   
});//end ready