<?php
add_action( 'admin_init', 'tally_page_metabox_register' );
function tally_page_metabox_register() {
	
	if(tally_check() == true):
		$prefix = 'tally_';
		
		$settings = array();
		
		if(TALLY_LAYOUT_TOPBAR_REMOVE == false):
			$settings[] = array(
				'id'          => 'tally_is_topbar',
				'label'       => __('Enable TopBar Area', 'tally_taxdomain'),
				'desc'        => __('Enable or Disable TopBar of this page / post.', 'tally_taxdomain'),
				'std'         => '',
				'type'        => 'select',
				'section'     => 'branding',
				'rows'        => '',
				'post_type'   => '',
				'taxonomy'    => '',
				'class'       => '',
				'choices'     => array(
					 array( 'label' => '', 'value' => '' ),
					 array( 'label' => 'Yes', 'value' => 'yes' ),
					 array( 'label' => 'No', 'value' => 'no'),
				)
			);
		endif;
		
		$settings[] = array(
			'id'          => 'tally_is_header',
			'label'       => __('Enable Header', 'tally_taxdomain'),
			'desc'        => __('Enable or Disable Header of this page', 'tally_taxdomain'),
			'std'         => '',
			'type'        => 'select',
			'section'     => 'branding',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
			'choices'     => array(
				array( 'label' => '', 'value' => '' ),
				 array( 'label' => 'Yes', 'value' => 'yes' ),
				 array( 'label' => 'No', 'value' => 'no'),
			)
		);
		
		if(TALLY_LAYOUT_SUBHEADER_REMOVE == false):
			$settings[] = array(
				'id'          => 'tally_is_subheader',
				'label'       => __('Enable SubHeader', 'tally_taxdomain'),
				'desc'        => __('Enable or Disable SubHeader of this page', 'tally_taxdomain'),
				'std'         => '',
				'type'        => 'select',
				'section'     => 'branding',
				'rows'        => '',
				'post_type'   => '',
				'taxonomy'    => '',
				'class'       => '',
				'choices'     => array(
					array( 'label' => '', 'value' => '' ),
					 array( 'label' => 'Yes', 'value' => 'yes' ),
					 array( 'label' => 'No', 'value' => 'no'),
				)
			);
		endif;
		
		$settings[] = array(
			'id'          => 'tally_sidebar_layout',
			'label'       => __('Sidebar Layout', 'tally_taxdomain'),
			'desc'        => '',
			'std'         => '',
			'type'        => 'radio-image',
			'section'     => 'branding',
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
		
		$settings[] = array(
			'id'          => 'tally_is_comment',
			'label'       => __('Enable Comment Area', 'tally_taxdomain'),
			'desc'        => __('Enable or Disable comment on this page / post.', 'tally_taxdomain'),
			'std'         => '',
			'type'        => 'select',
			'section'     => 'branding',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
			'choices'     => array(
				 array( 'label' => '', 'value' => '' ),
				 array( 'label' => 'Yes', 'value' => 'yes' ),
				 array( 'label' => 'No', 'value' => 'no'),
			)
		);
		
		
		if(TALLY_LAYOUT_FOOTER_WIDGETS_REMOVE == false):
		$settings[] = array(
			'id'          => 'tally_footer_widget_layout',
			'label'       => __('Footer Widget Layout', 'tally_taxdomain'),
			'desc'        => __('Select a <strong>Footer Widget</strong> layout. If you select the red cross no widget will display in footer', 'tally_taxdomain'),
			'std'         => '',
			'type'        => 'radio-image',
			'section'     => 'footer',
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
		$settings[] = array(
			'id'          => 'tally_footer_widget_custom_width',
			'label'       => __('Enable Custom Width', 'tally_taxdomain'),
			'desc'        => __('Enable custom width for each footer widget column.', 'tally_taxdomain'),
			'std'         => 'off',
			'type'        => 'on_off',
			'section'     => 'layout',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
		);
		$settings[] = array(
			'id'          => 'tally_footer_widget_1_column_width',
			'label'       => __('Footer 1st Widget Width', 'tally_taxdomain'),
			'desc'        => __('width of the 1st widget column', 'tally_taxdomain'),
			'std'         => '',
			'type'        => 'numeric-slider',
			'section'     => 'layout',
			'min_max_step'=> '0,24,1',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
			'condition'   => 'tally_footer_widget_custom_width:is(on)',
			'operator'    => 'or'
		);
		$settings[] = array(
			'id'          => 'tally_footer_widget_2_column_width',
			'label'       => __('Footer 2nd Widget Width', 'tally_taxdomain'),
			'desc'        => __('width of the 2st widget column', 'tally_taxdomain'),
			'std'         => '',
			'type'        => 'numeric-slider',
			'section'     => 'layout',
			'min_max_step'=> '0,24,1',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
			'condition'   => 'tally_footer_widget_custom_width:is(on)',
			'operator'    => 'or'
		);
		$settings[] = array(
			'id'          => 'tally_footer_widget_3_column_width',
			'label'       => __('Footer 3rd Widget Width', 'tally_taxdomain'),
			'desc'        => __('width of the 3rd widget column', 'tally_taxdomain'),
			'std'         => '',
			'type'        => 'numeric-slider',
			'section'     => 'layout',
			'min_max_step'=> '0,24,1',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
			'condition'   => 'tally_footer_widget_custom_width:is(on)',
			'operator'    => 'or'
		);
		$settings[] = array(
			'id'          => 'tally_footer_widget_4_column_width',
			'label'       => __('Footer 4th Widget Width', 'tally_taxdomain'),
			'desc'        => __('width of the 4th widget column', 'tally_taxdomain'),
			'std'         => '',
			'type'        => 'numeric-slider',
			'section'     => 'layout',
			'min_max_step'=> '0,24,1',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
			'condition'   => 'tally_footer_widget_custom_width:is(on)',
			'operator'    => 'or'
		);
		$settings[] = array(
			'id'          => 'tally_footer_widget_5_column_width',
			'label'       => __('Footer 5th Widget Width', 'tally_taxdomain'),
			'desc'        => __('width of the 5th widget column', 'tally_taxdomain'),
			'std'         => '',
			'type'        => 'numeric-slider',
			'section'     => 'layout',
			'min_max_step'=> '0,24,1',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
			'condition'   => 'tally_footer_widget_custom_width:is(on)',
			'operator'    => 'or'
		);
		$settings[] = array(
			'id'          => 'tally_footer_widget_6_column_width',
			'label'       => __('Footer 6th Widget Width', 'tally_taxdomain'),
			'desc'        => __('width of the 6th widget column', 'tally_taxdomain'),
			'std'         => '',
			'type'        => 'numeric-slider',
			'section'     => 'layout',
			'min_max_step'=> '0,24,1',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
			'condition'   => 'tally_footer_widget_custom_width:is(on))',
			'operator'    => 'or'
		);
		endif;
		
		if(TALLY_LAYOUT_FOOTER_REMOVE == false):
		$settings[] = array(
			'id'          => 'tally_footer_layout',
			'label'       => __('Footer', 'tally_taxdomain'),
			'desc'        => __('Enable or Disable Footer on this page / post.', 'tally_taxdomain'),
			'std'         => '',
			'type'        => 'select',
			'section'     => 'footer',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
			'choices'     => array(
				 array( 'label' => '', 'value' => '' ),
				 array( 'label' => 'no', 'value' => 'none'),
				 array( 'label' => 'yes', 'value' => '2'),
			)
		);
		endif;
		
		$metabox = array(
			'id'        => 'tally_ot_page_metabox',
			'title'     => 'Page / Post Settings',
			'desc'      => '',
			'pages'     => apply_filters('tally_ot_page_metabox', array( 'post', 'page' )),
			'context'   => 'normal',
			'priority'  => 'high',
			'fields'    => $settings,
		);
		ot_register_meta_box( $metabox );
	
	endif;
}