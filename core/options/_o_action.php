<?php
add_action('wp_head', 'tally_op_option_action');
function tally_op_option_action(){
	if(tally_option('favicon')){echo '<link rel="shortcut icon" href="'.tally_option('favicon').'" type="image/x-icon">';}
	if(tally_option('enable_google_fonts') == 'yes'){
		echo tally_option('headings_google_font_link');
		echo tally_option('body_google_font_link');
	}
	
	if(tally_option('google_analytics')){ echo tally_option('google_analytics'); }
}

add_action('wp_footer', 'tally_ot_footer_action');
function tally_ot_footer_action(){
	echo '<script type="text/javascript">';
		if(tally_option('custom_js')){ echo tally_option('custom_js'); }
	echo '</script>';
}


/* Edit Body Class
----------------------------*/
add_filter('body_class', 'tally_ot_body_class_filter');
function tally_ot_body_class_filter($class){
	
	if(tally_option('enable_header_sticky') == 'yes'){ $class[] = 'header-sticky'; }
	
	return $class;
}