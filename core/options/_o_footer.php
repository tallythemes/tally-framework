<?php
add_filter('option_tree_settings_args', 'tally_footer_ot_options');
function tally_footer_ot_options($custom_settings){
	$custom_settings['sections'][] = array( 'id' => 'footer','title' => 'Footer');
	
	
	$custom_settings['settings']['footer_copyright'] = array(
		'id'          => 'footer_copyright',
        'label'       => __('Footer Copyright Texe', 'tally_taxdomain'),
        'desc'        => __('This is the copyright text of footer', 'tally_taxdomain'),
        'std'         => 'Copyright 2014 @ Bignet',
        'type'        => 'text',
        'section'     => 'footer',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
		'choices'     => '',
	);
	
	return $custom_settings;
}