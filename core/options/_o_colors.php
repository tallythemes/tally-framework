<?php
add_filter('option_tree_settings_args', 'digita_color_ot_options');
function digita_color_ot_options($custom_settings){
	$custom_settings['sections'][] = array( 'id' => 'color','title' => 'Color Option');
	
	$custom_settings['settings']['site_color_skin'] = array(
		'id'          => 'site_color_skin',
        'label'       => __('Choose Your Color Skin', 'digita_taxdomain'),
        'desc'        => '',
        'std'         => 'light',
        'type'        => 'select',
        'section'     => 'color',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
		'choices'     => array(
			 array( 'label' => 'Light', 'value' => 'light'),
			 array( 'label' => 'Dark', 'value' => 'dark'),
		),
	);
	
	$custom_settings['settings']['site_accent_color'] = array(
		'id'          => 'site_accent_color',
        'label'       => __('Accent Color of The Site', 'digita_taxdomain'),
        'desc'        => '',
        'std'         => '#61a747',
        'type'        => 'colorpicker',
        'section'     => 'color',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
		'choices'     => '',
	);
	
	$custom_settings['settings']['site_background'] = array(
		'id'          => 'site_background',
        'label'       => __('Site Body Background', 'digita_taxdomain'),
        'desc'        => '',
        'std'         => '',
        'type'        => 'background',
        'section'     => 'color',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
		'choices'     => '',
	);
	
	
	/*-- Topbar Color --*/
	if(DIGITA_LAYOUT_TOPBAR_REMOVE == false):
	$custom_settings['settings']['color_block_topbar'] = array(
        'id'          => 'color_block_topbar',
        'label'       => '',
        'desc'        => '<div class="digita-ot-section"><h2>Topbar Color Options</h2></div>',
        'std'         => '',
        'type'        => 'textblock',
        'section'     => 'color',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'choices'     => ''
	);
	$custom_settings['settings']['color_topbar_text'] = array(
        'id'          => 'color_topbar_text',
        'label'       => __('Topbar Text Color', 'digita_taxdomain'),
        'desc'        => __('Simple text color of the topbar area', 'digita_taxdomain'),
        'std'         => '',
        'type'        => 'colorpicker',
        'section'     => 'color',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'choices'     => ''
	);
	$custom_settings['settings']['color_topbar_border'] = array(
        'id'          => 'color_topbar_border',
        'label'       => __('Topbar Border Color', 'digita_taxdomain'),
        'desc'        => __('Border color for each element in the topbar area', 'digita_taxdomain'),
        'std'         => '',
        'type'        => 'colorpicker',
        'section'     => 'color',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'choices'     => ''
	);
	$custom_settings['settings']['color_topbar_bg'] = array(
        'id'          => 'color_topbar_bg',
        'label'       => __('Topbar Background Color', 'digita_taxdomain'),
        'desc'        => __('background color of the topbar area', 'digita_taxdomain'),
        'std'         => '',
        'type'        => 'colorpicker',
        'section'     => 'color',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'choices'     => ''
	);
	endif;
	
	
	/*-- Header Color --*/
	$custom_settings['settings']['color_block_header'] = array(
        'id'          => 'color_block_header',
        'label'       => '',
        'desc'        => '<div class="digita-ot-section"><h2>Header Color Options</h2></div>',
        'std'         => '',
        'type'        => 'textblock',
        'section'     => 'color',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'choices'     => ''
	);
	$custom_settings['settings']['color_header_text'] = array(
        'id'          => 'color_header_text',
        'label'       => __('Header Text Color', 'digita_taxdomain'),
        'desc'        => __('Simple text color of the header area', 'digita_taxdomain'),
        'std'         => '',
        'type'        => 'colorpicker',
        'section'     => 'color',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'choices'     => ''
	);
	$custom_settings['settings']['color_header_border'] = array(
        'id'          => 'color_header_border',
        'label'       => __('Header Border Color', 'digita_taxdomain'),
        'desc'        => __('Border color for each element in the header area', 'digita_taxdomain'),
        'std'         => '',
        'type'        => 'colorpicker',
        'section'     => 'color',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'choices'     => ''
	);
	$custom_settings['settings']['color_header_bg'] = array(
        'id'          => 'color_header_bg',
        'label'       => __('Header Background Color', 'digita_taxdomain'),
        'desc'        => __('background color of the header area', 'digita_taxdomain'),
        'std'         => '',
        'type'        => 'colorpicker',
        'section'     => 'color',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'choices'     => ''
	);
	
	
	/*-- Navigation Color --*/
	$custom_settings['settings']['color_block_navigation'] = array(
        'id'          => 'color_block_navigation',
        'label'       => '',
        'desc'        => '<div class="digita-ot-section"><h2>Navigation Color Options</h2></div>',
        'std'         => '',
        'type'        => 'textblock',
        'section'     => 'color',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'choices'     => ''
	);
	$custom_settings['settings']['color_navigation_text'] = array(
        'id'          => 'color_navigation_text',
        'label'       => __('Navigation Text Color', 'digita_taxdomain'),
        'desc'        => __('Simple text color of the navigation area', 'digita_taxdomain'),
        'std'         => '',
        'type'        => 'colorpicker',
        'section'     => 'color',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'choices'     => ''
	);
	$custom_settings['settings']['color_navigation_border'] = array(
        'id'          => 'color_navigation_border',
        'label'       => __('Navigation Border Color', 'digita_taxdomain'),
        'desc'        => __('Border color for each element in the navigation area', 'digita_taxdomain'),
        'std'         => '',
        'type'        => 'colorpicker',
        'section'     => 'color',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'choices'     => ''
	);
	$custom_settings['settings']['color_navigation_bg'] = array(
        'id'          => 'color_navigation_bg',
        'label'       => __('Navigation Background Color', 'digita_taxdomain'),
        'desc'        => __('background color of the navigation area', 'digita_taxdomain'),
        'std'         => '',
        'type'        => 'colorpicker',
        'section'     => 'color',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'choices'     => ''
	);
    
    //hover   
    $custom_settings['settings']['color_navigation_text_hover'] = array(
        'id'          => 'color_navigation_text_hover',
        'label'       => __('Navigation Text Hover Color', 'digita_taxdomain'),
        'desc'        => __('Simple text color of the navigation area', 'digita_taxdomain'),
        'std'         => '',
        'type'        => 'colorpicker',
        'section'     => 'color',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'choices'     => ''
	);
	$custom_settings['settings']['color_navigation_border_hover'] = array(
        'id'          => 'color_navigation_border_hover',
        'label'       => __('Navigation Border Hover Color', 'digita_taxdomain'),
        'desc'        => __('Border color for each element in the navigation area', 'digita_taxdomain'),
        'std'         => '',
        'type'        => 'colorpicker',
        'section'     => 'color',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'choices'     => ''
	);
	$custom_settings['settings']['color_navigation_bg_hover'] = array(
        'id'          => 'color_navigation_bg_hover',
        'label'       => __('Navigation Background Hover Color', 'digita_taxdomain'),
        'desc'        => __('background color of the navigation area', 'digita_taxdomain'),
        'std'         => '',
        'type'        => 'colorpicker',
        'section'     => 'color',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'choices'     => ''
	);
	
	$custom_settings['settings']['color_navigation_submenu_bg'] = array(
        'id'          => 'color_navigation_bg_hover',
        'label'       => __('Navigation Submenu Background Color', 'digita_taxdomain'),
        'desc'        => __('background color of the navigation area', 'digita_taxdomain'),
        'std'         => '',
        'type'        => 'colorpicker',
        'section'     => 'color',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'choices'     => ''
	);
	
	
	/*-- Sub Header Color --*/
	if(DIGITA_LAYOUT_SUBHEADER_REMOVE == false):
	$custom_settings['settings']['color_block_subheader'] = array(
        'id'          => 'color_block_subheader',
        'label'       => '',
        'desc'        => '<div class="digita-ot-section"><h2>Sub Header Color Options</h2></div>',
        'std'         => '',
        'type'        => 'textblock',
        'section'     => 'color',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'choices'     => ''
	);
	$custom_settings['settings']['color_subheader_heading'] = array(
        'id'          => 'color_subheader_heading',
        'label'       => __('Sub-Header Headings Color', 'digita_taxdomain'),
        'desc'        => __('HTML headings color. For example h1, h2, h3, h4, h5 and h6', 'digita_taxdomain'),
        'std'         => '',
        'type'        => 'colorpicker',
        'section'     => 'color',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'choices'     => ''
	);
	$custom_settings['settings']['color_subheader_text'] = array(
        'id'          => 'color_subheader_text',
        'label'       => __('Sub-Header Text Color', 'digita_taxdomain'),
        'desc'        => __('Simple text color of the header area', 'digita_taxdomain'),
        'std'         => '',
        'type'        => 'colorpicker',
        'section'     => 'color',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'choices'     => ''
	);
	$custom_settings['settings']['color_subheader_border'] = array(
        'id'          => 'color_subheader_border',
        'label'       => __('Sub-Header Border Color', 'digita_taxdomain'),
        'desc'        => __('Border color for each element in the header area', 'digita_taxdomain'),
        'std'         => '',
        'type'        => 'colorpicker',
        'section'     => 'color',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'choices'     => ''
	);
	$custom_settings['settings']['color_subheader_bg'] = array(
        'id'          => 'color_subheader_bg',
        'label'       => __('Sub-Header Background Color', 'digita_taxdomain'),
        'desc'        => __('background color of the header area', 'digita_taxdomain'),
        'std'         => '',
        'type'        => 'colorpicker',
        'section'     => 'color',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'choices'     => ''
	);
	endif;
	
	
	/*-- Main Content area Color --*/
	$custom_settings['settings']['color_block_content'] = array(
        'id'          => 'color_block_content',
        'label'       => '',
        'desc'        => '<div class="digita-ot-section"><h2>Main Content area Color Options</h2></div>',
        'std'         => '',
        'type'        => 'textblock',
        'section'     => 'color',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'choices'     => ''
	);
	$custom_settings['settings']['color_content_heading'] = array(
        'id'          => 'color_content_heading',
        'label'       => __('Content Headings Color', 'digita_taxdomain'),
        'desc'        => __('HTML headings color. For example h1, h2, h3, h4, h5 and h6', 'digita_taxdomain'),
        'std'         => '',
        'type'        => 'colorpicker',
        'section'     => 'color',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'choices'     => ''
	);
	$custom_settings['settings']['color_content_subheading'] = array(
        'id'          => 'color_content_subheading',
        'label'       => __('Sub Headings Color', 'digita_taxdomain'),
        'desc'        => __('This is the 2nd color for the headings.', 'digita_taxdomain'),
        'std'         => '',
        'type'        => 'colorpicker',
        'section'     => 'color',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'choices'     => ''
	);
	$custom_settings['settings']['color_content_text'] = array(
        'id'          => 'color_content_text',
        'label'       => __('Content Text Color', 'digita_taxdomain'),
        'desc'        => __('Simple text color of the content area', 'digita_taxdomain'),
        'std'         => '',
        'type'        => 'colorpicker',
        'section'     => 'color',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'choices'     => ''
	);
	$custom_settings['settings']['color_content_meta'] = array(
        'id'          => 'color_content_meta',
        'label'       => __('Content Meta Text Color', 'digita_taxdomain'),
        'desc'        => __('This should me lighter than text color', 'digita_taxdomain'),
        'std'         => '',
        'type'        => 'colorpicker',
        'section'     => 'color',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'choices'     => ''
	);
	$custom_settings['settings']['color_content_border'] = array(
        'id'          => 'color_content_border',
        'label'       => __('Content Border Color', 'digita_taxdomain'),
        'desc'        => __('Border color for each element in the content area', 'digita_taxdomain'),
        'std'         => '',
        'type'        => 'colorpicker',
        'section'     => 'color',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'choices'     => ''
	);
	$custom_settings['settings']['color_content_inner_bg'] = array(
        'id'          => 'color_content_inner_bg',
        'label'       => __('Content Inner Background Color', 'digita_taxdomain'),
        'desc'        => __('Inner background color of the content area', 'digita_taxdomain'),
        'std'         => '',
        'type'        => 'colorpicker',
        'section'     => 'color',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'choices'     => ''
	);
	$custom_settings['settings']['color_content_bg'] = array(
        'id'          => 'color_content_bg',
        'label'       => __('Content Background Color', 'digita_taxdomain'),
        'desc'        => __('background color of the content area', 'digita_taxdomain'),
        'std'         => '',
        'type'        => 'colorpicker',
        'section'     => 'color',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'choices'     => ''
	);
	
	
	/*-- Footer Widgets area Color --*/
	if(DIGITA_LAYOUT_FOOTER_WIDGETS_REMOVE == false):
	$custom_settings['settings']['color_block_fwidget'] = array(
        'id'          => 'color_block_fwidget',
        'label'       => '',
        'desc'        => '<div class="digita-ot-section"><h2>Footer Widgets area Color Options</h2></div>',
        'std'         => '',
        'type'        => 'textblock',
        'section'     => 'color',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'choices'     => ''
	);
	$custom_settings['settings']['color_fwidget_heading'] = array(
        'id'          => 'color_fwidget_heading',
        'label'       => __('Footer Widgets Headings Color', 'digita_taxdomain'),
        'desc'        => __('HTML headings color. For example h1, h2, h3, h4, h5 and h6', 'digita_taxdomain'),
        'std'         => '',
        'type'        => 'colorpicker',
        'section'     => 'color',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'choices'     => ''
	);
	$custom_settings['settings']['color_fwidget_text'] = array(
        'id'          => 'color_fwidget_text',
        'label'       => __('Footer Widgets Text Color', 'digita_taxdomain'),
        'desc'        => __('Simple text color of the footer widgets area', 'digita_taxdomain'),
        'std'         => '',
        'type'        => 'colorpicker',
        'section'     => 'color',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'choices'     => ''
	);
	$custom_settings['settings']['color_fwidget_link'] = array(
        'id'          => 'color_fwidget_link',
        'label'       => __('Footer Widgets Link Color', 'digita_taxdomain'),
        'desc'        => __('Link color of the footer widgets area', 'digita_taxdomain'),
        'std'         => '',
        'type'        => 'colorpicker',
        'section'     => 'color',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'choices'     => ''
	);
	$custom_settings['settings']['color_fwidget_border'] = array(
        'id'          => 'color_fwidget_border',
        'label'       => __('Footer Widgets Border Color', 'digita_taxdomain'),
        'desc'        => __('Border color for each element in the footer widgets area', 'digita_taxdomain'),
        'std'         => '',
        'type'        => 'colorpicker',
        'section'     => 'color',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'choices'     => ''
	);
	$custom_settings['settings']['color_fwidget_inner_bg'] = array(
        'id'          => 'color_fwidget_inner_bg',
        'label'       => __('Footer Widgets Inner Background Color', 'digita_taxdomain'),
        'desc'        => __('Inner background color of the footer widgets area', 'digita_taxdomain'),
        'std'         => '',
        'type'        => 'colorpicker',
        'section'     => 'color',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'choices'     => ''
	);
	$custom_settings['settings']['color_fwidget_bg'] = array(
        'id'          => 'color_fwidget_bg',
        'label'       => __('Footer Widgets Background Color', 'digita_taxdomain'),
        'desc'        => __('background color of the footer widgets area', 'digita_taxdomain'),
        'std'         => '',
        'type'        => 'colorpicker',
        'section'     => 'color',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'choices'     => ''
	);
	endif;
	
	/*-- Footer area Color --*/
	if(DIGITA_LAYOUT_FOOTER_REMOVE == false):
	$custom_settings['settings']['color_block_footer'] = array(
        'id'          => 'color_block_footer',
        'label'       => '',
        'desc'        => '<div class="digita-ot-section"><h2>Footer area Color Options</h2></div>',
        'std'         => '',
        'type'        => 'textblock',
        'section'     => 'color',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'choices'     => ''
	);
	$custom_settings['settings']['color_footer_text'] = array(
        'id'          => 'color_footer_text',
        'label'       => __('Footer Text Color', 'digita_taxdomain'),
        'desc'        => __('Simple text color of the footer area', 'digita_taxdomain'),
        'std'         => '',
        'type'        => 'colorpicker',
        'section'     => 'color',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'choices'     => ''
	);
	$custom_settings['settings']['color_footer_link'] = array(
        'id'          => 'color_footer_link',
        'label'       => __('Footer Link Color', 'digita_taxdomain'),
        'desc'        => __('Link color of the footer area', 'digita_taxdomain'),
        'std'         => '',
        'type'        => 'colorpicker',
        'section'     => 'color',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'choices'     => ''
	);
	$custom_settings['settings']['color_footer_border'] = array(
        'id'          => 'color_footer_border',
        'label'       => __('Footer Border Color', 'digita_taxdomain'),
        'desc'        => __('Border color for each element in the footer area', 'digita_taxdomain'),
        'std'         => '',
        'type'        => 'colorpicker',
        'section'     => 'color',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'choices'     => ''
	);
	$custom_settings['settings']['color_footer_bg'] = array(
        'id'          => 'color_footer_bg',
        'label'       => __('Footer Background Color', 'digita_taxdomain'),
        'desc'        => __('background color of the footer area', 'digita_taxdomain'),
        'std'         => '',
        'type'        => 'colorpicker',
        'section'     => 'color',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'choices'     => ''
	);
	endif;
	
	return $custom_settings;
}