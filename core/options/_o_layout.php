<?php
add_filter('option_tree_settings_args', 'tally_layout_ot_options');
function tally_layout_ot_options($custom_settings){
	$custom_settings['sections'][] = array( 'id' => 'layout','title' => 'Site Layout');
	
	if(tally_check() == true):
		$custom_settings['settings']['site_layout'] = array(
			'id'          => 'site_layout',
			'label'       => __('Site Layout', 'tally_taxdomain'),
			'desc'        => __('Select the Site layout to <strong>Full Width</strong> or <strong>Box Layout</strong>', 'tally_taxdomain'),
			'std'         => tally_option_std('site_layout'),
			'type'        => 'radio-image',
			'section'     => 'layout',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
			'choices'     => array(
				 array( 'label' => 'Full Width', 'value' => 'full', 'src' => TALLY_URL.'/core/assets/images/admin/full-width-layout.png'),
				 array( 'label' => 'Box', 'value' => 'box', 'src' => TALLY_URL.'/core/assets/images/admin/box-layout.png'),
			)
		);
		
		if(TALLY_LAYOUT_TOPBAR_REMOVE == false):
			$custom_settings['settings']['is_topbar'] = array(
				'id'          => 'is_topbar',
				'label'       => __('Enable TopBar Area', 'tally_taxdomain'),
				'desc'        => __('Enable or Disable TopBar of the site', 'tally_taxdomain'),
				'std'         => tally_option_std('is_topbar'),
				'type'        => 'select',
				'section'     => 'layout',
				'rows'        => '',
				'post_type'   => '',
				'taxonomy'    => '',
				'class'       => '',
				'choices'     => array(
					 array( 'label' => '--', 'value' => '' ),
					 array( 'label' => 'Yes', 'value' => 'yes' ),
					 array( 'label' => 'No', 'value' => 'no'),
				)
			);
		endif;
		
		$custom_settings['settings']['is_header'] = array(
			'id'          => 'is_header',
			'label'       => __('Enable Header', 'tally_taxdomain'),
			'desc'        => __('Enable or Disable Header of the site', 'tally_taxdomain'),
			'std'         => tally_option_std('is_header'),
			'type'        => 'select',
			'section'     => 'layout',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
			'choices'     => array(
				array( 'label' => '--', 'value' => '' ),
				array( 'label' => 'Yes', 'value' => 'yes' ),
				array( 'label' => 'No', 'value' => 'no'),
			)
		);
		
		$custom_settings['settings']['is_subheader'] = array(
			'id'          => 'is_subheader',
			'label'       => __('Enable SubHeader', 'tally_taxdomain'),
			'desc'        => __('Enable or Disable SubHeader of the site', 'tally_taxdomain'),
			'std'         => tally_option_std('is_subheader'),
			'type'        => 'select',
			'section'     => 'layout',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
			'choices'     => array(
				array( 'label' => '--', 'value' => '' ),
				array( 'label' => 'Yes', 'value' => 'yes' ),
				array( 'label' => 'No', 'value' => 'no'),
			)
		);
	endif;
	
	
	$custom_settings['settings']['sidebar_layout'] = array(
		'id'          => 'sidebar_layout',
        'label'       => __('Default Sidebar Layout', 'tally_taxdomain'),
        'desc'        => __('This is the global sidebar layout for all of the pages of the site.', 'tally_taxdomain'),
        'std'         => tally_option_std('sidebar_layout'),
        'type'        => 'radio-image',
        'section'     => 'layout',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
		'choices'     => array(
			 array( 'label' => 'full-width-content', 'value' => 'full-width-content', 'src' => TALLY_URL.'/core/assets/images/admin/c.gif'),
			 array( 'label' => 'Content - Sidebar', 'value' => 'content-sidebar', 'src' => TALLY_URL.'/core/assets/images/admin/cs.gif'),
			 array( 'label' => 'Content - Sidebar - Sidebar', 'value' => 'content-sidebar-sidebar', 'src' => TALLY_URL.'/core/assets/images/admin/css.gif'),
			 array( 'label' => 'Sidebar - Content', 'value' => 'sidebar-content', 'src' => TALLY_URL.'/core/assets/images/admin/sc.gif'),
			 array( 'label' => 'Sidebar - Content - Sidebar', 'value' => 'sidebar-content-sidebar', 'src' => TALLY_URL.'/core/assets/images/admin/scs.gif'),
			 array( 'label' => 'Sidebar - Sidebar - Content', 'value' => 'sidebar-sidebar-content', 'src' => TALLY_URL.'/core/assets/images/admin/ssc.gif'),
		)
	);
	
	if(tally_check() == true):
		$custom_settings['settings']['enable_page_comment'] = array(
			'id'          => 'enable_page_comment',
			'label'       => __('Enable Comments on pages', 'tally_taxdomain'),
			'desc'        => __('Enable or Disable comment on the page. This is the global setting. You can enable or disable on each page on page editing area.', 'tally_taxdomain'),
			'std'         => tally_option_std('enable_page_comment'),
			'type'        => 'select',
			'section'     => 'layout',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
			'choices'     => array(
				array( 'label' => '--', 'value' => '' ),
				array( 'label' => 'Yes', 'value' => 'yes' ),
				array( 'label' => 'No', 'value' => 'no'),
			)
		);
		
		$custom_settings['settings']['enable_post_comment'] = array(
			'id'          => 'enable_post_comment',
			'label'       => __('Enable Comments on Posts', 'tally_taxdomain'),
			'desc'        => __('Enable or Disable comment on the page. This is the global setting. You can enable or disable on each page on POst editing area.', 'tally_taxdomain'),
			'std'         => tally_option_std('enable_post_comment'),
			'type'        => 'select',
			'section'     => 'layout',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
			'choices'     => array(
				array( 'label' => '--', 'value' => '' ),
				array( 'label' => 'Yes', 'value' => 'yes' ),
				array( 'label' => 'No', 'value' => 'no'),
			)
		);
		
		$custom_settings['settings']['footer_widget_layout'] = array(
			'id'          => 'footer_widget_layout',
			'label'       => __('Footer Widget Layout', 'tally_taxdomain'),
			'desc'        => __('Select a <strong>Footer Widget</strong> layout. If you select the red cross no widget will display in footer', 'tally_taxdomain'),
			'std'         => tally_option_std('footer_widget_layout'),
			'type'        => 'radio-image',
			'section'     => 'layout',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
			'choices'     => array(
				 array( 'label' => 'none', 'value' => 'none', 'src' => TALLY_URL.'/core/assets/images/admin/fwc-none.png'),
				 array( 'label' => 'One Column', 'value' => '1', 'src' => TALLY_URL.'/core/assets/images/admin/fwc-one.png'),
				 array( 'label' => 'Two Column', 'value' => '2', 'src' => TALLY_URL.'/core/assets/images/admin/fwc-two.png'),
				 array( 'label' => 'Three Column', 'value' => '3', 'src' => TALLY_URL.'/core/assets/images/admin/fwc-three.png'),
				 array( 'label' => 'Four Column', 'value' => '4', 'src' => TALLY_URL.'/core/assets/images/admin/fwc-foure.png'),
				 array( 'label' => 'Five Column', 'value' => '5', 'src' => TALLY_URL.'/core/assets/images/admin/fwc-five.png'),
				 array( 'label' => 'Six Column', 'value' => '6', 'src' => TALLY_URL.'/core/assets/images/admin/fwc-six.png'),
			)
		);
		$custom_settings['settings']['footer_widget_custom_width'] = array(
			'id'          => 'footer_widget_custom_width',
			'label'       => __('Enable Custom Width', 'tally_taxdomain'),
			'desc'        => __('Enable custom width for each footer widget column.', 'tally_taxdomain'),
			'std'         => tally_option_std('footer_widget_custom_width'),
			'type'        => 'on_off',
			'section'     => 'layout',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
		);
		$custom_settings['settings']['footer_widget_1_column_width'] = array(
			'id'          => 'footer_widget_1_column_width',
			'label'       => __('Footer 1st Widget Width', 'tally_taxdomain'),
			'desc'        => __('width of the 1st widget column', 'tally_taxdomain'),
			'std'         => tally_option_std('footer_widget_1_column_width'),
			'type'        => 'numeric-slider',
			'section'     => 'layout',
			'min_max_step'=> '0,24,1',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
			'condition'   => 'footer_widget_custom_width:is(on)',
			'operator'    => 'or'
		);
		$custom_settings['settings']['footer_widget_2_column_width'] = array(
			'id'          => 'footer_widget_2_column_width',
			'label'       => __('Footer 2nd Widget Width', 'tally_taxdomain'),
			'desc'        => __('width of the 2st widget column', 'tally_taxdomain'),
			'std'         => tally_option_std('footer_widget_2_column_width'),
			'type'        => 'numeric-slider',
			'section'     => 'layout',
			'min_max_step'=> '0,24,1',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
			'condition'   => 'footer_widget_custom_width:is(on)',
			'operator'    => 'or'
		);
		$custom_settings['settings']['footer_widget_3_column_width'] = array(
			'id'          => 'footer_widget_3_column_width',
			'label'       => __('Footer 3rd Widget Width', 'tally_taxdomain'),
			'desc'        => __('width of the 3rd widget column', 'tally_taxdomain'),
			'std'         => tally_option_std('footer_widget_3_column_width'),
			'type'        => 'numeric-slider',
			'section'     => 'layout',
			'min_max_step'=> '0,24,1',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
			'condition'   => 'footer_widget_custom_width:is(on)',
			'operator'    => 'or'
		);
		$custom_settings['settings']['footer_widget_4_column_width'] = array(
			'id'          => 'footer_widget_4_column_width',
			'label'       => __('Footer 4th Widget Width', 'tally_taxdomain'),
			'desc'        => __('width of the 4th widget column', 'tally_taxdomain'),
			'std'         => tally_option_std('footer_widget_4_column_width'),
			'type'        => 'numeric-slider',
			'section'     => 'layout',
			'min_max_step'=> '0,24,1',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
			'condition'   => 'footer_widget_custom_width:is(on)',
			'operator'    => 'or'
		);
		$custom_settings['settings']['footer_widget_5_column_width'] = array(
			'id'          => 'footer_widget_5_column_width',
			'label'       => __('Footer 5th Widget Width', 'tally_taxdomain'),
			'desc'        => __('width of the 5th widget column', 'tally_taxdomain'),
			'std'         => tally_option_std('footer_widget_5_column_width'),
			'type'        => 'numeric-slider',
			'section'     => 'layout',
			'min_max_step'=> '0,24,1',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
			'condition'   => 'footer_widget_custom_width:is(on)',
			'operator'    => 'or'
		);
		$custom_settings['settings']['footer_widget_6_column_width'] = array(
			'id'          => 'footer_widget_6_column_width',
			'label'       => __('Footer 6th Widget Width', 'tally_taxdomain'),
			'desc'        => __('width of the 6th widget column', 'tally_taxdomain'),
			'std'         => tally_option_std('footer_widget_6_column_width'),
			'type'        => 'numeric-slider',
			'section'     => 'layout',
			'min_max_step'=> '0,24,1',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
			'condition'   => 'footer_widget_custom_width:is(on))',
			'operator'    => 'or'
		);
		$custom_settings['settings']['footer_layout'] = array(
			'id'          => 'footer_layout',
			'label'       => __('Footer Layout', 'tally_taxdomain'),
			'desc'        => __('Enable or Disable the footer of the site', 'tally_taxdomain'),
			'std'         => tally_option_std('footer_layout'),
			'type'        => 'select',
			'section'     => 'layout',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
			'choices'     => array(
				array( 'label' => '--', 'value' => '' ),
				array( 'label' => 'No', 'value' => 'none'),
				array( 'label' => 'Yes', 'value' => 'yes'),
			)
		);
	endif;
	
	return $custom_settings;
}