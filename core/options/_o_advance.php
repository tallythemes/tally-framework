<?php
add_filter('option_tree_settings_args', 'tally_advance_ot_options');
function tally_advance_ot_options($custom_settings){
	
	if( defined('TALLY_THEME_DEV_SETTINGS') ):
		$custom_settings['sections'][] = array( 'id' => 'advance','title' => 'Advance');
		
		$custom_settings['settings']['adv_subheader_layout'] = array(
			'id'          => 'adv_subheader_layout',
			'label'       => __('Subheader Layout', 'tally_taxdomain'),
			'desc'        => '',
			'std'         => tally_option_std('adv_subheader_layout'),
			'type'        => 'select',
			'section'     => 'advance',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
			'choices'     => array( 
				array('value' => 'default','label' => 'default','src' => ''),
				array('value' => 'one','label' => 'One','src' => ''),
				array('value' => 'two','label' => 'Two','src' => '')
			),
		);
	endif;
	
	return $custom_settings;
}