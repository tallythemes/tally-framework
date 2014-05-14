<?php
/*
 	Footer Open Div
--------------------------------------------*/
if('tally_do_footer_open_warp'):
	function tally_do_footer_open_warp(){
		if(tally_footer_layout_option() == 'none') return;
		
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
		if(tally_footer_layout_option() == 'none') return;
		
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
		if(tally_footer_layout_option() == 'none') return;
		
        echo '<div class="copy_text">';
			echo apply_filters('footer_copyright_text', __('Copyright @ 2014', 'tally_taxdomain'));
        echo '</div>';
	}
	add_action('tally_footer', 'tally_do_footer_copyright', 10);
endif;



/*
 	Footer Copyright
--------------------------------------------*/
if('tally_do_footer_menu'):
	function tally_do_footer_menu(){
		if(tally_footer_layout_option() == 'none') return;
		
        echo '<div class="footer_menu">';
			wp_nav_menu( array('theme_location'=>'footer_menu') );
        echo '</div>';
	}
	add_action('tally_footer', 'tally_do_footer_menu', 10);
endif;