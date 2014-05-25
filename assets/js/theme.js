jQuery(document).ready(function($) {
	
	 $("#nav>div>ul").tinyNav();
	 
	 if(jQuery().fitVids) {
		$(".digita-video").fitVids();
	}
	
	if(jQuery().prettyPhoto){
		 $("a[rel^='prettyPhoto']").prettyPhoto({ deeplinking: false,  social_tools : false });
	}
	
	$(".blog_entry:last").addClass("last");
});


(function( $ ){
    $.fn.digita_stickyMenu = function( options ) {
		
        var $this = this,
        defaults = {
            'left' : 0,
            'top' : 0,
            'menu_offset_top' : $this.offset().top
        },
        settings = $.extend({}, defaults, options);
        $(window).on('scroll.stickyMenu', function(){
            if ($(window).scrollTop() > settings.menu_offset_top)
            { 
                /*$this.css({ 
                    'position': 'fixed',
                    'top':settings.left,
                    'left':settings.top,
                    'zIndex':9999,
					'width':'100%'
                });*/
				$this.addClass('stickyMenu');
            }
            else
            {
                /*$this.css({ 
                    'position': 'relative',
                }); */
				$this.removeClass('stickyMenu');
            }
        });
        return $this;
    };
})(jQuery);

jQuery(document).ready(function($) {
	$('#header').digita_stickyMenu();
});
/*

jQuery(function($) {
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});

*/