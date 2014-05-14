<?php
add_filter('option_tree_settings_args', 'tally_typography_ot_options');
function tally_typography_ot_options($custom_settings){
	global $tally_theme_option_std;
	$custom_settings['sections'][] = array( 'id' => 'typography','title' => 'Typography');
	
	$custom_settings['settings']['enable_google_fonts'] = array(
		'id'          => 'enable_google_fonts',
        'label'       => __('Enable Google Fonts', 'tally_taxdomain'),
        'desc'        => __('By selection NO the theme will use default fonts.', 'tally_taxdomain'),
        'std'         => '',
        'type'        => 'select',
        'section'     => 'typography',
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
	$custom_settings['settings']['headings_google_font_link'] = array(
		'id'          => 'headings_google_font_link',
        'label'       => __('Headings Google Font Link', 'tally_taxdomain'),
        'desc'        => __('Ex: <code>link href="http://fonts.googleapis.com/css?family=Open+Sans:300,700,400" rel="stylesheet" type="text/css"&gt;</code>', 'tally_taxdomain'),
        'std'         => $tally_theme_option_std['heading_font_link'],
        'type'        => 'textarea-simple',
        'section'     => 'typography',
        'rows'        => '3',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
		'choices'     => '',
	);
	$custom_settings['settings']['headings_google_font_family'] = array(
		'id'          => 'headings_google_font_family',
        'label'       => __('Headings Google Font Family', 'tally_taxdomain'),
        'desc'        => __('Ex: font-family: "Open Sans", sans-serif;', 'tally_taxdomain'),
        'std'         => $tally_theme_option_std['heading_font_name'],
        'type'        => 'text',
        'section'     => 'typography',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
		'choices'     => '',
	);
	$custom_settings['settings']['body_google_font_link'] = array(
		'id'          => 'body_google_font_link',
        'label'       => __('Body Google Font Link', 'tally_taxdomain'),
        'desc'        => __('Ex: <code>link href="http://fonts.googleapis.com/css?family=Open+Sans:300,700,400" rel="stylesheet" type="text/css"&gt;</code>', 'tally_taxdomain'),
        'std'         => $tally_theme_option_std['body_font_link'],
        'type'        => 'textarea-simple',
        'section'     => 'typography',
        'rows'        => '3',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
		'choices'     => '',
	);
	$custom_settings['settings']['body_google_font_family'] = array(
		'id'          => 'body_google_font_family',
        'label'       => __('Body Google Font Family', 'tally_taxdomain'),
        'desc'        => __('Ex: font-family: "Open Sans", sans-serif;', 'tally_taxdomain'),
        'std'         => $tally_theme_option_std['body_font_name'],
        'type'        => 'text',
        'section'     => 'typography',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
		'choices'     => '',
	);
	$custom_settings['settings']['h1_font_size'] = array(
		'id'          => 'h1_font_size',
        'label'       => __('H1 Font Size', 'tally_taxdomain'),
        'desc'        => __('This will be ths size of h1 heading tag Example <code>22px</code>', 'tally_taxdomain'),
        'std'         => '',
        'type'        => 'text',
        'section'     => 'typography',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
		'choices'     => '',
	);
	$custom_settings['settings']['h2_font_size'] = array(
		'id'          => 'h2_font_size',
        'label'       => __('H2 Font Size', 'tally_taxdomain'),
        'desc'        => __('This will be ths size of h2 heading tag Example <code>22px</code>', 'tally_taxdomain'),
        'std'         => '',
        'type'        => 'text',
        'section'     => 'typography',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
		'choices'     => '',
	);
	$custom_settings['settings']['h3_font_size'] = array(
		'id'          => 'h3_font_size',
        'label'       => __('H3 Font Size', 'tally_taxdomain'),
        'desc'        => __('This will be ths size of h3 heading tag Example <code>22px</code>', 'tally_taxdomain'),
        'std'         => '',
        'type'        => 'text',
        'section'     => 'typography',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
		'choices'     => '',
	);
	$custom_settings['settings']['h4_font_size'] = array(
		'id'          => 'h4_font_size',
        'label'       => __('H4 Font Size', 'tally_taxdomain'),
        'desc'        => __('This will be ths size of h4 heading tag Example <code>22px</code>', 'tally_taxdomain'),
        'std'         => '',
        'type'        => 'text',
        'section'     => 'typography',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
		'choices'     => '',
	);
	$custom_settings['settings']['h5_font_size'] = array(
		'id'          => 'h5_font_size',
        'label'       => __('H5 Font Size', 'tally_taxdomain'),
        'desc'        => __('This will be ths size of h5 heading tag Example <code>22px</code>', 'tally_taxdomain'),
        'std'         => '',
        'type'        => 'text',
        'section'     => 'typography',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
		'choices'     => '',
	);
	$custom_settings['settings']['h6_font_size'] = array(
		'id'          => 'h6_font_size',
        'label'       => __('H6 Font Size', 'tally_taxdomain'),
        'desc'        => __('This will be ths size of h6 heading tag Example <code>22px</code>', 'tally_taxdomain'),
        'std'         => '',
        'type'        => 'text',
        'section'     => 'typography',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
		'choices'     => '',
	);
	$custom_settings['settings']['body_font_size'] = array(
		'id'          => 'body_font_size',
        'label'       => __('Body Text Font Size', 'tally_taxdomain'),
        'desc'        => __('This will be ths size of Body Text. Example <code>12px</code>', 'tally_taxdomain'),
        'std'         => '',
        'type'        => 'text',
        'section'     => 'typography',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
		'choices'     => '',
	);
	
	return $custom_settings;
}