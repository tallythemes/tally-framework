<?php
/*
	Theme Color Output function
---------------------------------------------------*/
function tally_color($option_name, $rgba = '', $echo = true){
	$all_colors = apply_filters('tally_colors', array(
		'site_accent_color' => '#E43131',
		'site_accent2_color' => '#1f1f1f',
		
		'color_headings_light' => '#1f1f1f',
		'color_headings_dark' => '#1f1f1f',
		
		'color_subheading_light' => '#1f1f1f',
		'color_subheading_dark' => '#1f1f1f',
		
		'color_text_light' => '#1f1f1f',
		'color_text_dark' => '#1f1f1f',
		
		'color_meta_light' => '#1f1f1f',
		'color_meta_dark' => '#1f1f1f',
		
		'color_border_light' => '#1f1f1f',
		'color_border_dark' => '#1f1f1f',
		
		'color_bg_light' => '#1f1f1f',
		'color_bg_dark' => '#1f1f1f',
		
		'color_inner_bg_light' => '#1f1f1f',
		'color_inner_bg_dark' => '#1f1f1f',
		
		'color_navigation_text' => '#1f1f1f',
		'color_navigation_border' => '#1f1f1f',
		'color_navigation_bg' => '#1f1f1f',
		'color_navigation_text_hover' => '#1f1f1f',
		'color_navigation_border_hover' => '#1f1f1f',
		'color_navigation_bg_hover' => '#1f1f1f',
		'color_navigation_submenu_bg' => '#1f1f1f',
	));
	
	$get_color = tally_option($option_name, $all_colors[$option_name]);
	
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



add_filter('tally_option', 'tally_option_filter');
function tally_option_filter($option){
	/*~~ Headings Color ~~*/
	$option['color_headings_light'] = '#ffffff';
	$option['color_headings_dark'] = '#444444';
	
	/*~~ Sub-Headings Color ~~*/
	$option['color_subheading_light'] = '#e8e8e8';
	$option['color_subheading_dark'] = '#5e5e5e';
	
	/*~~ Body Text Color ~~*/
	$option['color_text_light'] = '#d3d3d3';
	$option['color_text_dark'] = '#777777';
	
	/*~~ Meta Text Color ~~*/
	$option['color_meta_light'] = '#a3a3a3';
	$option['color_meta_dark'] = '#8e8e8e';
	
	/*~~ Border Color ~~*/
	$option['color_border_light'] = '#5e5e5e';
	$option['color_border_dark'] = '#c4c4c4';
	
	/*~~ Background Color ~~*/
	$option['color_bg_light'] = '#ffffff';
	$option['color_bg_dark'] = '#444444';
	
	/*~~ Inner Background Color ~~*/
	$option['color_inner_bg_light'] = '#2d2d2d';
	$option['color_inner_bg_dark'] = '#f2f2f2';
	
	/*~~ topbar ~~*/
	$option['color_topbar_mood'] = 'light';
	$option['color_topbar_bg'] = array('background-color' => '#000000');
	
	/*~~ header ~~*/
	$option['color_header_mood'] = 'light';
	$option['color_header_bg'] = array('background-color' => '#1f1f1f');
	
	/*~~ subheader ~~*/
	$option['color_subheader_mood'] = 'light';
	$option['color_subheader_bg'] = array('background-color' => '#313131');
	
	/*~~ content ~~*/
	$option['color_content_mood'] = 'light';
	$option['color_content_bg'] = array('background-color' => '#1f1f1f');
	
	/*~~ fwidget ~~*/
	$option['color_fwidget_mood'] = 'light';
	$option['color_fwidget_bg'] = array('background-color' => '#313131');
	
	/*~~ footer ~~*/
	$option['color_footer_mood'] = 'light';
	$option['color_footer_bg'] = array('background-color' => '#1f1f1f');
	
	return $option;	
}