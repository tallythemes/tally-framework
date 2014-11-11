/*jQuery(window).load(function(){
  jQuery('#tally_preloader_div').fadeOut(2000);
});*/

(function ($) {
// VERTICALLY ALIGN FUNCTION
$.fn.vAlign = function() {
    return this.each(function(i){
    var ah = $(this).height();
    var ph = $(this).parent().height();
    var mh = Math.ceil((ph-ah) / 2);
    $(this).css('margin-top', mh);
    });
};
})(jQuery);


jQuery(window).load( function(){
	var mainDiv = jQuery('#wrapper'),
	preloader = jQuery('#tally_preloader');

	preloader.fadeOut(400, function(){
		mainDiv.delay(400).addClass('active');
	});
});


jQuery(document).ready(function($) {
	
	 $("#nav>div>ul").tinyNav({  active: 'current-menu-item' });
	 
	 if(jQuery().fitVids) {
		$(".digita-video").fitVids();
	}
	
	if(jQuery().prettyPhoto){
		 $("a[rel^='prettyPhoto']").prettyPhoto({ deeplinking: false,  social_tools : false });
	}
	
	$(".blog_entry:last").addClass("last");
	
	/* Search Bar with Icon*/
	$('.tally_icon_search_bar a.the_search_icon').click(function() {
		var search_form_holder = $(".tally_icon_search_bar #searchform");
		if(search_form_holder.hasClass('active')){
			search_form_holder.hide();
			search_form_holder.removeClass('active');
		}else{
			search_form_holder.show();
			search_form_holder.addClass('active');
		}
		return false;
	})
	
	/*  WPML language switcher */
	$('.tally_wpml_language_switcher .lan-menu').click(function() {
		var tally_wpml_language_switcher = $(".tally_wpml_language_switcher .flag-list");
		if(tally_wpml_language_switcher.hasClass('active')){
			tally_wpml_language_switcher.hide();
			tally_wpml_language_switcher.removeClass('active');
		}else{
			tally_wpml_language_switcher.show();
			tally_wpml_language_switcher.addClass('active');
		}
		return false;
	})
	
	if(WOW){
		new WOW().init();
	}
	
	
	$('.vertical-align-center').vAlign();
	
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


/**
 * Responsive Video Embeds
 *
 * Create and maintained by Kevin Leary, www.kevinleary.net, WordPress development in Boston, MA
 */(function(e){var t={config:{container:e(".rve"),selector:"object, embed, iframe"},init:function(n){t.config.container.length>0&&e(window).on("resize load",t.resize)},resize:function(){e(t.config.selector,t.config.container).each(function(){var t=e(this),n=t.parent().width(),r=Math.round(n*.5625);t.attr("height",r);t.attr("width",n)})}};t.init()})(jQuery);