<?php
/*
	Theme Color Output function
---------------------------------------------------*/
function tally_color($option_name, $rgba = '', $echo = true){
	
	$get_color = tally_option($option_name);
	
	if($rgba != ''){ $get_color = 'rgba('.tally_hex2rgb($get_color).','.$rgba.')'; }
	
	if($echo == true){ echo $get_color; }else{ return $get_color; }
}


/*--- adding Color mood class ---*/
add_filter('tally_topbar_class', 'tally_topbar_class_filter');
add_filter('tally_header_class', 'tally_header_class_filter');
add_filter('tally_subheader_class', 'tally_subheader_class_filter');
add_filter('tally_main_class', 'tally_main_class_filter');
add_filter('tally_fwidget_class', 'tally_fwidget_class_filter');
add_filter('tally_footer_class', 'tally_footer_class_filter');

function tally_topbar_class_filter($class){
	$the_class = $class;
	if( tally_option('color_topbar_mood') == 'light' ){ $the_class = 'color_mood_light'; }
	elseif( tally_option('color_topbar_mood') == 'dark' ){ $the_class = 'color_mood_dark'; }	
	return $the_class;
}

function tally_header_class_filter($class){
	$the_class = $class;
	if( tally_option('color_header_mood') == 'light' ){ $the_class = 'color_mood_light'; }
	elseif( tally_option('color_header_mood') == 'dark' ){ $the_class = 'color_mood_dark'; }
	return $the_class;
}

function tally_subheader_class_filter($class){
	$the_class = $class;
	if( tally_option('color_subheader_mood') == 'light' ){ $the_class = 'color_mood_light'; }
	elseif( tally_option('color_subheader_mood') == 'dark' ){ $the_class = 'color_mood_dark'; }	
	return $the_class;
}

function tally_main_class_filter($class){
	$the_class = $class;
	if( tally_option('color_content_mood') == 'light' ){ $the_class = 'color_mood_light'; }
	elseif( tally_option('color_content_mood') == 'dark' ){ $the_class = 'color_mood_dark'; }
	return $the_class;
}

function tally_fwidget_class_filter($class){
	$the_class = $class;
	if( tally_option('color_fwidget_mood') == 'light' ){ $the_class = 'color_mood_light'; }
	elseif( tally_option('color_fwidget_mood') == 'dark' ){ $the_class = 'color_mood_dark'; }
	return $the_class;
}

function tally_footer_class_filter($class){
	$the_class = $class;
		
	if( tally_option('color_footer_mood') == 'light' ){ $the_class = 'color_mood_light'; }
	elseif( tally_option('color_footer_mood') == 'dark' ){ $the_class = 'color_mood_dark'; }
	
	return $the_class;
}