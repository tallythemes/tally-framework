<?php
add_filter('option_tree_settings_args', 'tally_integration_ot_options');
function tally_integration_ot_options($custom_settings){
	if(tally_check() == true):
		$custom_settings['sections'][] = array( 'id' => 'integration','title' => 'Integration');
		
		$custom_settings['settings']['custom_css'] = array(
			'id'          => 'custom_css',
			'label'       => __('Custom CSS', 'tally_taxdomain'),
			'desc'        => '',
			'std'         => tally_option('custom_css'),
			'type'        => 'css',
			'section'     => 'integration',
			'rows'        => '5',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
			'choices'     => '',
		);
		$custom_settings['settings']['custom_js'] = array(
			'id'          => 'custom_js',
			'label'       => __('Custom JavaScript', 'tally_taxdomain'),
			'desc'        => '',
			'std'         => tally_option('custom_js'),
			'type'        => 'javascript',
			'section'     => 'integration',
			'rows'        => '5',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
			'choices'     => '',
		);
		$custom_settings['settings']['google_analytics'] = array(
			'id'          => 'google_analytics',
			'label'       => __('Google Analytics', 'tally_taxdomain'),
			'desc'        => '',
			'std'         => tally_option('google_analytics'),
			'type'        => 'javascript',
			'section'     => 'integration',
			'rows'        => '5',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
			'choices'     => '',
		);
	elseif( (tally_check() != true ) && ( TALLY_THEME_STORE_URL != '') ):
		$custom_settings['sections'][] = array( 'id' => 'integration','title' => 'Integration');
		$custom_settings['settings']['option_integration_image_'] = array(
			'id'          => 'option_integration_image_',
			'label'       => '',
			'desc'        => '<a href="'.TALLY_THEME_STORE_URL.'" target="_blank"><img src="'.TALLY_URL.'/core/assets/images/admin/option-integration.png" /></a>',
			'std'         => '',
			'type'        => 'textblock',
			'section'     => 'integration',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
		);
	endif;
	
	return $custom_settings;
}

