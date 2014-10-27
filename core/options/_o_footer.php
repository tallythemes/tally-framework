<?php
add_filter('option_tree_settings_args', 'tally_footer_ot_options');
function tally_footer_ot_options($custom_settings){
	if(tally_check() == true):
		$custom_settings['sections'][] = array( 'id' => 'footer','title' => 'Footer');
		
		
		$custom_settings['settings']['footer_copyright'] = array(
			'id'          => 'footer_copyright',
			'label'       => __('Footer Copyright Text', 'tally_taxdomain'),
			'desc'        => __('This is the copyright text of footer', 'tally_taxdomain'),
			'std'         => tally_option_std('footer_copyright'),
			'type'        => 'text',
			'section'     => 'footer',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
			'choices'     => '',
		);
	elseif( (tally_check() != true ) && ( TALLY_THEME_STORE_URL != '') ):
		$custom_settings['sections'][] = array( 'id' => 'footer','title' => 'Footer');
		$custom_settings['settings']['option_footer_image_'] = array(
			'id'          => 'option_footer_image_',
			'label'       => '',
			'desc'        => '<a href="'.TALLY_THEME_STORE_URL.'" target="_blank"><img src="'.TALLY_URL.'/core/assets/images/admin/option-footer.png" /></a>',
			'std'         => '',
			'type'        => 'textblock',
			'section'     => 'footer',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
		);
	endif;
	
	return $custom_settings;
}