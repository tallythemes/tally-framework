<?php
add_filter('option_tree_settings_args', 'tally_color_ot_options');
function tally_color_ot_options($custom_settings){
	
	if(tally_check() == true):
		$custom_settings['sections'][] = array( 'id' => 'color','title' => 'Color Option');
		
		$custom_settings['settings']['site_color_skin'] = array(
			'id'          => 'site_color_skin',
			'label'       => __('Choose Your Color Skin', 'tally_taxdomain'),
			'desc'        => '',
			'std'         => tally_option_std('site_color_skin'),
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
			'label'       => __('Accent Color of The Site', 'tally_taxdomain'),
			'desc'        => '',
			'std'         => tally_option_std('site_accent_color'),
			'type'        => 'colorpicker',
			'section'     => 'color',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
			'choices'     => '',
		);
		$custom_settings['settings']['site_accent2_color'] = array(
			'id'          => 'site_accent2_color',
			'label'       => __('2nd Accent Color', 'tally_taxdomain'),
			'desc'        => '',
			'std'         => tally_option_std('site_accent2_color'),
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
			'label'       => __('Site Body Background', 'tally_taxdomain'),
			'desc'        => '',
			'std'         => tally_option_std('site_background'),
			'type'        => 'background',
			'section'     => 'color',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
			'choices'     => '',
		);
		
		
		/*-- Headings Color --*/
		$custom_settings['settings']['color_block_headings'] = array(
			'id'          => 'color_block_headings',
			'label'       => '',
			'desc'        => '<div class="tally-ot-section"><h2>Headings Color</h2></div>',
			'std'         => '',
			'type'        => 'textblock',
			'section'     => 'color',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
			'choices'     => ''
		);
		$custom_settings['settings']['color_headings_light'] = array(
			'id'          => 'color_headings_light',
			'label'       => __('Headings color on Dark Background', 'tally_taxdomain'),
			'desc'        => __('This font color will show on the dark background. For example your background color is balck and the text heading color need to be white', 'tally_taxdomain'),
			'std'         => tally_option_std('color_headings_light'),
			'type'        => 'colorpicker',
			'section'     => 'color',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
			'choices'     => ''
		);
		$custom_settings['settings']['color_headings_dark'] = array(
			'id'          => 'color_headings_dark',
			'label'       => __('Headings color on Light Background', 'tally_taxdomain'),
			'desc'        => __('This font color will show on the light background. For example your background color is white and the text heading color need to be black', 'tally_taxdomain'),
			'std'         => tally_option_std('color_headings_dark'),
			'type'        => 'colorpicker',
			'section'     => 'color',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
			'choices'     => ''
		);
		
		
		/*-- Headings Color --*/
		$custom_settings['settings']['color_block_subheading'] = array(
			'id'          => 'color_block_subheading',
			'label'       => '',
			'desc'        => '<div class="tally-ot-section"><h2>Sub-Headings Color</h2></div>',
			'std'         => '',
			'type'        => 'textblock',
			'section'     => 'color',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
			'choices'     => ''
		);
		$custom_settings['settings']['color_subheading_light'] = array(
			'id'          => 'color_subheading_light',
			'label'       => __('Sub-Headings color on Dark Background', 'tally_taxdomain'),
			'desc'        => __('This font color will show on the dark background. For example your background color is balck and the text heading color need to be white', 'tally_taxdomain'),
			'std'         => tally_option_std('color_subheading_light'),
			'type'        => 'colorpicker',
			'section'     => 'color',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
			'choices'     => ''
		);
		$custom_settings['settings']['color_subheading_dark'] = array(
			'id'          => 'color_subheading_dark',
			'label'       => __('sub-Headings color on Light Background', 'tally_taxdomain'),
			'desc'        => __('This font color will show on the light background. For example your background color is white and the text heading color need to be black', 'tally_taxdomain'),
			'std'         => tally_option_std('color_subheading_dark'),
			'type'        => 'colorpicker',
			'section'     => 'color',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
			'choices'     => ''
		);
		
		
		/*-- Text Color --*/
		$custom_settings['settings']['color_block_text'] = array(
			'id'          => 'color_block_text',
			'label'       => '',
			'desc'        => '<div class="tally-ot-section"><h2>Body Text Color</h2></div>',
			'std'         => '',
			'type'        => 'textblock',
			'section'     => 'color',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
			'choices'     => ''
		);
		$custom_settings['settings']['color_text_light'] = array(
			'id'          => 'color_text_light',
			'label'       => __('Text color on Dark Background', 'tally_taxdomain'),
			'desc'        => __('This font color will show on the dark background. For example your background color is balck and the text color need to be white', 'tally_taxdomain'),
			'std'         => tally_option_std('color_text_light'),
			'type'        => 'colorpicker',
			'section'     => 'color',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
			'choices'     => ''
		);
		$custom_settings['settings']['color_text_dark'] = array(
			'id'          => 'color_text_dark',
			'label'       => __('Text color on Light Background', 'tally_taxdomain'),
			'desc'        => __('This font color will show on the light background. For example your background color is white and the text color need to be black', 'tally_taxdomain'),
			'std'         => tally_option_std('color_text_dark'),
			'type'        => 'colorpicker',
			'section'     => 'color',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
			'choices'     => ''
		);
		
		/*-- Meta Text Color --*/
		$custom_settings['settings']['color_block_meta'] = array(
			'id'          => 'color_block_meta',
			'label'       => '',
			'desc'        => '<div class="tally-ot-section"><h2>Meta Text Color</h2></div>',
			'std'         => '',
			'type'        => 'textblock',
			'section'     => 'color',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
			'choices'     => ''
		);
		$custom_settings['settings']['color_meta_light'] = array(
			'id'          => 'color_meta_light',
			'label'       => __('Meta Text color on Dark Background', 'tally_taxdomain'),
			'desc'        => __('This font color will show on the dark background. For example your background color is balck and the text color need to be white', 'tally_taxdomain'),
			'std'         => tally_option_std('color_meta_light'),
			'type'        => 'colorpicker',
			'section'     => 'color',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
			'choices'     => ''
		);
		$custom_settings['settings']['color_meta_dark'] = array(
			'id'          => 'color_meta_dark',
			'label'       => __('Meta Text color on Light Background', 'tally_taxdomain'),
			'desc'        => __('This font color will show on the light background. For example your background color is white and the text color need to be black', 'tally_taxdomain'),
			'std'         => tally_option_std('color_meta_dark'),
			'type'        => 'colorpicker',
			'section'     => 'color',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
			'choices'     => ''
		);
		
		
		/*-- Border Color --*/
		$custom_settings['settings']['color_block_border'] = array(
			'id'          => 'color_block_border',
			'label'       => '',
			'desc'        => '<div class="tally-ot-section"><h2>Border Color</h2></div>',
			'std'         => '',
			'type'        => 'textblock',
			'section'     => 'color',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
			'choices'     => ''
		);
		$custom_settings['settings']['color_border_light'] = array(
			'id'          => 'color_border_light',
			'label'       => __('Border color on Dark Background', 'tally_taxdomain'),
			'desc'        => __('This border color will show on the dark background. For example your background color is balck and the border color need to be white', 'tally_taxdomain'),
			'std'         => tally_option_std('color_border_light'),
			'type'        => 'colorpicker',
			'section'     => 'color',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
			'choices'     => ''
		);
		$custom_settings['settings']['color_border_dark'] = array(
			'id'          => 'color_border_dark',
			'label'       => __('Border color on Light Background', 'tally_taxdomain'),
			'desc'        => __('This border color will show on the light background. For example your background color is white and the border color need to be black', 'tally_taxdomain'),
			'std'         => tally_option_std('color_border_dark'),
			'type'        => 'colorpicker',
			'section'     => 'color',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
			'choices'     => ''
		);
		
		
		/*-- Background Color --*/
		$custom_settings['settings']['color_block_bg'] = array(
			'id'          => 'color_block_bg',
			'label'       => '',
			'desc'        => '<div class="tally-ot-section"><h2>Background Color</h2></div>',
			'std'         => '',
			'type'        => 'textblock',
			'section'     => 'color',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
			'choices'     => ''
		);
		$custom_settings['settings']['color_bg_light'] = array(
			'id'          => 'color_bg_light',
			'label'       => __('Light Background Color', 'tally_taxdomain'),
			'desc'        => __('This will be a light color of background. Example: white (#ffffff)', 'tally_taxdomain'),
			'std'         => tally_option_std('color_bg_light'),
			'type'        => 'colorpicker',
			'section'     => 'color',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
			'choices'     => ''
		);
		$custom_settings['settings']['color_bg_dark'] = array(
			'id'          => 'color_bg_dark',
			'label'       => __('Dark Background Color', 'tally_taxdomain'),
			'desc'        => __('This will be a bark color of background. Example: black (#000000)', 'tally_taxdomain'),
			'std'         => tally_option_std('color_bg_dark'),
			'type'        => 'colorpicker',
			'section'     => 'color',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
			'choices'     => ''
		);
		
		/*-- Inner Background Color --*/
		$custom_settings['settings']['color_block_inner_bg'] = array(
			'id'          => 'color_block_inner_bg',
			'label'       => '',
			'desc'        => '<div class="tally-ot-section"><h2>Inner Background Color</h2></div>',
			'std'         => '',
			'type'        => 'textblock',
			'section'     => 'color',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
			'choices'     => ''
		);
		$custom_settings['settings']['color_inner_bg_light'] = array(
			'id'          => 'color_inner_bg_light',
			'label'       => __('Inner Background color on Dark Background', 'tally_taxdomain'),
			'desc'        => __('This will be a light color of inner background. Example: darker white (#f1f1f1)', 'tally_taxdomain'),
			'std'         => tally_option_std('color_inner_bg_light'),
			'type'        => 'colorpicker',
			'section'     => 'color',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
			'choices'     => ''
		);
		$custom_settings['settings']['color_inner_bg_dark'] = array(
			'id'          => 'color_inner_bg_dark',
			'label'       => __('Inner Background color on Light Background', 'tally_taxdomain'),
			'desc'        => __('This will be a dark color of inner background. Example: whiter black (#eeeeee)', 'tally_taxdomain'),
			'std'         => tally_option_std('color_inner_bg_dark'),
			'type'        => 'colorpicker',
			'section'     => 'color',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
			'choices'     => ''
		);
		
		
		/*-- Topbar Color --*/
		if(TALLY_LAYOUT_TOPBAR_REMOVE == false):
		$custom_settings['settings']['color_block_topbar'] = array(
			'id'          => 'color_block_topbar',
			'label'       => '',
			'desc'        => '<div class="tally-ot-section"><h2>Topbar</h2></div>',
			'std'         => '',
			'type'        => 'textblock',
			'section'     => 'color',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
			'choices'     => ''
		);
		$custom_settings['settings']['color_topbar_mood'] = array(
			'id'          => 'color_topbar_mood',
			'label'       => __('Choose Font Color Mood', 'tally_taxdomain'),
			'desc'        => __('if background color is dark you will select light mood OR if the background color is dark you will select light mood', 'tally_taxdomain'),
			'std'         => tally_option_std('color_topbar_mood'),
			'type'        => 'select',
			'section'     => 'color',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
			'choices'     => array(
				array( 'label' => '--', 'value' => ''),
				array( 'label' => 'Light', 'value' => 'light'),
				array( 'label' => 'Dark', 'value' => 'dark'),
			),
		);
		$custom_settings['settings']['color_topbar_bg'] = array(
			'id'          => 'color_topbar_bg',
			'label'       => __('Topbar Background', 'tally_taxdomain'),
			'desc'        => '',
			'std'         => tally_option_std('color_topbar_bg'),
			'type'        => 'background',
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
			'desc'        => '<div class="tally-ot-section"><h2>Header</h2></div>',
			'std'         => '',
			'type'        => 'textblock',
			'section'     => 'color',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
			'choices'     => ''
		);
		$custom_settings['settings']['color_header_mood'] = array(
			'id'          => 'color_header_mood',
			'label'       => __('Choose Font Color Mood', 'tally_taxdomain'),
			'desc'        => __('if background color is dark you will select light mood OR if the background color is dark you will select light mood', 'tally_taxdomain'),
			'std'         => tally_option_std('color_header_mood'),
			'type'        => 'select',
			'section'     => 'color',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
			'choices'     => array(
				array( 'label' => '--', 'value' => ''),
				array( 'label' => 'Light', 'value' => 'light'),
				array( 'label' => 'Dark', 'value' => 'dark'),
			),
		);
		$custom_settings['settings']['color_header_bg'] = array(
			'id'          => 'color_header_bg',
			'label'       => __('Header Background', 'tally_taxdomain'),
			'desc'        => '',
			'std'         => tally_option_std('color_header_bg'),
			'type'        => 'background',
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
			'desc'        => '<div class="tally-ot-section"><h2>Navigation Color Options</h2></div>',
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
			'label'       => __('Navigation Text Color', 'tally_taxdomain'),
			'desc'        => __('Simple text color of the navigation area', 'tally_taxdomain'),
			'std'         => tally_option_std('color_navigation_text'),
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
			'label'       => __('Navigation Border Color', 'tally_taxdomain'),
			'desc'        => __('Border color for each element in the navigation area', 'tally_taxdomain'),
			'std'         => tally_option_std('color_navigation_border'),
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
			'label'       => __('Navigation Background Color', 'tally_taxdomain'),
			'desc'        => __('background color of the navigation area', 'tally_taxdomain'),
			'std'         => tally_option_std('color_navigation_bg'),
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
			'label'       => __('Navigation Text Hover Color', 'tally_taxdomain'),
			'desc'        => __('Simple text color of the navigation area', 'tally_taxdomain'),
			'std'         => tally_option_std('color_navigation_text_hover'),
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
			'label'       => __('Navigation Border Hover Color', 'tally_taxdomain'),
			'desc'        => __('Border color for each element in the navigation area', 'tally_taxdomain'),
			'std'         => tally_option_std('color_navigation_border_hover'),
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
			'label'       => __('Navigation Background Hover Color', 'tally_taxdomain'),
			'desc'        => __('background color of the navigation area', 'tally_taxdomain'),
			'std'         => tally_option_std('color_navigation_bg_hover'),
			'type'        => 'colorpicker',
			'section'     => 'color',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
			'choices'     => ''
		);
		
		$custom_settings['settings']['color_navigation_submenu_bg'] = array(
			'id'          => 'color_navigation_submenu_bg',
			'label'       => __('Navigation Submenu Background Color', 'tally_taxdomain'),
			'desc'        => '',
			'std'         => tally_option_std('color_navigation_submenu_bg'),
			'type'        => 'colorpicker',
			'section'     => 'color',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
			'choices'     => ''
		);
		
		
		/*-- Sub Header Color --*/
		if(TALLY_LAYOUT_SUBHEADER_REMOVE == false):
		$custom_settings['settings']['color_block_subheader'] = array(
			'id'          => 'color_block_subheader',
			'label'       => '',
			'desc'        => '<div class="tally-ot-section"><h2>Sub Header</h2></div>',
			'std'         => '',
			'type'        => 'textblock',
			'section'     => 'color',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
			'choices'     => ''
		);
		$custom_settings['settings']['color_subheader_mood'] = array(
			'id'          => 'color_subheader_mood',
			'label'       => __('Choose Font Color Mood', 'tally_taxdomain'),
			'desc'        => __('if background color is dark you will select light mood OR if the background color is dark you will select light mood', 'tally_taxdomain'),
			'std'         => tally_option_std('color_subheader_mood'),
			'type'        => 'select',
			'section'     => 'color',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
			'choices'     => array(
				array( 'label' => '--', 'value' => ''),
				array( 'label' => 'Light', 'value' => 'light'),
				array( 'label' => 'Dark', 'value' => 'dark'),
			),
		);
		$custom_settings['settings']['color_subheader_bg'] = array(
			'id'          => 'color_subheader_bg',
			'label'       => __('Sub-Header Background', 'tally_taxdomain'),
			'desc'        => '',
			'std'         => tally_option_std('color_subheader_bg'),
			'type'        => 'background',
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
			'desc'        => '<div class="tally-ot-section"><h2>Main Content area</h2></div>',
			'std'         => '',
			'type'        => 'textblock',
			'section'     => 'color',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
			'choices'     => ''
		);
		$custom_settings['settings']['color_content_mood'] = array(
			'id'          => 'color_content_mood',
			'label'       => __('Choose Font Color Mood', 'tally_taxdomain'),
			'desc'        => __('if background color is dark you will select light mood OR if the background color is dark you will select light mood', 'tally_taxdomain'),
			'std'         => tally_option_std('color_content_mood'),
			'type'        => 'select',
			'section'     => 'color',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
			'choices'     => array(
				array( 'label' => '--', 'value' => ''),
				array( 'label' => 'Light', 'value' => 'light'),
				array( 'label' => 'Dark', 'value' => 'dark'),
			),
		);
		$custom_settings['settings']['color_content_bg'] = array(
			'id'          => 'color_content_bg',
			'label'       => __('Content Background', 'tally_taxdomain'),
			'desc'        => '',
			'std'         => tally_option_std('color_content_bg'),
			'type'        => 'background',
			'section'     => 'color',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
			'choices'     => ''
		);
		
		
		/*-- Footer Widgets area Color --*/
		if(TALLY_LAYOUT_FOOTER_WIDGETS_REMOVE == false):
		$custom_settings['settings']['color_block_fwidget'] = array(
			'id'          => 'color_block_fwidget',
			'label'       => '',
			'desc'        => '<div class="tally-ot-section"><h2>Footer Widgets area</h2></div>',
			'std'         => '',
			'type'        => 'textblock',
			'section'     => 'color',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
			'choices'     => ''
		);
		$custom_settings['settings']['color_fwidget_mood'] = array(
			'id'          => 'color_fwidget_mood',
			'label'       => __('Choose Font Color Mood', 'tally_taxdomain'),
			'desc'        => __('if background color is dark you will select light mood OR if the background color is dark you will select light mood', 'tally_taxdomain'),
			'std'         => tally_option_std('color_fwidget_mood'),
			'type'        => 'select',
			'section'     => 'color',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
			'choices'     => array(
				array( 'label' => '--', 'value' => ''),
				array( 'label' => 'Light', 'value' => 'light'),
				array( 'label' => 'Dark', 'value' => 'dark'),
			),
		);
		$custom_settings['settings']['color_fwidget_bg'] = array(
			'id'          => 'color_fwidget_bg',
			'label'       => __('Footer Widgets Background', 'tally_taxdomain'),
			'desc'        => '',
			'std'         => tally_option_std('color_fwidget_bg'),
			'type'        => 'background',
			'section'     => 'color',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
			'choices'     => ''
		);
		endif;
		
		/*-- Footer area Color --*/
		if(TALLY_LAYOUT_FOOTER_REMOVE == false):
		$custom_settings['settings']['color_block_footer'] = array(
			'id'          => 'color_block_footer',
			'label'       => '',
			'desc'        => '<div class="tally-ot-section"><h2>Footer area</h2></div>',
			'std'         => '',
			'type'        => 'textblock',
			'section'     => 'color',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
			'choices'     => ''
		);
		$custom_settings['settings']['color_footer_mood'] = array(
			'id'          => 'color_footer_mood',
			'label'       => __('Choose Font Color Mood', 'tally_taxdomain'),
			'desc'        => __('if background color is dark you will select light mood OR if the background color is dark you will select light mood', 'tally_taxdomain'),
			'std'         => tally_option_std('color_footer_mood'),
			'type'        => 'select',
			'section'     => 'color',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
			'choices'     => array(
				array( 'label' => '--', 'value' => ''),
				array( 'label' => 'Light', 'value' => 'light'),
				array( 'label' => 'Dark', 'value' => 'dark'),
			),
		);

		$custom_settings['settings']['color_footer_bg'] = array(
			'id'          => 'color_footer_bg',
			'label'       => __('Footer Background', 'tally_taxdomain'),
			'desc'        => '',
			'std'         => tally_option_std('color_footer_bg'),
			'type'        => 'background',
			'section'     => 'color',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
			'choices'     => ''
		);
		endif;
		
	elseif( (tally_check() != true ) && ( TALLY_THEME_STORE_URL != '') ):
		$custom_settings['sections'][] = array( 'id' => 'color','title' => 'Color Option');
		$custom_settings['settings']['option_color_image_'] = array(
			'id'          => 'option_color_image_',
			'label'       => '',
			'desc'        => '<a href="'.TALLY_THEME_STORE_URL.'" target="_blank"><img src="'.TALLY_URL.'/core/assets/images/admin/option-color.png" /></a>',
			'std'         => '',
			'type'        => 'textblock',
			'section'     => 'color',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
		);
	endif;
	
	return $custom_settings;
}