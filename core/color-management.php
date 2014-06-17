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
		
		'color_content_bg' => '#1f1f1f',
		'color_fwidget_heading' => '#1f1f1f',
		'color_fwidget_text' => '#1f1f1f',
		'color_fwidget_link' => '#1f1f1f',
		'color_fwidget_border' => '#1f1f1f',
		'color_fwidget_inner_bg' => '#1f1f1f',
		'color_fwidget_bg' => '#1f1f1f',
		'color_footer_text' => '#1f1f1f',
		'color_footer_link' => '#1f1f1f',
		'color_footer_border' => '#1f1f1f',
		'color_footer_bg' => '#1f1f1f',
	));
	
	$get_color = tally_option($option_name, $all_colors[$option_name]);
	
	if($rgba != ''){ $get_color = 'rgba('.tally_hex2rgb($get_color).','.$rgba.')'; }
	
	if($echo == true){ echo $get_color; }else{ return $get_color; }
}