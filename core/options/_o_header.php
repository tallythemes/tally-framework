<?php
add_filter('option_tree_settings_args', 'digita_header_ot_options');
function digita_header_ot_options($custom_settings){
	$custom_settings['sections'][] = array( 'id' => 'header','title' => 'Header');
	
	$custom_settings['settings']['enable_header_sticky'] = array(
        'id'          => 'enable_header_sticky',
        'label'       => __('Enable Header sticky', 'digita_taxdomain'),
        'desc'        => '',
        'std'         => 'no',
        'type'        => 'select',
        'section'     => 'header',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'choices'     => array( 
          array(
            'value'       => 'yes',
            'label'       => 'Yes',
            'src'         => ''
          ),
          array(
            'value'       => 'no',
            'label'       => 'No',
            'src'         => ''
          )
        ),
	);
	
	$custom_settings['settings']['header_height'] = array(
		'id'          => 'header_height',
        'label'       => __('Header height', 'digita_taxdomain'),
        'desc'        => __('This is the height of the site header <strong>Example: <code>52px</code></strong>', 'digita_taxdomain'),
        'std'         => '',
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
        'label'       => __('Top margin of the menu', 'digita_taxdomain'),
        'desc'        => __('This is the top margin of the header menu <strong>Example: <code>10px</code></strong>', 'digita_taxdomain'),
        'std'         => '',
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
        'label'       => __('Top margin of the Logo', 'digita_taxdomain'),
        'desc'        => __('This is the top margin of the header Logo <strong>Example: <code>52px</code></strong>', 'digita_taxdomain'),
        'std'         => '',
        'type'        => 'text',
        'section'     => 'header',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
		'choices'     => '',
	);
	return $custom_settings;
}