<?php
add_filter('option_tree_settings_args', 'digita_branding_ot_options');
function digita_branding_ot_options($custom_settings){
	global $digita_theme_option_std;
	$custom_settings['sections'][] = array( 'id' => 'branding','title' => 'Branding');
	
	$custom_settings['settings']['site_logo'] = array(
		'id'          => 'site_logo',
        'label'       => __('Site Logo', 'digita_taxdomain'),
        'desc'        => __('Please Upload your site logo', 'digita_taxdomain'),
        'std'         =>  $digita_theme_option_std['site_logo'],
        'type'        => 'upload',
        'section'     => 'branding',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
		'choices'     => '',
	);
	$custom_settings['settings']['site_logo_retina'] = array(
		'id'          => 'site_logo_retina',
        'label'       => __('Site Logo (High-DPI)', 'digita_taxdomain'),
        'desc'        => __('Please uplod another logo for retina view. It will be a bigger sige of your logo', 'digita_taxdomain'),
        'std'         => $digita_theme_option_std['site_logo2'],
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
        'label'       => __('Favicon', 'digita_taxdomain'),
        'desc'        => __('Please uplod a Favicon icon', 'digita_taxdomain'),
        'std'         => $digita_theme_option_std['site_favicon'],
        'type'        => 'upload',
        'section'     => 'branding',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
		'choices'     => '',
	);
	
	return $custom_settings;
}