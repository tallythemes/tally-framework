<?php
add_filter('tally_option_std', 'tally_option_std_filter');
function tally_option_std_filter($option){
	/*==========================================
		Branding
	===========================================*/
	//$option['site_logo'] = TALLY_URL.'/assets/images/logo.png';
	//$option['site_logo_retina'] = TALLY_URL.'/assets/images/logo@2x.png';
	$option['favicon'] = TALLY_URL.'/assets/images/favicon.ico';
	
	
	/*==========================================
		Site Layout
	===========================================*/
	$option['site_layout'] = 'full';
	$option['is_topbar'] = 'no';
	$option['is_header'] = 'yes';
	$option['is_subheader'] = 'yes';
	$option['sidebar_layout'] = 'content-sidebar';
	$option['enable_page_comment'] = 'no';
	$option['enable_post_comment'] = 'yes';
	$option['footer_widget_layout'] = '3';
	$option['footer_layout'] = 'yes';
	
	
	/*==========================================
		Header
	===========================================*/
	$option['enable_header_sticky'] = 'no';
	$option['header_height'] = '';
	$option['header_menu_top_margin'] = '';
	$option['header_logo_top_margin'] = '';
	
	
	/*==========================================
		Color Option
	===========================================*/
	$option['site_color_skin'] = 'light';
	$option['site_background'] = '';
	
	/*~~ Accent Color ~~*/
	$option['site_accent_color'] = '#E43131';
	$option['site_accent2_color'] = '#52a332';
	
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
	$option['color_topbar_mood'] = 'dark';
	$option['color_topbar_bg'] = array('background-color' => '#f1f1f1', 'background-image' => '');
	
	/*~~ header ~~*/
	$option['color_header_mood'] = 'dark';
	$option['color_header_bg'] = array('background-color' => '#ffffff', 'background-image' => '');
	
	/*~~ subheader ~~*/
	$option['color_subheader_mood'] = 'dark';
	$option['color_subheader_bg'] = array('background-color' => '#f1f1f1', 'background-image' => '');
	
	/*~~ content ~~*/
	$option['color_content_mood'] = 'dark';
	$option['color_content_bg'] = array('background-color' => '#ffffff', 'background-image' => '');
	
	/*~~ fwidget ~~*/
	$option['color_fwidget_mood'] = 'light';
	$option['color_fwidget_bg'] = array('background-color' => '#313131', 'background-image' => '');
	
	/*~~ footer ~~*/
	$option['color_footer_mood'] = 'light';
	$option['color_footer_bg'] = array('background-color' => '#1f1f1f', 'background-image' => '');
	
	/*~~ Nav ~~*/
	$option['color_navigation_text']         = '#444444';
	$option['color_navigation_border']       = '#444444';
	$option['color_navigation_bg']           = '#ffffff';
	$option['color_navigation_text_hover']   = '#E43131';
	$option['color_navigation_border_hover'] = '#E43131';
	$option['color_navigation_bg_hover']     = '#ffffff';
	$option['color_navigation_submenu_bg']   = '#313131';
	
	
	/*==========================================
		Typography
	===========================================*/
	$option['enable_google_fonts'] = 'yes';
	$option['headings_google_font_link'] = '<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,700,400" rel="stylesheet" type="text/css" />';
	$option['headings_google_font_family'] = 'font-family: "Open Sans", sans-serif;';
	$option['body_google_font_link'] = '<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,700,400" rel="stylesheet" type="text/css" />';
	$option['body_google_font_family'] = 'font-family: "Open Sans", sans-serif;';
	$option['h1_font_size'] = '';
	$option['h2_font_size'] = '';
	$option['h3_font_size'] = '';
	$option['h4_font_size'] = '';
	$option['h5_font_size'] = '';
	$option['h6_font_size'] = '';
	$option['body_font_size'] = '';
	
	
	/*==========================================
		Social Icons
	===========================================*/
	$option['enable_social_icons'] = 'yes';
	$option['social_icons'] = array(
		array('title'=> 'Dribbble', 'link'=> '#', 'icon'=>'fa-dribbble'),
		array('title'=> 'Twitter', 'link'=> '#', 'icon'=> 'fa-twitter'),
		array('title'=> 'Facebook', 'link'=> '#', 'icon'=> 'fa-facebook'),
		array('title'=> 'Google Plus', 'link'=> '#', 'icon'=> 'fa-google-plus'),
	);
	
	/*==========================================
		Footer 
	===========================================*/
	$option['footer_copyright'] = 'Copyright 2014 @ TallyThemes';
	
	
	return $option;	
}