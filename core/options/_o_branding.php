<?php
add_filter('option_tree_settings_args', 'tally_branding_ot_options');
function tally_branding_ot_options($custom_settings){
	global $tally_theme_option_std;
	$custom_settings['sections'][] = array( 'id' => 'branding','title' => 'Branding');
	
	$custom_settings['settings']['site_logo'] = array(
		'id'          => 'site_logo',
        'label'       => __('Site Logo', 'tally_taxdomain'),
        'desc'        => __('Please Upload your site logo', 'tally_taxdomain'),
        'std'         =>  tally_option_std('site_logo'),
        'type'        => 'upload',
        'section'     => 'branding',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
		'choices'     => '',
	);
	if(tally_check() == true):
		$custom_settings['settings']['site_logo_retina'] = array(
			'id'          => 'site_logo_retina',
			'label'       => __('Site Logo (High-DPI)', 'tally_taxdomain'),
			'desc'        => __('Please uplod another logo for retina view. It will be a bigger sige of your logo', 'tally_taxdomain'),
			'std'         => tally_option_std('site_logo_retina'),
			'type'        => 'upload',
			'section'     => 'branding',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
			'choices'     => '',
		);
		$custom_settings['settings']['favicon'] = array(
			'id'          => 'favicon',
			'label'       => __('Favicon', 'tally_taxdomain'),
			'desc'        => __('Please uplod a Favicon icon', 'tally_taxdomain'),
			'std'         => tally_option_std('favicon'),
			'type'        => 'upload',
			'section'     => 'branding',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
			'choices'     => '',
		);
		
		$custom_settings['settings']['preloader'] = array(
			'id'          => 'preloader',
			'label'       => __('Site PreLoader', 'tally_taxdomain'),
			'desc'        => __('Enable or Disable Site PreLoader', 'tally_taxdomain'),
			'std'         => tally_option_std('preloader'),
			'type'        => 'select',
			'section'     => 'branding',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
			'choices'     => array(
				 array( 'label' => '--', 'value' => 'n/a' ),
				 array( 'label' => 'Yes', 'value' => 'yes' ),
				 array( 'label' => 'No', 'value' => 'no'),
			)
		);
		
	elseif( (tally_check() != true ) && ( TALLY_THEME_STORE_URL != '') ):
		$custom_settings['settings']['option_branding_image_'] = array(
			'id'          => 'option_branding_image_',
			'label'       => '',
			'desc'        => '<a href="'.TALLY_THEME_STORE_URL.'" target="_blank"><img src="'.TALLY_URL.'/core/assets/images/admin/option-branding.png" /></a>',
			'std'         => '',
			'type'        => 'textblock',
			'section'     => 'branding',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
		);
	endif;
	
	if( defined('TALLY_THEME_DEV_SETTINGS') ):
		$custom_settings['settings']['tally_edi_name'] = array(
			'id'          => 'tally_edi_name',
			'label'       => '',
			'desc'        => '<textarea style="height:30px; width: 100%;">'.tally_check_see().'</textarea>',
			'std'         => '',
			'type'        => 'textblock',
			'section'     => 'branding',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
		);
		$custom_settings['settings']['tally_export_array'] = array(
			'id'          => 'tally_export_array',
			'label'       => '',
			'desc'        => '<textarea style="height:400px; width: 100%;">'.tally_creat_config_array().'</textarea>',
			'std'         => '',
			'type'        => 'textblock',
			'section'     => 'branding',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
		);
	endif;
	
	return $custom_settings;
}