<?php
/*
 	Footer Open Div
--------------------------------------------*/
if('tally_do_footer_open_warp'):
	function tally_do_footer_open_warp(){
		if(tally_is_footer() == 'none') return;
		
		echo '<div id="footer">';
			echo '<div id="footer-inner">';
	}
	add_action('tally_footer', 'tally_do_footer_open_warp', 5);
endif;



/*
 	Footer Closing Div
--------------------------------------------*/
if('tally_do_footer_closing_warp'):
	function tally_do_footer_closing_warp(){
		if(tally_is_footer() == 'none') return;
		
				echo '<div class="clear"></div>';
			echo '</div>';
		echo '</div>';
	}
	add_action('tally_footer', 'tally_do_footer_closing_warp', 15);
endif;




/*
 	Footer Copyright
--------------------------------------------*/
if('tally_do_footer_copyright'):
	function tally_do_footer_copyright(){
		if(tally_is_footer() == 'none') return;
		
        echo '<div class="copy_text">';
			echo apply_filters('footer_copyright_text', tally_option('footer_copyright', 'Powered by <a href="http://wordpress.org/" target="_blank" title="A Semantic Personal Publishing Platform" rel="generator">WordPress</a> | Design by <a href="http://tallythemes.com/" target="_blank" rel="designer">TallyThemes</a>'));
        echo '</div>';
	}
	add_action('tally_footer', 'tally_do_footer_copyright', 10);
endif;



/*
 	Footer Copyright
--------------------------------------------*/
if('tally_do_footer_menu'):
	function tally_do_footer_menu(){
		if(tally_is_footer() == 'none') return;
		
        echo '<div class="footer_menu">';
			wp_nav_menu( array('theme_location'=>'footer_menu') );
        echo '</div>';
	}
	add_action('tally_footer', 'tally_do_footer_menu', 10);
endif;