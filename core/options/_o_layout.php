<?php
add_filter('option_tree_settings_args', 'digita_layout_ot_options');
function digita_layout_ot_options($custom_settings){
	global $digita_theme_option_std;
	$custom_settings['sections'][] = array( 'id' => 'layout','title' => 'Site Layout');
	
	
	$custom_settings['settings']['site_layout'] = array(
		'id'          => 'site_layout',
        'label'       => __('Site Layout', 'digita_taxdomain'),
        'desc'        => __('Select the Site layout to <strong>Full Width</strong> or <strong>Box Layout</strong>', 'digita_taxdomain'),
        'std'         => $digita_theme_option_std['site_layout'],
        'type'        => 'radio-image',
        'section'     => 'layout',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
		'choices'     => array(
			 array( 'label' => 'Full Width', 'value' => 'full', 'src' => DIGITA_URL.'/core/assets/images/admin/full-width-layout.png'),
			 array( 'label' => 'Box', 'value' => 'box', 'src' => DIGITA_URL.'/core/assets/images/admin/box-layout.png'),
		)
	);
	
	if(DIGITA_LAYOUT_TOPBAR_REMOVE == false):
		$custom_settings['settings']['is_topbar'] = array(
			'id'          => 'is_topbar',
			'label'       => __('Enable TopBar Area', 'digita_taxdomain'),
			'desc'        => __('Enable or Disable TopBar of the site', 'digita_taxdomain'),
			'std'         => 'no',
			'type'        => 'select',
			'section'     => 'layout',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
			'choices'     => array(
				 array( 'label' => 'Yes', 'value' => 'yes' ),
				 array( 'label' => 'No', 'value' => 'no'),
			)
		);
	endif;
	
	$custom_settings['settings']['is_header'] = array(
		'id'          => 'is_header',
        'label'       => __('Enable Header', 'digita_taxdomain'),
        'desc'        => __('Enable or Disable Header of the site', 'digita_taxdomain'),
        'std'         => 'yes',
        'type'        => 'select',
        'section'     => 'layout',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
		'choices'     => array(
			 array( 'label' => 'Yes', 'value' => 'yes' ),
			 array( 'label' => 'No', 'value' => 'no'),
		)
	);
	
	$custom_settings['settings']['is_subheader'] = array(
		'id'          => 'is_subheader',
        'label'       => __('Enable SubHeader', 'digita_taxdomain'),
        'desc'        => __('Enable or Disable SubHeader of the site', 'digita_taxdomain'),
        'std'         => 'yes',
        'type'        => 'select',
        'section'     => 'layout',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
		'choices'     => array(
			 array( 'label' => 'Yes', 'value' => 'yes' ),
			 array( 'label' => 'No', 'value' => 'no'),
		)
	);
	
	
	
	$custom_settings['settings']['sidebar_layout'] = array(
		'id'          => 'sidebar_layout',
        'label'       => __('Default Sidebar Layout', 'digita_taxdomain'),
        'desc'        => __('This is the global sidebar layout for all of the pages of the site.', 'digita_taxdomain'),
        'std'         => $digita_theme_option_std['sidebar_layout'],
        'type'        => 'radio-image',
        'section'     => 'layout',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
		'choices'     => array(
			 array( 'label' => 'full-width-content', 'value' => 'full-width-content', 'src' => DIGITA_URL.'/core/assets/images/admin/c.gif'),
			 array( 'label' => 'Content - Sidebar', 'value' => 'content-sidebar', 'src' => DIGITA_URL.'/core/assets/images/admin/cs.gif'),
			 array( 'label' => 'Content - Sidebar - Sidebar', 'value' => 'content-sidebar-sidebar', 'src' => DIGITA_URL.'/core/assets/images/admin/css.gif'),
			 array( 'label' => 'Sidebar - Content', 'value' => 'sidebar-content', 'src' => DIGITA_URL.'/core/assets/images/admin/sc.gif'),
			 array( 'label' => 'Sidebar - Content - Sidebar', 'value' => 'sidebar-content-sidebar', 'src' => DIGITA_URL.'/core/assets/images/admin/scs.gif'),
			 array( 'label' => 'Sidebar - Sidebar - Content', 'value' => 'sidebar-sidebar-content', 'src' => DIGITA_URL.'/core/assets/images/admin/ssc.gif'),
		)
	);
	
	$custom_settings['settings']['enable_page_comment'] = array(
		'id'          => 'enable_page_comment',
        'label'       => __('Enable Comments on pages', 'digita_taxdomain'),
        'desc'        => __('Enable or Disable comment on the page. This is the global setting. You can enable or disable on each page on page editing area.', 'digita_taxdomain'),
        'std'         => 'no',
        'type'        => 'select',
        'section'     => 'layout',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
		'choices'     => array(
			 array( 'label' => 'Yes', 'value' => 'yes' ),
			 array( 'label' => 'No', 'value' => 'no'),
		)
	);
	
	$custom_settings['settings']['enable_post_comment'] = array(
		'id'          => 'enable_post_comment',
        'label'       => __('Enable Comments on Posts', 'digita_taxdomain'),
        'desc'        => __('Enable or Disable comment on the page. This is the global setting. You can enable or disable on each page on POst editing area.', 'digita_taxdomain'),
        'std'         => 'yes',
        'type'        => 'select',
        'section'     => 'layout',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
		'choices'     => array(
			 array( 'label' => 'Yes', 'value' => 'yes' ),
			 array( 'label' => 'No', 'value' => 'no'),
		)
	);
	
	$custom_settings['settings']['footer_widget_layout'] = array(
		'id'          => 'footer_widget_layout',
        'label'       => __('Footer Widget Layout', 'digita_taxdomain'),
        'desc'        => __('Select a <strong>Footer Widget</strong> layout. If you select the red cross no widget will display in footer', 'digita_taxdomain'),
        'std'         => 'none',
        'type'        => 'radio-image',
        'section'     => 'layout',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
		'choices'     => array(
			 array( 'label' => 'none', 'value' => 'none', 'src' => DIGITA_URL.'/core/assets/images/admin/sc-nonel.png'),
			 array( 'label' => 'One Column', 'value' => '1', 'src' => DIGITA_URL.'/core/assets/images/admin/sc-full.png'),
			 array( 'label' => 'Two Column', 'value' => '2', 'src' => DIGITA_URL.'/core/assets/images/admin/sc-half.png'),
			 array( 'label' => 'Three Column', 'value' => '3', 'src' => DIGITA_URL.'/core/assets/images/admin/sc-third.png'),
			 array( 'label' => 'Four Column', 'value' => '4', 'src' => DIGITA_URL.'/core/assets/images/admin/sc-fourth.png'),
		)
	);
	$custom_settings['settings']['footer_layout'] = array(
		'id'          => 'footer_layout',
        'label'       => __('Footer Layout', 'digita_taxdomain'),
        'desc'        => __('Select a <strong>Footer</strong> layout. If you select the red cross no footer will display', 'digita_taxdomain'),
        'std'         => '2',
        'type'        => 'radio-image',
        'section'     => 'layout',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
		'choices'     => array(
			 array( 'label' => 'none', 'value' => 'none', 'src' => DIGITA_URL.'/core/assets/images/admin/sc-nonel.png'),
			 array( 'label' => 'One Column', 'value' => '1', 'src' => DIGITA_URL.'/core/assets/images/admin/sc-full.png'),
			 array( 'label' => 'Two Column', 'value' => '2', 'src' => DIGITA_URL.'/core/assets/images/admin/sc-half.png'),
		)
	);
	
	return $custom_settings;
}