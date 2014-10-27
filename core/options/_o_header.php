<?php
add_filter('option_tree_settings_args', 'tally_header_ot_options');
function tally_header_ot_options($custom_settings){
	
	if(tally_check() == true):
		$custom_settings['sections'][] = array( 'id' => 'header','title' => 'Header');
		
		$custom_settings['settings']['enable_header_sticky'] = array(
			'id'          => 'enable_header_sticky',
			'label'       => __('Enable Header sticky', 'tally_taxdomain'),
			'desc'        => '',
			'std'         => tally_option_std('enable_header_sticky'),
			'type'        => 'select',
			'section'     => 'header',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
			'choices'     => array( 
				array('value' => '', 'label' => '--','src' => ''),
				array('value' => 'yes', 'label' => 'Yes','src' => ''),
				array('value' => 'no','label' => 'No','src' => '')
			),
		);
		
		$custom_settings['settings']['header_height'] = array(
			'id'          => 'header_height',
			'label'       => __('Header height', 'tally_taxdomain'),
			'desc'        => __('This is the height of the site header <strong>Example: <code>52px</code></strong>', 'tally_taxdomain'),
			'std'         => tally_option_std('header_height'),
			'type'        => 'text',
			'section'     => 'header',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
			'choices'     => '',
		);
		$custom_settings['settings']['header_menu_top_margin'] = array(
			'id'          => 'header_menu_top_margin',
			'label'       => __('Top margin of the menu', 'tally_taxdomain'),
			'desc'        => __('This is the top margin of the header menu <strong>Example: <code>10px</code></strong>', 'tally_taxdomain'),
			'std'         => tally_option_std('header_menu_top_margin'),
			'type'        => 'text',
			'section'     => 'header',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
			'choices'     => '',
		);
		$custom_settings['settings']['header_logo_top_margin'] = array(
			'id'          => 'header_logo_top_margin',
			'label'       => __('Top margin of the Logo', 'tally_taxdomain'),
			'desc'        => __('This is the top margin of the header Logo <strong>Example: <code>52px</code></strong>', 'tally_taxdomain'),
			'std'         => tally_option_std('header_logo_top_margin'),
			'type'        => 'text',
			'section'     => 'header',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
			'choices'     => '',
		);
	elseif( (tally_check() != true ) && ( TALLY_THEME_STORE_URL != '') ):
		$custom_settings['sections'][] = array( 'id' => 'header','title' => 'Header');
		$custom_settings['settings']['option_header_image_'] = array(
			'id'          => 'option_header_image_',
			'label'       => '',
			'desc'        => '<a href="'.TALLY_THEME_STORE_URL.'" target="_blank"><img src="'.TALLY_URL.'/core/assets/images/admin/option-header.png" /></a>',
			'std'         => '',
			'type'        => 'textblock',
			'section'     => 'header',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
		);
	endif;
	
	return $custom_settings;
}