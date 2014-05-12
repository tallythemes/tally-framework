<?php
add_filter('option_tree_settings_args', 'digita_integration_ot_options');
function digita_integration_ot_options($custom_settings){
	$custom_settings['sections'][] = array( 'id' => 'integration','title' => 'Integration');
	
	$custom_settings['settings']['custom_css'] = array(
		'id'          => 'custom_css',
        'label'       => __('Custom CSS', 'digita_taxdomain'),
        'desc'        => '',
        'std'         => '',
        'type'        => 'textarea-simple',
        'section'     => 'integration',
        'rows'        => '5',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
		'choices'     => '',
	);
	$custom_settings['settings']['custom_js'] = array(
		'id'          => 'custom_js',
        'label'       => __('Custom JavaScript', 'digita_taxdomain'),
        'desc'        => '',
        'std'         => '',
        'type'        => 'textarea-simple',
        'section'     => 'integration',
        'rows'        => '5',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
		'choices'     => '',
	);
	$custom_settings['settings']['google_analytics'] = array(
		'id'          => 'google_analytics',
        'label'       => __('Google Analytics', 'digita_taxdomain'),
        'desc'        => '',
        'std'         => '',
        'type'        => 'textarea-simple',
        'section'     => 'integration',
        'rows'        => '5',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
		'choices'     => '',
	);
	
	return $custom_settings;
}

