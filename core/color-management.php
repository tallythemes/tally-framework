<?php
/*
	Theme Color Output function
---------------------------------------------------*/
function tally_color($option_name, $rgba = '', $echo = true){
	$light_colors = apply_filters('tally_light_colors', array(
		'site_accent_color' => '#E43131',
		
		'color_topbar_text' => '#1f1f1f',
		'color_topbar_border' => '#1f1f1f',
		'color_topbar_bg' => '#1f1f1f',
		
		'color_header_text' => '#1f1f1f',
		'color_header_border' => '#1f1f1f',
		'color_header_bg' => '#1f1f1f',
		
		'color_navigation_text' => '#1f1f1f',
		'color_navigation_border' => '#1f1f1f',
		'color_navigation_bg' => '#1f1f1f',
		'color_navigation_text_hover' => '#1f1f1f',
		'color_navigation_border_hover' => '#1f1f1f',
		'color_navigation_bg_hover' => '#1f1f1f',
		
		'color_subheader_heading' => '#1f1f1f',
		'color_subheader_text' => '#1f1f1f',
		'color_subheader_border' => '#1f1f1f',
		'color_subheader_bg' => '#1f1f1f',
		
		'color_content_heading' => '#1f1f1f',
		'color_content_subheading' => '#1f1f1f',
		'color_content_text' => '#1f1f1f',
		'color_content_meta' => '#1f1f1f',
		'color_content_border' => '#1f1f1f',
		'color_content_inner_bg' => '#1f1f1f',
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

	
	$dark_colors = apply_filters('tally_dark_colors', array(
		'site_accent_color' => '#E43131',
		
		'color_topbar_text' => '#1f1f1f',
		'color_topbar_border' => '#1f1f1f',
		'color_topbar_bg' => '#1f1f1f',
		
		'color_header_text' => '#1f1f1f',
		'color_header_border' => '#1f1f1f',
		'color_header_bg' => '#1f1f1f',
		
		'color_navigation_text' => '#1f1f1f',
		'color_navigation_border' => '#1f1f1f',
		'color_navigation_bg' => '#1f1f1f',
		'color_navigation_text_hover' => '#1f1f1f',
		'color_navigation_border_hover' => '#1f1f1f',
		'color_navigation_bg_hover' => '#1f1f1f',
		
		'color_subheader_heading' => '#1f1f1f',
		'color_subheader_text' => '#1f1f1f',
		'color_subheader_border' => '#1f1f1f',
		'color_subheader_bg' => '#1f1f1f',
		
		'color_content_heading' => '#1f1f1f',
		'color_content_subheading' => '#1f1f1f',
		'color_content_text' => '#1f1f1f',
		'color_content_meta' => '#1f1f1f',
		'color_content_border' => '#1f1f1f',
		'color_content_inner_bg' => '#1f1f1f',
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
	
	$all_colors = NULL;
	if(tally_option('site_color_skin', 'light') == 'light'){ $all_colors = $light_colors; }else{ $all_colors = $dark_colors; }
	
	$get_color = tally_option($option_name, $all_colors[$option_name]);
	
	if($rgba != ''){ $get_color = tally_hex2rgb($get_color); }
	
	if($echo == true){ echo $get_color; }else{ return $get_color; }
	
}


add_filter('tally_light_colors', 'tally_light_color_filter', 10);
function tally_light_color_filter($light_color){
	$light_color['site_accent_color'] = '#E43131';
	
	$light_color['color_topbar_text'] = '#757575'; 
	$light_color['color_topbar_border'] = '#EBEBEB'; 
	$light_color['color_topbar_bg'] = '#FAFAFA';
	
	$light_color['color_navigation_text'] = '#999999';
	$light_color['color_navigation_border'] = '#E9E9E9';
	$light_color['color_navigation_bg'] = '#ffffff';
	$light_color['color_navigation_text_hover'] = '#999999';
	$light_color['color_navigation_border_hover'] = '#E9E9E9';
	$light_color['color_navigation_bg_hover'] = '#ffffff';
	$light_color['color_navigation_submenu_bg'] = '#f1f1f1';
	
	$light_color['color_header_text'] = '#999999';
	$light_color['color_header_border'] = '#E9E9E9';
	$light_color['color_header_bg'] = '#ffffff';
	
	$light_color['color_subheader_heading'] = '#585656';
	$light_color['color_subheader_text'] = '#838383';
	$light_color['color_subheader_border'] = '#EBEBEB';
	$light_color['color_subheader_bg'] = '#FAFAFA';
	
	$light_color['color_content_heading'] = '#585656';
	$light_color['color_content_subheading'] = '#E9E9E9';
	$light_color['color_content_text'] = '#838383';
	$light_color['color_content_meta'] = '#E9E9E9';
	$light_color['color_content_border'] = '#DDDCDC';
	$light_color['color_content_inner_bg'] = '#F8F8F8';
	$light_color['color_content_bg'] = '#ffffff';
	
	$light_color['color_fwidget_heading'] = '#C0C0C0';
	$light_color['color_fwidget_text'] = '#6D6D6D';
	$light_color['color_fwidget_link'] = '#919191';
	$light_color['color_fwidget_border'] = '#424141';
	$light_color['color_fwidget_inner_bg'] = '#2B2B2B';
	$light_color['color_fwidget_bg'] = '#1f1f1f';
	
	$light_color['color_footer_text'] = '#6D6D6D';
	$light_color['color_footer_link'] = '#919191';
	$light_color['color_footer_border'] = '#363636';
	$light_color['color_footer_bg'] = '#2B2B2B';
	
	return $light_color;	
}



add_filter('tally_dark_colors', 'tally_dark_color_filter', 10);
function tally_dark_color_filter($dark_color){
	$dark_color['site_accent_color'] = '#E43131';
	
	$dark_color['color_topbar_text'] = '#A5A5A5'; 
	$dark_color['color_topbar_border'] = '#4D4D4D'; 
	$dark_color['color_topbar_bg'] = '#303030';
	
	$dark_color['color_navigation_text'] = '#D6D6D6';
	$dark_color['color_navigation_border'] = '#3C3C3C';
	$dark_color['color_navigation_bg'] = '#3C3C3C';
	$dark_color['color_navigation_text_hover'] = '#D6D6D6';
	$dark_color['color_navigation_border_hover'] = '#3C3C3C';
	$dark_color['color_navigation_bg_hover'] = '#3C3C3C';
	
	$dark_color['color_header_text'] = '#D6D6D6';
	$dark_color['color_header_border'] = '#4D4D4D';
	$dark_color['color_header_bg'] = '#3C3C3C';
	
	$dark_color['color_subheader_heading'] = '#ffffff';
	$dark_color['color_subheader_text'] = '#868585';
	$dark_color['color_subheader_border'] = '#4D4D4D';
	$dark_color['color_subheader_bg'] = '#303030';
	
	$dark_color['color_content_heading'] = '#ffffff';
	$dark_color['color_content_subheading'] = '#f3f3f3';
	$dark_color['color_content_text'] = '#A0A0A0';
	$dark_color['color_content_meta'] = '#E9E9E9';
	$dark_color['color_content_border'] = '#4D4D4D';
	$dark_color['color_content_inner_bg'] = '#494949';
	$dark_color['color_content_bg'] = '#3C3C3C';
	
	$dark_color['color_fwidget_heading'] = '#C0C0C0';
	$dark_color['color_fwidget_text'] = '#6D6D6D';
	$dark_color['color_fwidget_link'] = '#919191';
	$dark_color['color_fwidget_border'] = '#424141';
	$dark_color['color_fwidget_inner_bg'] = '#2B2B2B';
	$dark_color['color_fwidget_bg'] = '#1f1f1f';
	
	$dark_color['color_footer_text'] = '#6D6D6D';
	$dark_color['color_footer_link'] = '#919191';
	$dark_color['color_footer_border'] = '#363636';
	$dark_color['color_footer_bg'] = '#2B2B2B';
	
	return $dark_color;	
}